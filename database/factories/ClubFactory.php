<?php

namespace Database\Factories;

use App\Models\Club;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClubFactory extends Factory
{
    protected $model = Club::class;

    public function definition()
    {
        // Lấy tất cả các ID của các user đã tồn tại
        $userIds = User::pluck('id')->toArray();

        return [
            'name' => $this->faker->company,
            'thumbnail' => $this->faker->imageUrl(640, 480, 'clubs', true),
            'cover_image' => $this->faker->imageUrl(1280, 720, 'clubs', true),
            'description' => $this->faker->paragraph,
            'balance' => $this->faker->numberBetween(0, 10000),
            'owner_id' => $this->faker->optional()->randomElement($userIds), // Tạo admin_id có hoặc không, nếu có phải là của một user đã tồn tại
        ];
    }
}
