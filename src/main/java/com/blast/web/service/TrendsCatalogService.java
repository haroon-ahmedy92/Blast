package com.blast.web.service;

import com.blast.web.model.TrendItem;
import java.util.List;
import java.util.Optional;
import org.springframework.stereotype.Service;

@Service
public class TrendsCatalogService {

    private final List<TrendItem> trends = List.of(
        new TrendItem(
            "heslb-loan-application-guide",
            "HESLB Loan Application Guide",
            "HESLB",
            "March 2026",
            "A practical guide for completing and validating HESLB applications.",
            "This guide explains timelines, document preparation, and common application errors to avoid."
        ),
        new TrendItem(
            "tamisemi-selform-updates",
            "TAMISEMI Selform Updates",
            "TAMISEMI",
            "March 2026",
            "Latest placement workflow updates for students and guardians.",
            "We break down changes in submission windows, validation checks, and school selection priorities."
        ),
        new TrendItem(
            "form-five-selection-insights",
            "Form Five Selection Insights",
            "TAMISEMI",
            "February 2026",
            "How to understand selection outcomes and admission next steps.",
            "This note covers status meanings, reporting dates, and document readiness after selection."
        ),
        new TrendItem(
            "university-admission-window",
            "University Admission Window",
            "ADMISSION",
            "February 2026",
            "University admission updates with cross-campus planning reminders.",
            "Use this overview to track deadlines, required documents, and course selection sequencing."
        )
    );

    public List<TrendItem> getTrends() {
        return trends;
    }

    public Optional<TrendItem> findBySlug(String slug) {
        return trends.stream().filter(trend -> trend.getSlug().equals(slug)).findFirst();
    }
}
