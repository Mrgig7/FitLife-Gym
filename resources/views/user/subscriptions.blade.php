@extends('layouts.app')

@section('title', 'My Subscriptions')

@section('content')
<x-user-layout>
    <div class="container py-4">
        <div class="row mb-4">
            <div class="col-md-12">
                <h2 class="mb-0">My Subscriptions</h2>
                <p class="text-muted">View and manage your membership subscriptions</p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-8">
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-header py-3">
                        <h5 class="mb-0 fw-bold">Subscription History</h5>
                    </div>
                    <div class="card-body p-0">
                        @if($subscriptions->count() > 0)
                            <div class="list-group list-group-flush">
                                @foreach($subscriptions as $subscription)
                                    <div class="list-group-item border-0 py-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h6 class="mb-1">{{ $subscription->membershipPlan->name }}</h6>
                                                <p class="mb-1 text-muted">
                                                    <i class="fas fa-calendar-alt me-2"></i>
                                                    {{ $subscription->start_date->format('M d, Y') }} - {{ $subscription->end_date->format('M d, Y') }}
                                                </p>
                                                <span class="badge {{ $subscription->isActive() ? 'bg-success' : 'bg-secondary' }}">
                                                    {{ $subscription->isActive() ? 'Active' : 'Expired' }}
                                                </span>
                                            </div>
                                            <div>
                                                <h5 class="mb-0">₹{{ $subscription->amount }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <div class="text-center py-5">
                                <i class="fas fa-id-card fa-3x text-muted mb-3"></i>
                                <p class="mb-0">No subscription history found</p>
                                <a href="{{ route('membership') }}" class="btn btn-primary mt-3">View Membership Plans</a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-header py-3">
                        <h5 class="mb-0 fw-bold">Quick Links</h5>
                    </div>
                    <div class="card-body">
                        <div class="list-group list-group-flush">
                            <a href="{{ route('membership') }}" class="list-group-item list-group-item-action border-0 py-3">
                                <i class="fas fa-tag me-2 text-primary"></i> View Membership Plans
                            </a>
                            <a href="{{ route('user.dashboard') }}" class="list-group-item list-group-item-action border-0 py-3">
                                <i class="fas fa-tachometer-alt me-2 text-primary"></i> Dashboard
                            </a>
                            <a href="{{ route('user.profile') }}" class="list-group-item list-group-item-action border-0 py-3">
                                <i class="fas fa-user me-2 text-primary"></i> My Profile
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-user-layout>
@endsection 