<nav class="navbar navbar-expand-lg fixed-top" style="background-color: #0d47a1 !important;">
    <div class="container">
        <div class="d-flex w-100 align-items-center justify-content-between">
            <!-- Brand/Logo -->
            <a class="navbar-brand fw-bold text-white m-0" href="{{ url('/') }}">
                <img src="{{ asset('images/logo/brgy-logo.png') }}" alt="Barangay Logo" class="me-2" style="height: 40px;">
                BAGONG BARRIO
            </a>
            
            <!-- Mobile Toggle Button -->
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <!-- Navigation Links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    
                    <!-- Request Document Button -->
                    <li class="nav-item ms-lg-3 d-flex align-items-center">
                        <a href="#" class="rd-button btn btn-primary px-3 py-1.5">
                            <i class="fas fa-file-alt me-1"></i> Request Document
                        </a>
                    </li>
                    
                    @auth
                        <!-- Dashboard Link -->
                        <li class="nav-item d-none d-lg-block">
                            <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                                <i class="fas fa-tachometer-alt me-1"></i> Dashboard
                            </a>
                        </li>
                        
                        <!-- User Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" 
                               data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user-circle me-1"></i> {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                <li>
                                    <a class="dropdown-item" href="{{ route('profile.edit') }}">
                                        <i class="fas fa-user me-2"></i> Profile
                                    </a>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}" class="w-100">
                                        @csrf
                                        <button type="submit" class="dropdown-item">
                                            <i class="fas fa-sign-out-alt me-2"></i> Logout
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </div>
</nav>

<!-- Mobile Menu (Dashboard) -->
@auth
    <div class="d-lg-none bg-primary py-2">
        <div class="container">
            <a href="{{ route('dashboard') }}" class="text-white text-decoration-none d-flex align-items-center">
                <i class="fas fa-tachometer-alt me-2"></i> Dashboard
            </a>
        </div>
    </div>
@endauth

<style>
    /* Navbar Styles */
    .navbar {
        padding: 0.5rem 0;
        background-color: #0d47a1 !important;
        transition: all 0.3s ease;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    
    .navbar.scrolled {
        background-color: #003366 !important;
        padding: 0.25rem 0;
    }
    
    .navbar-brand {
        font-weight: 600;
        display: flex;
        align-items: center;
    }
    
    .navbar-brand img {
        height: 40px;
        width: auto;
        transition: all 0.3s ease;
    }
    
    /* Request Document Button */
    .rd-button {
        border-radius: 8px !important;
        font-weight: 500;
        transition: all 0.3s ease;
        padding: 0.375rem 1rem !important;
        font-size: 0.9rem;
    }
    
    .nav-link {
        color: rgba(255, 255, 255, 0.85) !important;
        font-weight: 500;
        padding: 0.5rem 1rem !important;
        transition: all 0.2s ease;
    }
    
    .nav-link:hover,
    .nav-link.active {
        color: #fff !important;
        transform: translateY(-1px);
    }
    
    .dropdown-menu {
        border: none;
        box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.1);
        min-width: 200px;
    }
    
    .dropdown-item {
        padding: 0.5rem 1.25rem;
        color: #333 !important;
    }
    
    .dropdown-item:hover {
        background-color: #f8f9fa;
    }
    
    /* Mobile Menu Styles */
    @media (max-width: 991.98px) {
        .navbar-collapse {
            background: #0d47a1;
            margin-top: 0.5rem;
            border-radius: 0.5rem;
            padding: 0.5rem;
        }
        
        .navbar-toggler {
            border: 1px solid rgba(255,255,255,0.3);
            padding: 0.375rem 0.75rem;
            margin-left: auto; /* Push to the right */
            order: 2; /* Ensure it stays on the right */
        }
        
        .navbar-brand {
            order: 1; /* Ensure brand stays on the left */
            flex-grow: 1;
        }
        
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.9%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e") !important;
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.querySelector('.navbar');
    
    // Navbar scroll effect
    function handleScroll() {
        if (window.scrollY > 10) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    }
    
    // Initialize
    handleScroll();
    window.addEventListener('scroll', handleScroll);
    
    // Close mobile menu when clicking on a link
    const navLinks = document.querySelectorAll('.nav-link');
    const navbarToggler = document.querySelector('.navbar-toggler');
    const navbarCollapse = document.querySelector('.navbar-collapse');
    
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (navbarCollapse.classList.contains('show')) {
                const bsCollapse = new bootstrap.Collapse(navbarCollapse, {toggle: false});
                bsCollapse.hide();
            }
        });
    });
});
</script>
