<?php

namespace App\Http\Controllers\ClubPresident;

use App\Models\MemberRequest;
use App\Http\Controllers\Controller;

class ClubInfoController extends Controller
{
    public function index()
    {
        $club = MemberRequest::all();
        return view('admin.pages.admin-club.admin-members', compact('memberRequests'));
    }

    public function list()
    {
        return view('admin.members.list');
    }

    public function committee()
    {
        return view('admin.members.committee');
    }
}
