<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     * 
     * Middleware umum untuk checking role dengan parameter.
     * Cara penggunaan:
     * 
     * Route::post('/lomba', [LombaController::class, 'store'])
     *     ->middleware('role:admin')
     *     ->middleware('auth');
     * 
     * Route::delete('/lomba/{id}', [LombaController::class, 'destroy'])
     *     ->middleware('role:admin,moderator')
     *     ->middleware('auth');
     * 
     * Bisa menerima multiple roles: role:admin,moderator,user
     * 
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  ...$roles
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        // Pastikan user sudah login
        if (!auth()->check()) {
            return response()->json([
                'message' => 'Unauthorized. Please login first.'
            ], 401);
        }

        // Ambil role user dari database
        $userRole = auth()->user()->role;

        // Ubah roles parameter jadi array (jika ada koma pisah)
        $allowedRoles = [];
        foreach ($roles as $role) {
            // Split by comma untuk support multiple roles: "admin,moderator"
            $allowedRoles = array_merge($allowedRoles, explode(',', $role));
        }

        // Check apakah user role ada di allowed roles
        if (in_array($userRole, $allowedRoles)) {
            return $next($request);
        }

        // Jika tidak sesuai role, return 403 Forbidden
        return response()->json([
            'message' => 'Forbidden. Role not allowed. Required: ' . implode(', ', $allowedRoles)
        ], 403)->setStatusCode(403);
    }
}
