<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LombaController;

Route::get('/', [LombaController::class, 'index'])->name('lomba.index');
Route::get('/lomba/{lomba}/edit', [LombaController::class, 'edit'])->name('lomba.edit');
Route::put('/lomba/{lomba}', [LombaController::class, 'update'])->name('lomba.update');
Route::get('/lomba/{lomba}', [LombaController::class, 'show'])->name('lomba.show');