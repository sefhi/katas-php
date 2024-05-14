<?php

declare(strict_types=1);

namespace App\kata_2;

final readonly class FizzBuzz
{

    public function __construct(private int $number)
    {
    }

    public function getResult(): string
    {
        if ($this->number % 3 === 0 && $this->number % 5 === 0) {
            return "FizzBuzz";
        }
        if ($this->number % 3 === 0) {
            return "Fizz";
        }
        if ($this->number % 5 === 0) {
            return "Buzz";
        }
        return (string) $this->number;
    }
}