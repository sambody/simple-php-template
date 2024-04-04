<?php

declare(strict_types=1);

namespace App\Data;

class UsersDAO extends AbstractDBHandler
{
    // Keep full names, to prevent conflict with AbstractDBHandler
    public function getAllUsers(): bool|array
    {
        // Get all rows
        $sql = "select * from Users order by id";
        return $this->read($sql);
    }

    public function getUser(int $id): bool|array
    {
        // Get single row
        $sql = "select g.id, voornaam, achternaam, email, straat, huisnummer, p.postcode as postcode, p.plaats as plaats, telefoon, wachtwoord, opmerking, promotieGeldig
            from Users as g
            inner join PizzaLeverbarePlaatsen as p 
            on g.id = p.id 
            where g.id = :id";
        $placeholders = ['id' => $id];
        return $this->read($sql, $placeholders, false);
    }

    public function getUserByEmail(string $email): bool|array
    {
        // Get single row
        $sql = "select g.id, voornaam, achternaam, email, straat, huisnummer, p.postcode as postcode, p.plaats as plaats, telefoon, wachtwoord, opmerking, promotieGeldig
            from Users as g
            inner join PizzaLeverbarePlaatsen as p 
            on g.id = p.id 
            where email = :email";
        $placeholders = ['email' => $email];
        return $this->read($sql, $placeholders, false);
    }

    public function addUser(string $voornaam, string $achternaam, string $email, string $straat, int $huisnummer, int $plaatsId, string $telefoon, string $wachtwoord, string $opmerking = '', int $promotieGeldig = 0): bool|int
    {
        // Add single row
        $sql = "insert into Users (voornaam, achternaam, email, straat, huisnummer, plaatsId, telefoon, wachtwoord, opmerking, promotieGeldig) 
            values (:voornaam, :achternaam, :email, :straat, :huisnummer, :plaatsId, :telefoon, :wachtwoord, :opmerking, :promotieGeldig)";
        $placeholders = [
            'voornaam' => $voornaam,
            'achternaam' => $achternaam,
            'email' => $email,
            'straat' => $straat,
            'huisnummer' => $huisnummer,
            'plaatsId' => $plaatsId,
            'telefoon' => $telefoon,
            'wachtwoord' => password_hash($wachtwoord, PASSWORD_DEFAULT),
            'opmerking' => $opmerking,
            'promotieGeldig' => $promotieGeldig
        ]
        ;
        return $this->create($sql, $placeholders); // return last inserted id
    }

    // Remove user?
}