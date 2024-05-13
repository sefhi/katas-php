<?php

declare(strict_types=1);

namespace App\kata_1;

final readonly class MyMorningRouting
{
    public function __construct(
        private \DateTimeImmutable $localTime
    )
    {
    }

    public function whatShouldIDowNow(): string
    {

        $hour = (int) $this->localTime->format('H');
        if ($hour == 6) {
            return "Do exercise";
        } else if ($hour == 7) {
            return "Read and study";
        } else if ($hour == 8) {
            return "Have breakfast";
        } else {
            return "No activity";
        }

    }
}