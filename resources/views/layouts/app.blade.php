<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'OfBusiness Duplicate')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class="header">
        <div class="header-top">
            <div class="container">
                <span>Prices | News | Orders | About Us</span>
            </div>
        </div>
        <div class="container header-main">
            <a href="{{ url('/') }}" class="logo">ofbusiness</a>
            
            <div class="search-bar">
                <input type="text" class="search-input" placeholder="Search for products, brands and more">
                <button class="search-btn">Search</button>
            </div>

            <div>
                <a href="#" class="btn btn-primary">Login Now</a>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="footer">
        <div class="container footer-grid">
            <div class="footer-col">
                <h4>Company</h4>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Resources</h4>
                <ul>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Sitemap</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Support</h4>
                <ul>
                    <li><a href="#">Help Center</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Connect</h4>
                <p>Download App</p>
                <!-- Social Icons placeholder -->
            </div>
        </div>
    </footer>
    
    <!-- Lead Gen Button (Sticky) -->
    <div style="position: fixed; bottom: 30px; right: 30px; z-index: 1000;">
        <button class="btn btn-secondary" style="border-radius: 50px; padding: 12px 24px; box-shadow: 0 4px 10px rgba(0,0,0,0.2);">
            Tell Us Your Requirements
        </button>
    </div>
</body>
</html>
