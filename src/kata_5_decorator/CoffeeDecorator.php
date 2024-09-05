<?php

declare(strict_types=1);

namespace App\kata_5_decorator;

abstract readonly class CoffeeDecorator implements Coffee
{
    public function __construct(protected Coffee $coffee)
    {
    }

    public function getCost(): float
    {
        return $this->coffee->getCost();
    }

    public function getDescription(): string
    {
        return $this->coffee->getDescription();
    }
}