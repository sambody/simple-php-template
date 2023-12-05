<?php

declare(strict_types=1);

namespace App\Entities;

class User
{
    // Generate properties: (1) private props (2) generate Constructor (3) getter/setters
    private string $naam;

    private string $paswoord;

    /**
     * @param string $naam
     * @param string $paswoord
     */
    public function __construct(string $naam, string $paswoord)
    {
        $this->naam = $naam;
        $this->paswoord = $paswoord;
    }


    public function getName(): string
    {
        return $this->naam;
    }

    public function getPassword(): string
    {
        return $this->paswoord;
    }

    public function setName(string $naam): void
    {
        $this->naam = $naam;
    }
}