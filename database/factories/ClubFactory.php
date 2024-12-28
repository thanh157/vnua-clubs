<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Club;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Club>
 */
class ClubFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Club::class;

    public function definition()
    {
        return [
            'user_id' => $this->faker->optional()->randomElement([User::factory(), null]), // Tạo một User mới hoặc null cho mỗi Club
            'thumbnail' => $this->faker->imageUrl(),
            'name' => $this->faker->company,
            'description' => $this->faker->paragraph,
            'established_date' => $this->faker->date(),
            'total_budget' => $this->faker->randomFloat(2, 0, 10000),
        ];
    }
}
