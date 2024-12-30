<?php

namespace App\Models;

use App\Enums\StatusRequestClub;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ClubRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'owner_name',
        'owner_code',
        'owner_email',
        'owner_phone',
        'status'
    ];

    protected $casts = [
        'status' => StatusRequestClub::class,
    ];
}

