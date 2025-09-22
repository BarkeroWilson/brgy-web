<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay Portal</title>
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
        }
        
        body {
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
            color: #333;
            line-height: 1.6;
        }
        
        .navbar {
            padding: 0.5rem 0;
            background-color: #003366 !important;
            transition: all 0.3s ease;
            height: 80px;
        }
        
        .navbar-brand {
            display: flex;
            align-items: center;
            color: #ffffff !important;
            font-size: 1.25rem;
            font-weight: 600;
        }
        
        .navbar-nav .nav-link {
            color: rgba(255, 255, 255, 0.9) !important;
            padding: 0.5rem 1rem;
            margin: 0 0.25rem;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .navbar-nav .nav-link:hover {
            color: #e6f0ff !important;
        }
        
        .navbar-toggler {
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding: 0.5rem;
        }
        
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.9%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }
        
        .navbar-scrolled {
            background-color: #003366 !important;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 0.5rem 0;
        }
        
        .navbar-scrolled .navbar-nav .nav-link {
            color: rgba(255, 255, 255, 0.9) !important;
        }
        
        .navbar-scrolled .navbar-nav .nav-link:hover {
            color: #e6f0ff !important;
        }
        
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('{{ asset("images/hero/hero-bg.jpg") }}');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 6rem 0;
        }
        
        .service-card {
            border: none;
            border-radius: 10px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-bottom: 1.5rem;
        }
        
        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        /* Section Headings */
        .text-center h2 {
            position: relative;
            display: inline-block;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        
        .text-center h2::after {
            content: '';
            position: absolute;
            width: 60px;
            height: 3px;
            background-color: #0d6efd;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 3px;
        }
        
        .service-icon {
            width: 60px;
            height: 60px;
            background-color: rgba(13, 110, 253, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
        }
        
        .section-title {
            position: relative;
            display: inline-block;
            margin-bottom: 2rem;
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            width: 50px;
            height: 3px;
            background: var(--primary);
            bottom: -10px;
            left: 0;
        }
        
        footer {
            background-color: var(--dark);
            color: white;
            padding: 4rem 0 2rem;
        }
        
        .social-links a {
            color: white;
            margin-right: 1rem;
            font-size: 1.2rem;
            transition: color 0.3s ease;
        }
        
        .social-links a:hover {
            color: var(--primary);
            text-decoration: none;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <x-navigation />

    <!-- Hero Section -->
    <section class="hero d-flex align-items-center" id="home" style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('{{ asset('images/hero/hero-section.jpg') }}') no-repeat center center/cover; min-height: 80vh;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center text-white">
                    <h1 class="display-4 fw-bold mb-4">Welcome to Bagong Barrio</h1>
                    <p class="lead mb-5">Your one-stop platform for all barangay services and community updates. We are committed to serving you better.</p>
                    <div class="d-flex flex-column flex-sm-row justify-content-center gap-3">
                        <a href="#services" class="btn btn-primary btn-lg px-4">Our Services</a>
                        <a href="#contact" class="btn btn-outline-light btn-lg px-4">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-5" id="services">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="position-relative d-inline-block pb-3 mb-4">
                    Our Services
                    <span class="position-absolute bottom-0 start-50 translate-middle-x" style="width: 80px; height: 3px; background-color: #0d6efd;"></span>
                </h2>
                <p class="text-muted">Comprehensive services for all your needs</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 p-4">
                        <div class="service-icon mx-auto">
                            <i class="fas fa-file-alt text-primary fa-2x"></i>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">Document Requests</h5>
                            <p class="card-text">Request for Barangay Clearance, Certificate of Residency, and other official documents.</p>
                            <a href="#" class="btn btn-link text-primary text-decoration-none">Learn More <i class="fas fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 p-4">
                        <div class="service-icon mx-auto">
                            <i class="fas fa-clipboard-check text-primary fa-2x"></i>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">Permit Applications</h5>
                            <p class="card-text">Apply for business permits, building permits, and other barangay-issued permits.</p>
                            <a href="#" class="btn btn-link text-primary text-decoration-none">Apply Now <i class="fas fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 p-4">
                        <div class="service-icon mx-auto">
                            <i class="fas fa-comment-dots text-primary fa-2x"></i>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">Report Concerns</h5>
                            <p class="card-text">Report issues or share your concerns with the barangay officials.</p>
                            <a href="#" class="btn btn-link text-primary text-decoration-none">Report Now <i class="fas fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Links Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-3 col-6">
                    <div class="text-center p-4 bg-white rounded-3 h-100">
                        <div class="service-icon mx-auto mb-3">
                            <i class="fas fa-file-download text-primary fa-lg"></i>
                        </div>
                        <h5 class="h6 fw-bold mb-2">Downloadable Forms</h5>
                        <p class="small text-muted mb-0">Access and download necessary forms for your transactions.</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="text-center p-4 bg-white rounded-3 h-100">
                        <div class="service-icon mx-auto mb-3">
                            <i class="fas fa-bullhorn text-primary fa-lg"></i>
                        </div>
                        <h5 class="h6 fw-bold mb-2">Announcements</h5>
                        <p class="small text-muted mb-0">Stay informed with the latest barangay announcements and updates.</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="text-center p-4 bg-white rounded-3 h-100">
                        <div class="service-icon mx-auto mb-3">
                            <i class="fas fa-images text-primary fa-lg"></i>
                        </div>
                        <h5 class="h6 fw-bold mb-2">Photo Gallery</h5>
                        <p class="small text-muted mb-0">View photos from our recent events and activities.</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="text-center p-4 bg-white rounded-3 h-100">
                        <div class="service-icon mx-auto mb-3">
                            <i class="fas fa-question-circle text-primary fa-lg"></i>
                        </div>
                        <h5 class="h6 fw-bold mb-2">FAQs</h5>
                        <p class="small text-muted mb-0">Find answers to commonly asked questions about our services.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Contact Section -->
    <section class="py-5 bg-light" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-5">
                            <div class="text-center mb-5">
                                <h2 class="section-title d-inline-block">Contact Us</h2>
                                <p class="text-muted">Have questions? We're here to help!</p>
                            </div>
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">Your Name</label>
                                        <input type="text" class="form-control" id="name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email Address</label>
                                        <input type="email" class="form-control" id="email" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="subject" class="form-label">Subject</label>
                                        <input type="text" class="form-control" id="subject" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="message" class="form-label">Message</label>
                                        <textarea class="form-control" id="message" rows="5" required></textarea>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-primary px-4">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-5">
        <div class="container text-center">
            <p class="mb-0">still working on it...</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Navbar scroll effect
        const navbar = document.querySelector('.navbar');
        if (navbar) {
            window.addEventListener('scroll', function() {
                if (window.scrollY > 50) {
                    navbar.classList.add('navbar-scrolled');
                } else {
                    navbar.classList.remove('navbar-scrolled');
                }
            });
        }
        
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
    </script>
</body>
</html>
