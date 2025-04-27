@extends('layouts.app')

@section('title', 'Membership Plans')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section hero-section-sm d-flex align-items-center" style="background: linear-gradient(to right, #212529, #495057); min-height: 50vh;">
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <div class="row">
                <div class="col-lg-8">
                    <span class="badge bg-danger text-white px-3 py-2 mb-3 fs-6">EXCLUSIVE MEMBERSHIPS</span>
                    <h1 class="display-4 fw-bold text-white">Premium Membership Plans</h1>
                    <p class="lead text-white">Experience luxury fitness with our exclusive membership options</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Membership Plans Section -->
    <section class="py-6 bg-white">
        @include('components.pricing-cards')
    </section>

    <!-- Membership Benefits Section -->
    <section class="py-6 bg-light">
        <div class="container py-5">
            <div class="row mb-5">
                <div class="col-12">
                    <span class="badge bg-danger text-white px-3 py-2 mb-3 d-block mx-auto text-center" style="width: fit-content;">PREMIUM BENEFITS</span>
                    <h2 class="section-title text-center display-5 fw-bold">Exclusive Membership Benefits</h2>
                    <div class="mx-auto" style="max-width: 650px;">
                        <p class="lead text-center text-muted">All memberships include these premium benefits</p>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card border-0 shadow-sm h-100 card-hover text-center">
                        <div class="card-body p-4">
                            <div class="rounded-circle bg-danger text-white d-inline-flex align-items-center justify-content-center mb-4 feature-icon" style="width: 80px; height: 80px;">
                                <i class="fas fa-clock fa-2x"></i>
                            </div>
                            <h4 class="fw-bold">24/7 Access</h4>
                            <p class="text-muted">Unlimited access to our luxury facilities whenever inspiration strikes.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card border-0 shadow-sm h-100 card-hover text-center">
                        <div class="card-body p-4">
                            <div class="rounded-circle bg-danger text-white d-inline-flex align-items-center justify-content-center mb-4 feature-icon" style="width: 80px; height: 80px;">
                                <i class="fas fa-dumbbell fa-2x"></i>
                            </div>
                            <h4 class="fw-bold">Premium Equipment</h4>
                            <p class="text-muted">The latest internationally imported fitness equipment and machines.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card border-0 shadow-sm h-100 card-hover text-center">
                        <div class="card-body p-4">
                            <div class="rounded-circle bg-danger text-white d-inline-flex align-items-center justify-content-center mb-4 feature-icon" style="width: 80px; height: 80px;">
                                <i class="fas fa-spa fa-2x"></i>
                            </div>
                            <h4 class="fw-bold">Spa & Relaxation</h4>
                            <p class="text-muted">Luxurious locker rooms with steam, sauna, and premium amenities.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card border-0 shadow-sm h-100 card-hover text-center">
                        <div class="card-body p-4">
                            <div class="rounded-circle bg-danger text-white d-inline-flex align-items-center justify-content-center mb-4 feature-icon" style="width: 80px; height: 80px;">
                                <i class="fas fa-users fa-2x"></i>
                            </div>
                            <h4 class="fw-bold">Elite Community</h4>
                            <p class="text-muted">Join India's most prestigious fitness community of like-minded individuals.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-6 bg-white">
        <div class="container py-5">
            <div class="row mb-5">
                <div class="col-12">
                    <span class="badge bg-danger text-white px-3 py-2 mb-3 d-block mx-auto text-center" style="width: fit-content;">FAQs</span>
                    <h2 class="section-title text-center display-5 fw-bold">Frequently Asked Questions</h2>
                    <div class="mx-auto" style="max-width: 650px;">
                        <p class="lead text-center text-muted">Find answers to common questions about our premium memberships</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion" id="membershipFAQ">
                        <div class="accordion-item border-0 shadow-sm mb-4 rounded-3 overflow-hidden">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button fw-bold py-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Can I cancel my membership at any time?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#membershipFAQ">
                                <div class="accordion-body">
                                    Yes, you can cancel your membership at any time. However, depending on your plan, there may be a cancellation fee or notice period required. Please refer to our membership terms for specific details.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 shadow-sm mb-4 rounded-3 overflow-hidden">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed fw-bold py-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Can I freeze my membership temporarily?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#membershipFAQ">
                                <div class="accordion-body">
                                    Yes, we offer membership freeze options for situations like travel, illness, or other circumstances. You can freeze your membership for up to 3 months per year.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 shadow-sm mb-4 rounded-3 overflow-hidden">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed fw-bold py-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Are there any additional fees beyond the membership cost?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#membershipFAQ">
                                <div class="accordion-body">
                                    Your membership fee covers all the amenities listed in your plan. Some premium services like additional personal training sessions or specialized workshops may have extra costs. All prices are inclusive of GST.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="cta-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <h2 class="display-5 fw-bold text-white mb-3">Begin Your Elite Fitness Journey Today</h2>
                    <p class="lead text-white mb-0">Join India's most prestigious fitness club with world-class facilities and trainers trusted by celebrities.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="{{ route('register') }}" class="btn btn-light btn-lg px-5 py-3 rounded-pill fw-bold cta-btn">Become a Member <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </section>
@endsection 