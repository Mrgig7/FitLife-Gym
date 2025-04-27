<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'FitLife Gym') }} | @yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .navbar {
            padding: 15px 0;
            transition: all 0.3s ease;
        }
        .navbar-scrolled {
            padding: 10px 0;
            background-color: rgba(33, 37, 41, 0.98) !important;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        .navbar-brand {
            font-weight: 800;
            font-size: 1.6rem;
            letter-spacing: -0.5px;
            position: relative;
        }
        .navbar-brand i {
            color: #dc3545;
            transition: transform 0.3s ease;
        }
        .navbar-brand:hover i {
            transform: rotate(15deg);
        }
        .nav-link {
            font-weight: 600;
            font-size: 0.95rem;
            margin: 0 5px;
            padding: 10px 15px !important;
            border-radius: 6px;
            transition: all 0.3s ease;
            position: relative;
        }
        .nav-link:after {
            content: "";
            position: absolute;
            bottom: 4px;
            left: 50%;
            width: 0;
            height: 2px;
            background-color: #dc3545;
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }
        .nav-link:hover:after,
        .nav-link.active:after {
            width: 50%;
        }
        .nav-link:hover,
        .nav-link.active {
            color: #dc3545 !important;
            background-color: rgba(220, 53, 69, 0.05);
        }
        .dropdown-menu {
            border: none;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            padding: 10px;
        }
        .dropdown-item {
            padding: 10px 15px;
            font-weight: 500;
            border-radius: 6px;
            transition: all 0.2s ease;
        }
        .dropdown-item:hover,
        .dropdown-item:focus {
            background-color: rgba(220, 53, 69, 0.1);
            color: #dc3545;
        }
        .hero-section {
            min-height: 80vh;
            background-size: cover;
            background-position: center;
            color: white;
            position: relative;
        }
        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
        }
        .hero-content {
            position: relative;
            z-index: 1;
        }
        .card-hover:hover {
            transform: translateY(-5px);
            transition: all 0.3s ease;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .footer {
            background-color: #212529;
            color: #fff;
            padding: 3rem 0;
        }
        .section-title {
            position: relative;
            margin-bottom: 2rem;
            padding-bottom: 1rem;
        }
        .section-title:after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background-color: #dc3545;
        }
        .section-title.text-center:after {
            left: 50%;
            transform: translateX(-50%);
        }
        .btn-auth {
            padding: 8px 20px;
            font-weight: 600;
            border-radius: 6px;
            transition: all 0.3s ease;
        }
        .btn-register {
            background-color: #dc3545;
            color: white;
            border: 2px solid #dc3545;
        }
        .btn-register:hover {
            background-color: #c82333;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(220, 53, 69, 0.2);
        }
        .btn-login {
            background-color: transparent;
            color: white;
            border: 2px solid rgba(255, 255, 255, 0.2);
            margin-right: 10px;
        }
        .btn-login:hover {
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
            border-color: rgba(255, 255, 255, 0.4);
            transform: translateY(-2px);
        }
    </style>
    
    @yield('styles')
    @stack('styles')
</head>
<body>
    <div id="app">
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
                    <i class="fas fa-dumbbell me-2"></i><span>FitLife Gym</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('classes') ? 'active' : '' }}" href="{{ route('classes') }}">Classes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('trainers') ? 'active' : '' }}" href="{{ route('trainers') }}">Trainers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('membership') ? 'active' : '' }}" href="{{ route('membership') }}">Membership</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
                        </li>
                    </ul>
                    
                    <div class="navbar-nav">
                        @guest
                            <div class="d-flex">
                                <a class="btn btn-auth btn-login" href="{{ route('login') }}">Log In</a>
                                <a class="btn btn-auth btn-register" href="{{ route('register') }}">Sign Up</a>
                            </div>
                        @else
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="rounded-circle bg-danger text-white d-inline-flex align-items-center justify-content-center me-2" style="width: 32px; height: 32px;">
                                        <span>{{ substr(Auth::user()->name, 0, 1) }}</span>
                                    </div>
                                    <span>{{ Auth::user()->name }}</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{ route('dashboard') }}"><i class="fas fa-tachometer-alt me-2 text-muted"></i>Dashboard</a></li>
                                    <li><a class="dropdown-item" href="{{ route('profile') }}"><i class="fas fa-user me-2 text-muted"></i>Profile</a></li>
                                    @if(Auth::user()->isAdmin())
                                        <li><a class="dropdown-item" href="{{ route('admin.dashboard') }}"><i class="fas fa-shield-alt me-2 text-muted"></i>Admin Panel</a></li>
                                    @endif
                                    @if(Auth::user()->isTrainer())
                                        <li><a class="dropdown-item" href="{{ route('trainer.dashboard') }}"><i class="fas fa-clipboard me-2 text-muted"></i>Trainer Portal</a></li>
                                    @endif
                                    <li><hr class="dropdown-divider"></li>
                                    <li>
                                        <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                            <i class="fas fa-sign-out-alt me-2"></i>Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </div>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <main>
            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-4 mb-md-0">
                        <h4 class="text-uppercase mb-4">FitLife Gym</h4>
                        <p>Transform your body, transform your life. Join our fitness community today and experience the difference of personalized training and world-class facilities.</p>
                        <div class="social-links mt-3">
                            <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="text-white me-3"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 mb-md-0">
                        <h4 class="text-uppercase mb-4">Quick Links</h4>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="{{ route('home') }}" class="text-white text-decoration-none">Home</a></li>
                            <li class="mb-2"><a href="{{ route('about') }}" class="text-white text-decoration-none">About Us</a></li>
                            <li class="mb-2"><a href="{{ route('classes') }}" class="text-white text-decoration-none">Classes</a></li>
                            <li class="mb-2"><a href="{{ route('trainers') }}" class="text-white text-decoration-none">Trainers</a></li>
                            <li class="mb-2"><a href="{{ route('membership') }}" class="text-white text-decoration-none">Membership</a></li>
                            <li class="mb-2"><a href="{{ route('contact') }}" class="text-white text-decoration-none">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h4 class="text-uppercase mb-4">Contact Info</h4>
                        <p class="mb-2"><i class="fas fa-map-marker-alt me-2"></i> 123 Fitness Street, Gym City</p>
                        <p class="mb-2"><i class="fas fa-phone me-2"></i> +1 (555) 123-4567</p>
                        <p class="mb-2"><i class="fas fa-envelope me-2"></i> info@fitlifegym.com</p>
                        <p class="mb-0"><i class="fas fa-clock me-2"></i> Mon-Fri: 5:00 AM - 10:00 PM<br>Sat-Sun: 7:00 AM - 8:00 PM</p>
                    </div>
                </div>
                <hr class="my-4 bg-light">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="mb-0">&copy; {{ date('Y') }} FitLife Gym. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Navbar scroll effect
        document.addEventListener('DOMContentLoaded', function() {
            const navbar = document.getElementById('mainNav');
            
            function checkScroll() {
                if (window.scrollY > 50) {
                    navbar.classList.add('navbar-scrolled', 'bg-dark');
                } else {
                    navbar.classList.remove('navbar-scrolled', 'bg-dark');
                }
            }
            
            // Initial check in case page is loaded scrolled down
            checkScroll();
            
            // Event listener for scroll
            window.addEventListener('scroll', checkScroll);
        });
    </script>
    @yield('scripts')
    @stack('scripts')
</body>
</html>
