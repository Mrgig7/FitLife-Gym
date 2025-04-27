@extends('layouts.app')

@section('title', 'Classes')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section hero-section-sm d-flex align-items-center" style="background-image: url('https://images.unsplash.com/photo-1518644730709-0835105d9daa?ixlib=rb-1.2.1&auto=format&fit=crop&w=1470&q=80');">
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold text-white">Our Classes</h1>
                    <p class="lead text-white">Discover a variety of fitness classes designed to help you reach your goals</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Classes Section -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <h2 class="section-title text-center">Available Classes</h2>
                    <p class="text-center text-muted">Join any of our professional instructor-led classes</p>
                </div>
            </div>

            <div class="row">
                @forelse($classes as $class)
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card h-100 border-0 shadow-sm card-hover">
                            <div class="position-relative">
                                <img src="https://source.unsplash.com/random/600x400/?fitness,{{ $loop->iteration }}" class="card-img-top" alt="{{ $class->name }}">
                                <div class="position-absolute top-0 end-0 bg-danger text-white px-3 py-1 m-2 rounded-pill">
                                    {{ $class->difficulty_level }}
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $class->name }}</h5>
                                <p class="card-text text-muted mb-2">{{ Str::limit($class->description, 100) }}</p>
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fas fa-user-circle text-muted me-2"></i>
                                    <span>{{ $class->trainer->user->name }}</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <i class="far fa-clock text-muted me-2"></i>
                                        <span>{{ $class->start_time->format('h:i A') }}</span>
                                    </div>
                                    <div>
                                        <i class="fas fa-map-marker-alt text-muted me-2"></i>
                                        <span>{{ $class->location }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-white border-0 pt-0">
                                @auth
                                    <a href="{{ route('bookings.create', ['class_id' => $class->id]) }}" class="btn btn-danger w-100">Book Now</a>
                                @else
                                    <a href="{{ route('login') }}" class="btn btn-danger w-100">Login to Book</a>
                                @endauth
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <p>No classes available at the moment. Please check back soon!</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Class Categories Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <h2 class="section-title text-center">Class Categories</h2>
                    <p class="text-center text-muted">We offer a wide range of class types to suit your fitness goals</p>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-md-4 mb-4">
                    <div class="card border-0 shadow-sm h-100 card-hover">
                        <div class="card-body p-4">
                            <div class="rounded-circle bg-danger text-white d-inline-flex align-items-center justify-content-center mb-3" style="width: 70px; height: 70px;">
                                <i class="fas fa-dumbbell fa-2x"></i>
                            </div>
                            <h4>Strength Training</h4>
                            <p class="text-muted">Build muscle, increase strength, and improve your overall fitness with our expert-led strength training classes.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0 shadow-sm h-100 card-hover">
                        <div class="card-body p-4">
                            <div class="rounded-circle bg-danger text-white d-inline-flex align-items-center justify-content-center mb-3" style="width: 70px; height: 70px;">
                                <i class="fas fa-heartbeat fa-2x"></i>
                            </div>
                            <h4>Cardio Workouts</h4>
                            <p class="text-muted">Boost your cardiovascular health, burn calories, and increase your endurance with our high-energy cardio classes.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0 shadow-sm h-100 card-hover">
                        <div class="card-body p-4">
                            <div class="rounded-circle bg-danger text-white d-inline-flex align-items-center justify-content-center mb-3" style="width: 70px; height: 70px;">
                                <i class="fas fa-spa fa-2x"></i>
                            </div>
                            <h4>Mind & Body</h4>
                            <p class="text-muted">Improve flexibility, reduce stress, and enhance your mental wellbeing with our yoga and meditation classes.</p>
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
                    <h2 class="fw-bold mb-3">Ready to Join a Class?</h2>
                    <p class="lead mb-0">Start your fitness journey today with our professional instructors.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    @auth
                        <a href="{{ route('bookings.create') }}" class="btn btn-light btn-lg px-4">Book a Class</a>
                    @else
                        <a href="{{ route('register') }}" class="btn btn-light btn-lg px-4">Sign Up</a>
                    @endauth
                </div>
            </div>
        </div>
    </section>
@endsection 