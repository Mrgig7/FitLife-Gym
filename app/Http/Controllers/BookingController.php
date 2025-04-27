<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Booking;
use App\Models\GymClass;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $booking = Booking::findOrFail($id);
        
        // Check if the user owns this booking
        if ($booking->user_id != Auth::id()) {
            return redirect()->route('user.bookings')->with('error', 'You are not authorized to cancel this booking.');
        }
        
        // Check if the class hasn't started yet
        if ($booking->gymClass->start_time <= now()) {
            return redirect()->route('user.bookings')->with('error', 'You cannot cancel a booking after the class has started.');
        }
        
        // Update booking status
        $booking->status = 'cancelled';
        $booking->save();
        
        return redirect()->route('user.bookings')->with('success', 'Booking cancelled successfully.');
    }

    /**
     * Display user's bookings
     */
    public function userBookings()
    {
        $user = Auth::user();
        $bookings = $user->bookings()
            ->with('gymClass', 'gymClass.trainer', 'gymClass.trainer.user')
            ->join('gym_classes', 'bookings.gym_class_id', '=', 'gym_classes.id')
            ->select('bookings.*')
            ->orderBy('gym_classes.start_time')
            ->get();
            
        return view('user.bookings', compact('bookings'));
    }
    
    /**
     * Book a gym class
     */
    public function bookClass(GymClass $class)
    {
        $user = Auth::user();
        
        // Check if user already booked this class
        $existingBooking = Booking::where('user_id', $user->id)
            ->where('gym_class_id', $class->id)
            ->where('status', '!=', 'cancelled')
            ->first();
            
        if ($existingBooking) {
            return redirect()->back()->with('error', 'You have already booked this class.');
        }
        
        // Check if class is full
        if ($class->availableSpots <= 0) {
            return redirect()->back()->with('error', 'This class is already full.');
        }
        
        // Create booking
        $booking = new Booking();
        $booking->user_id = $user->id;
        $booking->gym_class_id = $class->id;
        $booking->booking_date = now();
        $booking->status = 'confirmed';
        $booking->save();
        
        return redirect()->route('user.bookings')->with('success', 'Class booked successfully!');
    }
}
