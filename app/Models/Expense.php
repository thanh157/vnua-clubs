<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    protected $fillable = ['club_id', 'amount', 'description', 'expense_date'];

    // Mối quan hệ với Club
    public function club()
    {
        return $this->belongsTo(Club::class);
    }
}
