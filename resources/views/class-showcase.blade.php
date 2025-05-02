@extends('layouts.app')

@section('title', 'Available Classes')

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

            <!-- Include the class tiles component -->
            @include('components.class-tiles')
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