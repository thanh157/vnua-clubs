<?php
namespace App\DTOs;

use App\Models\Club;

class ClubDTO
{
    public $id;
    public $name;
    public $thumbnail;
    public $cover_image;
    public $description;
    public $balance;
    public $category;
    public $likes;
    public $membserAmount;  
    public $postCount;            

    public function __construct($id, $name, $thumbnail, $cover_image, $description, $balance, $category, $likes)
    {
        $this->id = $id;
        $this->name = $name;
        $this->thumbnail = $thumbnail;
        $this->cover_image = $cover_image;
        $this->description = $description;
        $this->balance = $balance;
        $this->category = $category;
        $this->likes = $likes;
    }

    // Constructor to create a ClubDTO from a Club object
    public static function fromClub(Club $club)
    {
        return new self(
            $club->id,
            $club->name,
            $club->thumbnail,
            $club->cover_image,
            $club->description,
            $club->balance,
            $club->category,
            $club->likes // Assuming you have a likes attribute or method
        );
    }
}