<?php

namespace App\Enums;

enum ResourceUseFor: string
{
    case AVATAR = 'AVATAR';
    case THUMBNAIL = 'THUMBNAIL';
    case GALLERY = 'GALLERY';
    case CLUB_REQUEST = 'CLUB_REQUEST';
    case MEMBER_REQUEST = 'MEMBER_REQUEST';
    case CLUB = 'CLUB';
}