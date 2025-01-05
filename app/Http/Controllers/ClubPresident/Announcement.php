<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function create()
    {
        return view('admin.announcements.create');
    }

    public function edit()
    {
        return view('admin.announcements.edit');
    }

    public function delete()
    {
        return view('admin.announcements.delete');
    }

    public function show()
    {
        return view('admin.announcements.show');
    }
}