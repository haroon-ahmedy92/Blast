# BLAST Design System Reference

## Design Principles
- Compact: low-noise spacing, concise typography, and dense but readable cards.
- Calm: muted neutrals, one dominant accent (`--primary-core`), no loud visual effects.
- Typography-first: clear heading hierarchy and short paragraph width.
- Minimal motion: avoid lift/scale effects; prefer subtle border/shadow/color changes.
- Subtle depth: thin borders and soft shadows, never heavy/glassy effects.

## Tokens

### Core Color Tokens (existing)
- `--primary-core: #1E40AF`
- `--secondary-core: #EFF6FF`
- `--accent: #FACC15`
- `--secondary-accent: #FEF9C3`
- `--green-accent: #166534`
- `--secondary-green: #DCFCE7`

### Neutral Utilities (existing Tailwind palette usage)
- Text: `text-gray-600`, `text-gray-700`, `text-gray-900`
- Borders: `border-gray-200`, `border-gray-300`
- Surfaces: `bg-white`, `bg-gray-50`

### Spacing Rhythm
- Tailwind spacing scale (`--spacing: 0.25rem` base).
- Most common spacing in templates:
  - Internal card padding: `p-6`
  - Section blocks: `py-12`, `py-16`
  - Gaps: `gap-4`, `gap-6`, `gap-8`
  - Vertical rhythm: `mb-4`, `mb-6`, `mb-12`

### Radius + Shadows
- Radius: `rounded-lg` (8px), occasional `rounded-xl` (12px), pills `rounded-full`.
- Shadows: keep subtle (`shadow-sm`, soft custom shadows), avoid dramatic elevation jumps.

## Typography Rules
- Current stack conflict:
  - Shared style fragment forces `body { font-family: Arial, sans-serif; }`
  - Built CSS theme defines `Instrument Sans` as default.
- For consistency with current rendering, use existing utility classes and existing body behavior.
- Recommended heading usage:
  - Page title: `text-3xl md:text-4xl font-bold`
  - Section title: `text-xl md:text-2xl font-semibold`
  - Card title: `text-lg font-semibold`
  - Body copy: `text-sm` to `text-base`, usually `text-gray-600/700`

## Component Recipes

### Card (default)
```html
<article class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm">
  <h3 class="text-lg font-semibold mb-2" style="color:#1E40AF;">Card Title</h3>
  <p class="text-gray-600 text-sm leading-relaxed">Supporting content.</p>
</article>
```

### Card (clickable)
```html
<a href="#" class="block bg-white border border-gray-200 rounded-lg p-6 shadow-sm hover:border-gray-300 hover:shadow-md transition-colors transition-shadow">
  <h3 class="text-lg font-semibold mb-2" style="color:#1E40AF;">Clickable Card</h3>
  <p class="text-gray-600 text-sm">Short description.</p>
</a>
```

### Card (list item row)
```html
<div class="bg-white border border-gray-200 rounded-lg p-4 flex items-center justify-between gap-4">
  <div>
    <h4 class="text-base font-semibold text-gray-900">List Item</h4>
    <p class="text-sm text-gray-600">Meta details</p>
  </div>
  <a href="#" class="text-sm font-medium hover:underline" style="color:#1E40AF;">View</a>
</div>
```

### Button (primary / secondary / text link)
```html
<button class="px-5 py-2 rounded-lg text-white font-medium transition-colors transition-shadow hover:shadow-md" style="background-color:#1E40AF;">
  Primary
</button>
<button class="px-5 py-2 rounded-lg border border-gray-300 text-gray-700 font-medium bg-white transition-colors transition-shadow hover:bg-gray-50 hover:shadow-sm">
  Secondary
</button>
<a href="#" class="text-sm font-medium hover:underline" style="color:#1E40AF;">Text Link</a>
```

### Pill / Tag
```html
<span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium" style="background-color:#EFF6FF;color:#1E40AF;">
  Featured
</span>
```

### Input / Select (focus-visible)
```html
<input class="w-full px-4 py-3 border border-gray-300 rounded-lg text-sm bg-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" />
<select class="w-full px-4 py-3 border border-gray-300 rounded-lg text-sm bg-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"></select>
```

### Sub-nav Chips (active/hover/focus-visible)
```html
<nav class="flex flex-wrap gap-2">
  <a href="#" class="px-3 py-2 rounded-full border border-gray-200 text-sm font-medium transition-colors transition-shadow hover:bg-gray-50 hover:border-gray-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2" style="color:#1E40AF;">
    Section
  </a>
  <a href="#" class="px-3 py-2 rounded-full border text-sm font-medium" style="border-color:rgba(30,64,175,.25);background:rgba(30,64,175,.08);color:#1E40AF;">
    Active
  </a>
</nav>
```

## Do / Don’t
- DO: use subtle hover feedback (`hover:shadow-md`, `hover:border-gray-300`, mild background tint).
- DO: keep one visual button system per page.
- DO: preserve visible focus states (`focus:outline-none` only when replaced with ring/outline).
- DON’T: use `hover:translate-*`, `hover:scale-*`, or strong jump animations.
- DON’T: mix multiple unrelated gradients across one page.
- DON’T: create page-specific token sets that diverge from shared variables.

## Page Layout Patterns
- Hero + sections:
  - Compact intro panel + short section blocks below.
- Grid cards:
  - 1 column mobile, 2-3 columns desktop, consistent `gap-6/8`.
- Empty state:
  - Bordered neutral card + short explanation + one primary action.
- “Other” page:
  - Use `pages/other-body.html` as the current reference standard for compact multi-section utility pages.
