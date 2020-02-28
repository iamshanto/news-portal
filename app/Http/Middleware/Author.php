<?php
namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;

class Author
{
    public function handle($request, \Closure $next)
    {
        if (!Auth::user() instanceof \App\Models\Author) {
            return response('Unauthorized.', 401);
        }

        return $next($request);
    }

}
