<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Role;
use App\Enums\StatusRequestClub;
use App\Http\Controllers\Controller;
use App\Models\Club;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\ClubRequest;

class ClubManagementController extends Controller
{
    public function index()
    {
        $clubs = Club::get();
        foreach ($clubs as $club) {
            $club->users = $club->users;
            $club->activities = $club->activities;
        }

        return view('admin.pages.admin.club-list', compact('clubs'));
    }

     public function index1()
    {
        $clubs = Club::all();
        $users = User::all(); // Lấy danh sách tất cả người dùng
        return view('admin.pages.admin.club-list', compact('clubs', 'users'));
    }

    public function updatePresident(Request $request, $id)
    {
        $club = Club::findOrFail($id);
        $newPresidentId = $request->input('president_id');

        if (!$club->users()->where('user_id', $newPresidentId)->exists()) {
            return redirect()->route('admin.clubs')->with('error', 'Người dùng được chọn không phải là thành viên của câu lạc bộ.');
        }

        // Tìm chủ tịch hiện tại của câu lạc bộ và cập nhật vai trò của họ
        if ($club->owner_id) {
            $currentPresident = User::find($club->owner_id);
            if ($currentPresident) {
                $currentPresident->role = Role::USER; // Hoặc vai trò khác phù hợp
                $currentPresident->save();
            }
        }

        // Cập nhật vai trò của người dùng mới được chọn làm chủ tịch
        $newPresident = User::findOrFail($newPresidentId);
        $newPresident->role = Role::ADMIN_CLUB;
        $newPresident->save();

        // Cập nhật chủ tịch của câu lạc bộ
        $club->owner_id = $newPresidentId;
        $club->save();

        return redirect()->route('admin.clubs')->with('success', 'Chủ tịch câu lạc bộ đã được cập nhật.');
    }

    public function toggleStatus($id)
    {
        $club = Club::findOrFail($id);
        $club->status = !$club->status;
        $club->save();

        return redirect()->route('admin.clubs')->with('success', 'Trạng thái câu lạc bộ đã được cập nhật.');
    }

    public function clubRequests()
    {
        // Lấy danh sách các yêu cầu tham gia câu lạc bộ từ cơ sở dữ liệu
        $clubRequests = ClubRequest::all();
        return view('admin.pages.admin.club-request', compact('clubRequests'));
    }

    public function show($id)
    {
        $club = Club::findOrFail($id);
        return view('admin.clubs.show', compact('club'));
    }

    public function approve($id)
    {
        $clubRequest = ClubRequest::findOrFail($id);
        $clubRequest->status = StatusRequestClub::APPROVED;
        $clubRequest->save();

        // Tạo câu lạc bộ mới
        $club = Club::create([
            'name' => $clubRequest->club_name,
            'description' => $clubRequest->description,
            'category' => $clubRequest->category,
            'activity_time' => $clubRequest->activity_time,
            // 'logo' => $clubRequest->logo,
            'owner_id' => $clubRequest->user_id,
            'status' => true, // Hoạt động
        ]);

        // Cập nhật vai trò của người dùng
        $user = User::findOrFail($clubRequest->user_id);
        $user->role = Role::ADMIN_CLUB; // Hoặc vai trò phù hợp
        $user->save();

        return redirect()->route('admin.club-requests')->with('success', 'Yêu cầu đã được phê duyệt.');
    }

    public function reject($id)
    {
        $clubRequest = ClubRequest::findOrFail($id);
        $clubRequest->status = StatusRequestClub::REJECT;
        $clubRequest->save();

        return redirect()->route('admin.club-requests')->with('success', 'Yêu cầu đã bị từ chối.');
    }

    public function create()
    {
        return view('admin.clubs.create');
    }

    public function edit($id)
    {
        $club = Club::findOrFail($id);
        return view('admin.clubs.edit', compact('club'));
    }

    public function update(Request $request, $id)
    {
        $club = Club::findOrFail($id);
        $club->update($request->all());

        return redirect()->route('admin.clubs.index');
    }

    public function destroy($id)
    {
        Club::destroy($id);

        return redirect()->route('admin.clubs.index');
    }

    public function spending()
    {
        return view('admin.clubs.spending');
    }

    public function report()
    {
        return view('admin.clubs.report');
    }
}
