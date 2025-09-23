<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LombaController;

Route::get('/', [LombaController::class, 'index'])->name('home');
Route::get('/lomba', [LombaController::class, 'index'])->name('lomba.index');
Route::get('/lomba/{lomba}', [LombaController::class, 'show'])->name('lomba.show');

// Additional resource routes if needed
Route::resource('lomba', LombaController::class)->except(['index', 'show']);