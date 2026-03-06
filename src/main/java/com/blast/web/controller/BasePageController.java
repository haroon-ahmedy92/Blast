package com.blast.web.controller;

import org.springframework.ui.Model;
import org.springframework.web.servlet.support.ServletUriComponentsBuilder;

public abstract class BasePageController {

    protected String renderPage(Model model, String body, String currentPath, String pageTitle) {
        String baseUrl = ServletUriComponentsBuilder.fromCurrentContextPath()
            .build()
            .toUriString();
        model.addAttribute("pageTitle", pageTitle);
        model.addAttribute("body", body);
        model.addAttribute("currentPath", currentPath);
        model.addAttribute("baseUrl", baseUrl);
        return "layouts/main";
    }
}
