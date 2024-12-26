<?php

namespace App\Http\Controllers\ClubPresident;

use App\Http\Controllers\Controller;
use App\Models\Membership;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function approveRequest($id)
    {
        $membership = Membership::findOrFail($id);
        $membership->status = 'approved';
        $membership->save();

        return redirect()->route('clubpresident.members.index');
    }

    public function index()
    {
        $members = Membership::where('club_id', auth()->user()->club_id)->get();
        return view('clubpresident.members.index', compact('members'));
    }

    public function getBoardMembers()
    {
        $boardMembers = Membership::where('club_id', auth()->user()->club_id)
                                   ->where('role', 'board')
                                   ->get();
        return view('clubpresident.members.board', compact('boardMembers'));
    }
}

