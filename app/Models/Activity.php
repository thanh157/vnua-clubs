<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    // Bảng tương ứng trong cơ sở dữ liệu
    protected $table = 'activities';

    // Các thuộc tính có thể được gán hàng loạt
    protected $fillable = [
        'club_id',
        'name',
        'description',
        'start_date',
        'end_date',
        'status',
        'budget'
    ];

    // Các thuộc tính không thể gán hàng loạt
    protected $guarded = [];

    // Các thuộc tính ngày tháng
    protected $dates = [
        'start_date',
        'end_date',
        'created_at',
        'updated_at',
    ];

    // Liên kết với model Club
    public function club()
    {
        return $this->belongsTo(Club::class);
    }

    // Hàm tính ngân sách
    public function getBudgetAttribute($value)
    {
        return number_format($value, 2);
    }

    // Hàm xác định trạng thái activity
    public function getStatusAttribute($value)
    {
        return ucfirst($value); // Định dạng trạng thái với chữ cái đầu tiên viết hoa
    }

    // Hàm tính khoảng thời gian giữa start_date và end_date
    public function getDurationAttribute()
    {
        $start = \Carbon\Carbon::parse($this->start_date);
        $end = \Carbon\Carbon::parse($this->end_date);
        return $start->diffInDays($end) . ' days';
    }
}
