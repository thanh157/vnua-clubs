<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ClubRequest;
use Illuminate\Http\Request;

class ClubRequestController extends Controller
{
    public function index()
    {
        // Lấy danh sách đăng ký từ cơ sở dữ liệu
        $requests = ClubRequest::all();

        return view('admin.pages.admin-club.club-list2', compact('requests'));
    }

    public function show($id)
    {
        // Lấy chi tiết đơn đăng ký từ cơ sở dữ liệu
        $request = ClubRequest::findOrFail($id);

        return view('admin.pages.admin-club.club-request-detail', compact('request'));
    }
}