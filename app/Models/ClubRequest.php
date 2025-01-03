<?php

namespace App\Models;

use App\Enums\StatusRequestClub;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    protected $casts = [
        'status' => StatusRequestClub::class,
    ];
}

