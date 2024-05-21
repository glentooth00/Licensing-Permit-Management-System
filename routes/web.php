<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BusinessPermitApplicationController;
use App\Http\Controllers\UserController;
use App\Models\BusinessPermitApplication;
use Illuminate\Support\Facades\Route;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

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

// Route::get('qrcode', function () {
//     return QrCode::size(300)->generate('A basic example of Qr code');
// });

Route::get('/', function () {
    return view('login');
});

Route::get('/business-registration', function () {
    return view('site.registration');
});

Route::get('/admin/permit-generate', function () {
    return view('admin/permit/permit');
});

Route::get('/admin-permit-show', function () {
    return view('admin.permit.show');
});

Route::post('/custom-login', [UserController::class, 'authenticate'])->name('custom.login');


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
// Route::post('/', [UserController::class, 'authenticate'])->name('login');

// Admin routes
Route::prefix('admin')->middleware(['auth', 'verified'])->group(function () {

    // Route to show the approved permits
    Route::get('/permit', [BusinessPermitApplicationController::class, 'showApproved'])->name('admin.permit');

    // Route for showing permit details
    Route::get('/permit/show/{id}', [BusinessPermitApplicationController::class, 'show'])->name('permit.show');

    // Route for approving permit using BusinessPermitApplicationController
    Route::put('/approve-permit/{id}', [BusinessPermitApplicationController::class, 'approvePermit'])->name('approve.permit');

    // Route to edit a permit
    Route::get('/permit/{businessPermit}/edit', [BusinessPermitApplicationController::class, 'edit'])->name('permit.edit');

    // Route to update a business registration
    Route::put('/business-registration/{businessPermit}', [BusinessPermitApplicationController::class, 'update'])->name('business-registration.update');

    // Route to generate a QR code for a permit
    Route::get('/permit/index', function (\Illuminate\Http\Request $request) {
        $permitId = $request->query('user_id');
        $status = $request->query('status');
        $permit = BusinessPermitApplication::findOrFail($permitId);

        $qrCodeData = "Permit ID: $permitId\n";
        $qrCodeData .= "Status: $status\n";
        $qrCodeData .= "Business Name: {$permit->business_name}\n";
        $qrCodeData .= "Owner: {$permit->first_name} {$permit->middle_name} {$permit->last_name}\n";
        // Add more details as needed

        $qrCode = QrCode::size(300)->generate($qrCodeData);

        return view('admin.permit.permit')->with([
            'qrCode' => $qrCode,
            'permit' => $permit,
        ]);
    })->name('generate.qrcode');

});


// Auth routes (login, register, etc.)
require __DIR__.'/auth.php';

