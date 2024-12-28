<?php

namespace Database\Factories;

use App\Models\Club;
use App\Models\ClubGallery;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ClubGallery>
 */
class ClubGalleryFactory extends Factory
{
    protected $model = ClubGallery::class;

    public function definition()
    {
        return [
            // Chọn ngẫu nhiên một club_id từ các Club đã tồn tại
            'club_id' => Club::inRandomOrder()->first()->id,
            // Tạo ảnh giả bằng cách sử dụng faker (hoặc bạn có thể tùy chỉnh hình ảnh phù hợp)
            'img' => $this->faker->imageUrl(640, 480, 'nature', true),  // Tạo URL ảnh ngẫu nhiên
        ];
    }
}
