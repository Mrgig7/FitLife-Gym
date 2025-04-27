<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display user dashboard.
     */
    public function dashboard()
    {
        $user = Auth::user();
        
        // Get upcoming bookings (limited to next 3)
        $upcomingBookings = $user->bookings()
            ->join('gym_classes', 'bookings.gym_class_id', '=', 'gym_classes.id')
            ->where('gym_classes.start_time', '>', now())
            ->select('bookings.*')
            ->orderBy('gym_classes.start_time')
            ->with('gymClass', 'gymClass.trainer', 'gymClass.trainer.user')
            ->limit(3)
            ->get();
        
        // Get active subscription
        $activeSubscription = $user->subscriptions()
            ->with('membershipPlan')
            ->where('end_date', '>', now())
            ->orderBy('end_date')
            ->first();
        
        // Get recommended classes based on booking history or popular classes
        $recommendedClasses = \App\Models\GymClass::where('is_active', 1)
            ->with('trainer', 'trainer.user')
            ->where('start_time', '>', now())
            ->orderBy('start_time')
            ->limit(3)
            ->get();
        
        // User progress stats (for example)
        $totalBookings = $user->bookings()->count();
        $classesAttended = $user->bookings()
            ->join('gym_classes', 'bookings.gym_class_id', '=', 'gym_classes.id')
            ->where('gym_classes.start_time', '<', now())
            ->count();
        
        // Calculate membership status
        $membershipStatus = 'Inactive';
        $daysRemaining = 0;
        $percentRemaining = 0;
        
        if ($activeSubscription) {
            $membershipStatus = 'Active';
            $daysRemaining = now()->diffInDays($activeSubscription->end_date, false);
            $totalDays = $activeSubscription->start_date->diffInDays($activeSubscription->end_date);
            $percentRemaining = $totalDays > 0 ? ($daysRemaining / $totalDays) * 100 : 0;
        }
        
        return view('user.dashboard', compact(
            'user', 
            'upcomingBookings', 
            'activeSubscription', 
            'recommendedClasses', 
            'totalBookings', 
            'classesAttended',
            'membershipStatus',
            'daysRemaining',
            'percentRemaining'
        ));
    }

    /**
     * Display user profile.
     */
    public function profile()
    {
        $user = Auth::user();
        return view('user.profile', compact('user'));
    }

    /**
     * Update user profile.
     */
    public function updateProfile(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . Auth::id(),
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'date_of_birth' => 'nullable|date',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = Auth::user();
        
        if ($user) {
            // Handle profile image upload
            if ($request->hasFile('profile_image')) {
                // Delete old image if it exists
                if ($user->profile_image && Storage::disk('public')->exists($user->profile_image)) {
                    Storage::disk('public')->delete($user->profile_image);
                }
                
                // Store new image
                $imagePath = $request->file('profile_image')->store('profile-images', 'public');
                $validated['profile_image'] = $imagePath;
            }
            
            // Update user information
            User::where('id', Auth::id())->update([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'] ?? null,
                'address' => $validated['address'] ?? null,
                'date_of_birth' => $validated['date_of_birth'] ?? null,
                'profile_image' => $validated['profile_image'] ?? $user->profile_image,
            ]);
        }

        return redirect()->route('profile')->with('success', 'Profile updated successfully.');
    }

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
        //
    }
}
