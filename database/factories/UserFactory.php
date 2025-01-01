<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Enums\Role;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        // Mã hóa mật khẩu một lần và sử dụng giá trị mã hóa sẵn
        $hashedPassword = Hash::make('pass@123');

        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => $hashedPassword, // Mật khẩu mặc định
            'role' => Role::USER, // Random role
        ];
    }

    private function uniqueEmail()
    {
        return 'user' . Str::random(10) . '@example.com';
    }
}
