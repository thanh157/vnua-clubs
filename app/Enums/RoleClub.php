<?php

namespace App\Enums;

enum Role: string
{
    case PRESIDENT = 'president';
    case VICE_PRESIDENT = 'vice_president';
    case MEMBER = 'member';
}
