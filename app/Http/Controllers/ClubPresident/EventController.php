<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function create()
    {
        return view('admin.events.create');
    }

    public function update()
    {
        return view('admin.events.update');
    }
}