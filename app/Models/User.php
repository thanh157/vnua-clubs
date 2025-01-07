<?php

namespace App\Models;

use App\Enums\Role;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Contracts\Auth\MustVerifyEmail as MustVerifyEmailContract;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\MustVerifyEmail;

class User extends Authenticatable implements MustVerifyEmailContract
{
    use HasFactory, Notifiable, MustVerifyEmail;

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

    public function ownClubs()
    {
        return $this->hasMany(Club::class, 'owner_id');
    }
}
