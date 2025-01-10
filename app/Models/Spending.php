<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spending extends Model
{
    use HasFactory;

    protected $fillable = [
        'expense_name',
        'type',
        'amount',
        'category',
        'date',
        'description',
    ];

    // Định nghĩa các hằng số cho loại chi tiêu
    const TYPE_INCOME = 'income';
    const TYPE_EXPENSE = 'expense';
}
