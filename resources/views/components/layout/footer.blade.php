<footer class="bg-gray-800 text-white py-12 mt-16">
    <div class="container">
        <div class="grid md:grid-cols-4 gap-8">
            <div>
                <h3 class="text-xl font-bold mb-4" style="color: #FACC15;">Project X</h3>
                <p class="text-gray-300 mb-4">
                    Connecting Tanzania with opportunities across Africa and beyond.
                </p>
                <div class="flex gap-3">
                    <a href="#" class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center hover:bg-blue-500 transition-colors">
                        <i class="fab fa-facebook-f text-sm"></i>
                    </a>
                    <a href="#" class="w-8 h-8 bg-blue-400 rounded-full flex items-center justify-center hover:bg-blue-300 transition-colors">
                        <i class="fab fa-twitter text-sm"></i>
                    </a>
                    <a href="#" class="w-8 h-8 bg-blue-700 rounded-full flex items-center justify-center hover:bg-blue-600 transition-colors">
                        <i class="fab fa-linkedin-in text-sm"></i>
                    </a>
                </div>
            </div>
            
            <div>
                <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                <ul class="space-y-2">
                    <li><a href="{{ route('home') }}" class="text-gray-300 hover:text-white transition-colors">Home</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Jobs</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Tenders</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white transition-colors">About</a></li>
                </ul>
            </div>
            
            <div>
                <h4 class="text-lg font-semibold mb-4">Categories</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Government Jobs</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Private Sector</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white transition-colors">NGO Opportunities</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Scholarships</a></li>
                </ul>
            </div>
            
            <div>
                <h4 class="text-lg font-semibold mb-4">Contact Info</h4>
                <div class="space-y-2 text-gray-300">
                    <p><i class="fas fa-envelope mr-2"></i> info@projectx.co.tz</p>
                    <p><i class="fas fa-phone mr-2"></i> +255 123 456 789</p>
                    <p><i class="fas fa-map-marker-alt mr-2"></i> Dar es Salaam, Tanzania</p>
                </div>
            </div>
        </div>
        
        <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-300">
            <p>&copy; {{ date('Y') }} Project X. All rights reserved. | Made with ❤️ in Tanzania</p>
        </div>
    </div>
</footer>
