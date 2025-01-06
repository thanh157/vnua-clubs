<?php

namespace Database\Factories;

use App\Models\Member;
use App\Models\User;
use App\Models\Club;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Enums\RoleClub;

class MemberFactory extends Factory
{
    protected $model = Member::class;

    public function definition()
    {
        // Lấy tất cả các ID của các user và club đã tồn tại
        $userIds = User::pluck('id')->toArray();
        $clubIds = Club::pluck('id')->toArray();

        do {
            $userId = $this->faker->randomElement($userIds);
            $clubId = $this->faker->randomElement($clubIds);
            $exists = Member::where('user_id', $userId)->where('club_id', $clubId)->exists();
        } while ($exists);

        return [
            'user_id' => $userId,
            'club_id' => $clubId,
            'role' => $this->faker->randomElement(array_map(fn($role) => $role->value, RoleClub::cases())),
            'is_active' => $this->faker->boolean,
            'is_blocked' => $this->faker->boolean,
        ];
    }
}