<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $table = 'user_club_member';

    protected $fillable = [
        'full_name',
        'student_id',
        'class_name',
        'phone',
        'email',
        'gender',
        'avatar',
        'faculty',
        'purpose',
        'user_id',
        'club_id',
        'role',
        'is_active',
        'is_blocked',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function club()
    {
        return $this->belongsTo(Club::class);
    }
}