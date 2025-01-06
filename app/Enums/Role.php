<?php

namespace App\Enums;

enum Role: string
{
    case ADMIN = 'ADMIN';
    case ADMIN_CLUB = 'ADMIN_CLUB';
    case USER = 'USER';
}
