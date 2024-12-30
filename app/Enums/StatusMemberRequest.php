<?php

namespace App\Enums;

enum StatusMemberRequest: string
{
    case PENDING = 'pending';
    case APPROVED = 'approved';
    case REJECTED = 'rejected';
}
