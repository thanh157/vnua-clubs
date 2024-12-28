<?php

namespace Database\Factories;

use App\Models\Club;
use App\Models\Activity;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Activity>
 */
class ActivityFactory extends Factory
{
    protected $model = Activity::class;

    public function definition()
    {
        return [
            // Tạo club_id cho mỗi activity từ model Club
            'club_id' => Club::inRandomOrder()->first()->id,
            'name' => $this->faker->word,  // Tạo tên hoạt động
            'description' => $this->faker->paragraph,  // Tạo mô tả hoạt động
            'start_date' => $this->faker->date(),  // Ngày bắt đầu
            'end_date' => $this->faker->date(),  // Ngày kết thúc
            'status' => $this->faker->randomElement(['planned', 'ongoing', 'completed']),  // Trạng thái hoạt động
            'budget' => $this->faker->randomFloat(2, 100, 10000),  // Ngân sách (ví dụ từ 100 đến 10000)
        ];
    }
}
