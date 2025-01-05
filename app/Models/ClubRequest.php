<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClubRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'student_id',
        'class_name',
        'phone',
        'email',
        'gender',
        'avatar',
        'faculty',
        'purpose'
    ];
}