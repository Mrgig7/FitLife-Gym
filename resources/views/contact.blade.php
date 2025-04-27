@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section hero-section-sm d-flex align-items-center" style="background-image: url('https://images.unsplash.com/photo-1571902943202-507ec2618e8f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1470&q=80');">
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold text-white">Contact Us</h1>
                    <p class="lead text-white">Get in touch with our team for any questions or inquiries</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-5">
                            <h2 class="section-title text-center mb-4">Send Us a Message</h2>
                            
                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            
                            <form action="{{ route('contact.submit') }}" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-md-6 mb-3 mb-md-0">
                                        <label for="name" class="form-label">Your Name</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email Address</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone') }}">
                                    @error('phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="subject" class="form-label">Subject</label>
                                    <select class="form-select @error('subject') is-invalid @enderror" id="subject" name="subject" required>
                                        <option value="" selected disabled>Select a subject</option>
                                        <option value="Membership Inquiry" {{ old('subject') == 'Membership Inquiry' ? 'selected' : '' }}>Membership Inquiry</option>
                                        <option value="Class Information" {{ old('subject') == 'Class Information' ? 'selected' : '' }}>Class Information</option>
                                        <option value="Personal Training" {{ old('subject') == 'Personal Training' ? 'selected' : '' }}>Personal Training</option>
                                        <option value="Feedback" {{ old('subject') == 'Feedback' ? 'selected' : '' }}>Feedback</option>
                                        <option value="Other" {{ old('subject') == 'Other' ? 'selected' : '' }}>Other</option>
                                    </select>
                                    @error('subject')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label">Message</label>
                                    <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" rows="5" required>{{ old('message') }}</textarea>
                                    @error('message')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-danger btn-lg">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Information Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h2 class="section-title">Get In Touch</h2>
                    <p class="text-muted">We're here to help! Reach out to us through any of these channels</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card border-0 shadow-sm h-100 card-hover text-center">
                        <div class="card-body p-4">
                            <div class="rounded-circle bg-danger text-white d-inline-flex align-items-center justify-content-center mb-3" style="width: 70px; height: 70px;">
                                <i class="fas fa-map-marker-alt fa-2x"></i>
                            </div>
                            <h4>Visit Us</h4>
                            <p class="text-muted">123 Fitness Street<br>Gym City, GC 12345<br>United States</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0 shadow-sm h-100 card-hover text-center">
                        <div class="card-body p-4">
                            <div class="rounded-circle bg-danger text-white d-inline-flex align-items-center justify-content-center mb-3" style="width: 70px; height: 70px;">
                                <i class="fas fa-phone fa-2x"></i>
                            </div>
                            <h4>Call Us</h4>
                            <p class="text-muted">Main: (123) 456-7890<br>Support: (123) 456-7891<br>Fax: (123) 456-7892</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0 shadow-sm h-100 card-hover text-center">
                        <div class="card-body p-4">
                            <div class="rounded-circle bg-danger text-white d-inline-flex align-items-center justify-content-center mb-3" style="width: 70px; height: 70px;">
                                <i class="fas fa-envelope fa-2x"></i>
                            </div>
                            <h4>Email Us</h4>
                            <p class="text-muted">info@fitlifegym.com<br>support@fitlifegym.com<br>membership@fitlifegym.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h2 class="section-title">Our Location</h2>
                    <p class="text-muted">Find us on the map</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="map-responsive shadow-sm rounded">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.2375861336187!2d-74.0059394843667!3d40.7127837792989!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a197c06b7cb%3A0x40a06c78f79e5de6!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sin!4v1619071475898!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Business Hours Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h2 class="section-title">Business Hours</h2>
                    <p class="text-muted">When you can visit our facility</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="row border-bottom pb-3 mb-3">
                                <div class="col-md-6">
                                    <h5 class="mb-md-0">Monday - Friday</h5>
                                </div>
                                <div class="col-md-6 text-md-end">
                                    <p class="mb-0 text-muted">5:00 AM - 11:00 PM</p>
                                </div>
                            </div>
                            <div class="row border-bottom pb-3 mb-3">
                                <div class="col-md-6">
                                    <h5 class="mb-md-0">Saturday</h5>
                                </div>
                                <div class="col-md-6 text-md-end">
                                    <p class="mb-0 text-muted">6:00 AM - 10:00 PM</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="mb-md-0">Sunday</h5>
                                </div>
                                <div class="col-md-6 text-md-end">
                                    <p class="mb-0 text-muted">7:00 AM - 8:00 PM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .map-responsive {
            overflow: hidden;
            padding-bottom: 400px;
            position: relative;
            height: 0;
        }
        
        .map-responsive iframe {
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            position: absolute;
        }
    </style>
@endsection 