<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class LogActivity
{
    /**
     * Handle an incoming request.
     * 
     * Middleware ini untuk logging semua aktivitas user:
     * - Method HTTP (GET, POST, PUT, DELETE)
     * - URL yang diakses
     * - User ID (jika login)
     * - IP Address
     * - User Agent
     * - Response Status Code
     * 
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Lanjutkan ke route berikutnya
        $response = $next($request);

        // SETELAH response, log aktivitas
        $this->logActivity($request, $response);

        return $response;
    }

    /**
     * Log aktivitas user ke file storage/logs/activity.log
     */
    private function logActivity(Request $request, Response $response): void
    {
        $userId = Auth::id() ?? 'Guest';
        $userName = Auth::user()?->name ?? 'Guest';
        
        $logData = [
            'timestamp' => now()->toDateTimeString(),
            'method' => $request->getMethod(),
            'url' => $request->getPathInfo(),
            'full_url' => $request->fullUrl(),
            'user_id' => $userId,
            'user_name' => $userName,
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'status_code' => $response->getStatusCode(),
            'query_params' => $request->query(),
        ];

        // Log ke file custom channel: activity
        Log::channel('activity')->info('User Activity', $logData);
        
        // Jika ada error, log juga
        if ($response->getStatusCode() >= 400) {
            Log::warning('Activity with error status', $logData);
        }
    }
}
