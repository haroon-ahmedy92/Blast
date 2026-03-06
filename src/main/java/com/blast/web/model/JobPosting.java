package com.blast.web.model;

import java.util.List;

public class JobPosting {
    private final String slug;
    private final String title;
    private final String company;
    private final String location;
    private final String employmentType;
    private final String postedDate;
    private final String shortDescription;
    private final String description;
    private final List<String> requirements;
    private final String categorySlug;
    private final String applyUrl;

    public JobPosting(
        String slug,
        String title,
        String company,
        String location,
        String employmentType,
        String postedDate,
        String shortDescription,
        String description,
        List<String> requirements,
        String categorySlug,
        String applyUrl
    ) {
        this.slug = slug;
        this.title = title;
        this.company = company;
        this.location = location;
        this.employmentType = employmentType;
        this.postedDate = postedDate;
        this.shortDescription = shortDescription;
        this.description = description;
        this.requirements = requirements;
        this.categorySlug = categorySlug;
        this.applyUrl = applyUrl;
    }

    public String getSlug() {
        return slug;
    }

    public String getTitle() {
        return title;
    }

    public String getCompany() {
        return company;
    }

    public String getLocation() {
        return location;
    }

    public String getEmploymentType() {
        return employmentType;
    }

    public String getPostedDate() {
        return postedDate;
    }

    public String getShortDescription() {
        return shortDescription;
    }

    public String getDescription() {
        return description;
    }

    public List<String> getRequirements() {
        return requirements;
    }

    public String getCategorySlug() {
        return categorySlug;
    }

    public String getApplyUrl() {
        return applyUrl;
    }
}
