@extends('layouts.app')

@section('title', 'Book Class')

@section('content')
<div class="container py-5">
    <div class="row mb-4">
        <div class="col-12">
            <h2 class="section-title">Book Class</h2>
            <p class="text-muted">Review class details and confirm your booking</p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8 mx-auto">
            @if(session('error'))
                <div class="alert alert-danger mb-4">
                    {{ session('error') }}
                </div>
            @endif

            <div class="card border-0 shadow mb-4">
                <div class="card-body p-4">
                    <h3 class="card-title mb-4">Class Details</h3>
                    
                    <div class="row mb-4">
                        <div class="col-md-3 text-md-end">
                            <strong>Class:</strong>
                        </div>
                        <div class="col-md-9">
                            <h4 class="h5 mb-2">{{ $class->name }} <span class="badge bg-danger ms-2">{{ $class->difficulty_level }}</span></h4>
                            <p class="text-muted">{{ $class->description }}</p>
                        </div>
                    </div>
                    
                    <div class="row mb-4">
                        <div class="col-md-3 text-md-end">
                            <strong>Trainer:</strong>
                        </div>
                        <div class="col-md-9">
                            <div class="d-flex align-items-center">
                                <div class="rounded-circle bg-danger text-white d-inline-flex align-items-center justify-content-center me-2" style="width: 40px; height: 40px;">
                                    <i class="fas fa-user"></i>
                                </div>
                                <span>{{ $class->trainer->user->name }}</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row mb-4">
                        <div class="col-md-3 text-md-end">
                            <strong>Date & Time:</strong>
                        </div>
                        <div class="col-md-9">
                            <div class="mb-2">
                                <i class="far fa-calendar text-danger me-2"></i>
                                {{ $class->start_time->format('l, F j, Y') }}
                            </div>
                            <div>
                                <i class="far fa-clock text-danger me-2"></i>
                                {{ $class->start_time->format('g:i A') }} - {{ $class->end_time->format('g:i A') }}
                            </div>
                        </div>
                    </div>
                    
                    <div class="row mb-4">
                        <div class="col-md-3 text-md-end">
                            <strong>Location:</strong>
                        </div>
                        <div class="col-md-9">
                            <i class="fas fa-map-marker-alt text-danger me-2"></i>
                            {{ $class->location }}
                        </div>
                    </div>
                    
                    <div class="row mb-4">
                        <div class="col-md-3 text-md-end">
                            <strong>Availability:</strong>
                        </div>
                        <div class="col-md-9">
                            <div class="d-flex align-items-center">
                                <div class="progress flex-grow-1 me-2" style="height: 10px;">
                                    @php 
                                        $availablePercentage = ($class->availableSpots / $class->capacity) * 100;
                                    @endphp
                                    <div class="progress-bar bg-success" role="progressbar" style="width: {{ $availablePercentage }}%" aria-valuenow="{{ $class->availableSpots }}" aria-valuemin="0" aria-valuemax="{{ $class->capacity }}"></div>
                                </div>
                                <span class="small">{{ $class->availableSpots }} of {{ $class->capacity }} spots left</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="card border-0 shadow">
                <div class="card-body p-4">
                    <h3 class="card-title mb-4">Confirm Booking</h3>
                    
                    <form action="{{ route('bookings.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="gym_class_id" value="{{ $class->id }}">
                        
                        <div class="mb-4">
                            <label for="notes" class="form-label">Special Notes (Optional)</label>
                            <textarea class="form-control @error('notes') is-invalid @enderror" id="notes" name="notes" rows="3" placeholder="Any special requirements or notes for the instructor">{{ old('notes') }}</textarea>
                            @error('notes')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('class.schedule') }}" class="btn btn-outline-secondary px-4">Cancel</a>
                            <button type="submit" class="btn btn-danger px-4">Confirm Booking</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 