<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Club;
use Illuminate\Support\Facades\Auth;
use App\Models\Like;
use App\DTOs\ClubDTO;
use App\Models\Member;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    public function index($id)
    {
        try {
            Log::info('ClubController@index');
            $clubObject = Club::findOrFail($id);
            $club = ClubDTO::fromClub($clubObject);
            $memberAmount = $clubObject->users()->count();
            $activityCount = $clubObject->activities()->count();
            $currentActivities = $clubObject->activities()->orderBy('start_date', 'desc')->take(5)->get();
            $postCount = $clubObject->posts()->count();
            
            return view('client.pages.clubs-details.details', compact('club', 'memberAmount', 'activityCount', 'currentActivities', 'postCount'));
            // return view('client.pages.clubs-details.details', compact('club'));
        } catch (\Exception $e) {
            Log::error('Error: '. $e->getMessage());
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

    public function showRegisterForm($id)
    {
        $club = Club::findOrFail($id);
        return view('client.pages.forms.form-member', compact('club'));
    }

    public function register(Request $request, $id)
    {
        $user = Auth::user();
        $club = Club::findOrFail($id);

        // Kiểm tra xem người dùng đã là thành viên của câu lạc bộ chưa
        $existingMember = Member::where('user_id', $user->id)->where('club_id', $club->id)->first();
        if ($existingMember) {
            return redirect()->back()->with('error', 'Bạn đã là thành viên của câu lạc bộ này.');
        }

        // Tạo mới thành viên
        Member::create([
            'user_id' => $user->id,
            'club_id' => $club->id,
            'role' => 'member', // Hoặc vai trò khác nếu cần
            'is_active' => true,
            'is_blocked' => false,
        ]);

        return redirect()->back()->with('success', 'Đăng ký tham gia câu lạc bộ thành công.');
    }
}

