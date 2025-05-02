<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GymClass;
use App\Models\MembershipPlan;
use App\Models\Trainer;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'about', 'classes', 'trainers', 'membership', 'contact', 'submitContact']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $featuredClasses = GymClass::where('is_active', 1)
                            ->limit(6)
                            ->get();
        
        $membershipPlans = MembershipPlan::all();
        
        $trainers = Trainer::with('user')
                    ->limit(4)
                    ->get();

        return view('home', compact('featuredClasses', 'membershipPlans', 'trainers'));
    }

    /**
     * Show about page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Show classes page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function classes()
    {
        // Temporarily redirecting to static version with icons
        return redirect()->route('classes.static');
        
        // Original code - commented out
        // $classes = GymClass::where('is_active', 1)->get();
        // return view('classes', compact('classes'));
    }

    /**
     * Show trainers page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function trainers()
    {
        $trainers = Trainer::with('user')->get();
        return view('trainers', compact('trainers'));
    }

    /**
     * Show membership page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function membership()
    {
        $membershipPlans = MembershipPlan::all();
        return view('membership', compact('membershipPlans'));
    }

    /**
     * Show contact page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contact()
    {
        return view('contact');
    }
    
    /**
     * Handle contact form submission.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);
        
        // In a real application, you would send an email here
        // Mail::to('info@fitlifegym.com')->send(new \App\Mail\ContactForm($validated));
        
        return redirect()->route('contact')->with('success', 'Thank you for your message. We will get back to you soon!');
    }
}
