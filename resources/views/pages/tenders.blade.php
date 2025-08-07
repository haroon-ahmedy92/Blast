@extends('layouts.main')

@section('content')
<!-- Tender Opportunities Section -->
<div class="py-8 md:py-12">
    <div class="max-w-4xl mx-auto px-4 md:px-6">
        <!-- Page Header -->
        <div class="text-center mb-8 md:mb-12">
            <h1 class="text-2xl md:text-3xl font-bold mb-4" style="color: #1E40AF;">
                Tender Opportunities
            </h1>
            <p class="text-sm md:text-base text-gray-600 max-w-2xl mx-auto">
                Discover tender opportunities from government, private sector, and international organizations. 
                Find the perfect tender that matches your business capabilities.
            </p>
        </div>

        <!-- Tender Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6 max-w-4xl mx-auto">
            <!-- Government Card -->
            <div class="tender-card bg-white border-2 border-gray-200 rounded-lg p-4 md:p-5 text-center transition-all duration-300 hover:border-blue-700 hover:shadow-lg flex flex-col justify-center min-h-[140px]">
                <div>
                    <div class="mb-3">
                        <i class="fas fa-university text-2xl md:text-3xl" style="color: #1E40AF;"></i>
                    </div>
                    <h3 class="text-base md:text-lg font-semibold mb-2" style="color: #1E40AF;">
                        Government
                    </h3>
                    <p class="text-xs md:text-sm text-gray-600 mb-3 leading-relaxed">
                        Tenders from government departments and ministries
                    </p>
                    <div class="text-xs md:text-sm font-medium italic" style="color: #1E40AF;">
                        2,345 Opportunities
                    </div>
                </div>
            </div>
            
            <!-- Private Sector Card -->
            <div class="tender-card bg-white border-2 border-gray-200 rounded-lg p-4 md:p-5 text-center transition-all duration-300 hover:border-blue-700 hover:shadow-lg flex flex-col justify-center min-h-[140px]">
                <div>
                    <div class="mb-3">
                        <i class="fas fa-building text-2xl md:text-3xl" style="color: #1E40AF;"></i>
                    </div>
                    <h3 class="text-base md:text-lg font-semibold mb-2" style="color: #1E40AF;">
                        Private Sector
                    </h3>
                    <p class="text-xs md:text-sm text-gray-600 mb-3 leading-relaxed">
                        Tenders from private companies and organizations
                    </p>
                    <div class="text-xs md:text-sm font-medium italic" style="color: #1E40AF;">
                        1,782 Opportunities
                    </div>
                </div>
            </div>
            
            <!-- International Card (Full width on mobile, positioned below in the grid) -->
            <div class="tender-card bg-white border-2 border-gray-200 rounded-lg p-4 md:p-5 text-center transition-all duration-300 hover:border-blue-700 hover:shadow-lg flex flex-col justify-center min-h-[140px] md:col-start-1 md:row-start-2">
                <div>
                    <div class="mb-3">
                        <i class="fas fa-globe text-2xl md:text-3xl" style="color: #1E40AF;"></i>
                    </div>
                    <h3 class="text-base md:text-lg font-semibold mb-2" style="color: #1E40AF;">
                        International
                    </h3>
                    <p class="text-xs md:text-sm text-gray-600 mb-3 leading-relaxed">
                        Tenders from international organizations and NGOs
                    </p>
                    <div class="text-xs md:text-sm font-medium italic" style="color: #1E40AF;">
                        956 Opportunities
                    </div>
                </div>
            </div>
        </div>

        <!-- Featured Tenders Section -->
        <div class="mt-12 md:mt-16">
            <div class="flex max-w-6xl mx-auto bg-white rounded-lg border border-gray-200 overflow-hidden">
                <!-- Filter Sidebar -->
                <div class="w-80 p-6 border-r border-gray-200" style="background-color: #EFF6FF;">
                    <h3 class="text-lg font-semibold mb-6" style="color: #1E40AF;">Filter Options</h3>
                    
                    <!-- Tender Category -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Tender Category</label>
                        <div class="relative">
                            <select class="w-full p-3 border border-gray-300 rounded-md appearance-none" style="color: #1E40AF; background-image: url('data:image/svg+xml,%3csvg xmlns=\'http://www.w3.org/2000/svg\' fill=\'none\' viewBox=\'0 0 20 20\'%3e%3cpath stroke=\'%236b7280\' stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'1.5\' d=\'m6 8 4 4 4-4\'/%3e%3c/svg%3e'); background-position: right 12px center; background-repeat: no-repeat; background-size: 16px;">
                                <option>All Categories</option>
                                <option>Government</option>
                                <option>Private</option>
                                <option>International</option>
                            </select>
                        </div>
                    </div>
                    
                    <!-- Sector -->
                    <div class="mb-6">
                        <h4 class="text-sm font-medium text-gray-700 mb-3">Sector</h4>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="checkbox" class="w-4 h-4 border-gray-300 rounded mr-3 focus:ring-blue-500" style="color: #1E40AF;">
                                <span class="text-sm text-gray-700">Construction</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="w-4 h-4 border-gray-300 rounded mr-3 focus:ring-blue-500" style="color: #1E40AF;">
                                <span class="text-sm text-gray-700">Healthcare</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="w-4 h-4 border-gray-300 rounded mr-3 focus:ring-blue-500" style="color: #1E40AF;">
                                <span class="text-sm text-gray-700">Education</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="w-4 h-4 border-gray-300 rounded mr-3 focus:ring-blue-500" style="color: #1E40AF;">
                                <span class="text-sm text-gray-700">Technology</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="w-4 h-4 border-gray-300 rounded mr-3 focus:ring-blue-500" style="color: #1E40AF;">
                                <span class="text-sm text-gray-700">Agriculture</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="w-4 h-4 border-gray-300 rounded mr-3 focus:ring-blue-500" style="color: #1E40AF;">
                                <span class="text-sm text-gray-700">Energy</span>
                            </label>
                        </div>
                    </div>
                    
                    <!-- Regions -->
                    <div class="mb-6">
                        <h4 class="text-sm font-medium text-gray-700 mb-3">Regions</h4>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="checkbox" class="w-4 h-4 border-gray-300 rounded mr-3 focus:ring-blue-500" style="color: #1E40AF;">
                                <span class="text-sm text-gray-700">Dar es Salaam</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="w-4 h-4 border-gray-300 rounded mr-3 focus:ring-blue-500" style="color: #1E40AF;">
                                <span class="text-sm text-gray-700">Arusha</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="w-4 h-4 border-gray-300 rounded mr-3 focus:ring-blue-500" style="color: #1E40AF;">
                                <span class="text-sm text-gray-700">Mwanza</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="w-4 h-4 border-gray-300 rounded mr-3 focus:ring-blue-500" style="color: #1E40AF;">
                                <span class="text-sm text-gray-700">Mbeya</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="w-4 h-4 border-gray-300 rounded mr-3 focus:ring-blue-500" style="color: #1E40AF;">
                                <span class="text-sm text-gray-700">Dodoma</span>
                            </label>
                        </div>
                    </div>
                    
                    <!-- Category -->
                    <div class="mb-6">
                        <h4 class="text-sm font-medium text-gray-700 mb-3">Category</h4>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="checkbox" class="w-4 h-4 border-gray-300 rounded mr-3 focus:ring-blue-500" style="color: #1E40AF;">
                                <span class="text-sm text-gray-700">Goods</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="w-4 h-4 border-gray-300 rounded mr-3 focus:ring-blue-500" style="color: #1E40AF;">
                                <span class="text-sm text-gray-700">Services</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="w-4 h-4 border-gray-300 rounded mr-3 focus:ring-blue-500" style="color: #1E40AF;">
                                <span class="text-sm text-gray-700">Consultancy</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="w-4 h-4 border-gray-300 rounded mr-3 focus:ring-blue-500" style="color: #1E40AF;">
                                <span class="text-sm text-gray-700">Works</span>
                            </label>
                        </div>
                    </div>
                    
                    <!-- Apply Filters Button -->
                    <button class="w-full text-white py-3 px-4 rounded-md hover:opacity-90 transition-opacity" style="background-color: #1E40AF;">
                        Apply Filters
                    </button>
                </div>
                
                <!-- Main Content -->
                <div class="flex-1 p-6">
                    <!-- Header -->
                    <div class="rounded-lg p-4 mb-6" style="background-color: #EFF6FF;">
                        <h2 class="text-xl font-semibold" style="color: #1E40AF;">Featured Tenders in Tanzania</h2>
                    </div>
                    
                    <!-- Tender Listings -->
                    <div class="space-y-6">
                        <!-- Tender 1: Medical Equipment -->
                        <div class="bg-white border border-gray-200 rounded-lg p-6 relative hover:shadow-md transition-shadow">
                            <div class="absolute top-3 right-3 px-2 py-1 text-xs font-semibold rounded" style="background-color: #FACC15; color: #1E40AF;">
                                Featured
                            </div>
                            <h3 class="text-lg font-semibold mb-2 pr-20" style="color: #1E40AF;">Supply of Medical Equipment for Muhimbili Hospital</h3>
                            <p class="text-gray-600 text-sm mb-4">The Ministry of Health is seeking qualified suppliers for the provision of various medical equipment for Muhimbili National Hospital.</p>
                            
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-3 py-1 text-sm rounded-full border" style="background-color: #EFF6FF; color: #1E40AF; border-color: #1E40AF;">Healthcare</span>
                                <span class="px-3 py-1 text-sm rounded-full border" style="background-color: #EFF6FF; color: #1E40AF; border-color: #1E40AF;">Dar es Salaam</span>
                                <span class="px-3 py-1 text-sm rounded-full border" style="background-color: #EFF6FF; color: #1E40AF; border-color: #1E40AF;">Government</span>
                            </div>
                            
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-4 text-sm text-gray-600">
                                    <span>TZS 3M - 5M</span>
                                    <span class="px-2 py-1 text-xs font-medium text-white bg-red-600 rounded">Deadline: 15 Oct 2025</span>
                                </div>
                                <a href="#" class="text-sm font-medium hover:underline" style="color: #1E40AF;">View Details</a>
                            </div>
                        </div>
                        
                        <!-- Tender 2: Rural Roads -->
                        <div class="bg-white border border-gray-200 rounded-lg p-6 relative hover:shadow-md transition-shadow">
                            <div class="absolute top-3 right-3 px-2 py-1 text-xs font-semibold rounded" style="background-color: #FACC15; color: #1E40AF;">
                                Featured
                            </div>
                            <h3 class="text-lg font-semibold mb-2 pr-20" style="color: #1E40AF;">Construction of Rural Roads in Arusha Region</h3>
                            <p class="text-gray-600 text-sm mb-4">TANROADS is inviting tenders for the construction of 45km of rural roads in various districts of Arusha Region.</p>
                            
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-3 py-1 text-sm rounded-full border" style="background-color: #EFF6FF; color: #1E40AF; border-color: #1E40AF;">Construction</span>
                                <span class="px-3 py-1 text-sm rounded-full border" style="background-color: #EFF6FF; color: #1E40AF; border-color: #1E40AF;">Arusha</span>
                                <span class="px-3 py-1 text-sm rounded-full border" style="background-color: #EFF6FF; color: #1E40AF; border-color: #1E40AF;">Government</span>
                            </div>
                            
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-4 text-sm text-gray-600">
                                    <span>Budget: 1.2B - 1.5B TZS</span>
                                    <span class="px-2 py-1 text-xs font-medium text-white bg-red-600 rounded">Deadline: 20 Oct 2025</span>
                                </div>
                                <a href="#" class="text-sm font-medium hover:underline" style="color: #1E40AF;">View Details</a>
                            </div>
                        </div>
                        
                        <!-- Tender 3: IT Services -->
                        <div class="bg-white border border-gray-200 rounded-lg p-6 relative hover:shadow-md transition-shadow">
                            <div class="absolute top-3 right-3 px-2 py-1 text-xs font-semibold rounded" style="background-color: #FACC15; color: #1E40AF;">
                                Featured
                            </div>
                            <h3 class="text-lg font-semibold mb-2 pr-20" style="color: #1E40AF;">IT Services for Tanzania Revenue Authority</h3>
                            <p class="text-gray-600 text-sm mb-4">TRA is seeking service providers for the development and implementation of a new customs management system.</p>
                            
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-3 py-1 text-sm rounded-full border" style="background-color: #EFF6FF; color: #1E40AF; border-color: #1E40AF;">Technology</span>
                                <span class="px-3 py-1 text-sm rounded-full border" style="background-color: #EFF6FF; color: #1E40AF; border-color: #1E40AF;">Dar es Salaam</span>
                                <span class="px-3 py-1 text-sm rounded-full border" style="background-color: #EFF6FF; color: #1E40AF; border-color: #1E40AF;">Government</span>
                            </div>
                            
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-4 text-sm text-gray-600">
                                    <span>Budget: 800M - 1.2B TZS</span>
                                    <span class="px-2 py-1 text-xs font-medium text-white bg-red-600 rounded">Deadline: 25 Oct 2025</span>
                                </div>
                                <a href="#" class="text-sm font-medium hover:underline" style="color: #1E40AF;">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Tenders Section -->
        <div class="mt-12 md:mt-16">
            <div class="max-w-3xl mx-auto">
                <h2 class="text-2xl font-semibold mb-6 text-center" style="color: #1E40AF;">Recent Tenders</h2>
                
                <div class="space-y-4">
                    <!-- School Furniture Supply -->
                    <div class="bg-white border rounded-lg p-4 md:p-5 transition-all duration-200 hover:shadow-md" style="border-color: #1E40AF;">
                        <div class="flex flex-col sm:flex-row sm:justify-between sm:items-start gap-3">
                            <div class="flex-1">
                                <h3 class="text-lg font-semibold text-gray-900 mb-2">School Furniture Supply</h3>
                                <p class="text-gray-600 text-sm mb-3 leading-relaxed">Supply of desks and chairs for 15 primary schools in Mwanza Region.</p>
                                <span class="inline-block px-3 py-1 text-xs font-medium text-white rounded" style="background-color: #1E40AF;">Education</span>
                            </div>
                            <div class="text-sm font-medium text-red-600 sm:ml-4 sm:text-right">
                                Closes in 5 days
                            </div>
                        </div>
                    </div>

                    <!-- Agricultural Equipment -->
                    <div class="bg-white border rounded-lg p-4 md:p-5 transition-all duration-200 hover:shadow-md" style="border-color: #1E40AF;">
                        <div class="flex flex-col sm:flex-row sm:justify-between sm:items-start gap-3">
                            <div class="flex-1">
                                <h3 class="text-lg font-semibold text-gray-900 mb-2">Agricultural Equipment</h3>
                                <p class="text-gray-600 text-sm mb-3 leading-relaxed">Supply of irrigation equipment for farmers in Morogoro Region.</p>
                                <span class="inline-block px-3 py-1 text-xs font-medium text-white rounded" style="background-color: #1E40AF;">Agriculture</span>
                            </div>
                            <div class="text-sm font-medium text-red-600 sm:ml-4 sm:text-right">
                                Closes in 7 days
                            </div>
                        </div>
                    </div>

                    <!-- Office Renovation Services -->
                    <div class="bg-white border rounded-lg p-4 md:p-5 transition-all duration-200 hover:shadow-md" style="border-color: #1E40AF;">
                        <div class="flex flex-col sm:flex-row sm:justify-between sm:items-start gap-3">
                            <div class="flex-1">
                                <h3 class="text-lg font-semibold text-gray-900 mb-2">Office Renovation Services</h3>
                                <p class="text-gray-600 text-sm mb-3 leading-relaxed">Renovation of regional offices for TANESCO in Dodoma.</p>
                                <span class="inline-block px-3 py-1 text-xs font-medium text-white rounded" style="background-color: #1E40AF;">Construction</span>
                            </div>
                            <div class="text-sm font-medium text-red-600 sm:ml-4 sm:text-right">
                                Closes in 9 days
                            </div>
                        </div>
                    </div>

                    <!-- Security Services -->
                    <div class="bg-white border rounded-lg p-4 md:p-5 transition-all duration-200 hover:shadow-md" style="border-color: #1E40AF;">
                        <div class="flex flex-col sm:flex-row sm:justify-between sm:items-start gap-3">
                            <div class="flex-1">
                                <h3 class="text-lg font-semibold text-gray-900 mb-2">Security Services</h3>
                                <p class="text-gray-600 text-sm mb-3 leading-relaxed">Provision of security services for bank branches in Dar es Salaam.</p>
                                <span class="inline-block px-3 py-1 text-xs font-medium text-white rounded" style="background-color: #1E40AF;">Services</span>
                            </div>
                            <div class="text-sm font-medium text-red-600 sm:ml-4 sm:text-right">
                                Closes in 15 days
                            </div>
                        </div>
                    </div>

                    <!-- Medical Supplies -->
                    <div class="bg-white border rounded-lg p-4 md:p-5 transition-all duration-200 hover:shadow-md" style="border-color: #1E40AF;">
                        <div class="flex flex-col sm:flex-row sm:justify-between sm:items-start gap-3">
                            <div class="flex-1">
                                <h3 class="text-lg font-semibold text-gray-900 mb-2">Medical Supplies</h3>
                                <p class="text-gray-600 text-sm mb-3 leading-relaxed">Supply of essential medicines for rural health centers in Mbeya Region.</p>
                                <span class="inline-block px-3 py-1 text-xs font-medium text-white rounded" style="background-color: #1E40AF;">Healthcare</span>
                            </div>
                            <div class="text-sm font-medium text-red-600 sm:ml-4 sm:text-right">
                                Closes in 12 days
                            </div>
                        </div>
                    </div>
                </div>

                <!-- View All Link -->
                <div class="text-center mt-8">
                    <a href="#" class="inline-block text-base font-medium hover:underline transition-colors" style="color: #1E40AF;">
                        View All Recent Tenders →
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
