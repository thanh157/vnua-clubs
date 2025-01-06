<?php

namespace App\Http\Controllers\ClubPresident;

use App\Enums\RoleClub;
use App\Http\Controllers\Controller;
use App\Models\ClubRequest;
use App\Enums\StatusMemberRequest;
use App\Models\MemberRequest;
use App\Models\Member;
use Illuminate\Support\Facades\Log;

class ClubRequestManagementController extends Controller
{
    public function index()
    {
        // Lấy danh sách đăng ký từ cơ sở dữ liệu
        $requests = ClubRequest::all();
        $memberRequests = MemberRequest::all();
        return view('admin.pages.admin-club.club-list2', compact('requests','memberRequests'));
    }

    public function member()
    {
        $memberRequests = MemberRequest::all();
        return view('admin.pages.admin-club.club-list2', compact('memberRequests'));
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