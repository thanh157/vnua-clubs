<?php

namespace App\Http\Controllers\ClubPresident;

use App\Enums\RoleClub;
use App\Http\Controllers\Controller;
use App\Models\ClubRequest;
use App\Enums\StatusMemberRequest;
use App\Models\MemberRequest;
use App\Models\Member;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Club;

class MemberRequestManagementController extends Controller
{
    public function index()
    {
        $clubId = session('current_club_id');
        $memberRequests = MemberRequest::where('club_id', $clubId)->get();

        return view('admin.pages.admin-club.club-list2', compact('memberRequests'));
    }

    public function member(Request $request)
    {
          // Lấy current_club_id từ session
        $currentClubId = $request->session()->get('current_club_id');

        // Kiểm tra xem current_club_id có tồn tại trong session không
        if (!$currentClubId) {
            // Lấy người dùng hiện tại
            $user = Auth::user();

            // Lấy danh sách các câu lạc bộ mà người dùng hiện tại làm chủ
            $clubs = $user->clubs;

            // Kiểm tra xem người dùng có câu lạc bộ nào không
            if ($clubs->isEmpty()) {
                return redirect()->route('admin.dashboard')->with('error', 'Bạn không có câu lạc bộ nào.');
            }

            // Gán mặc định câu lạc bộ đầu tiên
            $currentClubId = $clubs->first()->id;
            $request->session()->put('current_club_id', $currentClubId);
        }

        // Lấy các yêu cầu thành viên dựa trên current_club_id
        $memberRequests = MemberRequest::where('club_id', $currentClubId)->get();
        return view('admin.pages.admin-club.member-request', compact('memberRequests'));
    }

    public function show($id)
    {
        // Lấy chi tiết đơn đăng ký từ cơ sở dữ liệu
        $request = ClubRequest::findOrFail($id);

        return view('admin.pages.admin-club.club-request-detail', compact('request'));
    }

    public function approve($id)
    {
        $memberRequest = MemberRequest::findOrFail($id);
        $memberRequest->status = StatusMemberRequest::APPROVED;
        $memberRequest->save();
        Log::info('Member request approved.', ['memberRequest' => $memberRequest]);

        // Tạo bản ghi mới trong model Member
        Member::create([
            'user_id' => $memberRequest->user_id,
            'club_id' => $memberRequest->club_id,
            'role' => RoleClub::MEMBER, // Hoặc giá trị mặc định khác cho role
            'is_active' => true,
            'is_blocked' => false,
        ]);

        return redirect()->route('admin.member-requests')->with('success', 'Yêu cầu đã được phê duyệt.');
    }

    public function reject($id)
    {
        $memberRequest = MemberRequest::findOrFail($id);
        $memberRequest->status = StatusMemberRequest::REJECTED;
        $memberRequest->save();

        return redirect()->route('admin.club-requests')->with('success', 'Yêu cầu đã bị từ chối.');
    }
    public function deleteMemberRequest($id)
    {
        $memberRequest = MemberRequest::findOrFail($id);
        $memberRequest->delete();

        return redirect()->route('admin.club-requests')->with('success', 'Yêu cầu đã bị xóa.');
    }
}