<?php

namespace App\Models;

use App\Enums\Role;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Club extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'thumbnail',
        'cover_image',
        'description',
        'balance'
    ];

    // Relationship tới User làm President
    public function president(): HasOne
    {
        return $this->hasOne(User::class, 'club_id')->where('role', Role::PRESIDENT);
    }

    // Relationship tới User làm Member
    public function members(): HasMany
    {
        return $this->hasMany(User::class, 'club_id')->where('role', Role::MEMBER);
    }

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }

    public function memberRequests(): HasMany
    {
        return $this->hasMany(MemberRequest::class);
    }
}
