<?php

namespace App\Http\Controllers\Guest;

use App\Models\Club;
use App\Http\Controllers\Controller;
use App\Models\Membership;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function store(Request $request)
    {
        $membership = new Membership($request->all());
        $membership->status = 'pending';
        $membership->save();

        return redirect()->route('guest.joinrequests.index');
    }

    public function index() 
    {
        $clubs = Club::take(8)->get();

        // Ghi log thông tin các câu lạc bộ
        Log::info('Loaded clubs size:',[ $clubs->count()]);     
        Log::info('Loaded clubs:', ['clubs' => $clubs]);

        return view('client.pages.home.home', compact('clubs'));
    }
}

