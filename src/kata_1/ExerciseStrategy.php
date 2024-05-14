<?php

declare(strict_types=1);

namespace App\kata_1;

final class ExerciseStrategy implements ActivityStrategy
{

    public function activity(): string
    {
        return "Do exercise";
    }
}