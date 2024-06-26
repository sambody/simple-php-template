<?php

namespace App\Business;

use App\Data\UsersDAO;
use App\Entities\User;

class UserService
{
    private UsersDAO $usersDAO;

    public function __construct()
    {
        $this->usersDAO = new UsersDAO();
    }

    public function getUser(int $id): ?User
    {
        $user = $this->usersDAO->getUser($id);
        if ($user) {
            return new User(
                $user['id'],
                $user['voornaam'],
                $user['achternaam'],
                $user['email'],
                $user['straat'],
                $user['huisnummer'],
                $user['postcode'],
                $user['plaats'],
                $user['telefoon'],
                $user['wachtwoord']
            );
        }
        return null;
    }

    public function getUserByEmail(string $email): ?User
    {
        $user = $this->usersDAO->getUserByEmail($email);
        if ($user) {
            return new User(
                $user['id'],
                $user['voornaam'],
                $user['achternaam'],
                $user['email'],
                $user['straat'],
                $user['huisnummer'],
                $user['postcode'],
                $user['plaats'],
                $user['telefoon'],
                $user['wachtwoord']
            );
        }
        return null;
    }

    // Todo: Move to Authentication?
    public function validatePassword(string $email, string $paswoord): bool
    {
        $user = $this->usersDAO->getUserByEmail($email);
        if ($user) {
            return password_verify($paswoord, $user['wachtwoord']);
        }
        return false;
    }

    public function addUser(
        string $voornaam,
        string $naam,
        string $email,
        string $straat,
        int $huisnummer,
        int $plaatsId,
        string $tel,
        string $paswoord
    ): ?int {
        // Add user, get id
        $result = $this->usersDAO->addUser($voornaam, $naam, $email, $straat, $huisnummer, $plaatsId, $tel, $paswoord);

        if (!$result) {
            return null;
        }
        return $result;
    }

}