package com.blast.web.service;

import com.blast.web.model.JobCategory;
import com.blast.web.model.JobPosting;
import java.util.ArrayList;
import java.util.Comparator;
import java.util.List;
import java.util.Optional;
import org.springframework.stereotype.Service;

@Service
public class JobCatalogService {

    private final List<JobCategory> categories = List.of(
        new JobCategory("software-engineering", "Software Engineering", "Backend, frontend and full-stack opportunities.", 42, "fas fa-code"),
        new JobCategory("finance", "Finance", "Banking, audit, accounting and investment roles.", 27, "fas fa-chart-line"),
        new JobCategory("healthcare", "Healthcare", "Clinical, public health and medical operations.", 18, "fas fa-heartbeat"),
        new JobCategory("education", "Education", "Teaching, curriculum and education operations.", 16, "fas fa-graduation-cap"),
        new JobCategory("government", "Government", "Public service and civil administration openings.", 31, "fas fa-landmark"),
        new JobCategory("internships", "Internships", "Early-career and graduate pathways.", 24, "fas fa-user-graduate")
    );

    private final List<JobPosting> jobs = List.of(
        new JobPosting(
            "senior-java-engineer-dar",
            "Senior Java Engineer",
            "Blast Digital Labs",
            "Dar es Salaam, Tanzania",
            "Full Time",
            "2 days ago",
            "Lead Java services for high-traffic job and opportunity flows.",
            "You will lead service design, build robust APIs, and collaborate with product and design to ship reliable features.",
            List.of("5+ years Java or Kotlin", "Spring Boot and REST APIs", "MySQL query optimization", "Comfort with testing and code reviews"),
            "software-engineering",
            "#"
        ),
        new JobPosting(
            "financial-analyst-arusha",
            "Financial Analyst",
            "NMB Tanzania",
            "Arusha, Tanzania",
            "Full Time",
            "1 day ago",
            "Support strategic planning with clean reporting and forecasting.",
            "You will build financial models, coordinate monthly reporting, and partner with leadership on budgeting decisions.",
            List.of("Advanced Excel/Sheets", "Budgeting and forecasting", "Strong communication", "2+ years relevant experience"),
            "finance",
            "#"
        ),
        new JobPosting(
            "clinical-officer-mwanza",
            "Clinical Officer",
            "Muhimbili Outreach",
            "Mwanza, Tanzania",
            "Full Time",
            "3 days ago",
            "Deliver patient-centered care in regional facilities.",
            "Provide day-to-day clinical support, coordinate referrals, and maintain accurate treatment records.",
            List.of("Licensed clinical practice", "Patient triage skills", "Electronic records familiarity", "Team collaboration"),
            "healthcare",
            "#"
        ),
        new JobPosting(
            "secondary-math-teacher-dodoma",
            "Secondary Math Teacher",
            "Future Scholars Academy",
            "Dodoma, Tanzania",
            "Full Time",
            "4 days ago",
            "Teach practical mathematics with strong student outcomes.",
            "Plan lessons, mentor students, and run assessments aligned with curriculum goals.",
            List.of("Teaching certification", "Classroom management", "Curriculum planning", "Strong student engagement"),
            "education",
            "#"
        ),
        new JobPosting(
            "district-compliance-officer",
            "District Compliance Officer",
            "Public Service Unit",
            "Mbeya, Tanzania",
            "Full Time",
            "5 days ago",
            "Coordinate compliance activities across district offices.",
            "Oversee process compliance, prepare reports, and support regulatory implementation projects.",
            List.of("Regulatory documentation", "Public sector communication", "Reporting discipline", "Policy interpretation"),
            "government",
            "#"
        ),
        new JobPosting(
            "product-intern-remote",
            "Product Operations Intern",
            "Blast",
            "Remote (TZ)",
            "Internship",
            "Today",
            "Support product operations and analytics workflows.",
            "Assist in product documentation, triage feedback, and maintain reporting dashboards.",
            List.of("Strong writing", "Spreadsheet comfort", "Curiosity and ownership", "Graduate or final-year student"),
            "internships",
            "#"
        )
    );

    private final List<String> countries = List.of(
        "Tanzania", "Kenya", "Uganda", "Rwanda", "Burundi", "Zambia", "Malawi", "South Africa", "Ghana", "Nigeria", "Ethiopia", "Botswana"
    );

    public List<JobCategory> getCategories() {
        return categories;
    }

    public Optional<JobCategory> findCategoryBySlug(String slug) {
        return categories.stream().filter(c -> c.getSlug().equals(slug)).findFirst();
    }

    public List<JobPosting> getRecentJobs() {
        return jobs;
    }

    public List<JobPosting> jobsByCategory(String categorySlug) {
        return jobs.stream().filter(j -> j.getCategorySlug().equals(categorySlug)).toList();
    }

    public Optional<JobPosting> findJobBySlug(String slug) {
        return jobs.stream().filter(j -> j.getSlug().equals(slug)).findFirst();
    }

    public List<JobPosting> relatedJobs(String categorySlug, String currentSlug, int limit) {
        return jobs.stream()
            .filter(j -> j.getCategorySlug().equals(categorySlug) && !j.getSlug().equals(currentSlug))
            .sorted(Comparator.comparing(JobPosting::getTitle))
            .limit(limit)
            .toList();
    }

    public List<String> getCountries() {
        return new ArrayList<>(countries);
    }
}
