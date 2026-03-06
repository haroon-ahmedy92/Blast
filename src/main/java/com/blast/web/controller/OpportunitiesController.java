package com.blast.web.controller;

import com.blast.web.model.JobCategory;
import com.blast.web.service.JobCatalogService;
import org.springframework.http.HttpStatus;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.server.ResponseStatusException;

@Controller
public class OpportunitiesController extends BasePageController {

    private final JobCatalogService jobCatalogService;

    public OpportunitiesController(JobCatalogService jobCatalogService) {
        this.jobCatalogService = jobCatalogService;
    }

    @GetMapping("/opportunities")
    public String opportunities(Model model) {
        model.addAttribute("categories", jobCatalogService.getCategories());
        model.addAttribute("recentJobs", jobCatalogService.getRecentJobs());
        return renderPage(model, "pages/opportunities-body", "/opportunities", "BLAST - Opportunities");
    }

    @GetMapping("/countries")
    public String countries(Model model) {
        model.addAttribute("countries", jobCatalogService.getCountries());
        return renderPage(model, "pages/countries-body", "/countries", "BLAST - Countries");
    }

    @GetMapping("/jobs/category/{slug}")
    public String jobsByCategory(@PathVariable String slug, Model model) {
        JobCategory category = jobCatalogService.findCategoryBySlug(slug)
            .orElseThrow(() -> new ResponseStatusException(HttpStatus.NOT_FOUND));
        model.addAttribute("category", category);
        model.addAttribute("jobs", jobCatalogService.jobsByCategory(slug));
        return renderPage(model, "pages/job-category-body", "/opportunities", "BLAST - " + category.getName());
    }
}
