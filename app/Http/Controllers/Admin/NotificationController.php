<?php

namespace App\Http\Controllers\Admin;

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
        $notifications = Notification::get();
        return view('admin.pages.admin.notifications', compact('notifications'));
    }

    public function approved($id){
        $notification = Notification::findOrFail($id);
        $notification->status = 'approved';
        $notification->save();
        return redirect()->route('admin.notifications')->with('success', 'Thông báo đã được duyệt.');
    }

    public function rejected($id){
        $notification = Notification::findOrFail($id);
        $notification->status = 'rejected';
        $notification->save();
        return redirect()->route('admin.notifications')->with('success', 'Thông báo đã bị từ chối.');
    }
}
