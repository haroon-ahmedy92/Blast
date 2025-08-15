@extends('layouts.main')

@section('content')
<!-- Post a New Job or Tender Section -->
<div class="py-8 md:py-12">
    <div class="max-w-4xl mx-auto px-4 md:px-6">
        <!-- Main Header -->
        <div class="text-center mb-8 md:mb-12">
            <h1 class="text-3xl md:text-4xl font-bold mb-4" style="color: #1E40AF;">
                Post a New Job or Tender
            </h1>
            
            <!-- Tagline -->
            <p class="text-lg md:text-xl text-gray-700 mb-4">
                The more the information, the better your life becomes.
            </p>
            
            <!-- Description -->
            <p class="text-sm md:text-base text-gray-600 max-w-2xl mx-auto leading-relaxed">
                Create a posting and get applications from talented individuals. Your job or tender will be visible to thousands of people.
            </p>
        </div>

        <!-- Section Question -->
        <div class="text-center mb-8 md:mb-10">
            <h2 class="text-xl md:text-2xl font-semibold" style="color: #166534;">
                What would you like to post?
            </h2>
        </div>
        
        <!-- Posting Options -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8 max-w-3xl mx-auto">
            <!-- Job Posting Option -->
            <div class="posting-option bg-white border-2 border-gray-200 rounded-xl p-6 md:p-8 transition-all duration-300 cursor-pointer hover:border-blue-700 hover:shadow-lg transform hover:-translate-y-1" onclick="handleJobPosting()">
                <div class="posting-option-icon w-12 h-12 rounded-lg flex items-center justify-center mb-4" style="background-color: #EFF6FF;">
                    <i class="fas fa-briefcase text-2xl" style="color: #1E40AF;"></i>
                </div>
                <h3 class="text-lg md:text-xl font-semibold text-gray-900 mb-2">Job Posting</h3>
                <p class="text-sm md:text-base text-gray-600 leading-relaxed">Post a job opportunity for potential candidates</p>
            </div>
            
            <!-- Tender Announcement Option -->
            <div class="posting-option bg-white border-2 border-gray-200 rounded-xl p-6 md:p-8 transition-all duration-300 cursor-pointer hover:border-blue-700 hover:shadow-lg transform hover:-translate-y-1" onclick="handleTenderAnnouncement()">
                <div class="posting-option-icon w-12 h-12 rounded-lg flex items-center justify-center mb-4" style="background-color: #EFF6FF;">
                    <i class="fas fa-file-alt text-2xl" style="color: #1E40AF;"></i>
                </div>
                <h3 class="text-lg md:text-xl font-semibold text-gray-900 mb-2">Tender Announcement</h3>
                <p class="text-sm md:text-base text-gray-600 leading-relaxed">Post a tender for service or product procurement</p>
            </div>
        </div>

        <!-- Additional Information Section -->
        <div class="mt-12 md:mt-16">
            <div class="bg-white rounded-xl p-6 md:p-8 border border-gray-200">
                <h3 class="text-xl font-semibold text-gray-900 mb-4 text-center">Why Choose Our Platform?</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">
                    <div class="text-center">
                        <div class="w-12 h-12 rounded-lg mx-auto mb-3 flex items-center justify-center" style="background-color: #EFF6FF;">
                            <i class="fas fa-users text-xl" style="color: #1E40AF;"></i>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Wide Reach</h4>
                        <p class="text-sm text-gray-600">Access thousands of qualified candidates and suppliers across Tanzania</p>
                    </div>
                    
                    <div class="text-center">
                        <div class="w-12 h-12 rounded-lg mx-auto mb-3 flex items-center justify-center" style="background-color: #EFF6FF;">
                            <i class="fas fa-clock text-xl" style="color: #1E40AF;"></i>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Quick Setup</h4>
                        <p class="text-sm text-gray-600">Create and publish your posting in just a few simple steps</p>
                    </div>
                    
                    <div class="text-center">
                        <div class="w-12 h-12 rounded-lg mx-auto mb-3 flex items-center justify-center" style="background-color: #EFF6FF;">
                            <i class="fas fa-shield-alt text-xl" style="color: #1E40AF;"></i>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Secure Process</h4>
                        <p class="text-sm text-gray-600">All postings are verified and managed through our secure platform</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function handleJobPosting() {
        // Handle job posting click
        console.log('Job Posting selected');
        // Redirect to job posting form
        window.location.href = '{{ route("job-form") }}';
    }
    
    function handleTenderAnnouncement() {
        // Handle tender announcement click
        console.log('Tender Announcement selected');
        // Add navigation to tender announcement form
        alert('Redirecting to Tender Announcement Form...');
    }
</script>
@endsection
