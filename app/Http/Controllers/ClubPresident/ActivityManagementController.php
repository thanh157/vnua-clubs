<?php

namespace App\Http\Controllers\ClubPresident;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Enums\RoleClub;
use App\Models\Member;
use Illuminate\Support\Facades\Log;

class ActivityManagementController extends Controller
{
    public function index(Request $request)
    {
        // Giả sử bạn có thông tin về câu lạc bộ hiện tại trong phiên làm việc
        $clubId = session('current_club_id');

        // Lấy từ khóa tìm kiếm từ request
        $keySearch = $request->input('keySearch');

        // Log::info('clubId: ' . $clubId);
        // Log::info('keySearch: ' . $keySearch);

        // Lấy danh sách các hoạt động của câu lạc bộ hiện tại từ cơ sở dữ liệu, có lọc theo từ khóa tìm kiếm nếu có
        $activities = Activity::where('club_id', $clubId)
            ->when($keySearch, function ($query) use ($keySearch) {
                return $query->where(function ($query) use ($keySearch) {
                    $query->where('name', 'like', '%' . $keySearch . '%')
                        ->orWhere('description', 'like', '%' . $keySearch . '%')
                        ->orWhere('location', 'like', '%' . $keySearch . '%');
                });
            })->get();

        // Truyền danh sách hoạt động và từ khóa tìm kiếm vào view
        return view('admin.pages.admin-club.admin-activities', compact('activities', 'keySearch'));
    }

    public function create(Request $request)
    {
        Log::info('create activity');

        // Tạo mới hoạt động
        $activity = new Activity();
        $activity->name = $request->input('name');
        $activity->start_date = $request->input('start_date');
        $activity->end_date = $request->input('end_date');
        $activity->time_note = $request->input('time_note');
        $activity->location = $request->input('location');
        $activity->description = $request->input('description');
        $activity->status = $request->input('status');
        $activity->club_id = session('current_club_id'); // Gán club_id cho hoạt động
        $activity->save();

        return redirect()->route('admin-club.activities')->with('success', 'Hoạt động đã được tạo mới.');
    }

    public function update(Request $request, $id)
    {
        Log::info('update activity');

        // Tìm hoạt động theo ID
        $activity = Activity::findOrFail($id);

        // Cập nhật thông tin hoạt động
        $activity->name = $request->input('name');
        $activity->start_date = $request->input('start_date');
        $activity->end_date = $request->input('end_date');
        $activity->time_note = $request->input('time_note');
        $activity->location = $request->input('location');
        $activity->description = $request->input('description');
        $activity->status = $request->input('status');
        $activity->save();

        return redirect()->route('admin-club.activities')->with('success', 'Hoạt động đã được cập nhật.');
    }

    public function list()
    {
        return view('admin.members.list');
    }

    public function committee()
    {
        return view('admin.members.committee');
    }

    public function destroy($id)
    {
        // Tìm thành viên theo ID
        $member = Member::findOrFail($id);

        // Xóa thành viên
        $member->delete();

        return redirect()->route('admin-club.members')->with('success', 'Thành viên đã được xóa.');
    }

    public function updateRole(Request $request, $id)
    {
        // Tìm thành viên theo ID
        $member = Member::findOrFail($id);

        // Chuyển đổi giá trị text từ request thành giá trị enum
        $role = RoleClub::from($request->input('role'));

        // Cập nhật vai trò của thành viên
        $member->role = $role;
        $member->save();

        return redirect()->route('admin-club.members')->with('success', 'Vai trò của thành viên đã được cập nhật.');
    }
}
