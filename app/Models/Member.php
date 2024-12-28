<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    // Bảng tương ứng trong cơ sở dữ liệu
    protected $table = 'members';

    // Các thuộc tính có thể được gán hàng loạt
    protected $fillable = [
        'club_id',
        'name',
        'email',
        'phone',
        'status'
    ];

    // Các thuộc tính không thể gán hàng loạt
    protected $guarded = [];

    // Các thuộc tính ngày tháng
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    // Liên kết với model Club
    public function club()
    {
        return $this->belongsTo(Club::class);
    }

    // Hàm xác định trạng thái member
    public function getStatusAttribute($value)
    {
        return ucfirst($value); // Định dạng trạng thái với chữ cái đầu tiên viết hoa
    }

    // Hàm xác nhận trạng thái 'approved'
    public function isApproved()
    {
        return $this->status === 'approved';
    }

    // Hàm xác nhận trạng thái 'pending'
    public function isPending()
    {
        return $this->status === 'pending';
    }

    // Hàm xác nhận trạng thái 'rejected'
    public function isRejected()
    {
        return $this->status === 'rejected';
    }
}
