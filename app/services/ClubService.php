<?php
use App\Repository\ClubRepository;

class ClubService
{
    protected $clubRepository;

    public function __construct(ClubRepository $clubRepository)
    {
        $this->clubRepository = $clubRepository;
    }

    public function getAllUsers()
    {
        return $this->clubRepository->getAll();
    }

    public function getUserById($id)
    {
        return $this->clubRepository->getById($id);
    }
}