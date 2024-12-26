<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\ClubRequest;
use Illuminate\Http\Request;

class ClubRequestController extends Controller
{
    public function store(Request $request)
    {
        $clubRequest = ClubRequest::create($request->all());
        return redirect()->route('guest.clubrequests.index');
    }
}
