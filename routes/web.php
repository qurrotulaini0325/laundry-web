<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

// Redirect root to register page for guests
Route::get('/', function () {
    return redirect('/register');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Routes that require authentication
Route::middleware(['auth', 'verified'])->group(function () {
    // Home page (primary destination after login)

    Route::get('/dashboard', [HomeController::class, 'index'])->middleware(['auth'])->name('dashboard');
    
    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Public routes (not requiring authentication)
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/reservation', [ReservationController::class, 'index'])->name('reservation');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// Override login route to use custom controller for redirect
Route::post('/login', [AuthenticatedSessionController::class, 'store'])
    ->middleware(['guest'])
    ->name('login');

// Include Laravel's default authentication routes
require __DIR__.'/auth.php';
