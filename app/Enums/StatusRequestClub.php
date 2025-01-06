<?php

namespace App\Enums;

enum StatusRequestClub: string
{
    case PENDING = 'pending';
    case APPROVED = 'approved';
    case REJECT = 'reject';
}

