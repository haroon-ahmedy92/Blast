@extends('layouts.main')

@section('content')
    <div class="flex flex-col items-center py-16">
        <div class="max-w-4xl w-full px-8 text-center">
            <!-- Main Title -->
            <h1 class="text-3xl md:text-4xl font-bold mb-6" style="color: #1E40AF;">
                Tanzania Job Opportunities
            </h1>
            
            <!-- Description Text -->
            <p class="text-lg md:text-xl text-gray-700 mb-8 max-w-2xl mx-auto leading-relaxed">
                Find the best employment opportunities across Tanzania. The more information, the better your life becomes.
            </p>
            
            <!-- Search Container -->
            <div class="w-full max-w-4xl mx-auto p-6 md:p-8 rounded-lg mb-8" style="background-color: #EFF6FF;">
                <!-- Search Instructions -->
                <p class="text-gray-600 mb-6 text-sm md:text-base">
                    Enter a keyword, role, skill or company. We will help you find a job matching your preferences in Tanzania.
                </p>
                
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
                            <option value="">All Locations in Tanzania</option>
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
            
            <!-- Bottom Text -->
            <p class="text-gray-600 text-sm md:text-base">
                We have everything! Please use our link to find what you're looking.
            </p>
        </div>
    </div>

    <!-- Job Filter and Listings Section -->
    <div class="py-8">
        <div class="container mx-auto">
            <div class="flex">
                <!-- Sidebar Filter -->
                <div class="w-80 p-6 bg-white border-gray-200">
                    <div class="filter-section p-4 mb-6 border border-gray-200 rounded-lg bg-white">
                        <h2 class="text-lg font-semibold mb-4" style="color: #1E40AF;">Filter Tanzania Jobs</h2>
                        
                        <!-- Job Category -->
                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Job Category</label>
                            <select class="w-full p-2 border border-gray-300 rounded bg-white dropdown-select"
                                    style="background-image: url('data:image/svg+xml,%3csvg xmlns=\'http://www.w3.org/2000/svg\' fill=\'none\' viewBox=\'0 0 20 20\'%3e%3cpath stroke=\'%236b7280\' stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'1.5\' d=\'m6 8 4 4 4-4\'/%3e%3c/svg%3e'); background-position: right 8px center; background-repeat: no-repeat; background-size: 16px 12px; padding-right: 40px;">
                                <option>All Categories</option>
                                <option>Technology</option>
                                <option>Healthcare</option>
                                <option>Education</option>
                                <option>Finance</option>
                                <option>Marketing</option>
                                <option>Engineering</option>
                            </select>
                        </div>
                        
                        <!-- Job Type -->
                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 mb-3">Job Type</label>
                            <div class="space-y-2">
                                <label class="flex items-center">
                                    <input type="checkbox" class="mr-2" style="color: #1E40AF;">
                                    <span class="text-sm text-gray-700">Full Time</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="mr-2" style="color: #1E40AF;">
                                    <span class="text-sm text-gray-700">Part Time</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="mr-2" style="color: #1E40AF;">
                                    <span class="text-sm text-gray-700">Contract</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="mr-2" style="color: #1E40AF;">
                                    <span class="text-sm text-gray-700">Freelance</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="mr-2" style="color: #1E40AF;">
                                    <span class="text-sm text-gray-700">Internship</span>
                                </label>
                            </div>
                        </div>
                        
                        <!-- Experience Level -->
                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 mb-3">Experience Level</label>
                            <div class="space-y-2">
                                <label class="flex items-center">
                                    <input type="checkbox" class="mr-2" style="color: #1E40AF;">
                                    <span class="text-sm text-gray-700">Entry Level</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="mr-2" style="color: #1E40AF;">
                                    <span class="text-sm text-gray-700">Mid Level</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="mr-2" style="color: #1E40AF;">
                                    <span class="text-sm text-gray-700">Senior Level</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="mr-2" style="color: #1E40AF;">
                                    <span class="text-sm text-gray-700">Management</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="mr-2" style="color: #1E40AF;">
                                    <span class="text-sm text-gray-700">Executive</span>
                                </label>
                            </div>
                        </div>
                        
                        <!-- Salary Range -->
                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Salary Range (TZS)</label>
                            <select class="w-full p-2 border border-gray-300 rounded bg-white dropdown-select"
                                    style="background-image: url('data:image/svg+xml,%3csvg xmlns=\'http://www.w3.org/2000/svg\' fill=\'none\' viewBox=\'0 0 20 20\'%3e%3cpath stroke=\'%236b7280\' stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'1.5\' d=\'m6 8 4 4 4-4\'/%3e%3c/svg%3e'); background-position: right 8px center; background-repeat: no-repeat; background-size: 16px 12px; padding-right: 40px;">
                                <option>Any Salary</option>
                                <option>Below 1M TZS</option>
                                <option>1M - 2M TZS</option>
                                <option>2M - 3M TZS</option>
                                <option>3M - 5M TZS</option>
                                <option>5M+ TZS</option>
                            </select>
                        </div>
                        
                        <!-- Date Posted -->
                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 mb-3">Date Posted</label>
                            <div class="space-y-2">
                                <label class="flex items-center">
                                    <input type="checkbox" class="mr-2" style="color: #1E40AF;">
                                    <span class="text-sm text-gray-700">Anytime</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="mr-2" style="color: #1E40AF;">
                                    <span class="text-sm text-gray-700">Last 24 hours</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="mr-2" style="color: #1E40AF;">
                                    <span class="text-sm text-gray-700">Last 7 days</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="mr-2" style="color: #1E40AF;">
                                    <span class="text-sm text-gray-700">Last 14 days</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="mr-2" style="color: #1E40AF;">
                                    <span class="text-sm text-gray-700">Last 30 days</span>
                                </label>
                            </div>
                        </div>
                        
                        <!-- Filter Buttons -->
                        <div class="flex space-x-3">
                            <button class="px-4 py-2 text-gray-600 border border-gray-300 rounded hover:bg-gray-50 transition-colors">Reset</button>
                            <button class="px-4 py-2 text-white border-none rounded cursor-pointer font-medium transition-all hover:shadow-lg" 
                                    style="background-color: #1E40AF;">Apply Filters</button>
                        </div>
                    </div>
                </div>
                
                <!-- Main Content -->
                <div class="flex-1 p-6">
                    <div class="p-4 rounded-lg mb-6" style="background-color: #EFF6FF;">
                        <h1 class="text-xl font-semibold" style="color: #1E40AF;">Featured Jobs in Tanzania</h1>
                    </div>
                    
                    <!-- Job Listings -->
                    <div class="space-y-6">
                        <!-- Job 1: Senior Software Engineer -->
                        <div class="border border-gray-200 rounded-lg bg-white p-6 mb-4">
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h3 class="text-lg font-semibold mb-2" style="color: #1E40AF;">Senior Software Engineer</h3>
                                    <p class="text-gray-700 font-medium">Tech Solutions Tanzania Ltd. - Dar es Salaam</p>
                                </div>
                                <span class="px-3 py-1 rounded-full text-xs font-medium" style="background-color: #EFF6FF; color: #1E40AF;">Featured</span>
                            </div>
                            
                            <div class="flex items-center space-x-4 mb-4 text-sm text-gray-600">
                                <span class="flex items-center">
                                    <i class="fas fa-clock mr-1"></i>
                                    Full Time
                                </span>
                                <span class="flex items-center">
                                    <i class="fas fa-money-bill-wave mr-1"></i>
                                    TZS 3M - 5M per month
                                </span>
                                <span class="flex items-center">
                                    <i class="fas fa-calendar mr-1"></i>
                                    Posted 2 days ago
                                </span>
                            </div>
                            
                            <p class="text-gray-700 mb-4">
                                We are looking for an experienced Software Engineer to join our growing team in Dar es Salaam. The ideal candidate will have strong experience in web development and cloud technologies.
                            </p>
                            
                            <div class="mb-4">
                                <span class="inline-block px-3 py-1 rounded-full text-xs mr-2 mb-1" style="background-color: #EFF6FF; color: #1E40AF;">JavaScript</span>
                                <span class="inline-block px-3 py-1 rounded-full text-xs mr-2 mb-1" style="background-color: #EFF6FF; color: #1E40AF;">React</span>
                                <span class="inline-block px-3 py-1 rounded-full text-xs mr-2 mb-1" style="background-color: #EFF6FF; color: #1E40AF;">Node.js</span>
                                <span class="inline-block px-3 py-1 rounded-full text-xs mr-2 mb-1" style="background-color: #EFF6FF; color: #1E40AF;">AWS</span>
                                <span class="inline-block px-3 py-1 rounded-full text-xs mr-2 mb-1" style="background-color: #EFF6FF; color: #1E40AF;">Agile</span>
                            </div>
                            
                            <div class="flex justify-between items-center">
                                <button class="px-5 py-2 text-white border-none rounded cursor-pointer font-medium transition-all hover:shadow-lg" 
                                        style="background-color: #1E40AF;">Apply Now</button>
                                <a href="#" class="font-medium transition-colors hover:underline" style="color: #1E40AF;">View Details</a>
                            </div>
                        </div>
                        
                        <!-- Job 2: Project Manager -->
                        <div class="border border-gray-200 rounded-lg bg-white p-6 mb-4">
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h3 class="text-lg font-semibold mb-2" style="color: #1E40AF;">Project Manager - Infrastructure Development</h3>
                                    <p class="text-gray-700 font-medium">Tanzania Infrastructure Authority - Dodoma</p>
                                </div>
                                <span class="px-3 py-1 rounded-full text-xs font-medium" style="background-color: #DCFCE7; color: #166534;">Government</span>
                            </div>
                            
                            <div class="flex items-center space-x-4 mb-4 text-sm text-gray-600">
                                <span class="flex items-center">
                                    <i class="fas fa-clock mr-1"></i>
                                    Full Time
                                </span>
                                <span class="flex items-center">
                                    <i class="fas fa-money-bill-wave mr-1"></i>
                                    TZS 2M - 4M per month
                                </span>
                                <span class="flex items-center">
                                    <i class="fas fa-calendar mr-1"></i>
                                    Posted 1 day ago
                                </span>
                            </div>
                            
                            <p class="text-gray-700 mb-4">
                                A Project Manager is needed to oversee large-scale infrastructure development projects across Tanzania. This role requires extensive experience in managing civil engineering projects.
                            </p>
                            
                            <div class="mb-4">
                                <span class="inline-block px-3 py-1 rounded-full text-xs mr-2 mb-1" style="background-color: #EFF6FF; color: #1E40AF;">Project Management</span>
                                <span class="inline-block px-3 py-1 rounded-full text-xs mr-2 mb-1" style="background-color: #EFF6FF; color: #1E40AF;">Civil Engineering</span>
                                <span class="inline-block px-3 py-1 rounded-full text-xs mr-2 mb-1" style="background-color: #EFF6FF; color: #1E40AF;">Budget Management</span>
                            </div>
                            
                            <div class="flex justify-between items-center">
                                <button class="px-5 py-2 text-white border-none rounded cursor-pointer font-medium transition-all hover:shadow-lg" 
                                        style="background-color: #1E40AF;">Apply Now</button>
                                <a href="#" class="font-medium transition-colors hover:underline" style="color: #1E40AF;">View Details</a>
                            </div>
                        </div>
                        
                        <!-- Job 3: Marketing Manager -->
                        <div class="border border-gray-200 rounded-lg bg-white p-6 mb-4">
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h3 class="text-lg font-semibold mb-2" style="color: #1E40AF;">Marketing Manager</h3>
                                    <p class="text-gray-700 font-medium">East African Breweries - Arusha</p>
                                </div>
                                <span class="px-3 py-1 rounded-full text-xs font-medium" style="background-color: #FEF9C3; color: #CA8A04;">Premium</span>
                            </div>
                            
                            <div class="flex items-center space-x-4 mb-4 text-sm text-gray-600">
                                <span class="flex items-center">
                                    <i class="fas fa-clock mr-1"></i>
                                    Full Time
                                </span>
                                <span class="flex items-center">
                                    <i class="fas fa-money-bill-wave mr-1"></i>
                                    TZS 2.5M - 4M per month
                                </span>
                                <span class="flex items-center">
                                    <i class="fas fa-calendar mr-1"></i>
                                    Posted 3 days ago
                                </span>
                            </div>
                            
                            <p class="text-gray-700 mb-4">
                                We are seeking a creative and strategic Marketing Manager to lead our brand campaigns across Tanzania. The ideal candidate will have experience in FMCG marketing and brand management.
                            </p>
                            
                            <div class="mb-4">
                                <span class="inline-block px-3 py-1 rounded-full text-xs mr-2 mb-1" style="background-color: #EFF6FF; color: #1E40AF;">Marketing Strategy</span>
                                <span class="inline-block px-3 py-1 rounded-full text-xs mr-2 mb-1" style="background-color: #EFF6FF; color: #1E40AF;">Brand Management</span>
                                <span class="inline-block px-3 py-1 rounded-full text-xs mr-2 mb-1" style="background-color: #EFF6FF; color: #1E40AF;">Digital Marketing</span>
                            </div>
                            
                            <div class="flex justify-between items-center">
                                <button class="px-5 py-2 text-white border-none rounded cursor-pointer font-medium transition-all hover:shadow-lg" 
                                        style="background-color: #1E40AF;">Apply Now</button>
                                <a href="#" class="font-medium transition-colors hover:underline" style="color: #1E40AF;">View Details</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Load More Button -->
                    <div class="text-center mt-8">
                        <button class="px-6 py-3 text-white rounded-lg font-medium transition-all hover:shadow-lg" 
                                style="background-color: #1E40AF;">Load More Jobs</button>
                    </div>

                    <!-- Latest Job Postings Section -->
                    <div class="mt-12">
                        <div class="bg-white border border-gray-200 rounded-lg overflow-hidden shadow-sm max-w-4xl mx-auto">
                            <div class="px-6 py-4 border-b border-gray-200" style="background-color: #EFF6FF;">
                                <h2 class="text-xl font-semibold" style="color: #1E40AF;">Latest Job Postings</h2>
                            </div>
                            
                            <div class="divide-y divide-gray-100">
                                <!-- Job Item 1 -->
                                <div class="p-6">
                                    <div class="flex justify-between items-start mb-2">
                                        <h3 class="text-base font-semibold hover:underline cursor-pointer" style="color: #1E40AF;">Finance Officer</h3>
                                        <span class="px-2 py-1 text-xs font-medium text-white rounded" style="background-color: #1E40AF;">NEW</span>
                                    </div>
                                    <div class="text-sm text-gray-600 mb-3 font-medium">CRDB Bank - Dar es Salaam</div>
                                    <div class="flex items-center gap-6 text-sm text-gray-500 mb-3">
                                        <span class="flex items-center gap-2">
                                            <i class="far fa-clock"></i>
                                            Full Time
                                        </span>
                                        <span class="flex items-center gap-2">
                                            <i class="far fa-calendar"></i>
                                            Posted 2 days ago
                                        </span>
                                    </div>
                                    <a href="#" class="text-sm font-medium hover:underline" style="color: #1E40AF;">View Details</a>
                                </div>

                                <!-- Job Item 2 -->
                                <div class="p-6">
                                    <div class="flex justify-between items-start mb-2">
                                        <h3 class="text-base font-semibold hover:underline cursor-pointer" style="color: #1E40AF;">English Teacher</h3>
                                        <span class="px-2 py-1 text-xs font-medium text-white rounded" style="background-color: #1E40AF;">NEW</span>
                                    </div>
                                    <div class="text-sm text-gray-600 mb-3 font-medium">International School of Tanganyika - Dar es Salaam</div>
                                    <div class="flex items-center gap-6 text-sm text-gray-500 mb-3">
                                        <span class="flex items-center gap-2">
                                            <i class="far fa-clock"></i>
                                            Full Time
                                        </span>
                                        <span class="flex items-center gap-2">
                                            <i class="far fa-calendar"></i>
                                            Posted 2 days ago
                                        </span>
                                    </div>
                                    <a href="#" class="text-sm font-medium hover:underline" style="color: #1E40AF;">View Details</a>
                                </div>

                                <!-- Job Item 3 -->
                                <div class="p-6">
                                    <div class="flex justify-between items-start mb-2">
                                        <h3 class="text-base font-semibold hover:underline cursor-pointer" style="color: #1E40AF;">Operations Manager</h3>
                                        <span class="px-2 py-1 text-xs font-medium text-white rounded" style="background-color: #1E40AF;">NEW</span>
                                    </div>
                                    <div class="text-sm text-gray-600 mb-3 font-medium">Airtel Tanzania - Dar es Salaam</div>
                                    <div class="flex items-center gap-6 text-sm text-gray-500 mb-3">
                                        <span class="flex items-center gap-2">
                                            <i class="far fa-clock"></i>
                                            Full Time
                                        </span>
                                        <span class="flex items-center gap-2">
                                            <i class="far fa-calendar"></i>
                                            Posted 2 days ago
                                        </span>
                                    </div>
                                    <a href="#" class="text-sm font-medium hover:underline" style="color: #1E40AF;">View Details</a>
                                </div>

                                <!-- Job Item 4 -->
                                <div class="p-6">
                                    <div class="flex justify-between items-start mb-2">
                                        <h3 class="text-base font-semibold hover:underline cursor-pointer" style="color: #1E40AF;">HR Specialist</h3>
                                        <span class="px-2 py-1 text-xs font-medium text-white rounded" style="background-color: #1E40AF;">NEW</span>
                                    </div>
                                    <div class="text-sm text-gray-600 mb-3 font-medium">Tigo Tanzania - Dar es Salaam</div>
                                    <div class="flex items-center gap-6 text-sm text-gray-500 mb-3">
                                        <span class="flex items-center gap-2">
                                            <i class="far fa-clock"></i>
                                            Full Time
                                        </span>
                                        <span class="flex items-center gap-2">
                                            <i class="far fa-calendar"></i>
                                            Posted 2 days ago
                                        </span>
                                    </div>
                                    <a href="#" class="text-sm font-medium hover:underline" style="color: #1E40AF;">View Details</a>
                                </div>

                                <!-- Job Item 5 -->
                                <div class="p-6">
                                    <div class="flex justify-between items-start mb-2">
                                        <h3 class="text-base font-semibold hover:underline cursor-pointer" style="color: #1E40AF;">Tour Guide</h3>
                                        <span class="px-2 py-1 text-xs font-medium text-white rounded" style="background-color: #1E40AF;">NEW</span>
                                    </div>
                                    <div class="text-sm text-gray-600 mb-3 font-medium">Tanzania Tourism Board - Arusha</div>
                                    <div class="flex items-center gap-6 text-sm text-gray-500 mb-3">
                                        <span class="flex items-center gap-2">
                                            <i class="far fa-clock"></i>
                                            Full Time
                                        </span>
                                        <span class="flex items-center gap-2">
                                            <i class="far fa-calendar"></i>
                                            Posted 2 days ago
                                        </span>
                                    </div>
                                    <a href="#" class="text-sm font-medium hover:underline" style="color: #1E40AF;">View Details</a>
                                </div>
                            </div>

                            <!-- View All Button -->
                            <div class="p-6 border-t border-gray-200 text-center" style="background-color: #f8fafc;">
                                <a href="#" class="inline-block px-6 py-3 text-white rounded-lg font-medium text-sm transition-all hover:shadow-lg" 
                                   style="background-color: #1E40AF;">View All Latest Jobs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tanzania Jobs JavaScript -->
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
                    
                    // Show success message and scroll to results
                    const locationText = location ? locationSelect.options[locationSelect.selectedIndex].text : 'all Tanzania';
                    alert(`Searching for "${keyword}" jobs in ${locationText}. Scrolling to results...`);
                    
                    // Scroll to job listings
                    document.querySelector('.bg-gray-50').scrollIntoView({ behavior: 'smooth' });
                    
                }, 1500);
            }

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

            // Filter functionality
            const filterCheckboxes = document.querySelectorAll('input[type="checkbox"]');
            const filterSelects = document.querySelectorAll('.dropdown-select');
            const applyFiltersBtn = document.querySelector('button:contains("Apply Filters")');
            const resetFiltersBtn = document.querySelector('button:contains("Reset")');

            // Apply filters functionality
            document.addEventListener('click', function(e) {
                if (e.target.textContent.includes('Apply Filters')) {
                    applyFilters();
                } else if (e.target.textContent.includes('Reset')) {
                    resetFilters();
                }
            });

            function applyFilters() {
                const filters = {
                    jobTypes: [],
                    experienceLevels: [],
                    datePosted: [],
                    category: '',
                    salary: ''
                };

                // Collect filter data
                filterCheckboxes.forEach(checkbox => {
                    if (checkbox.checked) {
                        const label = checkbox.nextElementSibling.textContent;
                        const section = checkbox.closest('div').previousElementSibling;
                        
                        if (section && section.textContent.includes('Job Type')) {
                            filters.jobTypes.push(label);
                        } else if (section && section.textContent.includes('Experience Level')) {
                            filters.experienceLevels.push(label);
                        } else if (section && section.textContent.includes('Date Posted')) {
                            filters.datePosted.push(label);
                        }
                    }
                });

                console.log('Applied filters:', filters);
                // Here you would typically filter the job listings
                alert('Filters applied! In a real application, this would filter the job listings.');
            }

            function resetFilters() {
                filterCheckboxes.forEach(checkbox => {
                    checkbox.checked = false;
                });
                filterSelects.forEach(select => {
                    select.selectedIndex = 0;
                });
                console.log('Filters reset');
            }

            // Job card interactions
            document.addEventListener('click', function(e) {
                if (e.target.textContent.includes('Apply Now')) {
                    e.preventDefault();
                    const jobTitle = e.target.closest('.border').querySelector('h3').textContent;
                    alert(`Applying for: ${jobTitle}\nThis would redirect to the application form.`);
                } else if (e.target.textContent.includes('View Details')) {
                    e.preventDefault();
                    const jobTitle = e.target.closest('.border').querySelector('h3').textContent;
                    alert(`Viewing details for: ${jobTitle}\nThis would show the full job description.`);
                } else if (e.target.textContent.includes('Load More Jobs')) {
                    e.preventDefault();
                    loadMoreJobs();
                }
            });

            function loadMoreJobs() {
                const button = document.querySelector('button:contains("Load More Jobs")');
                const originalText = button.innerHTML;
                button.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Loading...';
                button.disabled = true;

                setTimeout(() => {
                    button.innerHTML = originalText;
                    button.disabled = false;
                    alert('More jobs loaded! In a real application, this would load additional job listings.');
                }, 2000);
            }

            // Animate elements on page load
            const elements = document.querySelectorAll('h1, p, .w-full.max-w-4xl');
            elements.forEach((element, index) => {
                element.style.opacity = '0';
                element.style.transform = 'translateY(30px)';
                element.style.transition = 'all 0.6s ease';
                
                setTimeout(() => {
                    element.style.opacity = '1';
                    element.style.transform = 'translateY(0)';
                }, index * 200);
            });

            // Animate job cards on scroll
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -100px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);

            // Observe job cards for animation
            setTimeout(() => {
                const jobCards = document.querySelectorAll('.border.border-gray-200.rounded-lg');
                jobCards.forEach((card, index) => {
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(30px)';
                    card.style.transition = 'all 0.6s ease';
                    observer.observe(card);
                });
            }, 1000);
        });
    </script>
@endsection
