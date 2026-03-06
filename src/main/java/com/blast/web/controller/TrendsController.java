package com.blast.web.controller;

import com.blast.web.model.TrendItem;
import com.blast.web.service.TrendsCatalogService;
import org.springframework.http.HttpStatus;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.server.ResponseStatusException;

@Controller
public class TrendsController extends BasePageController {

    private final TrendsCatalogService trendsCatalogService;

    public TrendsController(TrendsCatalogService trendsCatalogService) {
        this.trendsCatalogService = trendsCatalogService;
    }

    @GetMapping("/trends")
    public String trends(Model model) {
        model.addAttribute("trends", trendsCatalogService.getTrends());
        return renderPage(model, "pages/trends-body", "/trends", "BLAST - Trends");
    }

    @GetMapping("/trends/{trendSlug}")
    public String trendDetails(@PathVariable String trendSlug, Model model) {
        TrendItem trend = trendsCatalogService.findBySlug(trendSlug)
            .orElseThrow(() -> new ResponseStatusException(HttpStatus.NOT_FOUND));
        model.addAttribute("trend", trend);
        model.addAttribute("relatedTrends", trendsCatalogService.getTrends().stream()
            .filter(item -> !item.getSlug().equals(trendSlug))
            .limit(4)
            .toList());
        return renderPage(model, "pages/trend-details-body", "/trends", "BLAST - " + trend.getTitle());
    }
}
