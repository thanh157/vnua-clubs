<?php

namespace App\Models;

use App\Enums\StatusActivity;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'time_note',
        'image_url',
        'start_date',
        'end_date',
        'location',
        'status',
        'club_id',
        'budget'
    ];

    protected $casts = [
        'status' => StatusActivity::class,
    ];

    public function club(): BelongsTo
    {
        return $this->belongsTo(Club::class, 'club_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_activity_join')
                    ->withTimestamps(); // Automatically manages created_at and updated_at
    }
}
