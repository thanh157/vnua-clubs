<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClubRequestController extends Controller
{
    public function index()
    {
        // Lấy danh sách đăng ký từ cơ sở dữ liệu (ví dụ)
        $requests = [
            [
                'full_name' => 'Nguyễn Văn A',
                'student_id' => '123456',
                'class_name' => 'CTK42',
                'phone' => '0123456789',
                'email' => 'nguyenvana@example.com',
                'gender' => 'Nam',
                'avatar' => 'path/to/avatar.jpg',
                'faculty' => 'Công nghệ thông tin',
                'purpose' => 'Phát triển kỹ năng bóng rổ'
            ],
            // Thêm các đăng ký khác tương tự
        ];

        return view('admin.pages.admin-club.club-list2', compact('requests'));
    }
}