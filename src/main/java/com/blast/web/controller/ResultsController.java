package com.blast.web.controller;

import com.blast.web.model.ExamItem;
import com.blast.web.service.ResultsCatalogService;
import org.springframework.http.HttpStatus;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.server.ResponseStatusException;

@Controller
public class ResultsController extends BasePageController {

    private final ResultsCatalogService resultsCatalogService;

    public ResultsController(ResultsCatalogService resultsCatalogService) {
        this.resultsCatalogService = resultsCatalogService;
    }

    @GetMapping("/results")
    public String results(Model model) {
        model.addAttribute("exams", resultsCatalogService.getExams());
        return renderPage(model, "pages/results-body", "/results", "BLAST - Results");
    }

    @GetMapping("/results/{examSlug}")
    public String resultDetails(@PathVariable String examSlug, Model model) {
        ExamItem exam = resultsCatalogService.findBySlug(examSlug)
            .orElseThrow(() -> new ResponseStatusException(HttpStatus.NOT_FOUND));
        model.addAttribute("exam", exam);
        model.addAttribute("moreExams", resultsCatalogService.getExams().stream()
            .filter(item -> !item.getSlug().equals(examSlug))
            .limit(4)
            .toList());
        return renderPage(model, "pages/result-details-body", "/results", "BLAST - " + exam.getTitle());
    }
}
