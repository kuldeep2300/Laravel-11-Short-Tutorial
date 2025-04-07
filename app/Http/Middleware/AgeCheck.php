<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AgeCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // echo "Echo from Age Check Middleware";  // Global middleware
        // echo "<pre>";
        // print_r($request);
        // echo "</pre>";

        if($request->age < 18) {
            die('You can\'t visit this page!!!');
        }  
        return $next($request);
    }
}
