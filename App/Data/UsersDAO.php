<?php

declare(strict_types=1);

namespace App\Data;

class UsersDAO
{
    private array $config;

    public function __construct()
    {
        $this->config = require('config.php'); // adapt path?
    }
    public function getAllUsers(): bool|array
    {
        // Get all rows
        $sql = "select * from gebruikers order by id";
        $db = new DBConnection($this->config);
        return $db->run($sql)->fetchAll();
    }

    public function getUserByName(string $naam): bool|array
    {
        // Get single row
        $sql = "select gebruikersnaam, wachtwoord from gebruikers where gebruikersnaam = :naam";
        $db = new DBConnection($this->config);
        return $db->run($sql, ['naam' => $naam])->fetch();
    }

    public function addUser(string $naam, string $paswoord): false|string
    {
        // Add single row
        $sql = "insert into gebruikers (gebruikersnaam, wachtwoord) values (:naam, :paswoord)";
        $db = new DBConnection($this->config);
        $db->run($sql, ['naam' => $naam, 'paswoord' => $paswoord]);
        return $db->pdo->lastInsertId(); // return last inserted id
    }
}