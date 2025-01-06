<?php

namespace App\DTOs;

class ResourceMetaData
{
    public $type;
    public $use_for;
    public $club_id;
    public $create_user_id;
    public $use_for_id;


    public function __construct($type, $use_for, $club_id, $user_id, $use_for_id)
    {
        $this->type = $type;
        $this->use_for = $use_for;
        $this->club_id = $club_id;
        $this->create_user_id = $user_id;
        $this->use_for_id = $use_for_id;
    }
}