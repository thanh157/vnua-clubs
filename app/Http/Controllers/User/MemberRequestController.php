<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Models\Club;
use App\Models\MemberRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Jobs\UploadImageToCloud;
use App\Enums\ResourceType;
use App\Enums\ResourceUseFor;
use App\Enums\StatusMemberRequest;

class MemberRequestController extends Controller
{
    // Hiển thị form đăng ký
    public function create($club_id = null)
    {
        $clubs = Club::all();
        $defaultClubId = 1; // Giá trị mặc định của club_id, bạn có thể thay đổi giá trị này
        if ($club_id) {
            $defaultClubId = $club_id;
        }
        return view('client.pages.forms.form-member', compact('clubs', 'defaultClubId'));
    }

    // Lưu trữ yêu cầu đăng ký
    public function store(Request $request)
    {
        // Kiểm tra xem người dùng đã gửi đơn đăng ký trước đó hay chưa
        $existingRequest = MemberRequest::where('user_id', Auth::id())
            ->where('club_id', $request->club_id)
            ->first();

        if ($existingRequest) {
            return response()->json(['errors' => ['form' => ['Bạn đã gửi đơn đăng ký cho câu lạc bộ này rồi.']]], 422);
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'student_id' => 'required|string|max:255',
            'class_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|regex:/[0-9]{10}/',
            'gender' => 'required|string',
            'faculty' => 'required|string',
            'club_id' => 'required|integer|exists:clubs,id',
            'message' => 'required|string',
            'avatar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Tạo yêu cầu đăng ký mới
        $memberRequest = MemberRequest::create([
            'full_name' => $request->name,
            'student_id' => $request->student_id,
            'class_name' => $request->class_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'faculty' => $request->faculty,
            'club_id' => $request->club_id,
            'purpose' => $request->message,
            'status' => StatusMemberRequest::PENDING,
            'avatar' => null,
            'user_id' => Auth::id(),
        ]);

        // Tạo metadata
        $metaData = [
            'type' => ResourceType::IMAGE,
            'use_for' => ResourceUseFor::MEMBER_REQUEST,
            'use_for_id' => $memberRequest->id,
            'create_user_id' => Auth::id()
        ];

        // Xử lý upload file avatar ngầm
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $filePath = $file->store('temp'); // Lưu file tạm thời

            UploadImageToCloud::dispatch($memberRequest, $filePath, 'avatar', $metaData);
        }

        return response()->json(['success' => 'Đăng ký thành công!']);
    }
}
