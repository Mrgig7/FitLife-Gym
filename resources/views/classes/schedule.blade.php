@extends('layouts.app')

@section('title', 'Class Schedule')

@section('content')
<div class="container py-4">
    <div class="row mb-4">
        <div class="col-12">
            <h2 class="mb-0">Class Schedule</h2>
            <p class="text-muted">Browse and book available classes</p>
        </div>
    </div>

    <!-- Filters -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <form action="{{ route('class.schedule') }}" method="GET" class="row g-3">
                        <div class="col-md-4">
                            <label for="date" class="form-label">Date</label>
                            <input type="date" class="form-control" id="date" name="date" value="{{ request('date') }}">
                        </div>
                        <div class="col-md-4">
                            <label for="trainer" class="form-label">Trainer</label>
                            <select class="form-select" id="trainer" name="trainer">
                                <option value="all">All Trainers</option>
                                <!-- Add trainer options here -->
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="type" class="form-label">Class Type</label>
                            <select class="form-select" id="type" name="type">
                                <option value="all">All Classes</option>
                                <option value="Yoga" {{ request('type') == 'Yoga' ? 'selected' : '' }}>Yoga</option>
                                <option value="Cardio" {{ request('type') == 'Cardio' ? 'selected' : '' }}>Cardio</option>
                                <option value="Strength" {{ request('type') == 'Strength' ? 'selected' : '' }}>Strength</option>
                                <option value="HIIT" {{ request('type') == 'HIIT' ? 'selected' : '' }}>HIIT</option>
                                <option value="Pilates" {{ request('type') == 'Pilates' ? 'selected' : '' }}>Pilates</option>
                            </select>
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <a href="{{ route('class.schedule') }}" class="btn btn-secondary me-2">Reset</a>
                            <button type="submit" class="btn btn-primary">Filter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Classes -->
    <div class="row">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-0">
                    @if(session('success'))
                        <div class="alert alert-success m-3">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger m-3">
                            {{ session('error') }}
                        </div>
                    @endif

                    @if($classes->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-hover align-middle">
                                <thead>
                                    <tr>
                                        <th>Class</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Trainer</th>
                                        <th>Availability</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($classes as $class)
                                        <tr>
                                            <td>
                                                <h6 class="mb-1">{{ $class->name }}</h6>
                                                <small class="text-muted">{{ Str::limit($class->description, 50) }}</small>
                                            </td>
                                            <td>{{ $class->start_time->format('D, M d, Y') }}</td>
                                            <td>{{ $class->start_time->format('g:i A') }} - {{ $class->end_time->format('g:i A') }}</td>
                                            <td>{{ $class->trainer->user->name }}</td>
                                            <td>
                                                @php 
                                                    $availablePercentage = ($class->availableSpots / $class->capacity) * 100;
                                                @endphp
                                                <div class="progress" style="height: 10px;">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: {{ $availablePercentage }}%" aria-valuenow="{{ $class->availableSpots }}" aria-valuemin="0" aria-valuemax="{{ $class->capacity }}"></div>
                                                </div>
                                                <small class="mt-1 d-block">{{ $class->availableSpots }} of {{ $class->capacity }} spots left</small>
                                            </td>
                                            <td>
                                                <a href="{{ route('class.book', $class->id) }}" class="btn btn-primary btn-sm {{ $class->availableSpots <= 0 ? 'disabled' : '' }}">
                                                    {{ $class->availableSpots <= 0 ? 'Full' : 'Book Now' }}
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-center p-3">
                            {{ $classes->links() }}
                        </div>
                    @else
                        <div class="text-center py-5">
                            <i class="fas fa-dumbbell fa-3x text-muted mb-3"></i>
                            <p class="mb-3">No classes found matching your criteria.</p>
                            <a href="{{ route('class.schedule') }}" class="btn btn-primary">View All Classes</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 