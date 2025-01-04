<?php

use App\Http\Controllers\DoctorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;



// Welcome page
Route::get('/', function () {
    return view('welcome');
});

// Dashboard route
Route::get('/dashboard', [DoctorController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Channel a doctor and remove channelled doctor routes
Route::middleware(['auth'])->group(function () {
    Route::post('/channel/{doctor}', [DoctorController::class, 'channelDoctor'])->name('channelDoctor');
    Route::delete('/remove-channel/{doctor}', [DoctorController::class, 'removeChannelledDoctor'])->name('removeChannelledDoctor');
});

// User profile routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



// Authentication routes
require __DIR__ . '/auth.php';
