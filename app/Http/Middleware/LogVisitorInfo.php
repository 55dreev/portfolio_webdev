<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LogVisitorInfo
{
    public function handle(Request $request, Closure $next)
    {
        // Get IP address and time of visit
        $ip = $request->ip();
        $time = now();

        // Prepare log message
        $logMessage = sprintf("TIME: %s, IP ADDRESS: %s" . PHP_EOL, $time, $ip);

        // Log to iplogs.txt
        file_put_contents(storage_path('logs/iplogs.txt'), $logMessage, FILE_APPEND);

        return $next($request);
    }
}
