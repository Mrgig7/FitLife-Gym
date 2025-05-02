@extends('layouts.app')

@section('title', 'About Us')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section hero-section-sm d-flex align-items-center" style="background-image: url('https://images.unsplash.com/photo-1534258936925-c58bed479fcb?ixlib=rb-1.2.1&auto=format&fit=crop&w=1470&q=80');">
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold text-white">About Gym Fitness Zone</h1>
                    <p class="lead text-white">Learn about our mission, values, and the story behind our fitness center</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Story Section -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h2 class="section-title">Our Story</h2>
                    <p class="lead">Founded in 2010, Gym Fitness Zone was created with one mission in mind: to make fitness accessible to everyone.</p>
                    <p>What started as a small studio with just a few pieces of equipment has grown into a full-service fitness center with state-of-the-art facilities and a team of expert trainers. Our journey has been fueled by the passion to help people transform their lives through fitness and wellness.</p>
                    <p>Over the years, we've helped thousands of members achieve their fitness goals, whether it's losing weight, building muscle, improving athletic performance, or simply leading a healthier lifestyle. We believe that fitness is for everyone, regardless of age, experience, or fitness level.</p>
                </div>
                <div class="col-lg-6">
                    <img src="https://images.unsplash.com/photo-1576678927484-cc907957088c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1470&q=80" alt="Gym Fitness Zone" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- Our Mission Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title">Our Mission</h2>
                    <p class="lead">To inspire and support our members in their journey towards a healthier and fitter lifestyle through quality facilities, expert guidance, and a supportive community.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card border-0 shadow-sm h-100 card-hover">
                        <div class="card-body p-4 text-center">
                            <div class="rounded-circle bg-danger text-white d-inline-flex align-items-center justify-content-center mb-3" style="width: 70px; height: 70px;">
                                <i class="fas fa-heart fa-2x"></i>
                            </div>
                            <h4>Inspire</h4>
                            <p class="text-muted">We aim to motivate and inspire our members to adopt a healthier lifestyle and achieve their fitness goals.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0 shadow-sm h-100 card-hover">
                        <div class="card-body p-4 text-center">
                            <div class="rounded-circle bg-danger text-white d-inline-flex align-items-center justify-content-center mb-3" style="width: 70px; height: 70px;">
                                <i class="fas fa-hands-helping fa-2x"></i>
                            </div>
                            <h4>Support</h4>
                            <p class="text-muted">We provide the guidance, resources, and support needed for our members to succeed in their fitness journey.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0 shadow-sm h-100 card-hover">
                        <div class="card-body p-4 text-center">
                            <div class="rounded-circle bg-danger text-white d-inline-flex align-items-center justify-content-center mb-3" style="width: 70px; height: 70px;">
                                <i class="fas fa-users fa-2x"></i>
                            </div>
                            <h4>Community</h4>
                            <p class="text-muted">We foster a supportive community where members feel welcome, motivated, and part of something bigger.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Facilities Section -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h2 class="section-title">Our Facilities</h2>
                    <p class="text-muted">Explore our modern gym with top-quality equipment and amenities</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card border-0 shadow-sm h-100 card-hover">
                        <img src="https://images.unsplash.com/photo-1540497077202-7c8a3999166f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1470&q=80" class="card-img-top" alt="Cardio Area">
                        <div class="card-body">
                            <h5 class="card-title">Cardio Area</h5>
                            <p class="card-text text-muted">Our cardio section features the latest treadmills, ellipticals, stationary bikes, and rowing machines to help you get your heart pumping.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card border-0 shadow-sm h-100 card-hover">
                        <img src="https://images.unsplash.com/photo-1534438327276-14e5300c3a48?ixlib=rb-1.2.1&auto=format&fit=crop&w=1470&q=80" class="card-img-top" alt="Strength Training">
                        <div class="card-body">
                            <h5 class="card-title">Strength Training</h5>
                            <p class="card-text text-muted">Our weight section includes free weights, weight machines, and functional training equipment for all your strength training needs.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card border-0 shadow-sm h-100 card-hover">
                        <img src="https://images.unsplash.com/photo-1518611012118-696072aa579a?ixlib=rb-1.2.1&auto=format&fit=crop&w=1470&q=80" class="card-img-top" alt="Group Exercise Studio">
                        <div class="card-body">
                            <h5 class="card-title">Group Exercise Studios</h5>
                            <p class="card-text text-muted">Our spacious studios are designed for a variety of group classes, from high-energy cardio to mind-body practices.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h2 class="section-title">Leadership Team</h2>
                    <p class="text-muted">Meet the people behind Gym Fitness Zone</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card border-0 shadow-sm h-100 card-hover text-center">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1470&q=80" class="card-img-top" alt="Amit Verma">
                        <div class="card-body">
                            <h5 class="card-title">Amit Verma</h5>
                            <p class="card-text text-danger">Founder & CEO</p>
                            <p class="card-text text-muted">Amit founded Gym Fitness Zone with a vision to create a fitness center that prioritizes member experience and results. With over 15 years in the fitness industry, he's passionate about creating a space where everyone feels welcome.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0 shadow-sm h-100 card-hover text-center">
                        <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&auto=format&fit=crop&w=1470&q=80" class="card-img-top" alt="Deepa Krishnan">
                        <div class="card-body">
                            <h5 class="card-title">Deepa Krishnan</h5>
                            <p class="card-text text-danger">Fitness Director</p>
                            <p class="card-text text-muted">With over 12 years of experience in the fitness industry, Deepa oversees all fitness programs and trainer development. Her approach combines traditional Indian wellness practices with modern fitness science.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0 shadow-sm h-100 card-hover text-center">
                        <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1470&q=80" class="card-img-top" alt="Rahul Mehta">
                        <div class="card-body">
                            <h5 class="card-title">Rahul Mehta</h5>
                            <p class="card-text text-danger">Operations Manager</p>
                            <p class="card-text text-muted">Rahul ensures that our facilities run smoothly and that members have the best possible gym experience. His attention to detail and dedication to customer service make him invaluable to our team.</p>
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
                    <h2 class="fw-bold mb-3">Join Our Community</h2>
                    <p class="lead mb-0">Become a part of Gym Fitness Zone and start your fitness journey today!</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="{{ route('membership') }}" class="btn btn-light btn-lg px-4">View Memberships</a>
                </div>
            </div>
        </div>
    </section>
@endsection 