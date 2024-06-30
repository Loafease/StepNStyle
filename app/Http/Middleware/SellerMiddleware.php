<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SellerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
   // In the middleware file
public function handle($request, Closure $next)
{
    if ($request->user() && $request->user()->role !== 'seller') {
        return redirect('/'); // Redirect unauthorized users to homepage
    }

    return $next($request);
}

}
