<?php
namespace App\Http\Middleware;

use Closure;
use App\Enums\Role;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role === Role::ADMIN) {
            return $next($request);
        }

        return redirect('/'); // Hoặc trang khác nếu không phải admin
    }
}