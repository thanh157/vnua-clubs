<?php

namespace Database\Factories;

use App\Models\Activity;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Club;
use App\Enums\StatusActivity;

class ActivityFactory extends Factory
{
    protected $model = Activity::class;

    public function definition()
    {
        // Lấy tất cả các ID của các câu lạc bộ đã tồn tại
        $clubIds = Club::pluck('id')->toArray();

        // Tạo ngày bắt đầu và ngày kết thúc ngẫu nhiên với giờ
        $startDate = $this->faker->dateTimeBetween('-1 month', '+1 month');
        $endDate = $this->faker->dateTimeBetween('+1 month', '+2 months');

        return [
            'name' => $this->faker->company,
            'description' => $this->faker->paragraph,
            'time_note' => $this->faker->sentence,
            'image_url' => $this->faker->imageUrl(640, 480, 'activities', true),
            'start_date' => $startDate,
            'end_date' => $endDate,
            'location' => $this->faker->address,
            'status' => $this->faker->randomElement(StatusActivity::cases())->value,
            'club_id' => $this->faker->randomElement($clubIds),
            'budget' => $this->faker->numberBetween(1000, 10000),
        ];
    }
}
