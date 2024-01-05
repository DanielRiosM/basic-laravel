<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MiPrimerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    
    public function handle(Request $request, Closure $next, $maxAge): Response
    {
        if($request->age >15 && $request->age < $maxAge){
            return redirect('/nombre/daniel');
        }
        return $next($request);
    }
}
