<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
        .navbar {
            background-color: #0d47a1 !important;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        /* Style for the hamburger menu button */
        .navbar .navbar-toggler {
            color: #fff !important;
            border-color: rgba(255,255,255,0.3);
        }
        
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.9%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e") !important;
        }
        
        .navbar-brand {
            color: #fff !important;
        }
        
        .navbar-toggler {
            padding: 0.25rem 0.5rem;
            border: none;
            margin-left: auto;
        }
        
        .navbar-collapse {
            background: #0d6efd;
            margin-top: 0.5rem;
            border-radius: 0.5rem;
            box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.1);
            padding: 0.5rem 0;
        }
        
        .navbar-nav .nav-link {
            padding: 1rem 1.5rem;
            color: #fff !important; /* White text for better contrast on dark blue */
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            background-color: transparent !important;
        }
        
        /* Keep text white when menu is open */
        .show .navbar-nav .nav-link {
            color: #fff !important;
        }
        
        /* Style dropdown items */
        .navbar-nav .dropdown-item {
            color: #fff !important;
            background-color: transparent !important;
            padding: 0.5rem 1.5rem !important;
        }
        
        .navbar-nav .dropdown-item:hover {
            color: #fff !important;
            background-color: rgba(255,255,255,0.1) !important;
        }
        
        /* Auth buttons in mobile menu */
        .navbar-nav .btn {
            margin: 0.25rem 1rem;
            text-align: center;
        }
        
        .navbar-nav .btn i {
            margin-right: 0.5rem;
        }
        
        .dropdown-menu {
            position: static !important;
            transform: none !important;
            border: none;
            box-shadow: none;
            padding: 0;
            background-color: transparent;
            text-align: center;
        }
        
        .dropdown-item {
            padding: 0.75rem 1.5rem 0.75rem 2.5rem;
            color: #000 !important;
            text-align: left;
            width: 100%;
        }
        
        .nav-request-btn {
            display: inline-block;
            margin: 0.5rem auto;
            width: auto;
            background-color: #0d47a1 !important;
            border: 1px solid #fff !important;
            color: #fff !important;
        }
        
        .nav-request-btn:hover {
            background-color: #0a3a8a !important;
            color: #fff !important;
        }
    }
</style>

<style>
    /* Navbar container */
    .navbar {
        padding: 0.5rem 0;
        background-color: #0d47a1 !important;
        transition: background-color 0.3s ease;
    }
    
    /* Ensure navbar stays blue when scrolled */
    .navbar.scrolled {
        background-color: #003366 !important;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    
    /* Brand text styling */
    .navbar-brand {
        padding: 0;
        margin: 0;
        font-size: 1.25rem;
        display: flex;
        align-items: center;
        color: #ffffff !important;
    }
    
    /* Logo image */
    .navbar-brand img {
        height: 50px;
        width: auto;
    }
    
    /* Toggler button */
    .navbar-toggler {
        padding: 0.25rem 0.5rem;
        border: none;
        margin-left: auto;
    }
    
    /* Adjust for mobile */
    @media (max-width: 991.98px) {
        .navbar-brand {
            font-size: 1.1rem;
            color: #fff !important;
        }
        
        .navbar-brand img {
            height: 40px;
        }
    }
</style>

<nav class="navbar navbar-expand-lg fixed-top" style="background-color: #0d47a1 !important;">
    <div class="container">
        <div class="d-flex w-100 align-items-center">
            <a class="navbar-brand fw-bold text-white" href="/">
                <img src="{{ asset('images/logo/brgy-logo.png') }}" alt="Barangay Logo" class="me-2" style="height: 40px;">
                BAGONG BARRIO
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    // Navbar scroll behavior
    document.addEventListener('DOMContentLoaded', function() {
        const navbar = document.querySelector('.navbar');
        const navbarCollapse = document.querySelector('.navbar-collapse');
        
        // Function to handle scroll events
        function handleScroll() {
            if (window.scrollY > 10) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        }
        
        // Function to set mobile menu text color
        function setMobileMenuTextColor() {
            if (window.innerWidth <= 991.98) { // Mobile view
                const navLinks = document.querySelectorAll('.navbar-nav .nav-link, .dropdown-item, .dropdown-menu .dropdown-item');
                const isMenuOpen = navbarCollapse.classList.contains('show');
                
                navLinks.forEach(link => {
                    if (isMenuOpen) {
                        // Don't change color for dropdown items in the user menu
                        if (!link.closest('.dropdown-menu[aria-labelledby="userDropdown"]')) {
                            link.style.color = '#000';
                        }
                    } else {
                        link.style.color = ''; // Reset to default when menu is closed
                    }
                });
                
                // Special handling for user dropdown in mobile
                const userDropdown = document.querySelector('.dropdown-menu[aria-labelledby="userDropdown"]');
                if (userDropdown) {
                    if (isMenuOpen) {
                        userDropdown.style.backgroundColor = '#0d47a1';
                        userDropdown.style.border = '1px solid rgba(255,255,255,0.1)';
                        userDropdown.style.borderRadius = '0.5rem';
                        userDropdown.style.margin = '0.5rem 1rem';
                        userDropdown.style.padding = '0.5rem 0';
                    } else {
                        userDropdown.style.backgroundColor = '';
                        userDropdown.style.border = '';
                        userDropdown.style.borderRadius = '';
                        userDropdown.style.margin = '';
                        userDropdown.style.padding = '';
                    }
                }
            }
        }
        
        // Initial setup
        handleScroll();
        
        // Event listeners
        window.addEventListener('scroll', handleScroll);
        
        // Handle menu toggle
        if (navbarToggler && navbarCollapse) {
            navbarToggler.addEventListener('click', function() {
                // Small delay to allow Bootstrap to add/remove the 'show' class
                setTimeout(setMobileMenuTextColor, 10);
            });
            
            // Also handle when menu is closed by clicking outside
            document.addEventListener('click', function(e) {
                if (!e.target.closest('.navbar-collapse') && !e.target.closest('.navbar-toggler')) {
                    setMobileMenuTextColor();
                }
            });
        }
        
        // Handle window resize
        window.addEventListener('resize', setMobileMenuTextColor);
    });
</script>
