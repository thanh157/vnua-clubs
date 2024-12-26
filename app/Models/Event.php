<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['club_id', 'name', 'description', 'event_date'];

    // Mối quan hệ với Club
    public function club()
    {
        return $this->belongsTo(Club::class);
    }

    // Mối quan hệ với User thông qua việc đăng ký tham gia sự kiện
    public function users()
    {
        return $this->belongsToMany(User::class, 'event_user');
    }
}
