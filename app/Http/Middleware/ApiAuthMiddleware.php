<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ApiAuthMiddleware
{
    /**
     * Handle an incoming request.
     * 
     * Middleware untuk API authentication menggunakan Bearer Token.
     * Bisa digunakan untuk API endpoints di masa depan.
     * 
     * Cara penggunaan:
     * 
     * Route::middleware(['api', 'api.auth'])->group(function () {
     *     Route::get('/api/lomba', [ApiLombaController::class, 'index']);
     *     Route::post('/api/lomba', [ApiLombaController::class, 'store']);
     * });
     * 
     * Client harus mengirim header:
     * Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGc...
     * 
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Ambil Authorization header
        $authHeader = $request->header('Authorization');

        // Validasi format: "Bearer {token}"
        if (!$authHeader || !str_starts_with($authHeader, 'Bearer ')) {
            return response()->json([
                'error' => true,
                'message' => 'Missing or invalid Authorization header. Format: Bearer {token}'
            ], 401);
        }

        // Extract token dari header
        $token = substr($authHeader, 7); // Remove "Bearer "

        // Validasi token (untuk saat ini hanya check empty)
        if (empty($token)) {
            return response()->json([
                'error' => true,
                'message' => 'Token cannot be empty'
            ], 401);
        }

        // TODO: Jika nanti pakai JWT atau API tokens, validasi token di sini
        // Contoh:
        // $user = User::where('api_token', $token)->first();
        // if (!$user) {
        //     return response()->json(['error' => 'Invalid token'], 401);
        // }
        // Auth::setUser($user);

        // Tambahkan custom attribute ke request
        $request->attributes->add(['api_token' => $token]);

        return $next($request);
    }
}
