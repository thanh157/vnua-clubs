<?php

namespace App\Http\Controllers\ClubPresident;

use App\Http\Controllers\Controller;
use App\Models\Club;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ClubWorkspaceController extends Controller
{
    public function selectClub(Request $request, $clubId)
    {
        Log::info('User selected club.');
        $club = Club::where('owner_id', Auth::id())->findOrFail($clubId);

        $request->session()->put('current_club_id', $club->id);

        return redirect()->route('admin-club')->with('success', 'Đã chuyển sang câu lạc bộ ' . $club->name);
    }

    public function getCurrentClub()
    {
        $clubId = session('current_club_id');
        return Club::find($clubId);
    }
}
