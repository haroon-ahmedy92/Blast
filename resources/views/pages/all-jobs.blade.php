@extends('layouts.main')

@section('content')
    <div class="flex flex-col items-center py-16">
        <div class="max-w-4xl w-full px-8 text-center">
            <!-- Main Title -->
            <h1 class="text-3xl md:text-4xl font-bold mb-6" style="color: #1E40AF;">
                Find Your Perfect Job
            </h1>
            
            <!-- Description Text -->
            <p class="text-lg md:text-xl text-gray-700 mb-8 max-w-2xl mx-auto leading-relaxed">
                Browse thousands of job listings from top employers worldwide
            </p>
            
            <!-- Search Container -->
            <div class="w-full max-w-4xl mx-auto p-6 md:p-8 rounded-lg mb-8" style="background-color: #EFF6FF;">
                <!-- Search Form -->
                <form class="flex flex-col md:flex-row gap-4 items-center justify-center" id="jobSearchForm">
                    <!-- Job Title Input -->
                    <div class="w-full md:w-80">
                        <input 
                            type="text" 
                            placeholder="Jobs Title, Keyword or Company" 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white"
                            id="jobKeyword"
                            name="keyword"
                        />
                    </div>
                    
                    <!-- Location Dropdown -->
                    <div class="w-full md:w-80">
                        <select class="w-full px-4 py-3 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white appearance-none" 
                                id="jobLocation" 
                                name="location"
                                style="background-image: url('data:image/svg+xml,%3csvg xmlns=\'http://www.w3.org/2000/svg\' fill=\'none\' viewBox=\'0 0 20 20\'%3e%3cpath stroke=\'%236b7280\' stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'1.5\' d=\'m6 8 4 4 4-4\'/%3e%3c/svg%3e'); background-position: right 12px center; background-repeat: no-repeat; background-size: 16px; padding-right: 40px;">
                            <option value="">All locations in Tanzania</option>
                            <option value="dar-es-salaam">Dar es Salaam</option>
                            <option value="arusha">Arusha</option>
                            <option value="mwanza">Mwanza</option>
                            <option value="dodoma">Dodoma</option>
                            <option value="mbeya">Mbeya</option>
                            <option value="morogoro">Morogoro</option>
                            <option value="tanga">Tanga</option>
                            <option value="zanzibar">Zanzibar</option>
                        </select>
                    </div>
                    
                    <!-- Search Button -->
                    <div class="w-full md:w-auto">
                        <button type="submit" 
                                class="w-full md:w-auto min-w-[140px] px-6 py-3 rounded-lg text-white font-medium text-sm transition-all duration-300 hover:shadow-lg hover:transform hover:-translate-y-1 flex items-center justify-center gap-2 whitespace-nowrap"
                                style="background-color: #1E40AF; height: 48px;">
                            <i class="fas fa-search"></i>
                            Search Jobs
                        </button>
                    </div>
                </form>
            </div>
            
            <!-- Popular Keywords -->
            <p class="text-sm text-gray-600">
                <span class="font-medium" style="color: #1E40AF;">Popular: </span>
                <span class="space-x-2">
                    <a href="#" class="hover:underline transition-colors" style="color: #1E40AF;">Software Engineer</a>,
                    <a href="#" class="hover:underline transition-colors" style="color: #1E40AF;">Data Analyst</a>,
                    <a href="#" class="hover:underline transition-colors" style="color: #1E40AF;">Project Manager</a>,
                    <a href="#" class="hover:underline transition-colors" style="color: #1E40AF;">Marketing</a>,
                    <a href="#" class="hover:underline transition-colors" style="color: #1E40AF;">Remote</a>
                </span>
            </p>
        </div>
    </div>

    <!-- Advanced Filters Section -->
    <div class="py-8">
        <div class="container mx-auto px-6">
            <!-- Section Header -->
            <div class="text-center mb-8">
                <h2 class="text-2xl font-bold mb-4" style="color: #1E40AF;">Advanced Filters</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Use these filters to narrow down your job search and find the perfect opportunity that matches your preferences.
                </p>
            </div>
            
            <!-- Filter Boxes Container -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-4xl mx-auto">
                <!-- Job Type Filter -->
                <div class="bg-white border border-gray-200 rounded-lg p-6">
                    <h3 class="text-lg font-semibold mb-4" style="color: #1E40AF;">Job Type</h3>
                    <div class="space-y-3">
                        <label class="flex items-center text-gray-700 cursor-pointer">
                            <input type="checkbox" class="mr-3" style="color: #1E40AF;">
                            <span class="text-sm">Full Time</span>
                        </label>
                        <label class="flex items-center text-gray-700 cursor-pointer">
                            <input type="checkbox" class="mr-3" style="color: #1E40AF;">
                            <span class="text-sm">Part Time</span>
                        </label>
                        <label class="flex items-center text-gray-700 cursor-pointer">
                            <input type="checkbox" class="mr-3" style="color: #1E40AF;">
                            <span class="text-sm">Contract</span>
                        </label>
                        <label class="flex items-center text-gray-700 cursor-pointer">
                            <input type="checkbox" class="mr-3" style="color: #1E40AF;">
                            <span class="text-sm">Freelance</span>
                        </label>
                        <label class="flex items-center text-gray-700 cursor-pointer">
                            <input type="checkbox" class="mr-3" style="color: #1E40AF;">
                            <span class="text-sm">Internship</span>
                        </label>
                    </div>
                </div>

                <!-- Date Posted Filter -->
                <div class="bg-white border border-gray-200 rounded-lg p-6">
                    <h3 class="text-lg font-semibold mb-4" style="color: #1E40AF;">Date Posted</h3>
                    <div class="space-y-3">
                        <label class="flex items-center text-gray-700 cursor-pointer">
                            <input type="checkbox" class="mr-3" style="color: #1E40AF;">
                            <span class="text-sm">Anytime</span>
                        </label>
                        <label class="flex items-center text-gray-700 cursor-pointer">
                            <input type="checkbox" class="mr-3" style="color: #1E40AF;">
                            <span class="text-sm">Last 24 hours</span>
                        </label>
                        <label class="flex items-center text-gray-700 cursor-pointer">
                            <input type="checkbox" class="mr-3" style="color: #1E40AF;">
                            <span class="text-sm">Last 7 days</span>
                        </label>
                        <label class="flex items-center text-gray-700 cursor-pointer">
                            <input type="checkbox" class="mr-3" style="color: #1E40AF;">
                            <span class="text-sm">Last 14 days</span>
                        </label>
                        <label class="flex items-center text-gray-700 cursor-pointer">
                            <input type="checkbox" class="mr-3" style="color: #1E40AF;">
                            <span class="text-sm">Last 30 days</span>
                        </label>
                    </div>
                </div>

                <!-- Experience Level Filter -->
                <div class="bg-white border border-gray-200 rounded-lg p-6">
                    <h3 class="text-lg font-semibold mb-4" style="color: #1E40AF;">Experience Level</h3>
                    <div class="space-y-3">
                        <label class="flex items-center text-gray-700 cursor-pointer">
                            <input type="checkbox" class="mr-3" style="color: #1E40AF;">
                            <span class="text-sm">Entry Level</span>
                        </label>
                        <label class="flex items-center text-gray-700 cursor-pointer">
                            <input type="checkbox" class="mr-3" style="color: #1E40AF;">
                            <span class="text-sm">Mid Level</span>
                        </label>
                        <label class="flex items-center text-gray-700 cursor-pointer">
                            <input type="checkbox" class="mr-3" style="color: #1E40AF;">
                            <span class="text-sm">Senior Level</span>
                        </label>
                        <label class="flex items-center text-gray-700 cursor-pointer">
                            <input type="checkbox" class="mr-3" style="color: #1E40AF;">
                            <span class="text-sm">Management</span>
                        </label>
                        <label class="flex items-center text-gray-700 cursor-pointer">
                            <input type="checkbox" class="mr-3" style="color: #1E40AF;">
                            <span class="text-sm">Executive</span>
                        </label>
                    </div>
                </div>
            </div>

            <!-- Apply Filters Button -->
            <div class="text-center mt-8">
                <button class="px-8 py-3 text-white rounded-lg font-medium transition-all hover:shadow-lg hover:transform hover:-translate-y-1" 
                        style="background-color: #1E40AF;">
                    Apply Filters
                </button>
            </div>
        </div>
    </div>

    <!-- Featured Jobs Section -->
    <div class="py-8">
        <div class="container mx-auto px-6">
            <!-- Section Header -->
            <div class="max-w-4xl mx-auto mb-8">
                <div class="flex justify-between items-center">
                    <h2 class="text-2xl font-bold" style="color: #1E40AF;">Featured Jobs</h2>
                    <a href="#" class="text-sm hover:underline transition-colors" style="color: #1E40AF;">View More</a>
                </div>
            </div>
            
            <!-- Job Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-4xl mx-auto">
                <!-- Job Card 1: Senior Software Engineer -->
                <div class="bg-white border border-gray-200 rounded-lg p-6 transition-all duration-300 hover:shadow-lg">
                    <!-- Star Icon -->
                    <div class="absolute top-4 right-4 w-5 h-5 text-yellow-500">
                        <i class="fas fa-star"></i>
                    </div>
                    
                    <h3 class="text-lg font-semibold mb-2" style="color: #1E40AF;">Senior Software Engineer</h3>
                    <p class="text-gray-700 font-medium mb-2">Microsoft Corporation</p>
                    <p class="text-gray-600 text-sm mb-3">
                        <i class="fas fa-map-marker-alt mr-1"></i>
                        🇹🇿 Tanzania - Dar es Salaam
                    </p>
                    
                    <div class="flex gap-2 mb-4">
                        <span class="px-3 py-1 rounded-full text-xs font-medium text-white" style="background-color: #1E40AF;">Full Time</span>
                        <span class="px-3 py-1 rounded-full text-xs font-medium text-white" style="background-color: #166534;">Remote</span>
                    </div>
                    
                    <div class="flex justify-between items-center">
                        <p class="text-sm font-medium" style="color: #1E40AF;">$80K - $120K</p>
                        <p class="text-xs text-gray-500">Posted 2 days ago</p>
                    </div>
                </div>

                <!-- Job Card 2: Marketing Director -->
                <div class="bg-white border border-gray-200 rounded-lg p-6 transition-all duration-300 hover:shadow-lg">
                    <!-- Star Icon -->
                    <div class="absolute top-4 right-4 w-5 h-5 text-yellow-500">
                        <i class="fas fa-star"></i>
                    </div>
                    
                    <h3 class="text-lg font-semibold mb-2" style="color: #1E40AF;">Marketing Director</h3>
                    <p class="text-gray-700 font-medium mb-2">CRDB Bank</p>
                    <p class="text-gray-600 text-sm mb-3">
                        <i class="fas fa-map-marker-alt mr-1"></i>
                        🇹🇿 Arusha, Tanzania
                    </p>
                    
                    <div class="flex gap-2 mb-4">
                        <span class="px-3 py-1 rounded-full text-xs font-medium text-white" style="background-color: #1E40AF;">Full Time</span>
                        <span class="px-3 py-1 rounded-full text-xs font-medium text-white" style="background-color: #166534;">Remote</span>
                    </div>
                    
                    <div class="flex justify-between items-center">
                        <p class="text-sm font-medium" style="color: #1E40AF;">$80K - $120K</p>
                        <p class="text-xs text-gray-500">Posted 2 days ago</p>
                    </div>
                </div>

                <!-- Job Card 3: Health Research Officer -->
                <div class="bg-white border border-gray-200 rounded-lg p-6 transition-all duration-300 hover:shadow-lg">
                    <!-- Star Icon -->
                    <div class="absolute top-4 right-4 w-5 h-5 text-yellow-500">
                        <i class="fas fa-star"></i>
                    </div>
                    
                    <h3 class="text-lg font-semibold mb-2" style="color: #1E40AF;">Health Research Officer</h3>
                    <p class="text-gray-700 font-medium mb-2">WHO Tanzania</p>
                    <p class="text-gray-600 text-sm mb-3">
                        <i class="fas fa-map-marker-alt mr-1"></i>
                        🇹🇿 Dodoma, Tanzania
                    </p>
                    
                    <div class="flex gap-2 mb-4">
                        <span class="px-3 py-1 rounded-full text-xs font-medium text-white" style="background-color: #1E40AF;">Full Time</span>
                        <span class="px-3 py-1 rounded-full text-xs font-medium text-white" style="background-color: #166534;">Remote</span>
                    </div>
                    
                    <div class="flex justify-between items-center">
                        <p class="text-sm font-medium" style="color: #1E40AF;">$80K - $120K</p>
                        <p class="text-xs text-gray-500">Posted 2 days ago</p>
                    </div>
                </div>

                <!-- Job Card 4: Clinical Officer -->
                <div class="bg-white border border-gray-200 rounded-lg p-6 transition-all duration-300 hover:shadow-lg">
                    <!-- Star Icon -->
                    <div class="absolute top-4 right-4 w-5 h-5 text-yellow-500">
                        <i class="fas fa-star"></i>
                    </div>
                    
                    <h3 class="text-lg font-semibold mb-2" style="color: #1E40AF;">Clinical Officer</h3>
                    <p class="text-gray-700 font-medium mb-2">AGHAKHAN Tanzania</p>
                    <p class="text-gray-600 text-sm mb-3">
                        <i class="fas fa-map-marker-alt mr-1"></i>
                        🇹🇿 Dar, Tanzania
                    </p>
                    
                    <div class="flex gap-2 mb-4">
                        <span class="px-3 py-1 rounded-full text-xs font-medium text-white" style="background-color: #1E40AF;">Full Time</span>
                        <span class="px-3 py-1 rounded-full text-xs font-medium text-white" style="background-color: #166534;">Remote</span>
                    </div>
                    
                    <div class="flex justify-between items-center">
                        <p class="text-sm font-medium" style="color: #1E40AF;">$80K - $120K</p>
                        <p class="text-xs text-gray-500">Posted 2 days ago</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Browse Jobs By Category Section -->
    <div class="py-8">
        <div class="container mx-auto px-6">
            <!-- Section Header -->
            <div class="text-center mb-8">
                <h2 class="text-2xl font-bold mb-4" style="color: #1E40AF;">Browse Jobs By Category</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Explore job opportunities across different industries and find the perfect match for your skills and interests.
                </p>
            </div>
            
            <!-- Categories Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-4xl mx-auto">
                <!-- Information Technology -->
                <div class="category-card bg-white border border-gray-200 rounded-lg p-6 transition-all duration-300 hover:shadow-lg cursor-pointer" data-category="information-technology">
                    <div class="flex items-start space-x-4">
                        <div class="category-icon text-2xl" style="color: #1E40AF;">
                            <i class="fas fa-desktop"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-1" style="color: #1f2937;">Information Technology</h3>
                            <p class="text-sm text-gray-600">384 Jobs Available</p>
                        </div>
                    </div>
                </div>

                <!-- Business & Finance -->
                <div class="category-card bg-white border border-gray-200 rounded-lg p-6 transition-all duration-300 hover:shadow-lg cursor-pointer" data-category="business-finance">
                    <div class="flex items-start space-x-4">
                        <div class="category-icon text-2xl" style="color: #1E40AF;">
                            <i class="fas fa-chart-pie"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-1" style="color: #1f2937;">Business & Finance</h3>
                            <p class="text-sm text-gray-600">295 Jobs Available</p>
                        </div>
                    </div>
                </div>

                <!-- Healthcare & Medical -->
                <div class="category-card bg-white border border-gray-200 rounded-lg p-6 transition-all duration-300 hover:shadow-lg cursor-pointer" data-category="healthcare-medical">
                    <div class="flex items-start space-x-4">
                        <div class="category-icon text-2xl" style="color: #1E40AF;">
                            <i class="fas fa-heartbeat"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-1" style="color: #1f2937;">Healthcare & Medical</h3>
                            <p class="text-sm text-gray-600">213 Jobs Available</p>
                        </div>
                    </div>
                </div>

                <!-- Education & Training -->
                <div class="category-card bg-white border border-gray-200 rounded-lg p-6 transition-all duration-300 hover:shadow-lg cursor-pointer" data-category="education-training">
                    <div class="flex items-start space-x-4">
                        <div class="category-icon text-2xl" style="color: #1E40AF;">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-1" style="color: #1f2937;">Education & Training</h3>
                            <p class="text-sm text-gray-600">384 Jobs Available</p>
                        </div>
                    </div>
                </div>

                <!-- Engineering & Manufacturing -->
                <div class="category-card bg-white border border-gray-200 rounded-lg p-6 transition-all duration-300 hover:shadow-lg cursor-pointer" data-category="engineering-manufacturing">
                    <div class="flex items-start space-x-4">
                        <div class="category-icon text-2xl" style="color: #1E40AF;">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-1" style="color: #1f2937;">Engineering & Manufacturing</h3>
                            <p class="text-sm text-gray-600">384 Jobs Available</p>
                        </div>
                    </div>
                </div>

                <!-- Marketing & Creative -->
                <div class="category-card bg-white border border-gray-200 rounded-lg p-6 transition-all duration-300 hover:shadow-lg cursor-pointer" data-category="marketing-creative">
                    <div class="flex items-start space-x-4">
                        <div class="category-icon text-2xl" style="color: #1E40AF;">
                            <i class="fas fa-bullhorn"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-1" style="color: #1f2937;">Marketing & Creative</h3>
                            <p class="text-sm text-gray-600">295 Jobs Available</p>
                        </div>
                    </div>
                </div>

                <!-- Transportation & Logistics -->
                <div class="category-card bg-white border border-gray-200 rounded-lg p-6 transition-all duration-300 hover:shadow-lg cursor-pointer" data-category="transportation-logistics">
                    <div class="flex items-start space-x-4">
                        <div class="category-icon text-2xl" style="color: #1E40AF;">
                            <i class="fas fa-truck"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-1" style="color: #1f2937;">Transportation & Logistics</h3>
                            <p class="text-sm text-gray-600">213 Jobs Available</p>
                        </div>
                    </div>
                </div>

                <!-- Hospitality & Tourism -->
                <div class="category-card bg-white border border-gray-200 rounded-lg p-6 transition-all duration-300 hover:shadow-lg cursor-pointer" data-category="hospitality-tourism">
                    <div class="flex items-start space-x-4">
                        <div class="category-icon text-2xl" style="color: #1E40AF;">
                            <i class="fas fa-bed"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-1" style="color: #1f2937;">Hospitality & Tourism</h3>
                            <p class="text-sm text-gray-600">384 Jobs Available</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Jobs Section -->
    <div class="py-8">
        <div class="container mx-auto px-6">
            <!-- Section Header -->
            <div class="max-w-4xl mx-auto mb-8">
                <h2 class="text-2xl font-bold mb-4" style="color: #1E40AF;">Recent Jobs</h2>
                <p class="text-gray-600">
                    Discover the latest job opportunities posted by top employers.
                </p>
            </div>
            
            <!-- Job Listings -->
            <div class="space-y-4 max-w-4xl mx-auto mb-8">
                <!-- Sales Executive -->
                <div class="job-card bg-white border border-gray-200 rounded-lg p-6 flex items-center justify-between transition-all duration-200 hover:shadow-lg cursor-pointer" data-job="sales-executive">
                    <div class="flex items-center space-x-4">
                        <div class="job-icon w-12 h-12 rounded-lg flex items-center justify-center text-xl" style="background-color: #EFF6FF; color: #1E40AF;">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-1">Sales Executive</h3>
                            <p class="text-sm text-gray-500">384 Jobs Available</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <div class="text-lg mb-1 font-semibold" style="color: #1E40AF;">$80K - $120K</div>
                        <div class="location-text flex items-center justify-end mb-1 text-sm text-gray-600">
                            <i class="fas fa-map-marker-alt mr-1"></i>
                            🇹🇿 Tanzania - Dar es Salaam
                        </div>
                        <div class="posted-text text-xs text-gray-400">Posted today</div>
                    </div>
                </div>

                <!-- Financial Analyst -->
                <div class="job-card bg-white border border-gray-200 rounded-lg p-6 flex items-center justify-between transition-all duration-200 hover:shadow-lg cursor-pointer" data-job="financial-analyst">
                    <div class="flex items-center space-x-4">
                        <div class="job-icon w-12 h-12 rounded-lg flex items-center justify-center text-xl" style="background-color: #EFF6FF; color: #1E40AF;">
                            <i class="fas fa-university"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-1">Financial Analyst</h3>
                            <p class="text-sm text-gray-500">295 Jobs Available</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <div class="text-lg mb-1 font-semibold" style="color: #1E40AF;">$70K - $110K</div>
                        <div class="location-text flex items-center justify-end mb-1 text-sm text-gray-600">
                            <i class="fas fa-map-marker-alt mr-1"></i>
                            🇹🇿 Tanzania - Mbeya
                        </div>
                        <div class="posted-text text-xs text-gray-400">Posted today</div>
                    </div>
                </div>

                <!-- Digital Marketing Specialist -->
                <div class="job-card bg-white border border-gray-200 rounded-lg p-6 flex items-center justify-between transition-all duration-200 hover:shadow-lg cursor-pointer" data-job="digital-marketing-specialist">
                    <div class="flex items-center space-x-4">
                        <div class="job-icon w-12 h-12 rounded-lg flex items-center justify-center text-xl" style="background-color: #EFF6FF; color: #1E40AF;">
                            <i class="fas fa-globe"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-1">Digital Marketing Specialist</h3>
                            <p class="text-sm text-gray-500">213 Jobs Available</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <div class="text-lg mb-1 font-semibold" style="color: #1E40AF;">$60K - $90K</div>
                        <div class="location-text flex items-center justify-end mb-1 text-sm text-gray-600">
                            <i class="fas fa-map-marker-alt mr-1"></i>
                            🇹🇿 Tanzania - Mwanza
                        </div>
                        <div class="posted-text text-xs text-gray-400">Posted today</div>
                    </div>
                </div>

                <!-- Secondary School Teacher -->
                <div class="job-card bg-white border border-gray-200 rounded-lg p-6 flex items-center justify-between transition-all duration-200 hover:shadow-lg cursor-pointer" data-job="secondary-school-teacher">
                    <div class="flex items-center space-x-4">
                        <div class="job-icon w-12 h-12 rounded-lg flex items-center justify-center text-xl" style="background-color: #EFF6FF; color: #1E40AF;">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-1">Secondary School Teacher</h3>
                            <p class="text-sm text-gray-500">167 Jobs Available</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <div class="text-lg mb-1 font-semibold" style="color: #1E40AF;">$45K - $65K</div>
                        <div class="location-text flex items-center justify-end mb-1 text-sm text-gray-600">
                            <i class="fas fa-map-marker-alt mr-1"></i>
                            🇹🇿 Tanzania - Arusha
                        </div>
                        <div class="posted-text text-xs text-gray-400">Posted today</div>
                    </div>
                </div>

                <!-- Hotel Manager -->
                <div class="job-card bg-white border border-gray-200 rounded-lg p-6 flex items-center justify-between transition-all duration-200 hover:shadow-lg cursor-pointer" data-job="hotel-manager">
                    <div class="flex items-center space-x-4">
                        <div class="job-icon w-12 h-12 rounded-lg flex items-center justify-center text-xl" style="background-color: #EFF6FF; color: #1E40AF;">
                            <i class="fas fa-building"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-1">Hotel Manager</h3>
                            <p class="text-sm text-gray-500">142 Jobs Available</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <div class="text-lg mb-1 font-semibold" style="color: #1E40AF;">$55K - $85K</div>
                        <div class="location-text flex items-center justify-end mb-1 text-sm text-gray-600">
                            <i class="fas fa-map-marker-alt mr-1"></i>
                            🇹🇿 Tanzania - Morogoro
                        </div>
                        <div class="posted-text text-xs text-gray-400">Posted today</div>
                    </div>
                </div>
            </div>

            <!-- Load More Jobs Button -->
            <div class="text-center max-w-4xl mx-auto">
                <button class="load-more-btn px-6 py-3 text-white rounded-lg font-medium transition-all duration-200 hover:shadow-lg hover:transform hover:-translate-y-1" 
                        style="background-color: #1E40AF;" 
                        id="loadMoreJobsBtn">
                    Load More Jobs
                </button>
            </div>
        </div>
    </div>

    <!-- Top Hiring Companies Section -->
    <div class="py-8">
        <div class="container mx-auto px-6">
            <!-- Section Header -->
            <div class="max-w-4xl mx-auto mb-8">
                <h2 class="text-2xl font-bold mb-4" style="color: #1E40AF;">Top Hiring Companies</h2>
                <p class="text-gray-600">
                    Discover career opportunities with Tanzania's leading employers.
                </p>
            </div>
            
            <!-- Companies Grid -->
            <div class="grid grid-cols-2 gap-6 max-w-4xl mx-auto">
                <!-- Blast -->
                <div class="company-card bg-white border border-gray-200 rounded-xl p-6 text-center transition-all duration-300 hover:shadow-lg hover:transform hover:-translate-y-1 h-55 flex flex-col justify-between cursor-pointer" data-company="blast">
                    <div>
                        <div class="company-logo w-15 h-15 mx-auto mb-4 rounded-lg flex items-center justify-center" style="width: 60px; height: 60px;">
                            <img src="{{ asset('companies/blast.png') }}" alt="Blast Logo" class="h-full w-full object-contain">
                        </div>
                        <div class="company-name text-lg font-semibold text-gray-800 mb-2">Blast</div>
                        <div class="positions-count text-sm text-gray-600 mb-4">45+ open positions</div>
                    </div>
                    <a href="#" class="view-jobs-link text-sm font-medium transition-colors hover:underline" style="color: #1E40AF;">View Jobs</a>
                </div>
                
                <!-- Airtel Tanzania -->
                <div class="company-card bg-white border border-gray-200 rounded-xl p-6 text-center transition-all duration-300 hover:shadow-lg hover:transform hover:-translate-y-1 h-55 flex flex-col justify-between cursor-pointer" data-company="airtel">
                    <div>
                        <div class="company-logo w-15 h-15 mx-auto mb-4 rounded-lg flex items-center justify-center" style="width: 60px; height: 60px;">
                            <img src="{{ asset('assets/logos/airtel.svg') }}" alt="Airtel Tanzania Logo" class="h-full w-full object-contain">
                        </div>
                        <div class="company-name text-lg font-semibold text-gray-800 mb-2">Airtel Tanzania</div>
                        <div class="positions-count text-sm text-gray-600 mb-4">11 open positions</div>
                    </div>
                    <a href="#" class="view-jobs-link text-sm font-medium transition-colors hover:underline" style="color: #1E40AF;">View Jobs</a>
                </div>
                
                <!-- Vodacom Tz -->
                <div class="company-card bg-white border border-gray-200 rounded-xl p-6 text-center transition-all duration-300 hover:shadow-lg hover:transform hover:-translate-y-1 h-55 flex flex-col justify-between cursor-pointer" data-company="vodacom">
                    <div>
                        <div class="company-logo w-15 h-15 mx-auto mb-4 rounded-lg flex items-center justify-center" style="width: 60px; height: 60px;">
                            <img src="{{ asset('assets/logos/vodacom.svg') }}" alt="Vodacom Tanzania Logo" class="h-full w-full object-contain">
                        </div>
                        <div class="company-name text-lg font-semibold text-gray-800 mb-2">Vodacom Tz</div>
                        <div class="positions-count text-sm text-gray-600 mb-4">26 open positions</div>
                    </div>
                    <a href="#" class="view-jobs-link text-sm font-medium transition-colors hover:underline" style="color: #1E40AF;">View Jobs</a>
                </div>
                
                <!-- Muhimbili Hosp -->
                <div class="company-card bg-white border border-gray-200 rounded-xl p-6 text-center transition-all duration-300 hover:shadow-lg hover:transform hover:-translate-y-1 h-55 flex flex-col justify-between cursor-pointer" data-company="muhimbili">
                    <div>
                        <div class="company-logo w-15 h-15 mx-auto mb-4 rounded-lg flex items-center justify-center" style="width: 60px; height: 60px;">
                            <img src="{{ asset('companies/muhimbili.png') }}" alt="Muhimbili Hospital Tanzania Logo" class="h-full w-full object-contain">
                        </div>
                        <div class="company-name text-lg font-semibold text-gray-800 mb-2">Muhimbili Hosp</div>
                        <div class="positions-count text-sm text-gray-600 mb-4">13 open positions</div>
                    </div>
                    <a href="#" class="view-jobs-link text-sm font-medium transition-colors hover:underline" style="color: #1E40AF;">View Jobs</a>
                </div>
                
                <!-- Tanzania Petroleum Development -->
                <div class="company-card bg-white border border-gray-200 rounded-xl p-6 text-center transition-all duration-300 hover:shadow-lg hover:transform hover:-translate-y-1 h-55 flex flex-col justify-between cursor-pointer" data-company="tanzania-petroleum">
                    <div>
                        <div class="company-logo w-15 h-15 mx-auto mb-4 rounded-lg flex items-center justify-center" style="width: 60px; height: 60px;">
                            <img src="{{ asset('companies/Tanzania Petroleum Development.png') }}" alt="Tanzania Petroleum Development Logo" class="h-full w-full object-contain">
                        </div>
                        <div class="company-name text-lg font-semibold text-gray-800 mb-2">Tanzania Petroleum Development</div>
                        <div class="positions-count text-sm text-gray-600 mb-4">11 open positions</div>
                    </div>
                    <a href="#" class="view-jobs-link text-sm font-medium transition-colors hover:underline" style="color: #1E40AF;">View Jobs</a>
                </div>
                
                <!-- Tanzania Brew -->
                <div class="company-card bg-white border border-gray-200 rounded-xl p-6 text-center transition-all duration-300 hover:shadow-lg hover:transform hover:-translate-y-1 h-55 flex flex-col justify-between cursor-pointer" data-company="tanzania-brew">
                    <div>
                        <div class="company-logo w-15 h-15 mx-auto mb-4 rounded-lg flex items-center justify-center" style="width: 60px; height: 60px;">
                            <img src="{{ asset('companies/tzBreweries.png') }}" alt="Tanzania Breweries Logo" class="h-full w-full object-contain">
                        </div>
                        <div class="company-name text-lg font-semibold text-gray-800 mb-2">Tanzania Brew</div>
                        <div class="positions-count text-sm text-gray-600 mb-4">21 open positions</div>
                    </div>
                    <a href="#" class="view-jobs-link text-sm font-medium transition-colors hover:underline" style="color: #1E40AF;">View Jobs</a>
                </div>
                
                <!-- NMB Bank -->
                <div class="company-card bg-white border border-gray-200 rounded-xl p-6 text-center transition-all duration-300 hover:shadow-lg hover:transform hover:-translate-y-1 h-55 flex flex-col justify-between cursor-pointer" data-company="nmb">
                    <div>
                        <div class="company-logo w-15 h-15 mx-auto mb-4 rounded-lg flex items-center justify-center" style="width: 60px; height: 60px;">
                            <img src="{{ asset('companies/nmb.png') }}" alt="NMB Bank Tanzania Logo" class="h-full w-full object-contain">
                        </div>
                        <div class="company-name text-lg font-semibold text-gray-800 mb-2">NMB Bank</div>
                        <div class="positions-count text-sm text-gray-600 mb-4">31 open positions</div>
                    </div>
                    <a href="#" class="view-jobs-link text-sm font-medium transition-colors hover:underline" style="color: #1E40AF;">View Jobs</a>
                </div>
                
                <!-- CRDB Bank -->
                <div class="company-card bg-white border border-gray-200 rounded-xl p-6 text-center transition-all duration-300 hover:shadow-lg hover:transform hover:-translate-y-1 h-55 flex flex-col justify-between cursor-pointer" data-company="crdb">
                    <div>
                        <div class="company-logo w-15 h-15 mx-auto mb-4 rounded-lg flex items-center justify-center" style="width: 60px; height: 60px;">
                            <img src="{{ asset('companies/crdb.png') }}" alt="CRDB Bank Tanzania Logo" class="h-full w-full object-contain">
                        </div>
                        <div class="company-name text-lg font-semibold text-gray-800 mb-2">CRDB Bank</div>
                        <div class="positions-count text-sm text-gray-600 mb-4">28 open positions</div>
                    </div>
                    <a href="#" class="view-jobs-link text-sm font-medium transition-colors hover:underline" style="color: #1E40AF;">View Jobs</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Job Seeker Resources Section -->
    <div class="py-8">
        <div class="container mx-auto px-6">
            <!-- Section Header -->
            <div class="max-w-4xl mx-auto mb-8">
                <h2 class="text-2xl font-bold mb-4" style="color: #1E40AF;">Job Seeker Resources</h2>
                <p class="text-gray-600">
                    Essential tools and guides to help you succeed in your job search journey.
                </p>
            </div>
            
            <!-- Resource Cards with Staggered Widths -->
            <div class="max-w-4xl mx-auto space-y-4">
                <!-- Resume Writing Tips - 60% width -->
                <div class="resource-card bg-white border border-gray-200 rounded-lg p-6 flex items-center transition-all duration-300 hover:shadow-lg cursor-pointer" style="width: 60%;">
                    <div class="resource-icon w-12 h-12 rounded-full flex items-center justify-center text-white text-xl mr-5 flex-shrink-0" style="background-color: #1E40AF;">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <div class="resource-content flex-grow mr-5">
                        <h3 class="text-lg font-semibold mb-2 text-gray-900">Resume Writing Tips</h3>
                        <p class="text-sm text-gray-600 italic leading-relaxed">Learn how to create a standout resume that gets noticed by employers.</p>
                    </div>
                    <a href="#" class="read-more-link text-sm font-medium flex items-center flex-shrink-0 transition-colors hover:underline" style="color: #1E40AF;">
                        Read More
                        <i class="fas fa-arrow-right ml-2 text-xs"></i>
                    </a>
                </div>

                <!-- Interview Preparation - 80% width -->
                <div class="resource-card bg-white border border-gray-200 rounded-lg p-6 flex items-center transition-all duration-300 hover:shadow-lg cursor-pointer" style="width: 80%;">
                    <div class="resource-icon w-12 h-12 rounded-full flex items-center justify-center text-white text-xl mr-5 flex-shrink-0" style="background-color: #1E40AF;">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="resource-content flex-grow mr-5">
                        <h3 class="text-lg font-semibold mb-2 text-gray-900">Interview Preparation</h3>
                        <p class="text-sm text-gray-600 italic leading-relaxed">Tips and strategies to help you ace your next job interview.</p>
                    </div>
                    <a href="#" class="read-more-link text-sm font-medium flex items-center flex-shrink-0 transition-colors hover:underline" style="color: #1E40AF;">
                        Read More
                        <i class="fas fa-arrow-right ml-2 text-xs"></i>
                    </a>
                </div>

                <!-- Career Development - 100% width -->
                <div class="resource-card bg-white border border-gray-200 rounded-lg p-6 flex items-center transition-all duration-300 hover:shadow-lg cursor-pointer" style="width: 100%;">
                    <div class="resource-icon w-12 h-12 rounded-full flex items-center justify-center text-white text-xl mr-5 flex-shrink-0" style="background-color: #1E40AF;">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="resource-content flex-grow mr-5">
                        <h3 class="text-lg font-semibold mb-2 text-gray-900">Career Development</h3>
                        <p class="text-sm text-gray-600 italic leading-relaxed">Resources to help you grow your skills and advance your career.</p>
                    </div>
                    <a href="#" class="read-more-link text-sm font-medium flex items-center flex-shrink-0 transition-colors hover:underline" style="color: #1E40AF;">
                        Read More
                        <i class="fas fa-arrow-right ml-2 text-xs"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- All Jobs JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const jobSearchForm = document.getElementById('jobSearchForm');
            const keywordInput = document.getElementById('jobKeyword');
            const locationSelect = document.getElementById('jobLocation');
            const searchButton = document.querySelector('button[type="submit"]');

            // Handle form submission
            jobSearchForm.addEventListener('submit', function(e) {
                e.preventDefault();
                performJobSearch();
            });

            // Handle Enter key in keyword input
            keywordInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    performJobSearch();
                }
            });

            function performJobSearch() {
                const keyword = keywordInput.value.trim();
                const location = locationSelect.value;
                
                if (!keyword && !location) {
                    alert('Please enter a keyword or select a location to search for jobs.');
                    return;
                }

                // Add loading state
                const originalText = searchButton.innerHTML;
                searchButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Searching...';
                searchButton.disabled = true;

                // Simulate search (you can replace this with actual search functionality)
                setTimeout(() => {
                    console.log('Searching for jobs:', { keyword, location });
                    
                    // Build search query
                    const searchParams = new URLSearchParams();
                    if (keyword) searchParams.append('keyword', keyword);
                    if (location) searchParams.append('location', location);
                    
                    // For now, just log the search - you can redirect to a results page
                    console.log('Search URL would be: /jobs/search?' + searchParams.toString());
                    
                    // Reset button state
                    searchButton.innerHTML = originalText;
                    searchButton.disabled = false;
                    
                    // Show success message
                    const locationText = location ? locationSelect.options[locationSelect.selectedIndex].text : 'all Tanzania';
                    alert(`Searching for "${keyword}" jobs in ${locationText}. In a real application, this would show search results.`);
                    
                }, 1500);
            }

            // Handle category clicks
            document.querySelectorAll('.category-card').forEach(category => {
                category.addEventListener('click', function() {
                    const categoryName = this.querySelector('h3').textContent;
                    const categorySlug = this.getAttribute('data-category');
                    
                    // Set search keyword to category name
                    keywordInput.value = categoryName;
                    
                    // Highlight selected category
                    document.querySelectorAll('.category-card').forEach(card => {
                        card.style.borderColor = '#e5e7eb';
                        card.style.backgroundColor = 'white';
                    });
                    
                    this.style.borderColor = '#1E40AF';
                    this.style.backgroundColor = '#EFF6FF';
                    
                    // Perform search
                    performJobSearch();
                    
                    console.log(`Selected category: ${categoryName} (${categorySlug})`);
                });
                
                // Add hover effects
                category.addEventListener('mouseenter', function() {
                    if (this.style.borderColor !== 'rgb(30, 64, 175)') {
                        this.style.borderColor = '#1E40AF';
                        this.style.boxShadow = '0 4px 12px rgba(30, 64, 175, 0.1)';
                    }
                });
                
                category.addEventListener('mouseleave', function() {
                    if (this.style.backgroundColor !== 'rgb(239, 246, 255)') {
                        this.style.borderColor = '#e5e7eb';
                        this.style.boxShadow = 'none';
                    }
                });
            });

            // Handle recent job clicks
            document.querySelectorAll('.job-card[data-job]').forEach(jobCard => {
                jobCard.addEventListener('click', function() {
                    const jobTitle = this.querySelector('h3').textContent;
                    const jobSlug = this.getAttribute('data-job');
                    
                    // Set search keyword to job title
                    keywordInput.value = jobTitle;
                    
                    // Highlight selected job card
                    document.querySelectorAll('.job-card[data-job]').forEach(card => {
                        card.style.borderColor = '#e5e7eb';
                        card.style.backgroundColor = 'white';
                    });
                    
                    this.style.borderColor = '#1E40AF';
                    this.style.backgroundColor = '#EFF6FF';
                    
                    // Perform search
                    performJobSearch();
                    
                    console.log(`Selected job: ${jobTitle} (${jobSlug})`);
                });
                
                // Add hover effects that don't interfere with selection
                jobCard.addEventListener('mouseenter', function() {
                    if (this.style.borderColor !== 'rgb(30, 64, 175)') {
                        this.style.borderColor = '#1E40AF';
                        this.style.boxShadow = '0 2px 8px rgba(30, 64, 175, 0.1)';
                    }
                });
                
                jobCard.addEventListener('mouseleave', function() {
                    if (this.style.backgroundColor !== 'rgb(239, 246, 255)') {
                        this.style.borderColor = '#e5e7eb';
                        this.style.boxShadow = 'none';
                    }
                });
            });

            // Handle Load More Jobs button
            const loadMoreBtn = document.getElementById('loadMoreJobsBtn');
            if (loadMoreBtn) {
                loadMoreBtn.addEventListener('click', function() {
                    const originalText = this.innerHTML;
                    this.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Loading...';
                    this.disabled = true;
                    this.style.backgroundColor = '#9ca3af';

                    // Simulate loading more jobs
                    setTimeout(() => {
                        this.innerHTML = originalText;
                        this.disabled = false;
                        this.style.backgroundColor = '#1E40AF';
                        
                        // In a real application, this would load more job data
                        alert('More jobs loaded! In a real application, this would display additional job listings.');
                        console.log('Loading more recent jobs...');
                    }, 2000);
                });
            }

            // Handle company card clicks
            document.querySelectorAll('.company-card[data-company]').forEach(companyCard => {
                companyCard.addEventListener('click', function(e) {
                    // Don't trigger if clicking on the "View Jobs" link
                    if (e.target.classList.contains('view-jobs-link')) {
                        e.preventDefault();
                        const companyName = this.querySelector('.company-name').textContent;
                        alert(`Viewing jobs for ${companyName}. In a real application, this would redirect to the company's job listings.`);
                        return;
                    }
                    
                    const companyName = this.querySelector('.company-name').textContent;
                    const companySlug = this.getAttribute('data-company');
                    
                    // Set search keyword to company name
                    keywordInput.value = companyName;
                    
                    // Highlight selected company card
                    document.querySelectorAll('.company-card[data-company]').forEach(card => {
                        card.style.borderColor = '#e5e7eb';
                        card.style.backgroundColor = 'white';
                    });
                    
                    this.style.borderColor = '#1E40AF';
                    this.style.backgroundColor = '#EFF6FF';
                    
                    // Perform search
                    performJobSearch();
                    
                    console.log(`Selected company: ${companyName} (${companySlug})`);
                });
                
                // Add hover effects that don't interfere with selection
                companyCard.addEventListener('mouseenter', function() {
                    if (this.style.borderColor !== 'rgb(30, 64, 175)') {
                        this.style.borderColor = '#1E40AF';
                        this.style.boxShadow = '0 10px 25px rgba(0, 0, 0, 0.1)';
                    }
                });
                
                companyCard.addEventListener('mouseleave', function() {
                    if (this.style.backgroundColor !== 'rgb(239, 246, 255)') {
                        this.style.borderColor = '#e5e7eb';
                        this.style.boxShadow = 'none';
                    }
                });
            });

            // Handle popular keyword clicks
            document.querySelectorAll('a[href="#"]').forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const keyword = this.textContent;
                    keywordInput.value = keyword;
                    performJobSearch();
                });
            });

            // Add focus animations for search inputs
            const searchInputs = document.querySelectorAll('#jobKeyword, #jobLocation');
            searchInputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.style.transform = 'translateY(-2px)';
                    this.style.transition = 'transform 0.3s ease';
                });

                input.addEventListener('blur', function() {
                    this.style.transform = 'translateY(0)';
                });
            });
        });
    </script>
@endsection
