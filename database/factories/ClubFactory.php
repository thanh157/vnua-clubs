<?php

namespace Database\Factories;

use App\Models\Club;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ClubFactory extends Factory
{
    protected $model = Club::class;

    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'thumbnail' => $this->faker->imageUrl(640, 480, 'clubs', true),
            'cover_image' => $this->faker->imageUrl(1280, 720, 'clubs', true),
            'description' => $this->faker->paragraph,
            'balance' => $this->faker->numberBetween(0, 10000),
        ];
    }
}