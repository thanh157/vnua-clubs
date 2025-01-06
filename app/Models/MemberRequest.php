<?php

namespace App\Models;

use App\Enums\StatusMemberRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MemberRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'student_id',
        'class_name',
        'phone',
        'email',
        'gender',
        'avatar',
        'faculty',
        'purpose',
        'club_id',
        'status',
        'user_id'
    ];

    protected $casts = [
        'status' => StatusMemberRequest::class,
    ];

    public function club(): BelongsTo
    {
        return $this->belongsTo(Club::class, 'club_id');
    }
}
