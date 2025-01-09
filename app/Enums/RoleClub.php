<?php

namespace App\Enums;

enum RoleClub: string
{
    case PRESIDENT = 'president';
    case MEMBER = 'member';
    case ADMIN = 'admin';
    case VICE_PRESIDENT = 'vice_president';

    public function name(): string
    {
        return match($this) {
            self::PRESIDENT => 'Chủ tịch',
            self::MEMBER => 'Thành viên',
            self::VICE_PRESIDENT => 'Phó chủ tịch',
            self::ADMIN => 'Quản trị viên',
        };
    }

    public function priority(): int
    {
        return match($this) {
            self::PRESIDENT => 1,
            self::VICE_PRESIDENT => 2,
            self::ADMIN => 3,
            self::MEMBER => 4,
        };
    }
}
