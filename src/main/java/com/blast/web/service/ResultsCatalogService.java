package com.blast.web.service;

import com.blast.web.model.ExamItem;
import java.util.List;
import java.util.Optional;
import org.springframework.stereotype.Service;

@Service
public class ResultsCatalogService {

    private final List<ExamItem> exams = List.of(
        new ExamItem(
            "necta-form-four-results",
            "NECTA Form Four Results",
            "NECTA",
            "Tanzania",
            "March 2026",
            "Official Form Four results publication and candidate lookup guidance.",
            List.of("Result publication timeline", "Candidate number lookup tips", "Appeals and correction channels")
        ),
        new ExamItem(
            "necta-form-six-results",
            "NECTA Form Six Results",
            "NECTA",
            "Tanzania",
            "February 2026",
            "A-Level result release updates and higher education readiness notes.",
            List.of("Subject-level interpretation", "University application reminders", "Recheck process")
        ),
        new ExamItem(
            "kcpe-results",
            "KCPE Results",
            "KNEC",
            "Kenya",
            "January 2026",
            "Primary exam outcomes and placement preparation support.",
            List.of("Score interpretation", "Placement timeline", "Parent/student checklist")
        ),
        new ExamItem(
            "matric-results",
            "Matric Results",
            "DBE",
            "South Africa",
            "January 2026",
            "National Senior Certificate outcomes and next-step planning.",
            List.of("Statement of results", "Supplementary options", "Admission pathway overview")
        )
    );

    public List<ExamItem> getExams() {
        return exams;
    }

    public Optional<ExamItem> findBySlug(String slug) {
        return exams.stream().filter(exam -> exam.getSlug().equals(slug)).findFirst();
    }
}
