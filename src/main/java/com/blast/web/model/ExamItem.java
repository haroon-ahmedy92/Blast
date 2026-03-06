package com.blast.web.model;

import java.util.List;

public class ExamItem {
    private final String slug;
    private final String title;
    private final String provider;
    private final String region;
    private final String publishedOn;
    private final String summary;
    private final List<String> highlights;

    public ExamItem(
        String slug,
        String title,
        String provider,
        String region,
        String publishedOn,
        String summary,
        List<String> highlights
    ) {
        this.slug = slug;
        this.title = title;
        this.provider = provider;
        this.region = region;
        this.publishedOn = publishedOn;
        this.summary = summary;
        this.highlights = highlights;
    }

    public String getSlug() {
        return slug;
    }

    public String getTitle() {
        return title;
    }

    public String getProvider() {
        return provider;
    }

    public String getRegion() {
        return region;
    }

    public String getPublishedOn() {
        return publishedOn;
    }

    public String getSummary() {
        return summary;
    }

    public List<String> getHighlights() {
        return highlights;
    }
}
