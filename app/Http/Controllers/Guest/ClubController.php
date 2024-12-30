<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Club;
use Illuminate\Http\Request;

class ClubController extends Controller
{

    protected $clubService;

    public function index($id)
    {
        try {
            $club = Club::findOrFail($id);
            
            return view('client.pages.clubs-details.details', compact('club'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Club not found');
        }
    }
}