<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Enums\Role;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
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

        if (!DB::table('users')->where('email', 'admin@gmail.com')->exists()) {
            DB::table('users')->insert([
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin@123'),
                'role' => Role::ADMIN,
                'name' => 'Admin',
                'code' => Str::random(10),
                'phone' => '1234567890',
            ]);
        }

        if (!DB::table('users')->where('email', 'adclub@gmail.com')->exists()) {
            DB::table('users')->insert([
                'email' => 'adclub@gmail.com',
                'password' => bcrypt('adclub@123'),
                'role' => Role::ADMIN_CLUB,
                'name' => 'Admin Club',
                'code' => Str::random(10),
                'phone' => '1234567890',
            ]);
        }

        if (!DB::table('users')->where('email', 'user@gmail.com')->exists()) {
            DB::table('users')->insert([
                'email' => 'user@gmail.com',
                'password' => bcrypt('user@1234'),
                'role' => Role::USER,
                'name' => 'User',
                'code' => Str::random(10),
                'phone' => '1234567890',
            ]);
        }
    }
}
