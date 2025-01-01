<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Club;
use Illuminate\Support\Facades\Auth;
use App\Models\Like;
use App\DTOs\ClubDTO;
use Illuminate\Support\Facades\Log;

class ClubController extends Controller
{
    public function index($id)
    {
        try {
            Log::info('ClubController@index');
            $club = Club::findOrFail($id);
            $clubDto = ClubDTO::fromClub($club);
            $membserAmount = $club->users()->count();
            // $postCount = $club->posts()->count();
            // $currentPosts = $club->posts()->latest()->take(3)->get();
            
            return view('client.pages.clubs-details.details', compact('clubDto', 'membserAmount', 'postCount', 'currentPosts'));
            // return view('client.pages.clubs-details.details', compact('club'));
        } catch (\Exception $e) {
            Log::info('Error: '. $e->getMessage());
            return redirect()->back()->with('error', 'Club not found');
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
        
        // Increment the likes count in the Club model
        $club->increment('likes');

        return response()->json(['message' => 'Liked successfully', 'likes' => $club->likes()->count()]);
    }
}

