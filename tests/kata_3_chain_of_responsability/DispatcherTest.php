<?php

namespace kata_3_chain_of_responsability;

use App\kata_3_chain_of_responsability\Dispatcher;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class DispatcherTest extends TestCase
{

    #[Test]
    public function testShouldReturnTheResultOfTheQueryHandler(): void
    {
        $dispatcher = new Dispatcher();
        $result = $dispatcher();
        $this->assertEquals('User details', $result);
    }
}
