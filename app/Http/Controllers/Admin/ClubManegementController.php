<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Club;
use Illuminate\Http\Request;

class ClubManagementController extends Controller
{
    public function index()
    {
        $clubs = Club::all();
        return view('admin.pages.admin.club-list', compact('clubs'));
    }

    public function show($id)
    {
        $club = Club::findOrFail($id);
        return view('admin.clubs.show', compact('club'));
    }

    public function approve($id)
    {
        $club = Club::findOrFail($id);
        $club->status = 'approved';
        $club->save();

        return redirect()->route('admin.clubs.index');
    }

    public function create()
    {
        return view('admin.clubs.create');
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

    public function spending()
    {
        return view('admin.clubs.spending');
    }

    public function report()
    {
        return view('admin.clubs.report');
    }
}
