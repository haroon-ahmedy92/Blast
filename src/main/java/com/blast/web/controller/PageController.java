package com.blast.web.controller;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.servlet.support.ServletUriComponentsBuilder;

@Controller
public class PageController {

    private void addCommonAttributes(Model model, String body, String currentPath) {
        String baseUrl = ServletUriComponentsBuilder.fromCurrentContextPath()
            .build()
            .toUriString();
        model.addAttribute("pageTitle", "Laravel");
        model.addAttribute("body", body);
        model.addAttribute("currentPath", currentPath);
        model.addAttribute("baseUrl", baseUrl);
    }

    @GetMapping("/")
    public String homepage(Model model) {
        addCommonAttributes(model, "pages/homepage-body", "/");
        return "layouts/main";
    }

    @GetMapping("/about")
    public String about(Model model) {
        addCommonAttributes(model, "pages/about-body", "/about");
        return "layouts/main";
    }

    @GetMapping("/tanzania-jobs")
    public String tanzaniaJobs(Model model) {
        addCommonAttributes(model, "pages/tanzania-jobs-body", "/tanzania-jobs");
        return "layouts/main";
    }

    @GetMapping("/all-jobs")
    public String allJobs(Model model) {
        addCommonAttributes(model, "pages/all-jobs-body", "/all-jobs");
        return "layouts/main";
    }

    @GetMapping("/tenders")
    public String tenders(Model model) {
        addCommonAttributes(model, "pages/tenders-body", "/tenders");
        return "layouts/main";
    }

    @GetMapping("/post")
    public String post(Model model) {
        addCommonAttributes(model, "pages/post-body", "/post");
        return "layouts/main";
    }

    @GetMapping("/job-form")
    public String jobForm(Model model) {
        addCommonAttributes(model, "pages/job-form-body", "/job-form");
        return "layouts/main";
    }

    @GetMapping("/other")
    public String other(Model model) {
        addCommonAttributes(model, "pages/other-body", "/other");
        return "layouts/main";
    }
}
