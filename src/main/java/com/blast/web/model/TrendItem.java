package com.blast.web.model;

public class TrendItem {
    private final String slug;
    private final String title;
    private final String category;
    private final String publishedOn;
    private final String summary;
    private final String content;

    public TrendItem(String slug, String title, String category, String publishedOn, String summary, String content) {
        this.slug = slug;
        this.title = title;
        this.category = category;
        this.publishedOn = publishedOn;
        this.summary = summary;
        this.content = content;
    }

    public String getSlug() {
        return slug;
    }

    public String getTitle() {
        return title;
    }

    public String getCategory() {
        return category;
    }

    public String getPublishedOn() {
        return publishedOn;
    }

    public String getSummary() {
        return summary;
    }

    public String getContent() {
        return content;
    }
}
