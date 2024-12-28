<?php

namespace App\Models;

use App\Enums\BalanceType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'pre_balance',
        'next_balance',
        'amount',
        'type',
        'content',
        'user_id',
        'club_id'
    ];

    protected $casts = [
        'type' => BalanceType::class,
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
