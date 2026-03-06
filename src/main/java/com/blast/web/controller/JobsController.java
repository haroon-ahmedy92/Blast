package com.blast.web.controller;

import com.blast.web.model.JobPosting;
import com.blast.web.service.JobCatalogService;
import org.springframework.http.HttpStatus;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.server.ResponseStatusException;

@Controller
public class JobsController extends BasePageController {

    private final JobCatalogService jobCatalogService;

    public JobsController(JobCatalogService jobCatalogService) {
        this.jobCatalogService = jobCatalogService;
    }

    @GetMapping("/jobs/{slug}")
    public String jobDetails(@PathVariable String slug, Model model) {
        JobPosting job = jobCatalogService.findJobBySlug(slug)
            .orElseThrow(() -> new ResponseStatusException(HttpStatus.NOT_FOUND));
        model.addAttribute("job", job);
        model.addAttribute("relatedJobs", jobCatalogService.relatedJobs(job.getCategorySlug(), job.getSlug(), 3));
        return renderPage(model, "pages/job-details-body", "/opportunities", "BLAST - " + job.getTitle());
    }
}
