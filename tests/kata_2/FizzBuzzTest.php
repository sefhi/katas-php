<?php

declare(strict_types=1);

namespace App\Tests\kata_2;

use App\kata_2\FizzBuzz;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

final class FizzBuzzTest extends TestCase
{
    public static function fizzBuzzData(): \Generator
    {
        return [
            yield '1' => [1, '1'],
            yield '2' => [2, '2'],
            yield '3' => [3, 'Fizz'],
            yield '4' => [4, '4'],
            yield '5' => [5, 'Buzz'],
            yield '6' => [6, 'Fizz'],
            yield '7' => [7, '7'],
            yield '8' => [8, '8'],
            yield '9' => [9, 'Fizz'],
            yield '10' => [10, 'Buzz'],
            yield '11' => [11, '11'],
            yield '12' => [12, 'Fizz'],
            yield '13' => [13, '13'],
            yield '14' => [14, '14'],
            yield '15' => [15, 'FizzBuzz'],
            yield '16' => [16, '16'],
            yield '17' => [17, '17'],
            yield '18' => [18, 'Fizz'],
        ];
    }

    #[Test]
    #[DataProvider('fizzBuzzData')]
    public function itShouldReturnFizzWhenNumberIsDivisibleBy(int $number, string $resultExpected): void
    {
        $fizzBuzz = new FizzBuzz($number);
        $this->assertEquals($resultExpected, $fizzBuzz->getResult());
    }

}