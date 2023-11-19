<?php

declare(strict_types=1);

namespace App\Data;

class UsersDAO extends AbstractDBHandler
{
    public function getAllUsers(): bool|array
    {
        // Get all rows
        $sql = "select * from gebruikers order by id";
        return $this->read($sql);
    }

    public function getUserByName(string $naam): bool|array
    {
        // Get single row
        $sql = "select gebruikersnaam, wachtwoord from gebruikers where gebruikersnaam = :naam";
        $placeholders = ['naam' => $naam];
        return $this->read($sql, $placeholders, false);
    }

    public function addUser(string $naam, string $paswoord): false|string
    {
        // Add single row
        $sql = "insert into gebruikers (gebruikersnaam, wachtwoord) values (:naam, :paswoord)";
        $placeholders = ['naam' => $naam, 'paswoord' => $paswoord];
        return $this->create($sql, $placeholders); // return last inserted id
    }
}