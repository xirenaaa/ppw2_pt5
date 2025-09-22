<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LombaController;

Route::get('/', [LombaController::class, 'index'])->name('lomba.index');