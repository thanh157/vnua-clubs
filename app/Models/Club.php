<?php

namespace App\Models;

use App\DTOs\ClubDTO;
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
        'balance',
        'category',
        'likes',
        'owner_id',
        'status',
    ];

    // Relationship tới User làm President
    public function president(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'owner_id');
    }

    // Relationship tới User làm Member
    public function members(): HasMany
    {
        return $this->hasMany(Member::class);
    }

    // Relationship tới User
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_club_member')
                    ->withPivot('role', 'is_active', 'is_blocked')
                    ->withTimestamps();
    }

    public function memberUsers()
    {
        return $this->users()->wherePivot('role', 'member');
    }

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }

    public function memberRequests(): HasMany
    {
        return $this->hasMany(MemberRequest::class);
    }

    public function likes(): HasMany
    {
        return $this->hasMany(Like::class);
    }

    public function isLikedBy(?User $user)
    {
        if ($user === null) {
            return true;
        }
        return $this->likes()->where('user_id', $user->id)->exists();
    }

     // Relationship tới Activity
     public function activities(): HasMany
     {
         return $this->hasMany(Activity::class);
     }
}
