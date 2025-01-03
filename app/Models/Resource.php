<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\ResourceType;
use App\Enums\ResourceUseFor;

class Resource extends Model
{
    use HasFactory;

    protected $fillable = [
        'public_url',
        'secure_url',
        'type',
        'useFor',
        'public_id',
        'club_id',
        'user_id',
        'activity_id',
        'post_id',
    ];

    protected $casts = [
        'type' => ResourceType::class,
        'useFor' => ResourceUseFor::class,
    ];
}