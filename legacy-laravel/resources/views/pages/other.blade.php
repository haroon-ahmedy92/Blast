@extends('layouts.main')

@section('content')
<style>
    :root {
        --primary-core: #1E40AF;
        --secondary-core: #EFF6FF;
        --accent: #FACC15;
        --secondary-accent: #FEF9C3;
        --green-accent: #166534;
        --secondary-green: #DCFCE7;
    }
    
    .other-card {
        border-radius: 12px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s, box-shadow 0.3s;
    }
    .other-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
    }
    .blue-header {
        background-color: var(--primary-core);
        color: white;
        border-radius: 12px 12px 0 0;
        padding: 16px 24px;
    }
    .green-header {
        background-color: var(--green-accent);
        color: white;
        border-radius: 12px 12px 0 0;
        padding: 16px 24px;
    }
    .yellow-header {
        background-color: var(--accent);
        color: var(--primary-core);
        border-radius: 12px 12px 0 0;
        padding: 16px 24px;
        font-weight: 600;
    }
    .resource-icon {
        width: 56px;
        height: 56px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background-color: var(--secondary-core);
        color: var(--primary-core);
    }
    .btn-primary {
        background-color: var(--primary-core);
        color: white;
        padding: 12px 20px;
        border-radius: 8px;
        transition: all 0.3s;
        font-weight: 600;
        font-size: 14px;
        text-decoration: none;
        display: inline-block;
    }
    .btn-primary:hover {
        background-color: #1d4ed8;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(30, 64, 175, 0.3);
        color: white;
        text-decoration: none;
    }
    .btn-success {
        background-color: var(--green-accent);
        color: white;
        padding: 12px 20px;
        border-radius: 8px;
        transition: all 0.3s;
        font-weight: 600;
        font-size: 14px;
        text-decoration: none;
        display: inline-block;
    }
    .btn-success:hover {
        background-color: #15803d;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(22, 101, 52, 0.3);
        color: white;
        text-decoration: none;
    }
    .btn-accent {
        background-color: var(--accent);
        color: var(--primary-core);
        padding: 12px 20px;
        border-radius: 8px;
        transition: all 0.3s;
        font-weight: 600;
        font-size: 14px;
        text-decoration: none;
        display: inline-block;
    }
    .btn-accent:hover {
        background-color: #f59e0b;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(245, 204, 21, 0.3);
        color: var(--primary-core);
        text-decoration: none;
    }
    
    .other-h1 { font-size: 2.5rem; font-weight: 700; }
    .other-h2 { font-size: 2rem; font-weight: 600; }
    .other-h3 { font-size: 1.5rem; font-weight: 600; }
    .other-h4 { font-size: 1.25rem; font-weight: 600; }
    .other-h5 { font-size: 1.1rem; font-weight: 500; }
    
    .text-primary { color: var(--primary-core); }
    .text-accent { color: var(--accent); }
    .text-green { color: var(--green-accent); }
    .bg-primary { background-color: var(--primary-core); }
    .bg-secondary { background-color: var(--secondary-core); }
    .bg-accent { background-color: var(--accent); }
    .bg-green { background-color: var(--green-accent); }
    .bg-secondary-green { background-color: var(--secondary-green); }
    
    .gradient-primary {
        background: linear-gradient(135deg, var(--primary-core) 0%, #3b82f6 100%);
    }
    .gradient-accent {
        background: linear-gradient(135deg, var(--accent) 0%, #f59e0b 100%);
    }
    
    .other-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 1rem;
    }
    
    @media (min-width: 768px) {
        .other-container {
            padding: 0 2rem;
        }
    }
</style>

<!-- Hero Section -->
<section class="gradient-primary py-16">
    <div class="other-container text-center">
        <h1 class="other-h1 text-white mb-4">Other Resources</h1>
        <p class="text-white text-lg mb-8 max-w-3xl mx-auto">
            Explore additional tools, resources, and opportunities to boost your career 
            and professional development in Tanzania
        </p>
        <div class="flex justify-center space-x-4 flex-wrap gap-2">
            <a href="#career-resources" class="bg-white text-primary px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                <i class="fas fa-briefcase mr-2"></i>Career Resources
            </a>
            <a href="#educational" class="bg-accent text-primary px-6 py-3 rounded-lg font-semibold hover:bg-yellow-400 transition-colors">
                <i class="fas fa-graduation-cap mr-2"></i>Education
            </a>
        </div>
    </div>
</section>

<!-- Career Resources Section -->
<section id="career-resources" class="py-16 bg-white">
    <div class="other-container">
        <div class="text-center mb-12">
            <h2 class="other-h2 text-primary mb-4">Career Development Resources</h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                Professional tools and guides to accelerate your career growth in Tanzania's job market
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- CV Builder -->
            <div class="other-card bg-white overflow-hidden">
                <div class="blue-header">
                    <div class="flex items-center justify-between">
                        <h4 class="other-h4">CV Builder</h4>
                        <i class="fas fa-file-alt text-2xl"></i>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 mb-4">Create professional CVs with our advanced builder tool. Choose from multiple templates.</p>
                    <ul class="text-sm text-gray-600 mb-6 space-y-2">
                        <li><i class="fas fa-check text-green mr-2"></i>ATS-Friendly Templates</li>
                        <li><i class="fas fa-check text-green mr-2"></i>Multiple Formats</li>
                        <li><i class="fas fa-check text-green mr-2"></i>Export to PDF</li>
                    </ul>
                    <a href="#" class="btn-primary w-full text-center">Build Your CV</a>
                </div>
            </div>

            <!-- Interview Prep -->
            <div class="other-card bg-white overflow-hidden">
                <div class="green-header">
                    <div class="flex items-center justify-between">
                        <h4 class="other-h4">Interview Preparation</h4>
                        <i class="fas fa-comments text-2xl"></i>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 mb-4">Master your interviews with our comprehensive preparation resources.</p>
                    <ul class="text-sm text-gray-600 mb-6 space-y-2">
                        <li><i class="fas fa-check text-green mr-2"></i>Common Questions</li>
                        <li><i class="fas fa-check text-green mr-2"></i>Video Tutorials</li>
                        <li><i class="fas fa-check text-green mr-2"></i>Practice Sessions</li>
                    </ul>
                    <a href="#" class="btn-success w-full text-center">Start Preparing</a>
                </div>
            </div>

            <!-- Salary Guide -->
            <div class="other-card bg-white overflow-hidden">
                <div class="yellow-header">
                    <div class="flex items-center justify-between">
                        <h4 class="other-h4">Salary Guide</h4>
                        <i class="fas fa-chart-bar text-2xl"></i>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 mb-4">Get insights into salary ranges across different industries in Tanzania.</p>
                    <ul class="text-sm text-gray-600 mb-6 space-y-2">
                        <li><i class="fas fa-check text-green mr-2"></i>Industry Averages</li>
                        <li><i class="fas fa-check text-green mr-2"></i>Experience Levels</li>
                        <li><i class="fas fa-check text-green mr-2"></i>Regional Data</li>
                    </ul>
                    <a href="#" class="btn-accent w-full text-center">View Salaries</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Educational Opportunities Section -->
<section id="educational" class="py-16 bg-secondary">
    <div class="other-container">
        <div class="text-center mb-12">
            <h2 class="other-h2 text-primary mb-4">Educational Opportunities</h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                Enhance your skills with courses, certifications, and learning resources
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Online Courses -->
            <div class="other-card bg-white overflow-hidden">
                <div class="green-header">
                    <div class="flex items-center justify-between">
                        <h4 class="other-h4">Online Courses</h4>
                        <i class="fas fa-laptop text-2xl"></i>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 mb-4">Access curated online courses from top platforms to upskill in your field.</p>
                    <div class="grid grid-cols-2 gap-4 mb-6">
                        <div class="bg-secondary-green p-3 rounded-lg text-center">
                            <i class="fas fa-code text-green text-xl mb-2 block"></i>
                            <div class="text-sm font-medium">Tech Skills</div>
                        </div>
                        <div class="bg-secondary-green p-3 rounded-lg text-center">
                            <i class="fas fa-chart-line text-green text-xl mb-2 block"></i>
                            <div class="text-sm font-medium">Business</div>
                        </div>
                        <div class="bg-secondary-green p-3 rounded-lg text-center">
                            <i class="fas fa-paint-brush text-green text-xl mb-2 block"></i>
                            <div class="text-sm font-medium">Creative</div>
                        </div>
                        <div class="bg-secondary-green p-3 rounded-lg text-center">
                            <i class="fas fa-language text-green text-xl mb-2 block"></i>
                            <div class="text-sm font-medium">Languages</div>
                        </div>
                    </div>
                    <a href="#" class="btn-success w-full text-center">Browse Courses</a>
                </div>
            </div>

            <!-- Certifications -->
            <div class="other-card bg-white overflow-hidden">
                <div class="yellow-header">
                    <div class="flex items-center justify-between">
                        <h4 class="other-h4">Professional Certifications</h4>
                        <i class="fas fa-certificate text-2xl"></i>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 mb-4">Earn industry-recognized certifications to validate your expertise.</p>
                    <ul class="text-sm text-gray-600 mb-6 space-y-2">
                        <li><i class="fas fa-award text-accent mr-2"></i>IT & Technology</li>
                        <li><i class="fas fa-award text-accent mr-2"></i>Project Management</li>
                        <li><i class="fas fa-award text-accent mr-2"></i>Digital Marketing</li>
                        <li><i class="fas fa-award text-accent mr-2"></i>Finance & Accounting</li>
                    </ul>
                    <a href="#" class="btn-accent w-full text-center">View Certifications</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Skills Development Section -->
<section class="py-16 bg-white">
    <div class="other-container">
        <div class="text-center mb-12">
            <h2 class="other-h2 text-primary mb-4">Skills Development Hub</h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                Develop in-demand skills with our comprehensive learning resources
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div class="text-center p-6 bg-secondary rounded-lg">
                <div class="resource-icon mx-auto mb-4">
                    <i class="fas fa-code text-3xl"></i>
                </div>
                <h5 class="other-h5 text-primary mb-2">Programming</h5>
                <p class="text-sm text-gray-600">Web development, mobile apps, and software engineering skills</p>
            </div>
            
            <div class="text-center p-6 bg-secondary rounded-lg">
                <div class="resource-icon mx-auto mb-4">
                    <i class="fas fa-chart-bar text-3xl"></i>
                </div>
                <h5 class="other-h5 text-primary mb-2">Data Analysis</h5>
                <p class="text-sm text-gray-600">Excel, SQL, Python, and data visualization techniques</p>
            </div>
            
            <div class="text-center p-6 bg-secondary rounded-lg">
                <div class="resource-icon mx-auto mb-4">
                    <i class="fas fa-bullhorn text-3xl"></i>
                </div>
                <h5 class="other-h5 text-primary mb-2">Marketing</h5>
                <p class="text-sm text-gray-600">Digital marketing, SEO, social media, and content creation</p>
            </div>
            
            <div class="text-center p-6 bg-secondary rounded-lg">
                <div class="resource-icon mx-auto mb-4">
                    <i class="fas fa-users text-3xl"></i>
                </div>
                <h5 class="other-h5 text-primary mb-2">Leadership</h5>
                <p class="text-sm text-gray-600">Management, communication, and team building skills</p>
            </div>
        </div>
    </div>
</section>

<!-- Industry News Section -->
<section class="py-16 bg-gray-50">
    <div class="other-container">
        <div class="text-center mb-12">
            <h2 class="other-h2 text-primary mb-4">Industry News & Insights</h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                Stay updated with the latest trends and insights from Tanzania's job market
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <article class="other-card bg-white overflow-hidden">
                <div class="h-48 bg-gradient-to-r from-blue-500 to-blue-600 flex items-center justify-center">
                    <i class="fas fa-newspaper text-white text-4xl"></i>
                </div>
                <div class="p-6">
                    <h4 class="other-h4 text-primary mb-2">Market Trends</h4>
                    <p class="text-gray-600 mb-4">Latest job market trends, salary insights, and industry growth patterns in Tanzania.</p>
                    <a href="#" class="btn-primary">Read More</a>
                </div>
            </article>
            
            <article class="other-card bg-white overflow-hidden">
                <div class="h-48 bg-gradient-to-r from-green-500 to-green-600 flex items-center justify-center">
                    <i class="fas fa-lightbulb text-white text-4xl"></i>
                </div>
                <div class="p-6">
                    <h4 class="other-h4 text-green mb-2">Career Tips</h4>
                    <p class="text-gray-600 mb-4">Expert advice on career advancement, skill development, and professional networking.</p>
                    <a href="#" class="btn-success">Read More</a>
                </div>
            </article>
            
            <article class="other-card bg-white overflow-hidden">
                <div class="h-48 bg-gradient-accent flex items-center justify-center">
                    <i class="fas fa-rocket text-primary text-4xl"></i>
                </div>
                <div class="p-6">
                    <h4 class="other-h4 text-accent mb-2">Success Stories</h4>
                    <p class="text-gray-600 mb-4">Inspiring career success stories from professionals across various industries.</p>
                    <a href="#" class="btn-accent">Read More</a>
                </div>
            </article>
        </div>
    </div>
</section>

<!-- Events & Webinars Section -->
<section class="py-16 bg-primary text-white">
    <div class="other-container">
        <div class="text-center mb-12">
            <h2 class="other-h2 text-white mb-4">Events & Webinars</h2>
            <p class="text-gray-200 text-lg max-w-2xl mx-auto">
                Join our networking events, workshops, and webinars to connect with industry professionals
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white bg-opacity-10 rounded-lg p-8">
                <div class="flex items-center mb-4">
                    <div class="bg-accent text-primary p-3 rounded-full mr-4">
                        <i class="fas fa-calendar text-xl"></i>
                    </div>
                    <div>
                        <h4 class="other-h4 text-white">Upcoming Events</h4>
                        <p class="text-gray-200">Don't miss our career fairs and networking sessions</p>
                    </div>
                </div>
                <ul class="space-y-3 mb-6">
                    <li class="flex items-center text-gray-200">
                        <i class="fas fa-check-circle text-accent mr-3"></i>
                        Career Fair 2024 - Dar es Salaam
                    </li>
                    <li class="flex items-center text-gray-200">
                        <i class="fas fa-check-circle text-accent mr-3"></i>
                        Tech Networking Event - Mwanza
                    </li>
                    <li class="flex items-center text-gray-200">
                        <i class="fas fa-check-circle text-accent mr-3"></i>
                        Professional Development Workshop
                    </li>
                </ul>
                <a href="#" class="bg-accent text-primary px-6 py-3 rounded-lg font-semibold hover:bg-yellow-400 transition-colors">View All Events</a>
            </div>
            
            <div class="bg-white bg-opacity-10 rounded-lg p-8">
                <div class="flex items-center mb-4">
                    <div class="bg-green text-white p-3 rounded-full mr-4">
                        <i class="fas fa-video text-xl"></i>
                    </div>
                    <div>
                        <h4 class="other-h4 text-white">Weekly Webinars</h4>
                        <p class="text-gray-200">Expert-led sessions on career development</p>
                    </div>
                </div>
                <ul class="space-y-3 mb-6">
                    <li class="flex items-center text-gray-200">
                        <i class="fas fa-play-circle text-green mr-3"></i>
                        Resume Writing Masterclass
                    </li>
                    <li class="flex items-center text-gray-200">
                        <i class="fas fa-play-circle text-green mr-3"></i>
                        Interview Skills Workshop
                    </li>
                    <li class="flex items-center text-gray-200">
                        <i class="fas fa-play-circle text-green mr-3"></i>
                        LinkedIn Optimization Tips
                    </li>
                </ul>
                <a href="#" class="bg-green text-white px-6 py-3 rounded-lg font-semibold hover:bg-green-700 transition-colors">Join Webinar</a>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter Section -->
<section class="py-16 bg-secondary">
    <div class="other-container">
        <div class="text-center max-w-2xl mx-auto">
            <h2 class="other-h2 text-primary mb-4">Stay Connected</h2>
            <p class="text-gray-600 text-lg mb-8">
                Subscribe to our newsletter for the latest job opportunities, career tips, and industry insights
            </p>
            
            <div class="bg-white rounded-lg p-8 shadow-lg">
                <form class="flex flex-col md:flex-row gap-4">
                    <input 
                        type="email" 
                        placeholder="Enter your email address" 
                        class="flex-1 px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                    >
                    <button 
                        type="submit" 
                        class="btn-primary"
                    >
                        <i class="fas fa-envelope mr-2"></i>Subscribe Now
                    </button>
                </form>
                
                <div class="flex items-center justify-center mt-6 space-x-6">
                    <a href="#" class="text-gray-400 hover:text-primary transition-colors">
                        <i class="fab fa-facebook text-2xl"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-primary transition-colors">
                        <i class="fab fa-twitter text-2xl"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-primary transition-colors">
                        <i class="fab fa-linkedin text-2xl"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-primary transition-colors">
                        <i class="fab fa-instagram text-2xl"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
