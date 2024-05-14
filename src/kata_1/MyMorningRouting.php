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

        $hour = (int) $this->localTime->format('H');

        return $this->activityFactory->create($hour)->activity();
    }
}