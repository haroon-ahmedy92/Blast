package com.blast.web.controller;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;

@Controller
public class GetStartedController extends BasePageController {

    @GetMapping("/get-started")
    public String getStarted(Model model) {
        return renderPage(model, "pages/get-started-body", "/get-started", "BLAST - Get Started");
    }
}
