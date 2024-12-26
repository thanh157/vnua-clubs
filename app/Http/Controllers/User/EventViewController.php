<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Event;

class EventViewController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('user.events.index', compact('events'));
    }
}
