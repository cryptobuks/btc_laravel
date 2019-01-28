<?php

namespace App\Http\Middleware;
use Closure;
use Auth;
class IsAdminMiddleware
{
    public function handle($request, Closure $next)
    {
 		if(!Auth::check() || Auth::user()->type == '0'){
            return redirect('/');
        }
        return $next($request);
    }
}
