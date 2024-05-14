<?php

declare(strict_types=1);

namespace App\kata_1;

final class ActivityFactory
{
    public function create(int $time): ActivityStrategy
    {
        return match (true) {
            ($time >= 600 && $time <= 644) => new ExerciseStrategy(),
            ($time >= 645 && $time <= 659) => new ShowerStrategy(),
            ($time >= 730 && $time <= 759) => new StudyStrategy(),
            ($time >= 800 && $time <= 859) => new BreakfastStrategy(),
            ($time >= 700 && $time <= 729) => new ReadStrategy(),
            default => new NoActivityStrategy(),
        };
    }
}