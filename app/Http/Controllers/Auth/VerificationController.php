<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerificationController extends Controller
{
    /**
     * Hiển thị thông báo yêu cầu xác minh email.
     */
    public function show()
    {
        return view('/auth/verify-email');
    }

    /**
     * Xử lý yêu cầu xác minh email.
     */
    public function verify(EmailVerificationRequest $request)
    {
        $request->fulfill();

        return redirect('/home');
    }

    /**
     * Gửi lại email xác minh.
     */
    public function resend(Request $request)
    {
        if ($request->user()->hasVerifiedEmail()) {
            return redirect('/home');
        }

        $request->user()->sendEmailVerificationNotification();

        return back()->with('message', 'Verification link sent!');
    }
}