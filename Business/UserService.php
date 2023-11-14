<?php

namespace Business;

use Data\UsersDAO;
use Entities\User;

class UserService
{
    private UsersDAO $usersDAO;

    public function __construct()
    {
        $this->usersDAO = new UsersDAO();
    }

    public function addUser($naam, $paswoord): bool
    {
        if ($this->usersDAO->getUserByName($naam)) {
            return false;
        }
        $this->usersDAO->addUser($naam, $paswoord);
        return true;
    }

    public function isCorrectPassword(string $naam, string $paswoord): bool
    {
        $user = $this->usersDAO->getUserByName($naam);
        if ($user) {
            return password_verify($paswoord, $user['wachtwoord']);
        }
        return false;
    }

    public function getUser(string $naam): User|bool
    {
        $result = $this->usersDAO->getUserByName($naam);
        if ($result) {
            return new User($result['gebruikersnaam'], $result['wachtwoord']);
        }
        return false;
    }

    public function getAllUsers(): bool|array
    {
        $result = $this->usersDAO->getAllUsers();
        if ($result) {
            $users = [];
            foreach ($result as $item) {
                $users[] = new User($item['gebruikersnaam'], $item['wachtwoord']);
            }
            return $users;
        }
        return false;
    }
}