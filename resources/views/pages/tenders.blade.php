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

    </div>
</div>
@endsection
