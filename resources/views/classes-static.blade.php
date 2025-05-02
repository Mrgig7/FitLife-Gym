@extends('layouts.app')

@section('title', 'Available Classes')

@section('styles')
<style>
    .class-card {
        border-radius: 20px;
        overflow: hidden;
        transition: all 0.4s ease;
        border: none;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }
    
    .class-card:hover {
        transform: translateY(-15px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    }
    
    .class-image {
        height: 200px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-size: cover;
        background-position: center;
        position: relative;
    }
    
    .class-image::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(220, 53, 69, 0.7) 0%, rgba(255, 0, 0, 0.3) 100%);
    }
    
    .class-icon {
        position: relative;
        z-index: 2;
        font-size: 4rem;
        color: white;
        text-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    }
</style>
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="hero-section hero-section-sm d-flex align-items-center" style="background-image: url('https://images.unsplash.com/photo-1518644730709-0835105d9daa?ixlib=rb-1.2.1&auto=format&fit=crop&w=1470&q=80');">
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold text-white">Available Classes</h1>
                    <p class="lead text-white">Join any of our professional instructor-led classes</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Classes Section -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h2 class="section-title">Our Class Offerings</h2>
                    <p class="text-muted mb-5">Discover our wide range of fitness classes designed to help you achieve your goals</p>
                </div>
            </div>

            <div class="row">
                <!-- Power Lifting Class -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card class-card h-100">
                        <div class="class-image" style="background-color: #212529;">
                            <i class="fas fa-dumbbell class-icon"></i>
                        </div>
                        <div class="position-absolute top-0 end-0 bg-danger text-white px-3 py-2 m-3 rounded-pill fw-bold">
                            Advanced
                        </div>
                        <div class="card-body p-4">
                            <h5 class="card-title fw-bold">Power Lifting</h5>
                            <p class="card-text text-muted mb-3">This class focuses on building strength through compound lifts like squats, deadlifts, and bench pre...</p>
                            <div class="d-flex align-items-center mb-3">
                                <div class="rounded-circle bg-danger text-white d-inline-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                    <i class="fas fa-user"></i>
                                </div>
                                <span class="fw-bold ms-2">Rajiv Sharma</span>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div>
                                    <i class="far fa-clock text-danger me-2"></i>
                                    <span>09:00 AM</span>
                                </div>
                                <div>
                                    <i class="fas fa-map-marker-alt text-danger me-2"></i>
                                    <span>Weight Room</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-white border-0 p-4 pt-0">
                            <a href="#" class="btn btn-danger w-100 rounded-pill py-2 fw-bold">Book Now</a>
                        </div>
                    </div>
                </div>

                <!-- Morning Yoga Class -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card class-card h-100">
                        <div class="class-image" style="background-color: #6c757d;">
                            <i class="fas fa-spa class-icon"></i>
                        </div>
                        <div class="position-absolute top-0 end-0 bg-danger text-white px-3 py-2 m-3 rounded-pill fw-bold">
                            Beginner
                        </div>
                        <div class="card-body p-4">
                            <h5 class="card-title fw-bold">Morning Yoga</h5>
                            <p class="card-text text-muted mb-3">Start your day with this energizing yoga class designed to improve flexibility and balance.</p>
                            <div class="d-flex align-items-center mb-3">
                                <div class="rounded-circle bg-danger text-white d-inline-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                    <i class="fas fa-user"></i>
                                </div>
                                <span class="fw-bold ms-2">Priya Patel</span>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div>
                                    <i class="far fa-clock text-danger me-2"></i>
                                    <span>07:00 AM</span>
                                </div>
                                <div>
                                    <i class="fas fa-map-marker-alt text-danger me-2"></i>
                                    <span>Studio 1</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-white border-0 p-4 pt-0">
                            <a href="#" class="btn btn-danger w-100 rounded-pill py-2 fw-bold">Book Now</a>
                        </div>
                    </div>
                </div>

                <!-- HIIT Workout Class -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card class-card h-100">
                        <div class="class-image" style="background-color: #343a40;">
                            <i class="fas fa-heartbeat class-icon"></i>
                        </div>
                        <div class="position-absolute top-0 end-0 bg-danger text-white px-3 py-2 m-3 rounded-pill fw-bold">
                            Intermediate
                        </div>
                        <div class="card-body p-4">
                            <h5 class="card-title fw-bold">HIIT Workout</h5>
                            <p class="card-text text-muted mb-3">High-intensity interval training to maximize calorie burn and improve cardiovascular fitness.</p>
                            <div class="d-flex align-items-center mb-3">
                                <div class="rounded-circle bg-danger text-white d-inline-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                    <i class="fas fa-user"></i>
                                </div>
                                <span class="fw-bold ms-2">Arjun Reddy</span>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div>
                                    <i class="far fa-clock text-danger me-2"></i>
                                    <span>06:00 PM</span>
                                </div>
                                <div>
                                    <i class="fas fa-map-marker-alt text-danger me-2"></i>
                                    <span>Cardio Zone</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-white border-0 p-4 pt-0">
                            <a href="#" class="btn btn-danger w-100 rounded-pill py-2 fw-bold">Book Now</a>
                        </div>
                    </div>
                </div>

                <!-- Core Strength Class -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card class-card h-100">
                        <div class="class-image" style="background-color: #495057;">
                            <i class="fas fa-sync-alt class-icon"></i>
                        </div>
                        <div class="position-absolute top-0 end-0 bg-danger text-white px-3 py-2 m-3 rounded-pill fw-bold">
                            Intermediate
                        </div>
                        <div class="card-body p-4">
                            <h5 class="card-title fw-bold">Core Strength</h5>
                            <p class="card-text text-muted mb-3">Focus on building a strong core with exercises targeting abs, lower back, and obliques.</p>
                            <div class="d-flex align-items-center mb-3">
                                <div class="rounded-circle bg-danger text-white d-inline-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                    <i class="fas fa-user"></i>
                                </div>
                                <span class="fw-bold ms-2">Vikram Singh</span>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div>
                                    <i class="far fa-clock text-danger me-2"></i>
                                    <span>12:00 PM</span>
                                </div>
                                <div>
                                    <i class="fas fa-map-marker-alt text-danger me-2"></i>
                                    <span>Studio 2</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-white border-0 p-4 pt-0">
                            <a href="#" class="btn btn-danger w-100 rounded-pill py-2 fw-bold">Book Now</a>
                        </div>
                    </div>
                </div>

                <!-- Meditation & Relaxation Class -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card class-card h-100">
                        <div class="class-image" style="background-color: #6c757d;">
                            <i class="fas fa-peace class-icon"></i>
                        </div>
                        <div class="position-absolute top-0 end-0 bg-danger text-white px-3 py-2 m-3 rounded-pill fw-bold">
                            Beginner
                        </div>
                        <div class="card-body p-4">
                            <h5 class="card-title fw-bold">Meditation & Relaxation</h5>
                            <p class="card-text text-muted mb-3">Learn meditation techniques to reduce stress and improve mental wellbeing.</p>
                            <div class="d-flex align-items-center mb-3">
                                <div class="rounded-circle bg-danger text-white d-inline-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                    <i class="fas fa-user"></i>
                                </div>
                                <span class="fw-bold ms-2">Sunita Kapoor</span>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div>
                                    <i class="far fa-clock text-danger me-2"></i>
                                    <span>07:00 PM</span>
                                </div>
                                <div>
                                    <i class="fas fa-map-marker-alt text-danger me-2"></i>
                                    <span>Wellness Center</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-white border-0 p-4 pt-0">
                            <a href="#" class="btn btn-danger w-100 rounded-pill py-2 fw-bold">Book Now</a>
                        </div>
                    </div>
                </div>

                <!-- Bootcamp Challenge Class -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card class-card h-100">
                        <div class="class-image" style="background-color: #212529;">
                            <i class="fas fa-running class-icon"></i>
                        </div>
                        <div class="position-absolute top-0 end-0 bg-danger text-white px-3 py-2 m-3 rounded-pill fw-bold">
                            Advanced
                        </div>
                        <div class="card-body p-4">
                            <h5 class="card-title fw-bold">Bootcamp Challenge</h5>
                            <p class="card-text text-muted mb-3">A challenging full-body workout combining strength training and cardio.</p>
                            <div class="d-flex align-items-center mb-3">
                                <div class="rounded-circle bg-danger text-white d-inline-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                    <i class="fas fa-user"></i>
                                </div>
                                <span class="fw-bold ms-2">Kabir Malhotra</span>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div>
                                    <i class="far fa-clock text-danger me-2"></i>
                                    <span>08:00 AM</span>
                                </div>
                                <div>
                                    <i class="fas fa-map-marker-alt text-danger me-2"></i>
                                    <span>Outdoor Area</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-white border-0 p-4 pt-0">
                            <a href="#" class="btn btn-danger w-100 rounded-pill py-2 fw-bold">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-5 bg-danger text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <h2 class="fw-bold mb-3">Start Your Fitness Journey Today</h2>
                    <p class="lead mb-0">Join Gym Fitness Zone and experience the best fitness classes in Hanamkonda.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="{{ route('membership') }}" class="btn btn-light btn-lg px-4">View Memberships</a>
                </div>
            </div>
        </div>
    </section>
@endsection 