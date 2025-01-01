<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use App\Models\Club;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition()
    {
        // Lấy tất cả các ID của các user và club đã tồn tại
        $userIds = User::pluck('id')->toArray();
        $clubIds = Club::pluck('id')->toArray();

        return [
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraphs(3, true),
            'image' => $this->faker->imageUrl(640, 480, 'posts', true),
            'reference_url' => $this->faker->optional()->url,
            'status' => $this->faker->numberBetween(0, 1),
            'user_id' => $this->faker->randomElement($userIds),
            'club_id' => $this->faker->optional()->randomElement($clubIds),
        ];
    }
}