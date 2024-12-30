<?php  
namespace App\Repository;
use App\Models\User;


class UserRepository
{
    public function getAll()
    {
        return User::all();
    }
}