<?php

namespace App\Http\Controllers\ClubPresident;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Enums\Role;
use App\Enums\RoleClub;
use App\Models\Member;
use Illuminate\Support\Facades\Log;

class MemberController extends Controller
{
    public function index(Request $request)
    {
        // Lấy current_club_id từ session
        $currentClubId = $request->session()->get('current_club_id');

        // Kiểm tra xem current_club_id có tồn tại trong session không
        if (!$currentClubId) {
            return redirect()->route('admin-club')->with('error', 'Không có câu lạc bộ nào được chọn.');
        }

        // Lấy keySearch và roleFilter từ request
        $keySearch = $request->input('keySearch');
        $roleFilter = $request->input('roleFilter', 'all');
        

        // Lấy danh sách các thành viên của câu lạc bộ dựa trên current_club_id và keySearch
        $query = Member::where('club_id', $currentClubId);

        if ($keySearch) {
            $query->whereHas('user', function ($q) use ($keySearch) {
                $q->where('name', 'like', '%' . $keySearch . '%');
            });
        }

        if ($roleFilter === 'management') {
            $query->whereIn('role', [
                RoleClub::PRESIDENT->value,
                RoleClub::VICE_PRESIDENT->value,
                RoleClub::ADMIN->value,
            ]);
        } elseif ($roleFilter === 'member') {
            $query->where('role', RoleClub::MEMBER->value);
        }

        // Lấy danh sách các thành viên của câu lạc bộ dựa trên current_club_id
        $unSortMembers = $query->get();

        // Sắp xếp các thành viên theo cấp độ vai trò
        $members = $unSortMembers->sortBy(function ($member) {
            return RoleClub::from($member->role)->priority();
        });

        // Truyền enum Role vào view
        $roles = RoleClub::cases();

        return view('admin.pages.admin-club.admin-members', compact('members', 'roles'));
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
        // Kiểm tra và xử lý ảnh đại diện mới nếu có
        if ($request->hasFile('avatar')) {
            // Xóa ảnh đại diện cũ nếu có
            if ($member->avatar_url) {
                Storage::delete($member->avatar_url);
            }

            // Lưu ảnh đại diện mới
            $avatarPath = $request->file('avatar')->store('avatars');
            $member->avatar_url = $avatarPath;
        }
        $member->save();

        return redirect()->route('admin-club.members')->with('success', 'Vai trò của thành viên đã được cập nhật.');
    }
    
}
