<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Membership;
use Illuminate\Http\Request;

class JoinRequestController extends Controller
{
    public function store(Request $request)
    {
        $membership = new Membership($request->all());
        $membership->status = 'pending';
        $membership->save();

        return redirect()->route('guest.joinrequests.index');
    }
}

