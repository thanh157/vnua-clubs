<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    protected $table = 'posts';

    // Các thuộc tính có thể được gán hàng loạt
    protected $fillable = [
        'club_id',
        'title',
        'content'
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
}
