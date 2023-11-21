<?php

declare(strict_types=1);

namespace App\Entities;

class User
{
    private string $naam;
    private string $email;

    public function __construct(string $naam, string $email)
    {
        $this->naam = $naam;
        $this->email = $email;
    }

    public function getName(): string
    {
        return $this->naam;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setName(string $naam): void
    {
        $this->naam = $naam;
    }
}