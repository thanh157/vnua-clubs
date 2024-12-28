<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    // Bảng tương ứng trong cơ sở dữ liệu
    protected $table = 'budget_documents';

    // Các thuộc tính có thể được gán hàng loạt
    protected $fillable = [
        'budget_id',
        'img'
    ];

    // Các thuộc tính không thể gán hàng loạt
    protected $guarded = [];

    // Liên kết với model Budget
    public function budget()
    {
        return $this->belongsTo(Budget::class);
    }

    // Hàm để lấy đường dẫn ảnh
    public function getImageUrlAttribute()
    {
        return asset('storage/' . $this->img); // giả sử bạn lưu ảnh trong thư mục 'storage'
    }
}
