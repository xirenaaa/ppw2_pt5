<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LombaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendEmailController;

// Public routes - accessible without login
// MIDDLEWARE: log.activity akan track semua request ke sini
Route::get('/', [LombaController::class, 'index'])->middleware('log.activity');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'log.activity'])->name('dashboard');

//email
Route::get('/send-email', [SendEmailController::class, 'index'])->name('kirim.email');
Route::post('/post-email', [SendEmailController::class, 'store'])->name('post.email');

Route::middleware(['auth', 'log.activity'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // Admin Only Routes
    // MIDDLEWARE: admin middleware sudah included
    // MIDDLEWARE: log.activity akan track semua admin actions
    Route::middleware('admin')->group(function () {
        // IMPORTANT: Route dengan static path harus di atas route dengan parameter dinamis
        // Export & Import Routes (harus di atas /lomba/{lomba})
        Route::get('/lomba/export', [LombaController::class, 'export'])->name('lomba.export');
        Route::get('/lomba/import', [LombaController::class, 'importForm'])->name('lomba.import.form');
        Route::post('/lomba/import', [LombaController::class, 'import'])->name('lomba.import');
        
        Route::get('/lomba/create/new', [LombaController::class, 'create']);
        Route::post('/lomba', [LombaController::class, 'store']);
        Route::get('/lomba/edit/{lomba}', [LombaController::class, 'edit']);
        Route::put('/lomba/{lomba}', [LombaController::class, 'update']);
        Route::delete('/lomba/{lomba}', [LombaController::class, 'destroy']);
    });
});

// Public lomba detail route (must be at the bottom after all static routes)
Route::get('/lomba/{lomba}', [LombaController::class, 'show'])->middleware('log.activity');

require __DIR__.'/auth.php';
