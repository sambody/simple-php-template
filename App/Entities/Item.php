<?php

declare(strict_types=1);

namespace App\Entities;

class Item
{
    // Generate properties: (1) private props (2) generate Constructor (3) getter/setters
    private string $titel;

    /**
     * @param string $titel
     */
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