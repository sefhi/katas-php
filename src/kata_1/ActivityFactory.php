<?php

declare(strict_types=1);

namespace App\kata_1;

final class ActivityFactory
{
    public function create(int $hour): ActivityStrategy
    {
        return match ($hour) {
            6 => new ExerciseStrategy(),
            7 => new StudyStrategy(),
            8 => new BreakfastStrategy(),
            default => new NoActivityStrategy(),
        };
    }
}