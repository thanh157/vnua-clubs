<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Club;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    public function show($id)
    {
        $club = Club::findOrFail($id);
        return view('client.pages.clubs-details.details', compact('club'));
    }
}