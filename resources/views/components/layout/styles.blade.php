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
    
    /* Logo Section */
    .logo-section {
        display: flex;
        align-items: center;
        margin-right: 30px;
    }
    
    .logo-link {
        display: flex;
        align-items: center;
        text-decoration: none;
        gap: 8px;
        transition: all 0.3s ease;
    }
    
    .logo-link:hover {
        transform: scale(1.05);
    }
    
    .logo-img {
        height: 40px;
        width: auto;
        object-fit: contain;
    }
    
    .logo-text {
        font-size: 20px;
        font-weight: 700;
        color: var(--primary-core);
        text-transform: uppercase;
        letter-spacing: 1px;
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
        
        .logo-section {
            margin-right: 0;
            margin-bottom: 10px;
        }
        
        .logo-img {
            height: 32px;
        }
        
        .logo-text {
            font-size: 18px;
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
