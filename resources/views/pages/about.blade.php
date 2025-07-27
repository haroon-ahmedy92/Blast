@extends('layouts.main')

@section('content')
<div class="min-h-screen bg-gray-50 py-12">
    <div class="max-w-6xl mx-auto px-4">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-blue-800 mb-4" style="color: #1E40AF;">
                About Project X
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Connecting Tanzania with opportunities across Africa and beyond.
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h2 class="text-2xl font-bold text-blue-800 mb-4" style="color: #1E40AF;">Our Mission</h2>
                <p class="text-gray-700 leading-relaxed">
                    To provide comprehensive access to job opportunities, tenders, scholarships, 
                    and programs that empower individuals and organizations across Tanzania and Africa.
                </p>
            </div>
            
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h2 class="text-2xl font-bold text-blue-800 mb-4" style="color: #1E40AF;">Our Vision</h2>
                <p class="text-gray-700 leading-relaxed">
                    To be the leading platform connecting African talent with global opportunities, 
                    fostering growth and development across the continent.
                </p>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-lg p-8">
            <h2 class="text-3xl font-bold text-blue-800 mb-6 text-center" style="color: #1E40AF;">
                What We Offer
            </h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4" style="background-color: #EFF6FF;">
                        <i class="fas fa-briefcase text-2xl text-blue-800" style="color: #1E40AF;"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Job Opportunities</h3>
                    <p class="text-gray-600">Latest job openings across various sectors in Tanzania and beyond.</p>
                </div>
                
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4" style="background-color: #EFF6FF;">
                        <i class="fas fa-file-contract text-2xl text-blue-800" style="color: #1E40AF;"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Tenders</h3>
                    <p class="text-gray-600">Government and private sector procurement opportunities.</p>
                </div>
                
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4" style="background-color: #EFF6FF;">
                        <i class="fas fa-graduation-cap text-2xl text-blue-800" style="color: #1E40AF;"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Scholarships</h3>
                    <p class="text-gray-600">Educational opportunities and funding programs for students.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
