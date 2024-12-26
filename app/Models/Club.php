<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'established_date'];

    // Mối quan hệ với Membership
    public function memberships()
    {
        return $this->hasMany(Membership::class);
    }

    // Mối quan hệ với Event (sự kiện của câu lạc bộ)
    public function events()
    {
        return $this->hasMany(Event::class);
    }

    // Mối quan hệ với các thành viên thông qua Membership
    public function users()
    {
        return $this->belongsToMany(User::class, 'memberships');
    }
}
