package com.blast.web.controller;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;

@Controller
public class PageController extends BasePageController {

    @GetMapping("/")
    public String homepage(Model model) {
        return renderPage(model, "pages/homepage-body", "/", "BLAST - Home");
    }

    @GetMapping("/about")
    public String about(Model model) {
        return renderPage(model, "pages/about-body", "/about", "BLAST - About");
    }

    @GetMapping("/tanzania-jobs")
    public String tanzaniaJobs(Model model) {
        return renderPage(model, "pages/tanzania-jobs-body", "/tanzania-jobs", "BLAST - Tanzania Jobs");
    }

    @GetMapping("/all-jobs")
    public String allJobs(Model model) {
        return renderPage(model, "pages/all-jobs-body", "/all-jobs", "BLAST - All Jobs");
    }

    @GetMapping("/tenders")
    public String tenders(Model model) {
        return renderPage(model, "pages/tenders-body", "/tenders", "BLAST - Tenders");
    }

    @GetMapping("/post")
    public String post(Model model) {
        return renderPage(model, "pages/post-body", "/post", "BLAST - Post");
    }

    @GetMapping("/job-form")
    public String jobForm(Model model) {
        return renderPage(model, "pages/job-form-body", "/job-form", "BLAST - Job Form");
    }

    @GetMapping("/other")
    public String other(Model model) {
        return renderPage(model, "pages/other-body", "/other", "BLAST - Other");
    }
}
