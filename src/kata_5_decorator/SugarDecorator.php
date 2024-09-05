<?php

declare(strict_types=1);

namespace App\kata_5_decorator;

final readonly class SugarDecorator extends CoffeeDecorator
{
    public function getCost(): float
    {
        return parent::getCost() + 0.5;
    }

    public function getDescription(): string
    {
        return parent::getDescription() . ", with sugar";
    }
}