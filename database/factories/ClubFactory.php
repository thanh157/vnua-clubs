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
            'balance' => $this->faker->randomFloat(2, 1000, 1000000),
            'category' => $this->faker->word,
            'address' => $this->faker->address,
            'projects_completed' => $this->faker->numberBetween(0, 100),
            'founded_date' => $this->faker->date,
            'content_type' => $this->faker->word,
            'community_purpose' => $this->faker->sentence,
            'skill_improvement' => $this->faker->sentence,
            'vision' => $this->faker->sentence,
            'core_values' => $this->faker->sentence,
            'slogan' => $this->faker->sentence,
            'mission' => $this->faker->sentence,
            'activity_info' => $this->faker->paragraph,
            'likes' => $this->faker->numberBetween(0, 1000),
            'owner_id' => $this->faker->optional()->randomElement($userIds),
            'status' => $this->faker->randomElement(['active', 'inactive']),
        ];
    }
}
