<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Membership;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    public function store(Request $request)
    {
        $membership = new Membership($request->all());
        $membership->status = 'pending';
        $membership->save();

        return redirect()->route('user.clubs.index');
    }

    public function checkIn($id)
    {
        $membership = Membership::findOrFail($id);
        $membership->attendance = true;
        $membership->save();

        return redirect()->route('user.clubs.show', $membership->club_id);
    }
}
