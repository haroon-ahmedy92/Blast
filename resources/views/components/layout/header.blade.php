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
                <!-- Logo Section -->
                <div class="logo-section">
                    <a href="{{ route('home') }}" class="logo-link">
                        <img src="{{ asset('companies/blast.png') }}" alt="Blast Logo" class="logo-img">
                        <span class="logo-text">Blast</span>
                    </a>
                </div>
                
                <div class="nav-links">
                    <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">HOME</a>
                    <a href="{{ route('tanzania-jobs') }}" class="nav-link {{ request()->routeIs('tanzania-jobs') ? 'active' : '' }}">TANZANIA-JOBS</a>
                    <a href="{{ route('all-jobs') }}" class="nav-link {{ request()->routeIs('all-jobs') ? 'active' : '' }}">ALL-JOBS</a>
                    <a href="{{ route('tenders') }}" class="nav-link {{ request()->routeIs('tenders') ? 'active' : '' }}">TENDER</a>
                    <a href="{{ route('post') }}" class="nav-link {{ request()->routeIs('post') ? 'active' : '' }}">POST</a>
                    <a href="{{ route('advertise') }}" class="nav-link {{ request()->routeIs('advertise') ? 'active' : '' }}">ADVERTISE</a>
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

<!-- Header JavaScript -->
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
