<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class MemberController extends Controller
{
    public function approve()
    {
        return view('admin.pages.admin-club.club-list2');
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
