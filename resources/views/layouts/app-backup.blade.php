<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ config('app.name', 'Tanzania Jobs Portal') }}</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.0/css/all.min.css">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        :root {
            --primary-core: #1E40AF;
            --secondary-core: #EFF6FF;
            --accent: #FACC15;
            --secondary-accent: #FEF9C3;
            --green-accent: #166534;
            --secondary-green: #DCFCE7;
        }
        
        * {
            box-sizing: border-box;
        }
        
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            padding-top: 90px; /* Account for fixed header */
        }
        
        /* Container for centered content */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Header wrapper - full width */
        .header-wrapper {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            background-color: var(--secondary-core);
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }
        
        /* Header when scrolled */
        .header-wrapper.scrolled {
            background-color: rgba(239, 246, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 20px rgba(0,0,0,0.15);
        }
        
        .top-banner {
            background-color: var(--secondary-core);
            color: var(--primary-core);
            text-align: center;
            padding: 8px 0;
            font-weight: bold;
            border-bottom: 1px solid #ddd;
            transition: all 0.3s ease;
            font-size: 13px;
        }
        
        .header-wrapper.scrolled .top-banner {
            padding: 5px 0;
            font-size: 12px;
        }
        
        .nav-container {
            background-color: transparent;
            padding: 6px 0;
            transition: all 0.3s ease;
        }
        
        .nav-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .nav-links {
            display: flex;
            gap: 8px;
            align-items: center;
            flex-wrap: nowrap;
        }
        
        .nav-link {
            text-transform: uppercase;
            font-weight: 500;
            font-size: 11px;
            color: #333;
            text-decoration: none;
            padding: 6px 8px;
            border-radius: 4px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            white-space: nowrap;
            letter-spacing: 0.5px;
        }
        
        .nav-link::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(30, 64, 175, 0.1), transparent);
            transition: left 0.6s;
        }
        
        .nav-link:hover::before {
            left: 100%;
        }
        
        .nav-link:hover,
        .nav-link.active {
            color: var(--primary-core);
            font-weight: bold;
            background-color: rgba(30, 64, 175, 0.08);
            transform: translateY(-2px);
        }
        
        .right-section {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .search-container {
            display: flex;
            align-items: center;
            position: relative;
        }
        
        .search-input {
            border: 1px solid #ccc;
            border-radius: 20px;
            padding: 6px 15px;
            padding-right: 40px;
            font-size: 12px;
            width: 180px;
            transition: all 0.3s ease;
            background-color: white;
            height: 32px;
        }
        
        .search-input:focus {
            outline: none;
            border-color: var(--primary-core);
            box-shadow: 0 0 0 2px rgba(30, 64, 175, 0.1);
            width: 220px;
        }
        
        .search-icon {
            position: absolute;
            right: 15px;
            color: var(--primary-core);
            cursor: pointer;
            transition: color 0.3s ease;
            font-size: 14px;
            z-index: 10;
        }
        
        .search-icon:hover {
            color: var(--accent);
        }
        
        .social-icons {
            display: flex;
            gap: 12px;
            align-items: center;
        }
        
        .icon-link {
            color: var(--primary-core);
            font-size: 16px;
            text-decoration: none;
            padding: 8px;
            border-radius: 50%;
            transition: all 0.3s ease;
            width: 32px;
            height: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: rgba(30, 64, 175, 0.1);
        }
        
        .icon-link:hover {
            color: white;
            background-color: var(--primary-core);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(30, 64, 175, 0.3);
        }
        
        .login-link {
            display: flex;
            align-items: center;
            gap: 6px;
            text-decoration: none;
            color: var(--primary-core);
            font-size: 12px;
            padding: 6px 12px;
            border: 1.5px solid var(--primary-core);
            border-radius: 20px;
            transition: all 0.3s ease;
            font-weight: 600;
            background-color: white;
            height: 32px;
        }
        
        .login-link i {
            font-size: 12px;
        }
        
        .login-link:hover {
            color: white;
            background-color: var(--primary-core);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(30, 64, 175, 0.3);
        }
        
        /* Mobile Responsive */
        @media (max-width: 768px) {
            body {
                padding-top: 110px;
            }
            
            .container {
                padding: 0 15px;
            }
            
            .nav-content {
                flex-direction: column;
                gap: 10px;
            }
            
            .nav-links {
                flex-wrap: wrap;
                justify-content: center;
                gap: 6px;
            }
            
            .nav-link {
                font-size: 10px;
                padding: 4px 6px;
            }
            
            .right-section {
                gap: 8px;
            }
            
            .search-input {
                width: 140px;
                height: 28px;
                font-size: 11px;
            }
            
            .search-input:focus {
                width: 160px;
            }
            
            .icon-link {
                width: 28px;
                height: 28px;
                font-size: 14px;
            }
            
            .login-link {
                height: 28px;
                font-size: 11px;
                padding: 4px 10px;
            }
        }
        
        @media (max-width: 480px) {
            .nav-links {
                gap: 4px;
            }
            
            .nav-link {
                font-size: 9px;
                padding: 3px 5px;
            }
            
            .search-input {
                width: 120px;
            }
            
            .right-section {
                gap: 6px;
            }
        }
    </style>
</head>

<body>
    <!-- Fixed Header Wrapper -->
    <div class="header-wrapper" id="headerWrapper">
        <!-- Top Banner -->
        <div class="top-banner">
            <div class="container">
                Top Add Placeholder
            </div>
        </div>
        
        <!-- Navigation -->
        <div class="nav-container">
            <div class="container">
                <div class="nav-content">
                    <div class="nav-links">
                        <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">HOME</a>
                        <a href="#" class="nav-link">TANZANIA-JOBS</a>
                        <a href="#" class="nav-link">ALL-JOBS</a>
                        <a href="#" class="nav-link">TENDER</a>
                        <a href="#" class="nav-link">POST</a>
                        <a href="#" class="nav-link">ADVERTISE</a>
                        <a href="#" class="nav-link">OTHER</a>
                    </div>
                    
                    <div class="right-section">
                        <div class="search-container">
                            <input type="text" class="search-input" placeholder="search Anything">
                            <div class="search-icon">
                                <i class="fas fa-search"></i>
                            </div>
                        </div>
                        
                        <div class="social-icons">
                            <a href="#" class="login-link">
                                <i class="fas fa-lock"></i>
                                <span>login</span>
                            </a>
                            <a href="#" class="icon-link">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="icon-link">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="icon-link">
                                <i class="fas fa-bell"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Main Content -->
    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

    <!-- Scripts -->
    <script>
        // Header scroll effect
        let lastScrollTop = 0;
        const headerWrapper = document.getElementById('headerWrapper');
        
        window.addEventListener('scroll', function() {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            
            // Add scrolled class when scrolling down
            if (scrollTop > 50) {
                headerWrapper.classList.add('scrolled');
            } else {
                headerWrapper.classList.remove('scrolled');
            }
            
            lastScrollTop = scrollTop;
        }, { passive: true });
        
        // Search functionality
        function performSearch() {
            const searchInput = document.querySelector('.search-input');
            const searchTerm = searchInput.value.trim();
            if (searchTerm) {
                // You can implement search functionality here
                console.log('Searching for:', searchTerm);
                // Example: window.location.href = `/search?q=${encodeURIComponent(searchTerm)}`;
            }
        }
        
        // Search icon click
        document.querySelector('.search-icon').addEventListener('click', performSearch);
        
        // Search on Enter key
        document.querySelector('.search-input').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                performSearch();
            }
        });
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
        
        // Add loading states for navigation links
        document.querySelectorAll('.nav-link:not([href="#"])').forEach(link => {
            link.addEventListener('click', function() {
                this.style.opacity = '0.7';
                this.innerHTML += ' <i class="fas fa-spinner fa-spin" style="font-size: 10px;"></i>';
            });
        });
    </script>
</body>
</html>
