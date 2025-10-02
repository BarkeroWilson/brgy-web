@extends('layouts.dashboard')

@section('content')
<div class="container-fluid">
    <!-- Page Header -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <div class="d-flex">
            <a href="#" class="btn btn-sm btn-primary shadow-sm me-2">
                <i class="fas fa-download fa-sm text-white-50"></i> Generate Report
            </a>
            <a href="#" class="btn btn-sm btn-success shadow-sm">
                <i class="fas fa-plus fa-sm text-white-50"></i> Add New
            </a>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="row">
        <!-- Total Residents Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Residents</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">1,254</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Pending Requests</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Upcoming Events Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Upcoming Events</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">5</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- New Announcements Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                New Announcements</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">3</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-bullhorn fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- Content Row -->
    <div class="row">
        <!-- Quick Actions (hidden by default) -->
        <div class="col-lg-4 col-xxl-3 mb-4 order-lg-2" id="quickActionsContainer" style="display: none;">
            <div class="card border-left-primary shadow-sm h-100">
                <div class="card-header bg-white py-3 border-bottom">
                    <h6 class="m-0 font-weight-600 text-primary">Quick Actions</h6>
                </div>
                <div class="card-body p-3">
                    <div class="d-grid gap-2">
                        <a href="#" class="btn btn-outline-primary btn-sm text-left d-flex align-items-center">
                            <i class="fas fa-user-plus me-2"></i> Add New Resident
                        </a>
                        <a href="#" class="btn btn-outline-primary btn-sm text-left d-flex align-items-center">
                            <i class="fas fa-calendar-plus me-2"></i> Create Event
                        </a>
                        <a href="#" class="btn btn-outline-primary btn-sm text-left d-flex align-items-center">
                            <i class="fas fa-bullhorn me-2"></i> Post Announcement
                        </a>
                        <a href="#" class="btn btn-outline-primary btn-sm text-left d-flex align-items-center">
                            <i class="fas fa-file-export me-2"></i> Generate Report
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Recent Activity -->
        <div class="col-lg-8 col-xxl-9 mb-4 order-lg-1" id="recentActivityContainer">
            <div class="card shadow mb-4 h-100">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Recent Activity</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="#">View All</a></li>
                            <li><a class="dropdown-item" href="#">Mark as Read</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="timeline">
                        <!-- Activity Item 1 -->
                        <div class="timeline-item">
                            <div class="timeline-marker bg-primary">
                                <i class="fas fa-user-plus text-white"></i>
                            </div>
                            <div class="timeline-content">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-1">New Resident Registered</h6>
                                    <small class="text-muted">10 minutes ago</small>
                                </div>
                                <p class="mb-1">Juan Dela Cruz has registered as a new resident.</p>
                                <small class="text-muted">ID: #12345</small>
                            </div>
                        </div>
                        
                        <!-- Activity Item 2 -->
                        <div class="timeline-item">
                            <div class="timeline-marker bg-success">
                                <i class="fas fa-calendar-check text-white"></i>
                            </div>
                            <div class="timeline-content">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-1">New Event Created</h6>
                                    <small class="text-muted">2 hours ago</small>
                                </div>
                                <p class="mb-1">"Barangay Assembly" has been scheduled for October 15, 2023.</p>
                                <a href="#" class="btn btn-sm btn-outline-primary btn-sm">View Details</a>
                            </div>
                        </div>
                        
                        <!-- Activity Item 3 -->
                        <div class="timeline-item">
                            <div class="timeline-marker bg-warning">
                                <i class="fas fa-exclamation-triangle text-white"></i>
                            </div>
                            <div class="timeline-content">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-1">Document Request</h6>
                                    <small class="text-muted">5 hours ago</small>
                                </div>
                                <p class="mb-1">Maria Santos requested a Barangay Clearance.</p>
                                <div class="btn-group">
                                    <button class="btn btn-sm btn-success">Approve</button>
                                    <button class="btn btn-sm btn-danger">Reject</button>
                                    <button class="btn btn-sm btn-outline-secondary">View</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Announcements -->
        <div class="col-lg-12 order-lg-3">
            <div class="card shadow">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Recent Announcements</h6>
                    <a href="#" class="btn btn-sm btn-link">View All</a>
                </div>
                <div class="card-body">
                    <div class="list-group list-group-flush">
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1">Community Clean-up Drive</h6>
                                <small class="text-muted">2 days ago</small>
                            </div>
                            <p class="mb-1">Join us this Saturday for a community clean-up event at the park.</p>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1">Barangay Assembly</h6>
                                <small class="text-muted">5 days ago</small>
                            </div>
                            <p class="mb-1">Monthly barangay assembly meeting scheduled for next week.</p>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1">Health Check-up</h6>
                                <small class="text-muted">1 week ago</small>
                            </div>
                            <p class="mb-1">Free health check-up for all senior citizens this coming Monday.</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Timeline Styling */
    .timeline {
        position: relative;
        padding-left: 2rem;
    }
    
    .timeline:before {
        content: '';
        position: absolute;
        top: 0;
        bottom: 0;
        left: 1.5rem;
        width: 2px;
        background-color: #e9ecef;
    }
    
    .main-content {
        transition: all 0.3s ease;
    }
    
    .timeline-item {
        position: relative;
        padding-bottom: 1.5rem;
    }
    
    .timeline-marker {
        position: absolute;
        left: -2.5rem;
        width: 2rem;
        height: 2rem;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .btn-outline-primary {
        border-color: #4e73df;
        color: #4e73df;
        transition: all 0.2s ease;
        padding: 0.5rem 1rem;
        background-color: #f8f9fc;
    }
    
    .btn-outline-primary:hover {
        background-color: #eaecf4;
        border-color: #2e59d9;
        color: #224abe;
    }
    
    .text-primary {
        color: #4e73df !important;
    }
    
    .timeline-content h6 {
        font-weight: 600;
        color: #4e73df;
    }
</style>

<script>
        // Handle minimize/close in dashboard
        document.addEventListener('DOMContentLoaded', function() {
            const quickActionsContainer = document.getElementById('quickActionsContainer');
            const toggleQuickActions = document.getElementById('toggleQuickActions');
            const recentActivityContainer = document.getElementById('recentActivityContainer');
            let quickActionsInSidebar = true;
            
            function adjustLayout() {
                if (!recentActivityContainer) return;
                
                if (quickActionsContainer.style.display === 'none') {
                    recentActivityContainer.classList.add('col-lg-12', 'col-xxl-12');
                    recentActivityContainer.classList.remove('col-lg-8', 'col-xxl-9');
                } else {
                    recentActivityContainer.classList.remove('col-lg-12', 'col-xxl-12');
                    recentActivityContainer.classList.add('col-lg-8', 'col-xxl-9');
                }
            }
            
            // Initialize layout
            if (quickActionsContainer) {
                quickActionsContainer.style.display = 'none';
                adjustLayout();
            }
            
            // Toggle quick actions from sidebar button
            if (toggleQuickActions) {
                toggleQuickActions.addEventListener('click', function(e) {
                    e.stopPropagation();
                    
                    if (quickActionsInSidebar) {
                        quickActionsContainer.style.display = 'block';
                        toggleQuickActions.innerHTML = '<i class="fas fa-bolt me-2"></i> Hide Quick Actions';
                    } else {
                        quickActionsContainer.style.display = 'none';
                        toggleQuickActions.innerHTML = '<i class="fas fa-bolt me-2"></i> Show Quick Actions';
                    }
                    adjustLayout();
                    quickActionsInSidebar = !quickActionsInSidebar;
                });
            }
            
        });
    </script>
@endsection
