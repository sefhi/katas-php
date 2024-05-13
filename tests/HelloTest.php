<?php

namespace App\Tests;

use App\Hello;
use PHPUnit\Framework\TestCase;

class HelloTest extends TestCase
{
    public function testTest(): void
    {
        $hello = new Hello();
        $this->assertEquals('Test', $hello->test());
    }
}
