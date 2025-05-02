@extends('layouts.app')

@section('title', 'Home')

@section('styles')
<style>
    .hero-section {
        min-height: 100vh !important;
        position: relative;
        background: linear-gradient(135deg, #121212 0%, #323232 100%);
        overflow: hidden;
    }
    
    .hero-section::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('https://images.unsplash.com/photo-1571902943202-507ec2618e8f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') no-repeat center center;
        background-size: cover;
        opacity: 0.4;
        z-index: 0;
    }
    
    .hero-content {
        position: relative;
        z-index: 1;
        padding-top: 120px;
    }
    
    .hero-badge {
        background: linear-gradient(90deg, #ff416c 0%, #ff4b2b 100%);
        border: none;
        padding: 12px 24px;
        font-weight: 600;
        letter-spacing: 1px;
        border-radius: 30px;
        box-shadow: 0 10px 20px rgba(255, 65, 108, 0.3);
        animation: fadeInUp 1s ease-out;
    }
    
    .hero-title {
        font-size: 4rem;
        font-weight: 800;
        line-height: 1.2;
        margin-bottom: 1.5rem;
        background: linear-gradient(90deg, #ffffff 0%, #e0e0e0 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        text-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
        animation: fadeInUp 1.2s ease-out;
    }
    
    .hero-text {
        font-size: 1.25rem;
        font-weight: 400;
        color: rgba(255, 255, 255, 0.9);
        max-width: 700px;
        margin-bottom: 2rem;
        animation: fadeInUp 1.4s ease-out;
    }
    
    .btn-join {
        background: linear-gradient(90deg, #ff416c 0%, #ff4b2b 100%);
        border: none;
        font-weight: 700;
        letter-spacing: 1px;
        padding: 15px 40px;
        border-radius: 50px;
        box-shadow: 0 10px 30px rgba(255, 65, 108, 0.3);
        transition: all 0.3s ease;
        animation: fadeInUp 1.6s ease-out;
    }
    
    .btn-join:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(255, 65, 108, 0.4);
        background: linear-gradient(90deg, #ff4b2b 0%, #ff416c 100%);
    }
    
    .btn-explore {
        background: transparent;
        border: 2px solid rgba(255, 255, 255, 0.3);
        font-weight: 700;
        letter-spacing: 1px;
        padding: 15px 40px;
        border-radius: 50px;
        transition: all 0.3s ease;
        animation: fadeInUp 1.8s ease-out;
    }
    
    .btn-explore:hover {
        background: rgba(255, 255, 255, 0.1);
        border-color: rgba(255, 255, 255, 0.5);
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }
    
    .members-counter {
        background-color: rgba(0, 0, 0, 0.3);
        border-radius: 50px;
        padding: 15px 25px;
        display: inline-flex;
        align-items: center;
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.1);
        animation: fadeInUp 2s ease-out;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    }
    
    .member-icon {
        width: 45px;
        height: 45px;
        border: 3px solid #fff;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }
    
    .section-header {
        margin-bottom: 4rem;
    }
    
    .section-badge {
        background: linear-gradient(90deg, #ff416c 0%, #ff4b2b 100%);
        border: none;
        padding: 10px 20px;
        font-weight: 600;
        letter-spacing: 1px;
        border-radius: 30px;
        box-shadow: 0 5px 15px rgba(255, 65, 108, 0.2);
    }
    
    .section-title {
        font-size: 3rem;
        font-weight: 800;
        margin-top: 1rem;
        margin-bottom: 1.5rem;
    }
    
    .feature-card {
        border-radius: 20px;
        padding: 40px;
        height: 100%;
        transition: all 0.4s ease;
        border: 1px solid rgba(0, 0, 0, 0.05);
    }
    
    .feature-card:hover {
        transform: translateY(-15px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    }
    
    .feature-icon {
        background: linear-gradient(135deg, #ff416c 0%, #ff4b2b 100%);
        width: 100px !important;
        height: 100px !important;
        margin-bottom: 25px;
        transition: all 0.4s ease;
        box-shadow: 0 10px 20px rgba(255, 65, 108, 0.2);
    }
    
    .feature-card:hover .feature-icon {
        transform: scale(1.1) rotate(10deg);
        box-shadow: 0 15px 30px rgba(255, 65, 108, 0.3);
    }
    
    .feature-title {
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 15px;
    }
    
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
    
    .testimonial-card {
        border-radius: 20px;
        padding: 40px;
        height: 100%;
        transition: all 0.4s ease;
        border: 1px solid rgba(0, 0, 0, 0.05);
    }
    
    .testimonial-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    }
</style>
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="hero-section d-flex align-items-center">
        <div class="container hero-content">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <span class="badge hero-badge mb-4">PREMIUM FITNESS EXPERIENCE</span>
                    <h1 class="hero-title">Transform Your Body,<br> Transform Your Life</h1>
                    <p class="hero-text">Join Hanamkonda's most exclusive fitness community. Experience world-class equipment, expert trainers, and luxury facilities designed for your fitness journey.</p>
                    <div class="d-flex flex-wrap gap-4 mt-5">
                        <a href="{{ route('membership') }}" class="btn btn-join">Join Now</a>
                        <a href="{{ route('classes') }}" class="btn btn-explore text-white"><i class="fas fa-play-circle me-2"></i>Explore Classes</a>
                    </div>
                    <div class="mt-5">
                        <div class="members-counter">
                            <div class="d-flex">
                                <div class="rounded-circle bg-danger text-white d-inline-flex align-items-center justify-content-center member-icon">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div class="rounded-circle bg-danger text-white d-inline-flex align-items-center justify-content-center member-icon ms-n3">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div class="rounded-circle bg-danger text-white d-inline-flex align-items-center justify-content-center member-icon ms-n3">
                                    <i class="fas fa-user"></i>
                                </div>
                            </div>
                            <div class="ms-3">
                                <p class="mb-0 text-white"><span class="fw-bold fs-5">1000+</span> elite members in Telangana</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-6 bg-light">
        <div class="container py-5">
            <div class="text-center section-header">
                <span class="badge section-badge">LUXURY FITNESS</span>
                <h2 class="section-title">Hanamkonda's Premier Fitness Experience</h2>
                <div class="mx-auto" style="max-width: 650px;">
                    <p class="lead text-muted">Our state-of-the-art facilities blend traditional Indian wellness with modern fitness science for an unparalleled experience.</p>
                </div>
            </div>
            <div class="row g-4 text-center">
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="feature-card bg-white shadow-sm h-100">
                        <div class="rounded-circle bg-danger text-white d-inline-flex align-items-center justify-content-center feature-icon">
                            <i class="fas fa-dumbbell fa-2x"></i>
                        </div>
                        <h3 class="feature-title">Elite Equipment</h3>
                        <p class="text-muted">Experience fitness with imported premium equipment. Our cutting-edge machines are designed for optimal results with maximum comfort and safety.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="feature-card bg-white shadow-sm h-100">
                        <div class="rounded-circle bg-danger text-white d-inline-flex align-items-center justify-content-center feature-icon">
                            <i class="fas fa-user-friends fa-2x"></i>
                        </div>
                        <h3 class="feature-title">Celebrity Trainers</h3>
                        <p class="text-muted">Train with India's top fitness experts who coach Bollywood celebrities and elite athletes. Personalized programs for transformative results.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card bg-white shadow-sm h-100">
                        <div class="rounded-circle bg-danger text-white d-inline-flex align-items-center justify-content-center feature-icon">
                            <i class="fas fa-spa fa-2x"></i>
                        </div>
                        <h3 class="feature-title">Luxury Amenities</h3>
                        <p class="text-muted">Indulge in premium spa services, nutrition counseling, ayurvedic treatments, and luxury locker rooms with steam, sauna, and jacuzzi facilities.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Classes Section -->
    <section class="py-6 bg-white">
        <div class="container py-5">
            <div class="row mb-5 align-items-center">
                <div class="col-lg-6">
                    <span class="badge section-badge">OUR CLASSES</span>
                    <h2 class="section-title">Featured Classes</h2>
                    <p class="lead text-muted">Discover our most popular fitness classes designed to challenge and transform your body.</p>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <a href="{{ route('classes') }}" class="btn btn-outline-dark rounded-pill px-4 py-3">View All Classes <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
            <div class="row g-4">
                @forelse($featuredClasses as $class)
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="class-card shadow-sm h-100">
                            <div class="position-relative">
                                <div class="card-img-top d-flex align-items-center justify-content-center bg-light" style="height: 220px;">
                                    <i class="fas fa-dumbbell fa-4x text-danger"></i>
                                </div>
                                <div class="position-absolute top-0 end-0 bg-danger text-white px-3 py-2 m-3 rounded-pill fw-bold">
                                    {{ $class->difficulty_level }}
                                </div>
                            </div>
                            <div class="card-body p-4">
                                <h3 class="card-title h5 fw-bold mb-3">{{ $class->name }}</h3>
                                <p class="card-text text-muted mb-3">{{ Str::limit($class->description, 100) }}</p>
                                <div class="d-flex align-items-center mb-3">
                                    <div class="rounded-circle bg-danger text-white d-inline-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                        <i class="fas fa-user"></i>
                                    </div>
                                    <span class="fw-bold ms-2">{{ $class->trainer->user->name }}</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <div>
                                        <i class="far fa-clock text-danger me-2"></i>
                                        <span>{{ $class->start_time->format('h:i A') }}</span>
                                    </div>
                                    <div>
                                        <i class="fas fa-map-marker-alt text-danger me-2"></i>
                                        <span>{{ $class->location }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-white border-0 p-4 pt-0">
                                <a href="{{ route('bookings.create', ['class_id' => $class->id]) }}" class="btn btn-danger w-100 rounded-pill py-2 fw-bold">Book Now</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <div class="p-5 bg-light rounded-4">
                            <i class="fas fa-calendar-times fa-3x text-muted mb-3"></i>
                            <h3 class="h5">No classes available at the moment</h3>
                            <p class="text-muted">Please check back soon for our upcoming fitness classes!</p>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="py-6 bg-light">
        <div class="container py-5">
            <div class="text-center section-header">
                <span class="badge section-badge">TESTIMONIALS</span>
                <h2 class="section-title">What Our Members Say</h2>
                <div class="mx-auto" style="max-width: 650px;">
                    <p class="lead text-muted">Hear from our community about how Gym Fitness Zone has helped transform their lives.</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="testimonial-card bg-white shadow-sm h-100">
                        <div class="d-flex align-items-center mb-4">
                            <div class="rounded-circle bg-danger text-white d-inline-flex align-items-center justify-content-center member-icon me-3">
                                <i class="fas fa-user fa-2x"></i>
                            </div>
                            <div>
                                <h4 class="h5 mb-0 fw-bold">Michael Davis</h4>
                                <p class="text-muted mb-0">Member since 2021</p>
                            </div>
                        </div>
                        <div class="testimonial-rating text-warning mb-3">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="mb-0">"The trainers at Gym Fitness Zone have completely transformed my approach to fitness. I've lost 30 pounds and gained more energy than I've had in years. The community here is incredible!"</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card bg-white shadow-sm h-100">
                        <div class="d-flex align-items-center mb-4">
                            <div class="rounded-circle bg-danger text-white d-inline-flex align-items-center justify-content-center member-icon me-3">
                                <i class="fas fa-user fa-2x"></i>
                            </div>
                            <div>
                                <h4 class="h5 mb-0 fw-bold">Sarah Johnson</h4>
                                <p class="text-muted mb-0">Member since 2022</p>
                            </div>
                        </div>
                        <div class="testimonial-rating text-warning mb-3">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="mb-0">"The variety of classes keeps me motivated and excited to work out! The yoga and HIIT classes are my favorites. The instructors are knowledgeable and incredibly supportive."</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card bg-white shadow-sm h-100">
                        <div class="d-flex align-items-center mb-4">
                            <div class="rounded-circle bg-danger text-white d-inline-flex align-items-center justify-content-center member-icon me-3">
                                <i class="fas fa-user fa-2x"></i>
                            </div>
                            <div>
                                <h4 class="h5 mb-0 fw-bold">James Wilson</h4>
                                <p class="text-muted mb-0">Member since 2020</p>
                            </div>
                        </div>
                        <div class="testimonial-rating text-warning mb-3">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <p class="mb-0">"From the moment I walked in, the staff made me feel welcome. The equipment is always clean and well-maintained. I've seen incredible results in just six months of consistent training."</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Membership Section -->
    <section class="py-6 bg-white">
        <div class="container py-5">
            <div class="text-center section-header">
                <span class="badge section-badge">PREMIUM MEMBERSHIP</span>
                <h2 class="section-title">Exclusive Membership Plans</h2>
                <div class="mx-auto" style="max-width: 650px;">
                    <p class="lead text-muted">Choose a premium membership plan tailored to your fitness aspirations and lifestyle</p>
                </div>
            </div>
            @include('components.pricing-cards', ['hideTitle' => true])
        </div>
    </section>

    <!-- Trainers Section -->
    <section class="py-6 bg-light">
        <div class="container py-5">
            <div class="row mb-5 align-items-center">
                <div class="col-lg-6">
                    <span class="badge section-badge">OUR TRAINERS</span>
                    <h2 class="section-title">Expert Trainers</h2>
                    <p class="lead text-muted">Our certified fitness professionals are here to guide and motivate you.</p>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <a href="{{ route('trainers') }}" class="btn btn-outline-dark rounded-pill px-4 py-3">View All Trainers <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
            @include('components.trainers-showcase', ['hideTitle' => true])
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5" style="background: linear-gradient(135deg, #ff416c 0%, #ff4b2b 100%);">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-8 text-white mb-4 mb-lg-0">
                    <h2 class="display-4 fw-bold mb-3">Ready to Transform Your Life?</h2>
                    <p class="lead mb-0">Join FitLife Gym today and experience the premium fitness journey that's changing lives across India.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="{{ route('membership') }}" class="btn btn-light btn-lg fw-bold px-4 py-3 rounded-pill">
                        Become a Member <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
<script>
    // Animation on scroll
    document.addEventListener('DOMContentLoaded', function() {
        const animateElements = document.querySelectorAll('.feature-card, .class-card, .testimonial-card');
        
        function checkVisibility() {
            animateElements.forEach(element => {
                const elementPosition = element.getBoundingClientRect();
                const windowHeight = window.innerHeight;
                
                if (elementPosition.top < windowHeight * 0.9) {
                    element.style.opacity = '1';
                    element.style.transform = 'translateY(0)';
                }
            });
        }
        
        // Set initial state
        animateElements.forEach(element => {
            element.style.opacity = '0';
            element.style.transform = 'translateY(30px)';
            element.style.transition = 'all 0.8s ease-out';
        });
        
        // Check on load
        checkVisibility();
        
        // Check on scroll
        window.addEventListener('scroll', checkVisibility);
    });
</script>
@endsection
