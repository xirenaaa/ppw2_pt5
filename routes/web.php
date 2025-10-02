<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LombaController;

// Public routes
Route::get('/', [LombaController::class, 'index'])->name('home');
Route::get('/lomba', [LombaController::class, 'index'])->name('lomba.index');
Route::get('/lomba/{lomba}', [LombaController::class, 'show'])->name('lomba.show');

// CRUD routes
Route::get('/lomba/create/new', [LombaController::class, 'create'])->name('lomba.create');
Route::post('/lomba', [LombaController::class, 'store'])->name('lomba.store');
Route::get('/lomba/{lomba}/edit', [LombaController::class, 'edit'])->name('lomba.edit');
Route::put('/lomba/{lomba}', [LombaController::class, 'update'])->name('lomba.update');
Route::delete('/lomba/{lomba}', [LombaController::class, 'destroy'])->name('lomba.destroy');