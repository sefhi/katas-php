<?php


namespace App\Tests\kata_1;

use App\kata_1\ActivityFactory;
use App\kata_1\MyMorningRouting;
use DateTimeImmutable;
use Generator;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class MyMorningRoutingTest extends TestCase
{
    public static function myMorningRoutingProvider(): Generator
    {
        $currentYear = (int) date('Y');
        $newYorkTimeZone = new \DateTimeZone('America/New_York');
        $madridTimeZone = new \DateTimeZone('Europe/Madrid');

        yield [
            new \DateTimeImmutable(
                sprintf('%d-01-01 06:%d:00', $currentYear, random_int(10, 44)),
                $newYorkTimeZone
            ),
            'Do exercise'
        ];
        yield [
            new \DateTimeImmutable(
                sprintf('%d-01-01 06:%d:00', $currentYear, random_int(45, 59)),
                $newYorkTimeZone
            ),
            'Shower'
        ];
        yield [
            new \DateTimeImmutable(
                sprintf('%d-01-01 07:%d:00', $currentYear, random_int(10, 29)),
                $newYorkTimeZone
            ),
            'Read'
        ];
        yield [
            new \DateTimeImmutable(
                sprintf('%d-01-01 07:%d:00', $currentYear, random_int(30, 59)),
                $newYorkTimeZone
            ),
            'Study'
        ];
        yield [
            (new \DateTimeImmutable(
                'now',
                $newYorkTimeZone
            ))->setDate($currentYear,1,1)
                ->setTime(8,random_int(0,59)),
            'Have breakfast'
        ];
        yield [new \DateTimeImmutable('2021-01-01 09:00:00', $madridTimeZone), 'No activity'];
    }

    #[Test]
    #[DataProvider('myMorningRoutingProvider')]
    public function itShouldShowMyMorningRouting(DateTimeImmutable $localTime, string $result): void
    {
        $myMorningRouting = new MyMorningRouting($localTime, new ActivityFactory());
        $this->assertEquals($result, $myMorningRouting->whatShouldIDowNow());
    }
}
