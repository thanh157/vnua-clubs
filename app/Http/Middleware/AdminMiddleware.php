<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role->value === 'ADMIN' || Auth::user()->role->value === 'ADMIN_CLUB') {
            return $next($request);
        }

        return redirect('/'); // Hoặc trang khác nếu không phải admin
    }
}