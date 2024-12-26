<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('admin.events.index', compact('events'));
    }

    public function approve(Request $request, $id)
    {
        $event = Event::findOrFail($id);
        $event->status = 'approved';
        $event->save();

        return redirect()->route('admin.events.index');
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);
        return view('admin.events.show', compact('event'));
    }
}
