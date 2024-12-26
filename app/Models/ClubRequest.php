<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClubRequest extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'club_name', 'description', 'status'];

    // Mối quan hệ với User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
