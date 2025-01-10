<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Log;
use App\Enums\Role;
use App\Enums\RoleClub;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('client/pages/login/login');
    }

    public function login(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Kiểm tra vai trò của người dùng
            $user = Auth::user();
            Log::info($user->role->value);
            if ($user->role === Role::ADMIN) {
                return redirect()->route('admin.dashboard');
            } elseif ($user->role === Role::ADMIN_CLUB) {
                Log::info('Vao admin-club');
                return redirect()->route('admin-club');
            } else {
                return redirect()->route('client.home');
            }
        }

        throw ValidationException::withMessages([
            'email' => [trans('auth.failed')],
        ]);
    }

    protected function redirectPath()
    {
        return Session::get('url.intended', route('home'));
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}