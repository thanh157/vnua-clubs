<?php

namespace Database\Factories;

use App\Models\ClubRequest;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ClubRequest>
 */
class ClubRequestFactory extends Factory
{
    protected $model = ClubRequest::class;

    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'description' => $this->faker->paragraph,
            'owner_name' => $this->faker->name,
            'owner_code' => $this->faker->word,
            'owner_email' => $this->faker->email,
            'owner_phone' => $this->faker->phoneNumber,
            'status' => $this->faker->randomElement(['pending', 'approved']),
        ];
    }
}
