#!/usr/bin/env python3

from __future__ import annotations

import difflib
import os
import pathlib
import re
import shutil
import sys
import urllib.error
import urllib.request


ROUTES = [
    "/",
    "/about",
    "/tanzania-jobs",
    "/all-jobs",
    "/tenders",
    "/post",
    "/job-form",
    "/other",
]

LARAVEL_BASE = os.environ.get("LARAVEL_BASE_URL", "http://127.0.0.1:8000")
SPRING_BASE = os.environ.get("SPRING_BASE_URL", "http://127.0.0.1:8080")
OUTPUT_ROOT = pathlib.Path(__file__).resolve().parent / "parity-output"


def slug_for_route(route: str) -> str:
    if route == "/":
        return "home"
    return route.strip("/").replace("/", "__")


def fetch(url: str) -> str:
    req = urllib.request.Request(
        url,
        headers={
            "User-Agent": "blast-parity-check/1.0",
            "Accept": "text/html,application/xhtml+xml",
        },
    )
    with urllib.request.urlopen(req, timeout=30) as response:
        charset = response.headers.get_content_charset() or "utf-8"
        return response.read().decode(charset, errors="replace")


def normalize_html(html: str) -> str:
    normalized = html.replace("\r\n", "\n").replace("\r", "\n")
    normalized = normalized.replace(LARAVEL_BASE, "")
    normalized = normalized.replace(SPRING_BASE, "")
    normalized = normalized.replace(LARAVEL_BASE.replace("127.0.0.1", "localhost"), "")
    normalized = normalized.replace(SPRING_BASE.replace("127.0.0.1", "localhost"), "")
    normalized = re.sub(
        r'(<meta\s+name="csrf-token"\s+content=")[^"]*(")',
        r"\1__CSRF_TOKEN__\2",
        normalized,
        flags=re.IGNORECASE,
    )
    normalized = re.sub(r"<!--.*?-->", "", normalized, flags=re.DOTALL)
    normalized = re.sub(r">\s+<", "><", normalized)
    normalized = "\n".join(line.rstrip() for line in normalized.splitlines())
    normalized = re.sub(r"\n{3,}", "\n\n", normalized)
    return normalized.strip() + "\n"


def normalize_url(value: str) -> str:
    normalized = value.replace(LARAVEL_BASE, "").replace(SPRING_BASE, "")
    normalized = normalized.replace(LARAVEL_BASE.replace("127.0.0.1", "localhost"), "")
    normalized = normalized.replace(SPRING_BASE.replace("127.0.0.1", "localhost"), "")
    return normalized or "/"


def extract_section(html: str, tag: str) -> str:
    match = re.search(
        rf"<{tag}\b[^>]*>(.*?)</{tag}>",
        html,
        flags=re.IGNORECASE | re.DOTALL,
    )
    if not match:
        return ""
    return normalize_html(match.group(1))


def extract_asset_lists(html: str) -> str:
    links = [
        normalize_url(link)
        for link in re.findall(r'<link\b[^>]*href="([^"]+)"', html, flags=re.IGNORECASE)
    ]
    scripts = [
        normalize_url(script)
        for script in re.findall(r'<script\b[^>]*src="([^"]+)"', html, flags=re.IGNORECASE)
    ]
    payload = [
        "[link href]",
        *sorted(links),
        "",
        "[script src]",
        *sorted(scripts),
        "",
    ]
    return "\n".join(payload)


def write_text(path: pathlib.Path, value: str) -> None:
    path.parent.mkdir(parents=True, exist_ok=True)
    path.write_text(value, encoding="utf-8")


def diff_text(a: str, b: str, from_name: str, to_name: str) -> str:
    return "".join(
        difflib.unified_diff(
            a.splitlines(keepends=True),
            b.splitlines(keepends=True),
            fromfile=from_name,
            tofile=to_name,
        )
    )


def compare_route(route: str) -> tuple[bool, str]:
    slug = slug_for_route(route)
    route_dir = OUTPUT_ROOT / slug
    route_dir.mkdir(parents=True, exist_ok=True)

    laravel_url = f"{LARAVEL_BASE}{route}"
    spring_url = f"{SPRING_BASE}{route}"

    laravel_html = fetch(laravel_url)
    spring_html = fetch(spring_url)

    write_text(route_dir / "laravel.html", laravel_html)
    write_text(route_dir / "spring.html", spring_html)

    laravel_normalized = normalize_html(laravel_html)
    spring_normalized = normalize_html(spring_html)
    write_text(route_dir / "laravel.normalized.html", laravel_normalized)
    write_text(route_dir / "spring.normalized.html", spring_normalized)

    laravel_head = extract_section(laravel_html, "head")
    spring_head = extract_section(spring_html, "head")
    laravel_body = extract_section(laravel_html, "body")
    spring_body = extract_section(spring_html, "body")
    laravel_assets = extract_asset_lists(laravel_html)
    spring_assets = extract_asset_lists(spring_html)

    write_text(route_dir / "laravel.head.html", laravel_head)
    write_text(route_dir / "spring.head.html", spring_head)
    write_text(route_dir / "laravel.body.html", laravel_body)
    write_text(route_dir / "spring.body.html", spring_body)
    write_text(route_dir / "laravel.assets.txt", laravel_assets)
    write_text(route_dir / "spring.assets.txt", spring_assets)

    html_diff = diff_text(
        laravel_normalized,
        spring_normalized,
        "laravel.normalized.html",
        "spring.normalized.html",
    )
    head_diff = diff_text(laravel_head, spring_head, "laravel.head.html", "spring.head.html")
    body_diff = diff_text(laravel_body, spring_body, "laravel.body.html", "spring.body.html")
    assets_diff = diff_text(
        laravel_assets,
        spring_assets,
        "laravel.assets.txt",
        "spring.assets.txt",
    )

    combined = []
    if html_diff:
        combined.append("[normalized html]\n" + html_diff)
    if head_diff:
        combined.append("[head]\n" + head_diff)
    if body_diff:
        combined.append("[body]\n" + body_diff)
    if assets_diff:
        combined.append("[assets]\n" + assets_diff)

    diff_payload = "\n".join(combined) if combined else "No differences.\n"
    write_text(route_dir / "diff.txt", diff_payload)

    return not combined, diff_payload


def main() -> int:
    if OUTPUT_ROOT.exists():
        shutil.rmtree(OUTPUT_ROOT)
    OUTPUT_ROOT.mkdir(parents=True, exist_ok=True)

    failed = []

    for route in ROUTES:
        try:
            ok, _ = compare_route(route)
        except urllib.error.URLError as exc:
            print(f"{route}: request failed: {exc}", file=sys.stderr)
            return 2
        except Exception as exc:  # pragma: no cover
            print(f"{route}: unexpected error: {exc}", file=sys.stderr)
            return 2

        status = "OK" if ok else "DIFF"
        print(f"{status} {route}")
        if not ok:
            failed.append(route)

    if failed:
        print("\nDifferences found:", ", ".join(failed), file=sys.stderr)
        print(f"See {OUTPUT_ROOT}", file=sys.stderr)
        return 1

    print(f"\nAll routes matched after normalization. Output saved to {OUTPUT_ROOT}")
    return 0


if __name__ == "__main__":
    raise SystemExit(main())
