<?php

declare(strict_types=1);

namespace App\Entities;

class User
{
    private string $naam;
    private string $paswoord;

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