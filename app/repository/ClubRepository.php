<?php  
namespace App\Repository;
use App\Models\Club;


class ClubRepository
{
    public function getAll()
    {
        return Club::all();
    }

    public function getById($id)
    {
        return Club::findOrFail($id);
    }   
}