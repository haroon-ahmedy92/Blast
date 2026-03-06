package com.blast.web.model;

public class JobCategory {
    private final String slug;
    private final String name;
    private final String description;
    private final int openRoles;
    private final String iconClass;

    public JobCategory(String slug, String name, String description, int openRoles, String iconClass) {
        this.slug = slug;
        this.name = name;
        this.description = description;
        this.openRoles = openRoles;
        this.iconClass = iconClass;
    }

    public String getSlug() {
        return slug;
    }

    public String getName() {
        return name;
    }

    public String getDescription() {
        return description;
    }

    public int getOpenRoles() {
        return openRoles;
    }

    public String getIconClass() {
        return iconClass;
    }
}
