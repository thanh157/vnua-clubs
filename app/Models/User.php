<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

     // Bảng tương ứng trong cơ sở dữ liệu
     protected $table = 'users';

     // Các thuộc tính có thể được gán hàng loạt
     protected $fillable = [
         'name', 
         'email', 
         'password', 
         'role'
     ];
 
     // Các thuộc tính không thể gán hàng loạt
     protected $guarded = [];
 
     // Bảo vệ mật khẩu
     protected $hidden = [
         'password',
     ];
 
     // Các thuộc tính ngày tháng
     protected $dates = [
         'created_at',
         'updated_at',
     ];
 
     // Xác định các giá trị hợp lệ cho trường 'role'
     const ROLES = ['admin', 'president'];
 
     // Hàm xác thực role
     public function isAdmin()
     {
         return $this->role === 'admin';
     }
 
     public function isPresident()
     {
         return $this->role === 'president';
     }
}
