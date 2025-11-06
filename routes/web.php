<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LombaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendEmailController;

// Public routes - accessible without login
// MIDDLEWARE: log.activity akan track semua request ke sini
Route::get('/', [LombaController::class, 'index'])->middleware('log.activity');
Route::get('/lomba/{id}', [LombaController::class, 'show'])->middleware('log.activity');

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
        Route::get('/lomba/create/new', [LombaController::class, 'create']);
        Route::post('/lomba', [LombaController::class, 'store']);
        Route::get('/lomba/edit/{id}', [LombaController::class, 'edit']);
        Route::put('/lomba/{id}', [LombaController::class, 'update']);
        Route::delete('/lomba/{id}', [LombaController::class, 'destroy']);
    });
});

require __DIR__.'/auth.php';
