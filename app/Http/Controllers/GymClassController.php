<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GymClass;
use Carbon\Carbon;

class GymClassController extends Controller
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
     * Display the class schedule
     */
    public function schedule(Request $request)
    {
        $query = GymClass::with('trainer', 'trainer.user')
            ->where('start_time', '>', now())
            ->where('is_active', 1);
            
        // Filter by date if provided
        if ($request->has('date')) {
            $date = Carbon::parse($request->date)->format('Y-m-d');
            $query->whereDate('start_time', $date);
        }
        
        // Filter by trainer if provided
        if ($request->has('trainer') && $request->trainer != 'all') {
            $query->where('trainer_id', $request->trainer);
        }
        
        // Filter by class type if provided (assuming class types are stored in the name or description)
        if ($request->has('type') && $request->type != 'all') {
            $query->where('name', 'like', '%' . $request->type . '%');
        }
        
        $classes = $query->orderBy('start_time')->paginate(10);
        
        return view('classes.schedule', compact('classes'));
    }
}
