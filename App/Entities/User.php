<?php

declare(strict_types=1);

namespace App\Entities;

// Clear and regenerate properties in editor: (1) private props (2) generate Constructor (3) getters

class User
{
    private int $id;
    private string $voornaam;
    private string $achternaam;
    private string $email;
    private string $straat;
    private int $huisnummer;
    private string $postcode;
    private string $plaats;
    private string $telefoon;
    private string $wachtwoord;
    private string $opmerking;
    private bool $promotieGeldig;

    /**
     * @param int $id
     * @param string $voornaam
     * @param string $achternaam
     * @param string $email
     * @param string $straat
     * @param int $huisnummer
     * @param string $postcode
     * @param string $plaats
     * @param string $telefoon
     * @param string $wachtwoord
     * @param string $opmerking
     * @param bool $promotieGeldig
     */
    public function __construct(
        int $id,
        string $voornaam,
        string $achternaam,
        string $email,
        string $straat,
        int $huisnummer,
        string $postcode,
        string $plaats,
        string $telefoon,
        string $wachtwoord,
        string $opmerking = '',
        bool $promotieGeldig = false
    ) {
        $this->id = $id;
        $this->voornaam = $voornaam;
        $this->achternaam = $achternaam;
        $this->email = $email;
        $this->straat = $straat;
        $this->huisnummer = $huisnummer;
        $this->postcode = $postcode;
        $this->plaats = $plaats;
        $this->telefoon = $telefoon;
        $this->wachtwoord = $wachtwoord;
        $this->opmerking = $opmerking;
        $this->promotieGeldig = $promotieGeldig;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getVoornaam(): string
    {
        return $this->voornaam;
    }

    public function getAchternaam(): string
    {
        return $this->achternaam;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getStraat(): string
    {
        return $this->straat;
    }

    public function getHuisnummer(): int
    {
        return $this->huisnummer;
    }

    public function getPostcode(): string
    {
        return $this->postcode;
    }

    public function getPlaats(): string
    {
        return $this->plaats;
    }

    public function getTelefoon(): string
    {
        return $this->telefoon;
    }

    public function getWachtwoord(): string
    {
        return $this->wachtwoord;
    }

    public function getOpmerking(): string
    {
        return $this->opmerking;
    }

    public function isPromotieGeldig(): bool
    {
        return $this->promotieGeldig;
    }

    // No setters?

}
