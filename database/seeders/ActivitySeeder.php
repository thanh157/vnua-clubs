<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Activity;
use App\Models\Club;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Lấy tất cả các câu lạc bộ đã tồn tại
        $clubs = Club::all();

        // Tạo 50 hoạt động ngẫu nhiên cho các câu lạc bộ
        Activity::factory()->count(50)->make()->each(function ($activity) use ($clubs) {
            // Gán câu lạc bộ ngẫu nhiên cho mỗi hoạt động
            $activity->club_id = $clubs->random()->id;
            $activity->save();
        });
    }
}
