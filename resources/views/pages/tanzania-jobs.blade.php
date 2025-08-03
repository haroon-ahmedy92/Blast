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
                    
                    // Show success message
                    const locationText = location ? locationSelect.options[locationSelect.selectedIndex].text : 'all Tanzania';
                    alert(`Searching for "${keyword}" jobs in ${locationText}. This will redirect to search results page.`);
                    
                }, 1500);
            }

            // Add focus animations
            const inputs = document.querySelectorAll('input, select');
            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.style.transform = 'translateY(-2px)';
                    this.style.transition = 'transform 0.3s ease';
                });

                input.addEventListener('blur', function() {
                    this.style.transform = 'translateY(0)';
                });
            });

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
        });
    </script>
@endsection
