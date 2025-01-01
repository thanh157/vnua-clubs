<?php

namespace App\Models;

use App\Enums\Role;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'email',
        'avatar_url',
        'password',
        'phone',
        'role',
        // 'club_id'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'role' => Role::class,
        'email_verified_at' => 'datetime',
    ];

    // public function club(): BelongsTo
    // {
    //     return $this->belongsTo(Club::class, 'club_id');
    // }

    public function transactions(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }

    public function clubs()
    {
        return $this->belongsToMany(Club::class, 'user_club_member')
                    ->withPivot('role', 'is_active', 'is_blocked')
                    ->withTimestamps();
    }
}
