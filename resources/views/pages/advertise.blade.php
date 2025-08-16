@extends('layouts.main')

@section('content')
<!-- Hero Section -->
<div class="bg-white py-20">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h1 class="text-3xl md:text-4xl font-bold mb-6" style="color: #1E40AF;">
                Advertise Your Jobs
            </h1>
            <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto">
                Reach the right candidates with our targeted advertising solutions
            </p>
        </div>
    </div>
</div>

<!-- Stats Section -->
<div class="py-16" style="background-color: #EFF6FF;">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center">
            <div>
                <div class="text-2xl md:text-3xl font-bold mb-2" style="color: #1E40AF;">10,000+</div>
                <div class="text-sm md:text-base text-gray-600">Active Job Seekers</div>
            </div>
            <div>
                <div class="text-2xl md:text-3xl font-bold mb-2" style="color: #1E40AF;">95%</div>
                <div class="text-sm md:text-base text-gray-600">Client Satisfaction</div>
            </div>
            <div>
                <div class="text-2xl md:text-3xl font-bold mb-2" style="color: #1E40AF;">24hrs</div>
                <div class="text-sm md:text-base text-gray-600">Average Response Time</div>
            </div>
            <div>
                <div class="text-2xl md:text-3xl font-bold mb-2" style="color: #1E40AF;">500+</div>
                <div class="text-sm md:text-base text-gray-600">Successful Placements</div>
            </div>
        </div>
    </div>
</div>

<!-- Why Choose Us Section -->
<div class="bg-white py-16">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold mb-4" style="color: #1E40AF;">
                Why Advertise With Us?
            </h2>
            <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto">
                Join thousands of successful companies who trust us to find their next great hire
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
            <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm hover:shadow-lg transition-all duration-300">
                <div class="w-12 h-12 rounded-lg flex items-center justify-center mb-4 mx-auto" style="background-color: #EFF6FF;">
                    <i class="fas fa-users text-xl" style="color: #1E40AF;"></i>
                </div>
                <h3 class="text-lg md:text-xl font-semibold text-gray-900 mb-3 text-center">Targeted Audience</h3>
                <p class="text-sm md:text-base text-gray-600 text-center leading-relaxed">
                    Reach job seekers and businesses specifically interested in your industry and region
                </p>
            </div>
            
            <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm hover:shadow-lg transition-all duration-300">
                <div class="w-12 h-12 rounded-lg flex items-center justify-center mb-4 mx-auto" style="background-color: #EFF6FF;">
                    <i class="fas fa-chart-line text-xl" style="color: #1E40AF;"></i>
                </div>
                <h3 class="text-lg md:text-xl font-semibold text-gray-900 mb-3 text-center">Maximum Visibility</h3>
                <p class="text-sm md:text-base text-gray-600 text-center leading-relaxed">
                    Get premium placement across our platform with guaranteed visibility
                </p>
            </div>
            
            <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm hover:shadow-lg transition-all duration-300">
                <div class="w-12 h-12 rounded-lg flex items-center justify-center mb-4 mx-auto" style="background-color: #EFF6FF;">
                    <i class="fas fa-handshake text-xl" style="color: #1E40AF;"></i>
                </div>
                <h3 class="text-lg md:text-xl font-semibold text-gray-900 mb-3 text-center">Dedicated Support</h3>
                <p class="text-sm md:text-base text-gray-600 text-center leading-relaxed">
                    Our expert team provides personalized support throughout your campaign
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Pricing Section -->
<div class="py-16" style="background-color: #EFF6FF;">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-2xl md:text-3xl font-bold mb-4" style="color: #1E40AF;">
                Choose Your Perfect Plan
            </h2>
            <p class="text-lg md:text-xl text-gray-600">
                Transparent pricing with no hidden fees
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
            <!-- Standard Plan -->
            <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm hover:shadow-lg transition-all duration-300">
                <div class="text-center mb-6">
                    <h3 class="text-lg md:text-xl font-bold text-gray-900 mb-2">Standard</h3>
                    <div class="mb-4">
                        <span class="text-2xl md:text-3xl font-bold" style="color: #1E40AF;">$199</span>
                        <span class="text-sm md:text-base text-gray-600">/month</span>
                    </div>
                    <p class="text-sm md:text-base text-gray-600">Perfect for small businesses</p>
                </div>
                
                <ul class="space-y-3 mb-6">
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span class="text-sm md:text-base">10 Featured Job Postings</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span class="text-sm md:text-base">7 Days Homepage Visibility</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span class="text-sm md:text-base">Basic Analytics Dashboard</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span class="text-sm md:text-base">Email Support</span>
                    </li>
                </ul>
                
                <button class="w-full py-3 px-4 rounded-lg font-semibold text-sm md:text-base text-white transition-all duration-300" style="background-color: #1E40AF;">
                    Select Standard
                </button>
            </div>
            
            <!-- Premium Plan -->
            <div class="bg-white border-2 rounded-xl p-6 shadow-lg relative" style="border-color: #1E40AF; transform: scale(1.05);">
                <div class="absolute -top-3 left-1/2 transform -translate-x-1/2">
                    <span class="px-3 py-1 text-xs font-bold text-white rounded-full" style="background-color: #FACC15; color: #1E40AF;">
                        MOST POPULAR
                    </span>
                </div>
                
                <div class="text-center mb-6">
                    <h3 class="text-lg md:text-xl font-bold text-gray-900 mb-2">Premium</h3>
                    <div class="mb-4">
                        <span class="text-2xl md:text-3xl font-bold" style="color: #1E40AF;">$349</span>
                        <span class="text-sm md:text-base text-gray-600">/month</span>
                    </div>
                    <p class="text-sm md:text-base text-gray-600">Best for growing companies</p>
                </div>
                
                <ul class="space-y-3 mb-6">
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span class="text-sm md:text-base">25 Featured Job Postings</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span class="text-sm md:text-base">30 Days Homepage Visibility</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span class="text-sm md:text-base">Advanced Analytics Dashboard</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span class="text-sm md:text-base">Priority Support</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span class="text-sm md:text-base">Company Spotlight</span>
                    </li>
                </ul>
                
                <button class="w-full py-3 px-4 rounded-lg font-semibold text-sm md:text-base text-white transition-all duration-300" style="background-color: #1E40AF;">
                    Select Premium
                </button>
            </div>
            
            <!-- Enterprise Plan -->
            <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm hover:shadow-lg transition-all duration-300">
                <div class="text-center mb-6">
                    <h3 class="text-lg md:text-xl font-bold text-gray-900 mb-2">Enterprise</h3>
                    <div class="mb-4">
                        <span class="text-2xl md:text-3xl font-bold" style="color: #1E40AF;">$699</span>
                        <span class="text-sm md:text-base text-gray-600">/month</span>
                    </div>
                    <p class="text-sm md:text-base text-gray-600">For large organizations</p>
                </div>
                
                <ul class="space-y-3 mb-6">
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span class="text-sm md:text-base">Unlimited Job Postings</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span class="text-sm md:text-base">90 Days Homepage Visibility</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span class="text-sm md:text-base">Premium Analytics & Reporting</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span class="text-sm md:text-base">Dedicated Account Manager</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span class="text-sm md:text-base">Full Company Spotlight</span>
                    </li>
                </ul>
                
                <button class="w-full py-3 px-4 rounded-lg font-semibold text-sm md:text-base text-white transition-all duration-300" style="background-color: #1E40AF;">
                    Select Enterprise
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Ad Placement Options -->
<div class="bg-white py-16">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold mb-4" style="color: #1E40AF;">
                Ad Placement Options
            </h2>
            <p class="text-lg md:text-xl text-gray-600">
                Strategic placement for maximum impact
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-5xl mx-auto">
            <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm hover:shadow-lg transition-all duration-300">
                <div class="flex items-center mb-4">
                    <div class="w-10 h-10 rounded-lg flex items-center justify-center mr-3" style="background-color: #EFF6FF;">
                        <i class="fas fa-home" style="color: #1E40AF;"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-semibold text-gray-900">Homepage Banner</h3>
                </div>
                <p class="text-sm md:text-base text-gray-600 mb-4 leading-relaxed">Premium visibility on our most visited page with guaranteed top placement.</p>
                <div class="flex justify-between items-center">
                    <span class="text-lg font-semibold" style="color: #1E40AF;">From $299/week</span>
                    <button class="text-sm md:text-base text-blue-600 hover:underline font-medium">Learn More</button>
                </div>
            </div>
            
            <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm hover:shadow-lg transition-all duration-300">
                <div class="flex items-center mb-4">
                    <div class="w-10 h-10 rounded-lg flex items-center justify-center mr-3" style="background-color: #EFF6FF;">
                        <i class="fas fa-star" style="color: #1E40AF;"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-semibold text-gray-900">Featured Listings</h3>
                </div>
                <p class="text-sm md:text-base text-gray-600 mb-4 leading-relaxed">Highlight your jobs at the top of search results for maximum visibility.</p>
                <div class="flex justify-between items-center">
                    <span class="text-lg font-semibold" style="color: #1E40AF;">From $49/listing</span>
                    <button class="text-sm md:text-base text-blue-600 hover:underline font-medium">Learn More</button>
                </div>
            </div>
            
            <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm hover:shadow-lg transition-all duration-300">
                <div class="flex items-center mb-4">
                    <div class="w-10 h-10 rounded-lg flex items-center justify-center mr-3" style="background-color: #EFF6FF;">
                        <i class="fas fa-envelope" style="color: #1E40AF;"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-semibold text-gray-900">Email Newsletter</h3>
                </div>
                <p class="text-sm md:text-base text-gray-600 mb-4 leading-relaxed">Sponsored content in our weekly newsletters sent to thousands of job seekers.</p>
                <div class="flex justify-between items-center">
                    <span class="text-lg font-semibold" style="color: #1E40AF;">From $199/newsletter</span>
                    <button class="text-sm md:text-base text-blue-600 hover:underline font-medium">Learn More</button>
                </div>
            </div>
            
            <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm hover:shadow-lg transition-all duration-300">
                <div class="flex items-center mb-4">
                    <div class="w-10 h-10 rounded-lg flex items-center justify-center mr-3" style="background-color: #EFF6FF;">
                        <i class="fas fa-building" style="color: #1E40AF;"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-semibold text-gray-900">Company Spotlight</h3>
                </div>
                <p class="text-sm md:text-base text-gray-600 mb-4 leading-relaxed">Featured company profile showcasing your brand and all open positions.</p>
                <div class="flex justify-between items-center">
                    <span class="text-lg font-semibold" style="color: #1E40AF;">From $399/month</span>
                    <button class="text-sm md:text-base text-blue-600 hover:underline font-medium">Learn More</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Success Stories -->
<div class="py-16" style="background-color: #EFF6FF;">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold mb-4" style="color: #1E40AF;">
                Success Stories
            </h2>
            <p class="text-lg md:text-xl text-gray-600">
                See how companies like yours are succeeding
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl mx-auto">
            <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm">
                <div class="flex items-center mb-4">
                    <div class="w-10 h-10 rounded-full flex items-center justify-center mr-3" style="background-color: #1E40AF;">
                        <span class="text-white font-bold text-sm">A</span>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-900 text-sm">Acme Corporation</h4>
                        <p class="text-xs text-gray-600">Technology Sector</p>
                    </div>
                </div>
                <p class="text-sm md:text-base text-gray-700 mb-4 leading-relaxed">
                    "Our featured job listings received over 200 qualified applications in just one week. Excellent ROI!"
                </p>
                <div class="flex items-center" style="color: #FACC15;">
                    <i class="fas fa-star text-sm"></i>
                    <i class="fas fa-star text-sm"></i>
                    <i class="fas fa-star text-sm"></i>
                    <i class="fas fa-star text-sm"></i>
                    <i class="fas fa-star text-sm"></i>
                </div>
            </div>
            
            <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm">
                <div class="flex items-center mb-4">
                    <div class="w-10 h-10 rounded-full flex items-center justify-center mr-3" style="background-color: #1E40AF;">
                        <span class="text-white font-bold text-sm">G</span>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-900 text-sm">Global Enterprises</h4>
                        <p class="text-xs text-gray-600">Finance Sector</p>
                    </div>
                </div>
                <p class="text-sm md:text-base text-gray-700 mb-4 leading-relaxed">
                    "The Company Spotlight feature transformed our recruitment process. 70% increase in quality applications."
                </p>
                <div class="flex items-center" style="color: #FACC15;">
                    <i class="fas fa-star text-sm"></i>
                    <i class="fas fa-star text-sm"></i>
                    <i class="fas fa-star text-sm"></i>
                    <i class="fas fa-star text-sm"></i>
                    <i class="fas fa-star-half-alt text-sm"></i>
                </div>
            </div>
            
            <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm">
                <div class="flex items-center mb-4">
                    <div class="w-10 h-10 rounded-full flex items-center justify-center mr-3" style="background-color: #1E40AF;">
                        <span class="text-white font-bold text-sm">N</span>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-900 text-sm">NextGen Solutions</h4>
                        <p class="text-xs text-gray-600">Healthcare Sector</p>
                    </div>
                </div>
                <p class="text-sm md:text-base text-gray-700 mb-4 leading-relaxed">
                    "The targeted banner ads helped us reach specialized healthcare professionals. Campaign exceeded expectations."
                </p>
                <div class="flex items-center" style="color: #FACC15;">
                    <i class="fas fa-star text-sm"></i>
                    <i class="fas fa-star text-sm"></i>
                    <i class="fas fa-star text-sm"></i>
                    <i class="fas fa-star text-sm"></i>
                    <i class="fas fa-star text-sm"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact Form -->
<div class="bg-white py-16">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white border border-gray-200 rounded-xl shadow-sm p-8">
            <div class="text-center mb-8">
                <h2 class="text-2xl md:text-3xl font-bold mb-4" style="color: #1E40AF;">
                    Ready to Get Started?
                </h2>
                <p class="text-lg md:text-xl text-gray-600">
                    Fill out the form below and our team will contact you within 24 hours
                </p>
            </div>
            
            <form class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-gray-700 font-medium mb-2 text-sm md:text-base">Full Name</label>
                        <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium mb-2 text-sm md:text-base">Email Address</label>
                        <input type="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-gray-700 font-medium mb-2 text-sm md:text-base">Company Name</label>
                        <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium mb-2 text-sm md:text-base">Phone Number</label>
                        <input type="tel" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>
                </div>
                
                <div>
                    <label class="block text-gray-700 font-medium mb-2 text-sm md:text-base">I'm interested in</label>
                    <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <option value="">Select an option</option>
                        <option value="featured-jobs">Featured Job Listings</option>
                        <option value="homepage-banner">Homepage Banner Ads</option>
                        <option value="company-spotlight">Company Spotlight</option>
                        <option value="email-newsletter">Email Newsletter</option>
                        <option value="custom-package">Custom Advertising Package</option>
                    </select>
                </div>
                
                <div>
                    <label class="block text-gray-700 font-medium mb-2 text-sm md:text-base">Message</label>
                    <textarea rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Tell us about your hiring needs..."></textarea>
                </div>
                
                <div class="flex items-center">
                    <input type="checkbox" id="terms" class="mr-3 h-4 w-4" style="accent-color: #1E40AF;">
                    <label for="terms" class="text-sm md:text-base text-gray-700">I agree to the terms and conditions</label>
                </div>
                
                <button type="submit" class="w-full py-3 px-6 rounded-lg font-semibold text-sm md:text-base text-white shadow-lg" style="background-color: #1E40AF;">
                    Submit Request
                </button>
            </form>
        </div>
    </div>
</div>

<!-- FAQ Section -->
<div class="py-16" style="background-color: #EFF6FF;">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold mb-4" style="color: #1E40AF;">
                Frequently Asked Questions
            </h2>
            <p class="text-lg md:text-xl text-gray-600">
                Everything you need to know about our advertising solutions
            </p>
        </div>
        
        <div class="space-y-4">
            <div class="bg-white border border-gray-200 rounded-xl p-6">
                <h3 class="text-base md:text-lg font-semibold text-gray-900 mb-2">How soon will my ad go live after purchase?</h3>
                <p class="text-sm md:text-base text-gray-600">Most ads go live within 24 hours after approval. Featured listings typically go live within 2-4 business hours during weekdays.</p>
            </div>
            
            <div class="bg-white border border-gray-200 rounded-xl p-6">
                <h3 class="text-base md:text-lg font-semibold text-gray-900 mb-2">Can I target my ads to specific regions?</h3>
                <p class="text-sm md:text-base text-gray-600">Yes, all our advertising packages include targeting options. You can target by location, job category, experience level, and more.</p>
            </div>
            
            <div class="bg-white border border-gray-200 rounded-xl p-6">
                <h3 class="text-base md:text-lg font-semibold text-gray-900 mb-2">Do you offer discounts for long-term commitments?</h3>
                <p class="text-sm md:text-base text-gray-600">Yes, we offer significant discounts for quarterly, bi-annual, and annual commitments. Contact our sales team for custom pricing.</p>
            </div>
            
            <div class="bg-white border border-gray-200 rounded-xl p-6">
                <h3 class="text-base md:text-lg font-semibold text-gray-900 mb-2">What reporting and analytics do you provide?</h3>
                <p class="text-sm md:text-base text-gray-600">All packages include detailed analytics including impressions, clicks, application rates, and comparison metrics.</p>
            </div>
        </div>
    </div>
</div>

<!-- Final CTA -->
<div class="bg-white py-16">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-2xl md:text-3xl font-bold mb-4" style="color: #1E40AF;">
            Ready to Transform Your Recruitment?
        </h2>
        <p class="text-lg md:text-xl text-gray-600 mb-8 max-w-3xl mx-auto">
            Join hundreds of successful employers who are finding top talent through our platform
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <button class="px-8 py-4 rounded-lg font-semibold text-sm md:text-base text-white shadow-lg" style="background-color: #1E40AF;">
                Start Advertising Today
            </button>
            <button class="px-8 py-4 rounded-lg font-semibold text-sm md:text-base border border-gray-300 text-gray-700 hover:bg-gray-50">
                Schedule a Demo
            </button>
        </div>
    </div>
</div>
@endsection