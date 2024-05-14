<?php

declare(strict_types=1);

namespace App\kata_1;

final readonly class MyMorningRouting
{
    public function __construct(
        private \DateTimeImmutable $localTime,
        private ActivityFactory $activityFactory
    )
    {
    }

    public function whatShouldIDowNow(): string
    {

        $hour = (int)  $this->localTime->format('H');
        $minute = (int)  $this->localTime->format('i');
        $time = $hour.$minute;

        if(strlen($time) <3) {
            $time = (int)$time.'0';
        }

        return $this->activityFactory->create((int)$time)->activity();
    }
}