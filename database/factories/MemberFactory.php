<?php

namespace Database\Factories;

use App\Models\Member;
use App\Models\Club;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Member>
 */
class MemberFactory extends Factory
{
    protected $model = Member::class;

    public function definition()
    {
        return [
            // Chọn ngẫu nhiên một club_id từ các Club đã tồn tại
            'club_id' => Club::inRandomOrder()->first()->id,

            // Các thuộc tính còn lại
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            // Trạng thái có thể là 'pending', 'approved' hoặc 'rejected'
            'status' => $this->faker->randomElement(['pending', 'approved', 'rejected']),
        ];
    }
}
