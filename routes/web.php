<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BusinessPermitApplicationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/business-registration', function () {
    return view('site.registration');
});

// Handle registration form submission
Route::post('/business-registration', [BusinessPermitApplicationController::class, 'store'])->name('business-registration.store');


// After registration page
Route::get('/registration-complete', [BusinessPermitApplicationController::class, 'complete'])->name('registration_complete');

// Dashboard route using the controller method
Route::get('/dashboard', [BusinessPermitApplicationController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

// Route group for authenticated users
Route::middleware('auth')->group(function () {
    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin routes
Route::prefix('admin')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/permit', function () {
        return view('admin.permit.index');
    });
    // Additional admin routes can be added here
});

// Auth routes (login, register, etc.)
require __DIR__.'/auth.php';

