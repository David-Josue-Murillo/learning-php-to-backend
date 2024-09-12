<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TestYear
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response {
        
        $year = $request->route('year');
        if(is_null($year) || !is_numeric($year) || $year < 1998) {
            return redirect('/movies');
        }

        return $next($request);
    }
}
