<?php

namespace App\Http\Controllers\Guest;

use App\Models\Club;
use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\Post;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    // public function store(Request $request)
    // {
    //     $membership = new Membership($request->all());
    //     $membership->status = 'pending';
    //     $membership->save();

    //     return redirect()->route('guest.joinrequests.index');
    // }

    public function index() 
    {
        $clubs = Club::orderBy('likes', 'desc')->take(8)->get();
        $latestActivities = Activity::orderBy('start_date', 'desc')->take(4)->get();
        $latestPosts = Post::orderBy('created_at', 'desc')->take(8)->get();

        // Ghi log thông tin các câu lạc bộ, hoạt động và bài post
        Log::info('Loaded clubs size:', [ $clubs->count() ]);
        // Log::info('Loaded clubs:', ['clubs' => $clubs]);
        // Log::info('Loaded latest activities:', ['activities' => $latestActivities]);
        // Log::info('Loaded latest posts:', ['posts' => $latestPosts]);

        return view('client.pages.home.home', compact('clubs', 'latestActivities', 'latestPosts')); 
    }
}

