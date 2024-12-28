<?php

namespace App\Enums;

enum StatusActivity: string
{
    case PLANNED = 'planned';
    case ON_GOING = 'on_going';
    case COMPLETED = 'completed';
}
