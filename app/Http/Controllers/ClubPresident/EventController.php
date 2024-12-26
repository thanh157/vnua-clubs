<?php

namespace App\Http\Controllers\ClubPresident;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function create()
    {
        return view('clubpresident.events.create');
    }

    public function store(Request $request)
    {
        $event = Event::create($request->all());
        return redirect()->route('clubpresident.events.index');
    }

    public function index()
    {
        $events = Event::where('club_id', auth()->user()->club_id)->get();
        return view('clubpresident.events.index', compact('events'));
    }
}

