<?php

namespace App\Http\Controllers;

use App\Enums\RoleClub;
use App\Models\Club;
use App\Models\Member;
use App\Models\ClubRequest;
use Illuminate\Http\Request;
use App\Models\MemberRequest;
use Illuminate\Support\Facades\Auth;

class InformationController extends Controller
{
    public function index()
    {
        $userId = Auth::id();

        // Fetch data for the current user
        $clubRequests = ClubRequest::where('user_id', $userId)->get();
        $memberRequests = MemberRequest::where('user_id', $userId)->get();
        $memberships = Member::where('user_id', $userId)->get();

        // Pass data to the view
        return view('client.pages.information.index', compact('clubRequests', 'memberRequests', 'memberships'));
    }

    public function members($id_club)
    {
        $club = Club::findOrFail($id_club);
        if (!$club) {
            return redirect()->back()->with('error', 'Câu lạc bộ không tồn tại');
        }

        $members = Member::where('club_id', $id_club)->where('role', RoleClub::MEMBER)->get();
        $presidents = Member::where('club_id', $id_club)->where('role','!=', RoleClub::MEMBER)->get();

        foreach ($presidents as $key => $president) {
            $president->role = RoleClub::from($president->role)->name();
        }

        return view('client.pages.members.club-member', compact('members', 'presidents'));
    }
}
