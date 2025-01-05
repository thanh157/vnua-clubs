<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClubDescriptionController extends Controller
{
    public function create()
    {
        return view('admin.club-description.create');
    }

    public function edit()
    {
        return view('admin.club-description.edit');
    }

    public function delete()
    {
        return view('admin.club-description.delete');
    }
}