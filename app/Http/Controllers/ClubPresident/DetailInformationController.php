<?php

namespace App\Http\Controllers\ClubPresident;

use App\Http\Controllers\Controller;
use App\Models\Club;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Jobs\UploadImageToCloud;
use App\Enums\ResourceType;
use App\Enums\ResourceUseFor;
use App\Models\Resource;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class DetailInformationController extends Controller
{
    public function index()
    {
        $clubId = session('current_club_id');
        $club = Club::findOrFail($clubId);

        // Lấy các resource liên quan đến câu lạc bộ
        $resources = Resource::where('use_for', ResourceUseFor::GALLERY)
                             ->where('use_for_id', $clubId)
                             ->get();
        return view('admin.pages.admin-club.admin-description', compact('club', 'resources'));
    }

    public function updateImages(Request $request, $id)
    {
        $club = Club::findOrFail($id);

        // Tạo metadata cho hình ảnh
        $metaData = [
            'type' => ResourceType::IMAGE,
            'use_for' => ResourceUseFor::CLUB,
            'use_for_id' => $club->id,
            'create_user_id' => Auth::id()
        ];

        // Xử lý upload file thumbnail ngầm
        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $filePath = $file->store('temp'); // Lưu file tạm thời

            UploadImageToCloud::dispatch($club, $filePath, 'thumbnail', $metaData);
        }

        // Xử lý upload file cover_image ngầm
        if ($request->hasFile('cover_image')) {
            $file = $request->file('cover_image');
            $filePath = $request->file('cover_image')->store('temp'); // Lưu file tạm thời

            UploadImageToCloud::dispatch($club, $filePath, 'cover_image', $metaData);
        }

        return redirect()->route('admin-club.information', $club->id)->with('success', 'Hình ảnh đã được cập nhật.');
    }

    public function updateOverview(Request $request, $id)
    {
        $club = Club::findOrFail($id);

        $club->update([
            'member_limit' => $request->input('member_limit'),
            'award_amount' => $request->input('award_amount'),
            'projects_completed' => $request->input('projects_completed'),
            'future_project_amount' => $request->input('future_project_amount'),
            'event_amount' => $request->input('event_amount'),
        ]);

        return redirect()->route('admin-club.information', $club->id)->with('success', 'Thông tin tổng quan đã được cập nhật.');
    }

    public function updateDescription(Request $request, $id)
    {
        $club = Club::findOrFail($id);

        $club->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'founded_date' => $request->input('founded_date'),
            'category' => $request->input('category'),
            'address' => $request->input('address'),
            'mission' => $request->input('mission'),
            'content_type' => $request->input('content_type'),
            'community_purpose' => $request->input('community_purpose'),
            'skill_improvement' => $request->input('skill_improvement'),
            'vision' => $request->input('vision'),
            'core_values' => $request->input('core_values'),
            'slogan' => $request->input('slogan'),
            'activity_info' => $request->input('activity_info'),
        ]);

        return redirect()->route('admin-club.information', $club->id)->with('success', 'Mô tả chi tiết đã được cập nhật.');
    }

    public function uploadResource(Request $request)
    {
        Log::info('upload resource');
        $request->validate([
            'resource' => 'required|file|mimes:jpg,jpeg,png,mp4,avi,mov',
        ]);

        $file = $request->file('resource');
        $path = $file->store('resources');

        // Phân biệt loại file
        $mimeType = $file->getMimeType();
        $type = strpos($mimeType, 'image') !== false ? ResourceType::IMAGE : ResourceType::VIDEO;

        // Lấy current_club_id từ session
        $useForId = session('current_club_id');

        // // Lưu vào Model Resource
        $resource = Resource::create([
            'public_url' => Storage::url($path),
            'secure_url' => Storage::url($path),
            'type' => $type,
            'use_for' => ResourceUseFor::GALLERY,
            'public_id' => $path,
            'use_for_id' => $useForId, // Cập nhật nếu cần thiết
            'create_user_id' => Auth::id(),
        ]);

        // Tạo metadata cho resource
        $metaData = [
            'type' => $type,
            'use_for' => ResourceUseFor::GALLERY,
            'use_for_id' => $useForId,
            'create_user_id' => Auth::id()
        ];

        // Dispatch job để upload hình ảnh lên cloud
        UploadImageToCloud::dispatch($resource, $path, 'public_url', $metaData);

        return redirect()->back()->with('success', 'Resource đã được upload thành công.');
    }

    public function list()
    {
        return view('admin.members.list');
    }

    public function committee()
    {
        return view('admin.members.committee');
    }
}
