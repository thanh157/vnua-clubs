<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $totalUsers = 20; // Tổng số lượng user cần tạo
        $chunkSize = 20; // Số lượng user tạo trong mỗi chunk

        for ($i = 0; $i < $totalUsers; $i += $chunkSize) {
            User::factory()->count($chunkSize)->create();
        }
    }
}