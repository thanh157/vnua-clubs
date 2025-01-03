<?php

namespace App\Enums;

enum ResourceUseFor: string
{
    case AVATAR = 'AVATAR';
    case THUMBNAIL = 'THUMBNAIL';
    case GALLERY = 'GALLERY';
}