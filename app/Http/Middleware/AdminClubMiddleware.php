<?php
namespace App\Http\Middleware;

use App\Enums\Role;
use Closure;
use Illuminate\Support\Facades\Auth;

class AdminClubMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role === Role::ADMIN || Auth::user()->role === Role::ADMIN_CLUB) {
            return $next($request);
        }

        return redirect('/'); // Hoặc trang khác nếu không phải admin
    }
}