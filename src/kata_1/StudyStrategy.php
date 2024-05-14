<?php

declare(strict_types=1);

namespace App\kata_1;

final class StudyStrategy implements ActivityStrategy
{

    public function activity(): string
    {
        return "Read and study";
    }
}