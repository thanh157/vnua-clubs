<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class User extends Model
{
    use HasFactory;

    // Các thuộc tính có thể gán
    protected $fillable = ['name', 'email', 'password', 'role_id'];

    // Định nghĩa bảng của mô hình này
    protected $table = 'users';

    // Hàm để lấy thông tin Role của User
    public function getRole()
    {
        return DB::table('roles')
                 ->where('id', $this->role_id)
                 ->first();
    }

    // Hàm để lấy thông tin về các Membership của User
    public function getMemberships()
    {
        return DB::table('memberships')
                 ->where('user_id', $this->id)
                 ->get();
    }

    // Hàm để lấy danh sách câu lạc bộ mà người dùng này tham gia
    public function getClubs()
    {
        return DB::table('memberships')
                 ->join('clubs', 'memberships.club_id', '=', 'clubs.id')
                 ->where('memberships.user_id', $this->id)
                 ->get(['clubs.*']);
    }

    // Hàm để kiểm tra xem người dùng có phải là admin hay không
    public function isAdmin()
    {
        return $this->role_id === 1;  // Giả sử role_id = 1 là Admin
    }

    // Hàm để kiểm tra mật khẩu của người dùng (thay vì sử dụng Authenticatable)
    public function checkPassword($password)
    {
        return password_verify($password, $this->password);
    }

    // Hàm để tạo mật khẩu mới cho người dùng
    public function setPassword($password)
    {
        $this->password = password_hash($password, PASSWORD_BCRYPT);
        $this->save();
    }

    // Hàm để đăng nhập (tạo session hoặc JWT, phụ thuộc vào cách bạn làm xác thực)
    public function login()
    {
        // Logic đăng nhập (tạo session hoặc JWT token)
    }
}
