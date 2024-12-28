<?php

namespace Database\Factories;

use App\Models\Club;
use App\Models\Member;
use App\Models\Budget;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Budget>
 */
class BudgetFactory extends Factory
{
    protected $model = Budget::class;

    public function definition()
    {
        return [
            // Tạo club_id cho mỗi budget từ model Club
            'club_id' => Club::inRandomOrder()->first()->id,
            // Tạo member_id cho mỗi budget từ model Member, hoặc null nếu không có
            'member_id' => Member::factory(),
            'amount' => $this->faker->randomFloat(2, 100, 10000),  // Số tiền ngân sách (ví dụ từ 100 đến 10000)
            'previous_amount' => $this->faker->randomFloat(2, 100, 10000),  // Số dư trước đó
            'type' => $this->faker->randomElement(['income', 'expense', 'adjustment']),  // Loại ngân sách
            'description' => $this->faker->paragraph,  // Mô tả ngân sách
            'date' => $this->faker->date(),  // Ngày giao dịch ngân sách
        ];
    }
}
