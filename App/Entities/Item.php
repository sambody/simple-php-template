<?php

declare(strict_types=1);

namespace App\Entities;

class Item
{
    private string $titel;

    public function __construct(string $titel)
    {
        $this->titel = $titel;
    }

    public function getTitel(): string
    {
        return $this->titel;
    }

    public function setTitel(string $titel): void
    {
        $this->titel = $titel;
    }

}