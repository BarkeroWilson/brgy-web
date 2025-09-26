<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Public routes
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Auth routes (login, register, etc.)
require __DIR__.'/auth.php';

// Protected routes (require authentication)
Route::middleware(['auth', 'verified'])->group(function () {
    // Dashboard - Only for staff and admin
    Route::get('/dashboard', function () {
        if (auth()->user()->isResident()) {
            return redirect()->route('welcome')
                ->with('error', 'You do not have permission to access the dashboard.');
        }
        return view('dashboard');
    })->middleware(['auth', 'verified', 'App\Http\Middleware\StaffMiddleware'])->name('dashboard');

    // Profile routes - Accessible to all authenticated users
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Redirect /home based on user role
    Route::get('/home', function () {
        if (auth()->user()->isResident()) {
            return redirect()->route('welcome');
        }
        return redirect()->route('dashboard');
    })->name('home');
});
