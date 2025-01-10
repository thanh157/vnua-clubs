<?php

namespace App\Http\Controllers\ClubPresident;

use App\Models\Notification;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $notifications = Notification::where('club_id', $user->member->club->id)->get();
        return view('admin.pages.admin-club.admin-notifications', compact('notifications'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'title' => 'required|string',
            'message' => 'required|string',
        ], [
            'title.required' => 'Tiêu đề không được để trống',
            'message.required' => 'Nội dung không được để trống',
        ]);

        try {
            $user = auth()->user();
            $notification = new Notification();
            $notification->user_id = $user->id;
            $notification->club_id = $user->member->club->id;
            $notification->title = $validate['title'];
            $notification->message = $validate['message'];
            $notification->status = 'pending';
            $notification->save();

            return redirect()->route('admin.admin-notifications')->with('success', 'Tạo thông báo thành công');
        } catch (\Exception $e) {
            return redirect()->route('admin.admin-notifications')->with('error', 'Có lỗi xảy ra')->withInput();
        }
       
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $notification)
    {
        $notification = Notification::find($notification);

        if(!$notification) {
            return redirect()->route('admin.admin-notifications')->with('error', 'Không tìm thấy thông báo');
        }

        $request->validate([
            'title' => 'required|string',
            'message' => 'required|string',

        ], [
            'title.required' => 'Tiêu đề không được để trống',
            'message.required' => 'Nội dung không được để trống',
        ]);

        try {
            $notification->title = $request->title;
            $notification->message = $request->message;
            $notification->save();

            return redirect()->route('admin.admin-notifications')->with('success', 'Cập nhật thông báo thành công');
        } catch (\Exception $e) {
            return redirect()->route('admin.admin-notifications')->with('error', 'Có lỗi xảy ra không thể cập nhật')->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($notification)
    {
        $user = auth()->user();
        $notification = Notification::find($notification);

        if(!$notification) {
            return redirect()->route('admin.admin-notifications')->with('error', 'Không tìm thấy thông báo');
        }

        if($notification->club_id != $user->member->club->id) {
            return redirect()->route('admin.admin-notifications')->with('error', 'Không thể xóa thông báo của câu lạc bộ khác');
        }

        try {
            $notification->delete();
            return redirect()->route('admin.admin-notifications')->with('success', 'Xóa thông báo thành công');
        } catch (\Exception $e) {
            return redirect()->route('admin.admin-notifications')->with('error', 'Có lỗi xảy ra không thể xóa');
        }
    }
}
