<?php
namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;

class Customers
{
    public function handle($request, \Closure $next)
    {
        if (!Auth::user() instanceof \App\Models\Customer) {
            return response('Unauthorized.', 401);
        }

        return $next($request);
    }

}
