@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<x-user-layout>
    <div class="container py-4">
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="d-flex align-items-center mb-2">
                    @if($user->profile_image)
                        <img src="{{ asset('storage/' . $user->profile_image) }}" alt="Profile Image" class="rounded-circle me-3" style="width: 60px; height: 60px; object-fit: cover;">
                    @else
                        <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center me-3" style="width: 60px; height: 60px; color: white; font-size: 24px;">
                            {{ strtoupper(substr($user->name, 0, 1)) }}
                        </div>
                    @endif
                    <div>
                        <h2 class="mb-0">Welcome, {{ $user->name }}!</h2>
                        <p class="text-muted mb-0">{{ date('l, F j, Y') }}</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Membership Status Card -->
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <h4 class="fw-bold">Membership Status</h4>
                                <span class="badge {{ $membershipStatus == 'Active' ? 'bg-success' : 'bg-secondary' }} mb-2">
                                    {{ $membershipStatus }}
                                </span>
                                @if($activeSubscription)
                                    <p class="mb-1">{{ $activeSubscription->membershipPlan->name }}</p>
                                    <p class="text-muted small">Expires: {{ $activeSubscription->end_date->format('M d, Y') }}</p>
                                @else
                                    <p class="text-muted">No active membership</p>
                                    <a href="{{ route('membership') }}" class="btn btn-sm btn-primary">View Plans</a>
                                @endif
                            </div>
                            <div class="col-md-3 left-border">
                                <h4 class="fw-bold">Attendance</h4>
                                <div class="d-flex align-items-center">
                                    <div class="display-4 me-3 fw-bold">{{ $classesAttended }}</div>
                                    <div class="text-muted">Classes<br>Attended</div>
                                </div>
                            </div>
                            <div class="col-md-3 left-border">
                                <h4 class="fw-bold">Progress</h4>
                                <div class="d-flex align-items-center">
                                    <div class="display-4 me-3 fw-bold">{{ $totalBookings }}</div>
                                    <div class="text-muted">Total<br>Bookings</div>
                                </div>
                            </div>
                            <div class="col-md-3 left-border">
                                @if($activeSubscription)
                                    <h4 class="fw-bold">Days Remaining</h4>
                                    <div class="progress mb-2" style="height: 10px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: {{ $percentRemaining }}%"></div>
                                    </div>
                                    <p class="text-center">{{ $daysRemaining }} days left</p>
                                @else
                                    <h4 class="fw-bold">Quick Action</h4>
                                    <a href="{{ route('membership') }}" class="btn btn-primary">Get Membership</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <!-- Upcoming Bookings -->
            <div class="col-md-6 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-header d-flex justify-content-between align-items-center py-3">
                        <h5 class="mb-0 fw-bold">Upcoming Classes</h5>
                        <a href="{{ route('user.bookings') }}" class="text-decoration-none">View All</a>
                    </div>
                    <div class="card-body p-0">
                        @if($upcomingBookings->count() > 0)
                            <div class="list-group list-group-flush">
                                @foreach($upcomingBookings as $booking)
                                    <div class="list-group-item border-0 py-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h6 class="mb-1">{{ $booking->gymClass->name }}</h6>
                                                <p class="mb-1 text-muted">
                                                    <i class="fas fa-calendar-alt me-2"></i>
                                                    {{ $booking->gymClass->start_time->format('D, M d, Y') }}
                                                </p>
                                                <p class="mb-0 text-muted">
                                                    <i class="fas fa-clock me-2"></i>
                                                    {{ $booking->gymClass->start_time->format('g:i A') }} - 
                                                    {{ $booking->gymClass->end_time->format('g:i A') }}
                                                </p>
                                            </div>
                                            <div>
                                                <span class="badge bg-primary">{{ $booking->gymClass->trainer->user->name }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <div class="text-center py-5">
                                <i class="fas fa-calendar-alt fa-3x text-muted mb-3"></i>
                                <p class="mb-0">No upcoming bookings</p>
                                <a href="{{ route('class.schedule') }}" class="btn btn-primary mt-3">Browse Classes</a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            
            <!-- Recommended Classes -->
            <div class="col-md-6 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-header d-flex justify-content-between align-items-center py-3">
                        <h5 class="mb-0 fw-bold">Recommended For You</h5>
                        <a href="{{ route('class.schedule') }}" class="text-decoration-none">View All</a>
                    </div>
                    <div class="card-body p-0">
                        @if($recommendedClasses->count() > 0)
                            <div class="list-group list-group-flush">
                                @foreach($recommendedClasses as $class)
                                    <div class="list-group-item border-0 py-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h6 class="mb-1">{{ $class->name }}</h6>
                                                <p class="mb-1 text-muted">
                                                    <i class="fas fa-calendar-alt me-2"></i>
                                                    {{ $class->start_time->format('D, M d, Y') }}
                                                </p>
                                                <p class="mb-0 text-muted">
                                                    <i class="fas fa-user me-2"></i>
                                                    {{ $class->trainer->user->name }}
                                                </p>
                                            </div>
                                            <div>
                                                <a href="{{ route('class.book', $class->id) }}" class="btn btn-sm btn-outline-primary">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <div class="text-center py-5">
                                <i class="fas fa-dumbbell fa-3x text-muted mb-3"></i>
                                <p class="mb-0">No classes available right now</p>
                                <a href="{{ route('class.schedule') }}" class="btn btn-primary mt-3">Check Later</a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Quick Links Row -->
        <div class="row">
            <div class="col-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-header py-3">
                        <h5 class="mb-0 fw-bold">Quick Links</h5>
                    </div>
                    <div class="card-body">
                        <div class="row text-center">
                            <div class="col-md-3 col-6 mb-3 mb-md-0">
                                <a href="{{ route('user.profile') }}" class="text-decoration-none">
                                    <div class="p-3 rounded mb-2">
                                        <i class="fas fa-user fa-2x text-primary"></i>
                                    </div>
                                    <h6>My Profile</h6>
                                </a>
                            </div>
                            <div class="col-md-3 col-6 mb-3 mb-md-0">
                                <a href="{{ route('user.bookings') }}" class="text-decoration-none">
                                    <div class="p-3 rounded mb-2">
                                        <i class="fas fa-calendar-check fa-2x text-primary"></i>
                                    </div>
                                    <h6>My Bookings</h6>
                                </a>
                            </div>
                            <div class="col-md-3 col-6">
                                <a href="{{ route('user.subscriptions') }}" class="text-decoration-none">
                                    <div class="p-3 rounded mb-2">
                                        <i class="fas fa-id-card fa-2x text-primary"></i>
                                    </div>
                                    <h6>Subscriptions</h6>
                                </a>
                            </div>
                            <div class="col-md-3 col-6">
                                <a href="{{ route('class.schedule') }}" class="text-decoration-none">
                                    <div class="p-3 rounded mb-2">
                                        <i class="fas fa-dumbbell fa-2x text-primary"></i>
                                    </div>
                                    <h6>Classes</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-user-layout>
@endsection