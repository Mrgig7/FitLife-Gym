@extends('layouts.app')

@section('title', 'My Bookings')

@section('content')
<x-user-layout>
    <div class="container py-4">
        <div class="row mb-4">
            <div class="col-12">
                <h2 class="mb-0">My Bookings</h2>
                <p class="text-muted">Manage your class reservations</p>
            </div>
        </div>

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

                        @if($bookings->count() > 0)
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Class</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Trainer</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($bookings as $booking)
                                            <tr>
                                                <td>{{ $booking->gymClass->name }}</td>
                                                <td>{{ $booking->gymClass->start_time->format('M d, Y') }}</td>
                                                <td>{{ $booking->gymClass->start_time->format('g:i A') }} - {{ $booking->gymClass->end_time->format('g:i A') }}</td>
                                                <td>{{ $booking->gymClass->trainer->user->name }}</td>
                                                <td>
                                                    <span class="badge {{ $booking->status == 'confirmed' ? 'bg-success' : ($booking->status == 'cancelled' ? 'bg-danger' : 'bg-warning') }}">
                                                        {{ ucfirst($booking->status) }}
                                                    </span>
                                                </td>
                                                <td>
                                                    @if($booking->gymClass->start_time > now() && $booking->status != 'cancelled')
                                                        <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST" class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure you want to cancel this booking?')">
                                                                Cancel
                                                            </button>
                                                        </form>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <div class="text-center py-5">
                                <i class="fas fa-calendar-alt fa-3x text-muted mb-3"></i>
                                <p class="mb-3">You don't have any bookings yet.</p>
                                <a href="{{ route('class.schedule') }}" class="btn btn-primary">Browse Classes</a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-user-layout>
@endsection 