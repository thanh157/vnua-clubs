<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClubRequest extends Model
{
    use HasFactory;

    use HasFactory;

    protected $fillable = [
        'club_name',
        'description',
        'category',
        'activity_time',
        'logo',
        'user_id',
        'status'
    ];

    // Thiết lập mối quan hệ với model User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}