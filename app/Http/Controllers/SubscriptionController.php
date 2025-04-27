<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Subscription;

class SubscriptionController extends Controller
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
        //
    }

    /**
     * Display user's subscriptions
     */
    public function userSubscriptions()
    {
        $user = Auth::user();
        $subscriptions = $user->subscriptions()
            ->with('membershipPlan')
            ->orderBy('created_at', 'desc')
            ->get();
            
        $activeSubscription = $user->subscriptions()
            ->with('membershipPlan')
            ->where('end_date', '>', now())
            ->orderBy('end_date')
            ->first();
            
        return view('user.subscriptions', compact('subscriptions', 'activeSubscription'));
    }
}
