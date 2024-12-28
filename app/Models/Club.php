<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;

     // Bảng tương ứng trong cơ sở dữ liệu
     protected $table = 'clubs';

     // Các thuộc tính có thể được gán hàng loạt
     protected $fillable = [
         'thumbnail',
         'name',
         'description',
         'established_date',
         'user_id',
         'total_budget'
     ];
 
     // Các thuộc tính không thể gán hàng loạt
     protected $guarded = [];
 
     // Các thuộc tính ngày tháng
     protected $dates = [
         'established_date',
         'created_at',
         'updated_at',
     ];
 
     // Liên kết với model User
     public function user()
     {
         return $this->belongsTo(User::class);
     }
 
     // Hàm tính tổng ngân sách
     public function getTotalBudgetAttribute($value)
     {
         return number_format($value, 2);
     }
 
     // Các thuộc tính bổ sung nếu cần
     public function getFormattedEstablishedDateAttribute()
     {
         return $this->established_date->format('d/m/Y');
     }
}
