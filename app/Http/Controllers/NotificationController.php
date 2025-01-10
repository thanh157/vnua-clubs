<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\ClubRequest;
use App\Models\Notification;
use Illuminate\Http\Request;
use App\Models\MemberRequest;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function index()
    {
        $notifications = Notification::all();
        foreach ($notifications as $notification) {
            $notification->club = $notification->club;
        }

        $userId = Auth::id();
        if ($userId) {
            $clubRequests = ClubRequest::where('user_id', $userId)->get();
            $memberRequests = MemberRequest::where('user_id', $userId)->get();

            foreach ($memberRequests as $memberRequest) {
                $memberRequest->club = $memberRequest->club;
            }

            $memberships = Member::where('user_id', $userId)->get();

            foreach ($memberships as $membership) {
                $membership->club = $membership->club;
            }

            return view('client/pages/notifications/notification', compact('notifications', 'clubRequests', 'memberRequests', 'memberships'));
        }
        
        return view('client/pages/notifications/notification', compact('notifications'));
    }
}
