<?php

declare(strict_types=1);

namespace App\kata_5_decorator;

final readonly class SimpleCoffee implements Coffee
{

    public function __construct(
        private float  $cost = 5.0,
        private string $description = "Simple Coffee"
    )
    {
    }

    public function getCost(): float
    {
        return $this->cost;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}