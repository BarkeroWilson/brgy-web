<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Barangay Portal</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #0d6efd;
            --secondary: #6c757d;
            --light: #f8f9fa;
            --dark: #212529;
            --navbar-height: 80px;
        }
        
        body {
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
            color: #333;
            line-height: 1.6;
            background-color: #f8f9fa;
            padding-top: var(--navbar-height);
        }
        
        .navbar {
            padding: 0.5rem 2rem;
            background-color: #003366 !important;
            height: var(--navbar-height);
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        @media (max-width: 991.98px) {
            .navbar {
                padding: 0.5rem 1rem;
            }
        }
        
        .navbar-brand {
            display: flex;
            align-items: center;
            color: #ffffff !important;
            font-size: 1.1rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .navbar-brand small {
            font-size: 0.75rem;
            font-weight: 400;
            letter-spacing: 0.5px;
            opacity: 0.9;
        }
        
        .navbar-nav .nav-link {
            color: rgba(255, 255, 255, 0.9) !important;
            padding: 0.75rem 1.25rem;
            margin: 0 0.25rem;
            font-weight: 500;
            transition: all 0.3s ease;
            border-radius: 0.25rem;
        }
        
        .navbar-nav .nav-link:hover, .navbar-nav .nav-link.active {
            background-color: rgba(255, 255, 255, 0.1);
            color: #ffffff !important;
        }
        
        .sidebar {
            min-height: calc(100vh - var(--navbar-height));
            background: #ffffff;
            box-shadow: 2px 0 10px rgba(0,0,0,0.05);
            position: fixed;
            width: 250px;
            top: var(--navbar-height);
            left: 0;
            z-index: 1000;
            transition: all 0.3s;
        }
        
        .main-content {
            margin-left: 250px;
            padding: 2rem;
            transition: all 0.3s;
        }
        
        .sidebar.collapsed {
            transform: translateX(-100%);
        }
        
        .main-content.expanded {
            margin-left: 0;
        }
        
        .sidebar-actions {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: #ffffff;
            border-top: 1px solid #e3e6f0;
            padding: 15px;
        }
        
        .sidebar-actions .btn-outline-secondary {
            transition: all 0.2s ease;
            border: 1px solid #d1d3e2;
            color: #6e707e;
            font-weight: 500;
            background-color: #f8f9fc;
        }
        
        .sidebar-actions .btn-outline-secondary:hover {
            background-color: #f1f3f9;
            border-color: #bac8f3;
            color: #5a5c69;
        }
        
        /* Ensure the main content adjusts when quick actions are moved */
        .main-content {
            transition: all 0.3s ease;
        }
        
        .sidebar-menu {
            list-style: none;
            padding: 0;
            margin: 1rem 0;
        }
        
        .sidebar-menu li a {
            display: flex;
            align-items: center;
            padding: 0.75rem 1.5rem;
            color: #333;
            text-decoration: none;
            transition: all 0.2s;
            border-left: 3px solid transparent;
        }
        
        .sidebar-menu li a:hover, .sidebar-menu li a.active {
            background-color: rgba(13, 110, 253, 0.1);
            border-left-color: var(--primary);
            color: var(--primary);
        }
        
        .sidebar-menu li a i {
            margin-right: 10px;
            width: 20px;
            text-align: center;
        }
        
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 0.125rem 0.25rem rgba(0,0,0,0.075);
            transition: transform 0.2s, box-shadow 0.2s;
            margin-bottom: 1.5rem;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.1);
        }
        
        .card-header {
            background-color: #fff;
            border-bottom: 1px solid rgba(0,0,0,0.05);
            font-weight: 600;
            padding: 1rem 1.25rem;
        }
        
        .stat-card {
            text-align: center;
            padding: 1.5rem;
        }
        
        .stat-card i {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: var(--primary);
        }
        
        .stat-card h3 {
            font-size: 1.75rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            color: var(--dark);
        }
        
        .stat-card p {
            color: var(--secondary);
            margin-bottom: 0;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .btn-primary {
            background-color: var(--primary);
            border-color: var(--primary);
            padding: 0.5rem 1.25rem;
            font-weight: 500;
        }
        
        .btn-primary:hover {
            background-color: #0b5ed7;
            border-color: #0a58ca;
        }
        
        .table {
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
        }
        
        .table thead th {
            background-color: #f8f9fa;
            border-bottom: 2px solid #e9ecef;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.75rem;
            letter-spacing: 0.5px;
            padding: 1rem;
        }
        
        .table tbody td {
            padding: 1rem;
            vertical-align: middle;
            border-color: #e9ecef;
        }
        
        .badge {
            padding: 0.5em 0.75em;
            font-weight: 500;
            border-radius: 0.25rem;
        }
        
        @media (max-width: 992px) {
            .sidebar {
                transform: translateX(-100%);
            }
            
            .sidebar.show {
                transform: translateX(0);
            }
            
            .main-content {
                margin-left: 0;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid">
            <button class="btn btn-link text-white d-lg-none" id="sidebarToggle">
                <i class="fas fa-bars"></i>
            </button>
            <a class="navbar-brand d-flex align-items-center" href="{{ route('dashboard') }}">
                <img src="{{ asset('images/logo/brgy-logo.png') }}" alt="Barangay Logo" class="me-2" style="height: 40px;">
                <div class="d-flex flex-column">
                    <span class="fw-bold mb-0">BARANGAY BAGONG BARRIO</span>
                    <small class="text-white-50">Management System</small>
                </div>
            </a>
            <div class="ms-auto d-flex align-items-center">
                <div class="dropdown">
                    <a class="nav-link d-flex align-items-center" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="me-3 text-end d-none d-md-block">
                            <div class="fw-semibold text-white text-uppercase">{{ strtoupper(Auth::user()->name) }}</div>
                            <div class="badge bg-white text-primary px-2 py-1" style="font-size: 0.7rem;">
                                <i class="fas fa-user-shield me-1"></i>
                                {{ ucfirst(Auth::user()->role) }}
                            </div>
                        </div>
                        <div class="rounded-circle bg-primary bg-opacity-25 d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
                            <i class="fas fa-user text-white"></i>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                        <li><a class="dropdown-item" href="#"><i class="fas fa-user me-2"></i> Profile</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-cog me-2"></i> Settings</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item">
                                    <i class="fas fa-sign-out-alt me-2"></i> Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <ul class="sidebar-menu">
            <li><a href="#" class="active"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
            <li><a href="#"><i class="fas fa-users"></i> Residents</a></li>
            <li><a href="#"><i class="fas fa-file-alt"></i> Documents</a></li>
            <li><a href="#"><i class="fas fa-calendar-alt"></i> Events</a></li>
            <li><a href="#"><i class="fas fa-bullhorn"></i> Announcements</a></li>
            <li><a href="#"><i class="fas fa-chart-bar"></i> Reports</a></li>
            <li><a href="#"><i class="fas fa-cog"></i> Settings</a></li>
        </ul>
        
        <!-- Quick Actions Button -->
        <div class="sidebar-actions p-3 border-top">
            <button class="btn btn-outline-secondary w-100 d-flex align-items-center justify-content-center" id="toggleQuickActions">
                <i class="fas fa-bolt me-2"></i> Quick Actions
            </button>
        </div>
    </div>
    
    <!-- Quick Actions Panel (will be moved to dashboard) -->
    <div id="quickActionsPlaceholder"></div>

    <!-- Main Content -->
    <div class="main-content" id="mainContent">
        @yield('content')
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Toggle sidebar on mobile
        document.getElementById('sidebarToggle').addEventListener('click', function(e) {
            e.stopPropagation();
            document.getElementById('sidebar').classList.toggle('show');
        });
        
        // Toggle quick actions between sidebar and dashboard
        const toggleQuickActions = document.getElementById('toggleQuickActions');
        const quickActionsContainer = document.getElementById('quickActionsContainer');
        const recentActivityContainer = document.getElementById('recentActivityContainer');
        let quickActionsInSidebar = true;
        
        // Function to adjust layout based on quick actions visibility
        function adjustLayout() {
            if (quickActionsContainer.style.display === 'none') {
                recentActivityContainer.classList.add('col-lg-12', 'col-xxl-12');
                recentActivityContainer.classList.remove('col-lg-8', 'col-xxl-9');
            } else {
                recentActivityContainer.classList.remove('col-lg-12', 'col-xxl-12');
                recentActivityContainer.classList.add('col-lg-8', 'col-xxl-9');
            }
        }
        
        // Hide quick actions in dashboard initially and adjust layout
        quickActionsContainer.style.display = 'none';
        adjustLayout();
        
        // Toggle quick actions between sidebar and dashboard
        toggleQuickActions.addEventListener('click', function(e) {
            e.stopPropagation();
            
            if (quickActionsInSidebar) {
                // Show in dashboard
                quickActionsContainer.style.display = 'block';
                // Update button text
                toggleQuickActions.innerHTML = '<i class="fas fa-bolt me-2"></i> Hide Quick Actions';
            } else {
                // Hide from dashboard
                quickActionsContainer.style.display = 'none';
                // Reset button text
                toggleQuickActions.innerHTML = '<i class="fas fa-bolt me-2"></i> Show Quick Actions';
            }
            
            // Adjust the layout
            adjustLayout();
            
            quickActionsInSidebar = !quickActionsInSidebar;
        });
        
        // Handle minimize/close in dashboard
        document.addEventListener('click', function(e) {
            if (e.target.closest('#minimizeQuickActions')) {
                e.preventDefault();
                // Hide from dashboard
                quickActionsContainer.style.display = 'none';
                // Reset button text
                toggleQuickActions.innerHTML = '<i class="fas fa-bolt me-2"></i> Show Quick Actions';
                quickActionsInSidebar = false;
                // Adjust the layout
                adjustLayout();
            }
        });
        
        // Close sidebar when clicking outside on mobile
        document.addEventListener('click', function(event) {
            const sidebar = document.getElementById('sidebar');
            const sidebarToggle = document.getElementById('sidebarToggle');
            
            if (window.innerWidth <= 992 && 
                !sidebar.contains(event.target) && 
                !sidebarToggle.contains(event.target) && 
                sidebar.classList.contains('show')) {
                sidebar.classList.remove('show');
            }
        });
        
        // Update active menu item
        document.querySelectorAll('.sidebar-menu a').forEach(link => {
            link.addEventListener('click', function() {
                document.querySelectorAll('.sidebar-menu a').forEach(l => l.classList.remove('active'));
                this.classList.add('active');
            });
        });
    </script>
</body>
</html>
