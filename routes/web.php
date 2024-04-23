<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BusinessPermitApplicationController;
use App\Models\BusinessPermitApplication;
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

Route::get('/admin-permit-show', function () {
    return view('admin.permit.show');
});

// Handle registration form submission
Route::post('/business-registration', [BusinessPermitApplicationController::class, 'store'])->name('business-registration.store');


// After registration page
Route::get('/registration-complete', [BusinessPermitApplicationController::class, 'complete'])->name('registration_complete');

// Dashboard route using the controller method
Route::get('/dashboard', [BusinessPermitApplicationController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

// Route group for authenticated users
// Route::middleware('auth')->group(function () {
//     // Profile routes
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// Admin routes
Route::prefix('admin')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/permit', function () {
        return view('admin.permit.index');
    });

    // Route for showing permit details
    Route::get('/permit/show/{id}', [BusinessPermitApplicationController::class, 'show'])->name('permit.show');

    // Route for approving permit using BusinessPermitApplicationController
    Route::put('/approve-permit/{id}', [BusinessPermitApplicationController::class, 'approvePermit'])->name('approve.permit');

    Route::get('/permit/{businessPermit}/edit', [BusinessPermitApplicationController::class, 'edit'])->name('permit.edit');
    Route::put('/business-registration/{businessPermit}', [BusinessPermitApplicationController::class, 'update'])->name('business-registration.update');



    // Additional admin routes can be added here
});



// Auth routes (login, register, etc.)
require __DIR__.'/auth.php';

