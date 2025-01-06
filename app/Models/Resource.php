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
        'use_for',
        'public_id',
        'use_for_id',
        'create_user_id',
    ];

    protected $casts = [
        'type' => ResourceType::class,
        'use_for' => ResourceUseFor::class,
    ];
}