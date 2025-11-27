<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LombaApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/*
|--------------------------------------------------------------------------
| Lomba API Routes
|--------------------------------------------------------------------------
*/

// Public routes (tidak perlu autentikasi)
Route::prefix('lomba')->group(function () {
    // GET - Get all lomba
    Route::get('/', [LombaApiController::class, 'index']);
    
    // GET - Search lomba (harus di atas /{id} agar tidak bentrok)
    Route::get('/search', [LombaApiController::class, 'search']);
    
    // GET - Get lomba by bidang
    Route::get('/bidang/{id_bidang}', [LombaApiController::class, 'getByBidang']);
    
    // GET - Get single lomba by ID
    Route::get('/{id}', [LombaApiController::class, 'show']);
    
    // POST - Create new lomba
    Route::post('/', [LombaApiController::class, 'store']);
    
    // PUT/PATCH - Update lomba
    Route::put('/{id}', [LombaApiController::class, 'update']);
    Route::patch('/{id}', [LombaApiController::class, 'update']);
    
    // DELETE - Delete lomba
    Route::delete('/{id}', [LombaApiController::class, 'destroy']);
});

// Protected routes (uncomment untuk enable autentikasi)
// Route::middleware(['auth:sanctum'])->prefix('lomba')->group(function () {
//     Route::post('/', [LombaApiController::class, 'store']);
//     Route::put('/{id}', [LombaApiController::class, 'update']);
//     Route::patch('/{id}', [LombaApiController::class, 'update']);
//     Route::delete('/{id}', [LombaApiController::class, 'destroy']);
// });
