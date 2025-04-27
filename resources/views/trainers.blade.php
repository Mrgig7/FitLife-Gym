@extends('layouts.app')

@section('title', 'Trainers')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section hero-section-sm d-flex align-items-center" style="background-image: url('https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1470&q=80');">
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold text-white">Our Trainers</h1>
                    <p class="lead text-white">Meet our professional team of fitness experts dedicated to your success</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Trainers Section -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <h2 class="section-title text-center">Meet The Team</h2>
                    <p class="text-center text-muted">Our certified fitness professionals are here to guide and motivate you</p>
                </div>
            </div>

            <div class="row">
                @forelse($trainers as $trainer)
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="card h-100 border-0 shadow-sm card-hover text-center">
                            <img src="https://source.unsplash.com/random/300x300/?trainer,fitness,{{ $loop->iteration }}" class="card-img-top" alt="{{ $trainer->user->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $trainer->user->name }}</h5>
                                <p class="card-text text-danger mb-2">{{ $trainer->specialization }}</p>
                                <p class="card-text text-muted">{{ Str::limit($trainer->bio, 100) }}</p>
                                <p class="card-text"><small class="text-muted">{{ $trainer->certification }}</small></p>
                                <p class="card-text"><small class="text-muted">{{ $trainer->experience_years }} years of experience</small></p>
                                <div class="d-flex justify-content-center mt-3">
                                    <a href="#" class="text-dark mx-1"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="text-dark mx-1"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="text-dark mx-1"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <p>No trainers available at the moment. Please check back soon!</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Trainer Benefits Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <h2 class="section-title text-center">Why Train With Us?</h2>
                    <p class="text-center text-muted">Our trainers are committed to helping you achieve your fitness goals</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card border-0 shadow-sm h-100 card-hover">
                        <div class="card-body p-4">
                            <h4 class="mb-3"><i class="fas fa-certificate text-danger me-2"></i> Certified Professionals</h4>
                            <p class="text-muted">All our trainers are certified by leading fitness institutions and have years of experience in their specialties.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0 shadow-sm h-100 card-hover">
                        <div class="card-body p-4">
                            <h4 class="mb-3"><i class="fas fa-user-cog text-danger me-2"></i> Personalized Approach</h4>
                            <p class="text-muted">We create customized workout plans based on your fitness level, goals, and preferences.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0 shadow-sm h-100 card-hover">
                        <div class="card-body p-4">
                            <h4 class="mb-3"><i class="fas fa-chart-line text-danger me-2"></i> Consistent Progress</h4>
                            <p class="text-muted">Our trainers help you track your progress and continuously adjust your plan for optimal results.</p>
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
                    <h2 class="fw-bold mb-3">Ready to Start Training?</h2>
                    <p class="lead mb-0">Join FitLife Gym today and work with our expert trainers to transform your fitness.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="{{ route('membership') }}" class="btn btn-light btn-lg px-4">Join Now</a>
                </div>
            </div>
        </div>
    </section>
@endsection 