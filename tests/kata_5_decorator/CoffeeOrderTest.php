<?php

namespace kata_5_decorator;

use App\kata_5_decorator\CoffeeOrder;
use App\kata_5_decorator\MilkDecorator;
use App\kata_5_decorator\SimpleCoffee;
use App\kata_5_decorator\SugarDecorator;
use PHPUnit\Framework\TestCase;

class CoffeeOrderTest extends TestCase
{
    public function testSimpleCoffeeCostAndDescription()
    {
        $simpleCoffee = new SimpleCoffee();
        $this->assertEquals(5.0, $simpleCoffee->getCost());
        $this->assertEquals("Simple Coffee", $simpleCoffee->getDescription());
    }

    public function testAddMilk()
    {
        $simpleCoffee = new SimpleCoffee();
        $coffeeWithMilk = new MilkDecorator($simpleCoffee);

        $this->assertEquals(6.5, $coffeeWithMilk->getCost());
        $this->assertEquals("Simple Coffee, with milk", $coffeeWithMilk->getDescription());
    }

    public function testAddSugar()
    {
        $simpleCoffee = new SimpleCoffee();
        $coffeeWithSugar = new SugarDecorator($simpleCoffee);

        $this->assertEquals(5.5, $coffeeWithSugar->getCost());
        $this->assertEquals("Simple Coffee, with sugar", $coffeeWithSugar->getDescription());
    }

    public function testAddMilkAndSugar()
    {
        $simpleCoffee = new SimpleCoffee();
        $coffeeWithMilk = new MilkDecorator($simpleCoffee);
        $coffeeWithMilkAndSugar = new SugarDecorator($coffeeWithMilk);
        $this->assertEquals(7.0, $coffeeWithMilkAndSugar->getCost());
        $this->assertEquals("Simple Coffee, with milk, with sugar", $coffeeWithMilkAndSugar->getDescription());
    }

    public function testAddMilkTwice()
    {
        $simpleCoffee = new SimpleCoffee();
        $coffeeWithMilk = new MilkDecorator($simpleCoffee);
        $coffeeWithDoubleMilk = new MilkDecorator($coffeeWithMilk);

        $this->assertEquals(8, $coffeeWithDoubleMilk->getCost()); // No debería agregar leche dos veces
        $this->assertEquals("Simple Coffee, with milk, with milk", $coffeeWithDoubleMilk->getDescription());
    }

    public function testAddSugarTwice(): void
    {
        $simpleCoffee = new SimpleCoffee();
        $coffeeWithSugar = new SugarDecorator($simpleCoffee);
        $coffeeWithDoubleSugar = new SugarDecorator($coffeeWithSugar);
        $this->assertEquals(6, $coffeeWithDoubleSugar->getCost());
        $this->assertEquals("Simple Coffee, with sugar, with sugar", $coffeeWithDoubleSugar->getDescription());
    }
}
