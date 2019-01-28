<?php
namespace App\Http\Middleware;
use Closure;
use Auth;
class IsFrontuser
{
    public function handle($request, Closure $next)
    {
 		if(!Auth::check() || Auth::user()->type == '1'){
            return redirect('/admin/home');
        }
        return $next($request);
    }
}
