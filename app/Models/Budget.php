<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    use HasFactory;

    // Bảng tương ứng trong cơ sở dữ liệu
    protected $table = 'budgets';

    // Các thuộc tính có thể được gán hàng loạt
    protected $fillable = [
        'club_id',
        'member_id',
        'amount',
        'previous_amount',
        'type',
        'description',
        'date'
    ];

    // Các thuộc tính không thể gán hàng loạt
    protected $guarded = [];

    // Các thuộc tính ngày tháng
    protected $dates = [
        'date',
        'created_at',
        'updated_at',
    ];

    // Liên kết với model Club
    public function club()
    {
        return $this->belongsTo(Club::class);
    }

    // Liên kết với model Member
    public function member()
    {
        return $this->belongsTo(Member::class);
    }

    // Hàm để định dạng loại ngân sách (income, expense, adjustment)
    public function getTypeAttribute($value)
    {
        return ucfirst($value); // Định dạng chữ cái đầu tiên viết hoa
    }

    // Hàm tính số dư (cộng hoặc trừ tùy theo loại ngân sách)
    public function calculateBalance()
    {
        $balance = 0;

        if ($this->type === 'income') {
            $balance = $this->amount;
        } elseif ($this->type === 'expense') {
            $balance = -$this->amount;
        } elseif ($this->type === 'adjustment') {
            $balance = $this->previous_amount ? $this->previous_amount + $this->amount : $this->amount;
        }

        return number_format($balance, 2);
    }
}
