<?php


namespace App\Tests\kata_1;

use App\kata_1\MyMorningRouting;
use DateTimeImmutable;
use Generator;
use PHPUnit\Framework\TestCase;

class MyMorningRoutingTest extends TestCase
{
    public static function myMorningRoutingProvider(): Generator
    {
        yield [new \DateTimeImmutable('2021-01-01 06:00:00'), 'Do exercise'];
        yield [new \DateTimeImmutable('2021-01-01 07:00:00'), 'Read and study'];
        yield [new \DateTimeImmutable('2021-01-01 08:00:00'), 'Have breakfast'];
        yield [new \DateTimeImmutable('2021-01-01 09:00:00'), 'No activity'];
    }

    /**
     * @test
     * @dataProvider myMorningRoutingProvider
     */
    public function itShouldShowMyMorningRouting(DateTimeImmutable $localTime, string $result): void
    {
        $myMorningRouting = new MyMorningRouting($localTime);
        $this->assertEquals($result, $myMorningRouting->whatShouldIDowNow());
    }
}
