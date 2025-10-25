<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LombaController;
use Illuminate\Support\Facades\Route;

// Public routes - accessible without login
Route::get('/', [LombaController::class, 'index']);
Route::get('/lomba/{id}', [LombaController::class, 'show']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // Admin Only Routes
    Route::middleware('admin')->group(function () {
        Route::get('/lomba/create/new', [LombaController::class, 'create']);
        Route::post('/lomba', [LombaController::class, 'store']);
        Route::get('/lomba/edit/{id}', [LombaController::class, 'edit']);
        Route::put('/lomba/{id}', [LombaController::class, 'update']);
        Route::delete('/lomba/{id}', [LombaController::class, 'destroy']);
    });
});

require __DIR__.'/auth.php';
