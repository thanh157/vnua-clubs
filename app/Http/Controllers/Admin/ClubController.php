<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Club;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    public function index()
    {
        $clubs = Club::all();
        return route('admin.clubs.index', compact('clubs'));
    }

    public function show($id)
    {
        $club = Club::findOrFail($id);
        return view('admin.clubs.show', compact('club'));
    }

    public function approve(Request $request, $id)
    {
        $club = Club::findOrFail($id);
        $club->status = 'approved';
        $club->save();

        return redirect()->route('admin.clubs.index');
    }

    public function edit($id)
    {
        $club = Club::findOrFail($id);
        return view('admin.clubs.edit', compact('club'));
    }

    public function update(Request $request, $id)
    {
        $club = Club::findOrFail($id);
        $club->update($request->all());

        return redirect()->route('admin.clubs.index');
    }

    public function destroy($id)
    {
        Club::destroy($id);

        return redirect()->route('admin.clubs.index');
    }
}
