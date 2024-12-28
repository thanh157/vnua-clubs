<?php

namespace App\Enums;

enum BalanceType: string
{
    case INCREASE = 'increase';
    case REDUCE = 'reduce';
}
