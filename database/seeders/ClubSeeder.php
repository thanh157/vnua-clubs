<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Club;

class ClubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // if (!DB::table('admin')->where('username', 'admin')->exists()) {
        //     DB::table('admin')->insert([
        //         'username' => 'admin',
        //         'password' => bcrypt('123456aA@'),
        //     ]);
        // }

        Club::factory()->count(10)->create();
    }
}
