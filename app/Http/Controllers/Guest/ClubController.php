<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Club;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Like;
use Illuminate\Support\Facades\Log;

class ClubController extends Controller
{

    protected $clubService;

    public function index($id)
    {
        try {
            $club = Club::findOrFail($id);

            return view('client.pages.clubs-details.details', compact('club'));
        } catch (\Exception $e) {
            Log::info($e);
            // return redirect()->back()->with('error', 'Club not found');
        }
    }

    public function like($id)
    {
        $club = Club::findOrFail($id);
        $user = Auth::user();

        if ($club->isLikedBy($user)) {
            return response()->json(['message' => 'Already liked'], 400);
        }

        $like = new Like();
        $like->user_id = $user->id;
        $like->club_id = $club->id;
        $like->save();

        return response()->json(['message' => 'Liked successfully', 'likes' => $club->likes()->count()]);
    }
}
