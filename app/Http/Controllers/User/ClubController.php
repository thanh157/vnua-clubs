<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Club;
use Illuminate\Support\Facades\Auth;
use App\Models\Like;
use App\DTOs\ClubDTO;
use App\Enums\RoleClub;
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

    public function showRegisterClubForm()
    {
        return view('client.pages.forms.form-club');
    }

    public function registerClub(Request $request)
    {
        // Xác thực dữ liệu
        $validated = $request->validate([
            'club_name' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string|max:255',
            'activity_time' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Xử lý upload file logo
        $logoPath = null;
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('logos', 'public');
        }

        // Tạo mới câu lạc bộ
        Club::create([
            'name' => $validated['club_name'],
            'description' => $validated['description'],
            'category' => $validated['category'],
            'activity_time' => $validated['activity_time'],
            'logo' => $logoPath,
            'owner_id' => Auth::id(), // Lấy ID của người dùng hiện tại
        ]);

        return redirect()->route('client.form-club')->with('success', 'Đăng ký thành lập câu lạc bộ thành công.');
    }
}

