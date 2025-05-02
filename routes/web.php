<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MembershipPlanController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\GymClassController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\SubscriptionController;
use Illuminate\Support\Facades\Auth;

// Public routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/classes', [HomeController::class, 'classes'])->name('classes');
Route::get('/class-showcase', function() {
    return view('class-showcase');
})->name('class.showcase');
Route::get('/classes-static', function() {
    return view('classes-static');
})->name('classes.static');
Route::get('/trainers', [HomeController::class, 'trainers'])->name('trainers');
Route::get('/membership', [HomeController::class, 'membership'])->name('membership');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact', [HomeController::class, 'submitContact'])->name('contact.submit');

// Authentication routes
Route::middleware(['auth'])->group(function () {
    // Member routes
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
    Route::put('/profile', [UserController::class, 'updateProfile'])->name('profile.update');
    
    // User-specific routes
    Route::get('/user/bookings', [BookingController::class, 'userBookings'])->name('user.bookings');
    Route::get('/user/subscriptions', [SubscriptionController::class, 'userSubscriptions'])->name('user.subscriptions');
    Route::get('/user/profile', [UserController::class, 'profile'])->name('user.profile');
    
    // Class routes
    Route::get('/classes/schedule', [GymClassController::class, 'schedule'])->name('class.schedule');
    Route::get('/classes/book/{class}', [BookingController::class, 'bookClass'])->name('class.book');
    
    // Booking routes
    Route::resource('bookings', BookingController::class);
    
    // Subscription routes
    Route::resource('subscriptions', SubscriptionController::class);
    
    // Trainer routes (for trainers and admins)
    Route::middleware(['can:manage-classes'])->group(function () {
        Route::get('/trainer/dashboard', [TrainerController::class, 'dashboard'])->name('trainer.dashboard');
        Route::get('/trainer/classes', [TrainerController::class, 'classes'])->name('trainer.classes');
    });
    
    // Admin routes
    Route::middleware(['can:access-admin'])->prefix('admin')->name('admin.')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::resource('users', UserController::class);
        Route::resource('membership-plans', MembershipPlanController::class);
        Route::resource('trainers', TrainerController::class);
        Route::resource('classes', GymClassController::class);
        Route::get('/bookings', [AdminController::class, 'bookings'])->name('bookings');
        Route::get('/subscriptions', [AdminController::class, 'subscriptions'])->name('subscriptions');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
