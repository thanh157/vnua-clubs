<?php

namespace App\Http\Controllers\User;

use App\Enums\ResourceType;
use App\Enums\ResourceUseFor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ClubRequest;
use Illuminate\Support\Facades\Auth;
use App\Services\CloudinaryService;
use App\Jobs\UploadImageToCloud;

class ClubRequestController extends Controller
{
    protected $cloudinaryService;

    public function __construct(CloudinaryService $cloudinaryService)
    {
        $this->cloudinaryService = $cloudinaryService;
    }

    public function create()
    {
        return view('client.pages.forms.form-club');
    }

    /**
     * Lưu form đăng ký thành lập câu lạc bộ.
     */
    public function store(Request $request)
    {
        // Xác thực dữ liệu
        $validated = $request->validate([
            'club_name' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string|max:255',
            'activity_time' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Tạo mới yêu cầu thành lập câu lạc bộ
        $clubRequest = ClubRequest::create([
            'club_name' => $validated['club_name'],
            'description' => $validated['description'],
            'category' => $validated['category'],
            'activity_time' => $validated['activity_time'],
            'logo' => null,
            'user_id' => Auth::id(), // Lấy ID của người dùng hiện tại
        ]);

        // Tạo metadata
        $metaData = [
            'type' => ResourceType::IMAGE,
            'use_for' => ResourceUseFor::CLUB_REQUEST,
            'use_for_id' => $clubRequest->id,
            'create_user_id' => Auth::id()
        ];

        // Xử lý upload file logo ngầm
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $filePath = $file->store('temp'); // Lưu file tạm thời

            UploadImageToCloud::dispatch($clubRequest, $filePath, 'logo', $metaData);
        }

        return redirect()->route('client.home')->with('success', 'Đã nộp đơn đăng ký thành công!');
    }
}
