<?php

namespace kata_5_decorator;

use App\kata_5_decorator\CoffeeOrder;
use PHPUnit\Framework\TestCase;

class CoffeeOrderTest extends TestCase
{
    public function testSimpleCoffeeCostAndDescription() {
        $coffeeOrder = new CoffeeOrder();
        $this->assertEquals(5.0, $coffeeOrder->getCost());
        $this->assertEquals("Simple Coffee", $coffeeOrder->getDescription());
    }

    public function testAddMilk() {
        $coffeeOrder = new CoffeeOrder();
        $coffeeOrder->addMilk();
        $this->assertEquals(6.5, $coffeeOrder->getCost());
        $this->assertEquals("Simple Coffee, with milk", $coffeeOrder->getDescription());
    }

    public function testAddSugar() {
        $coffeeOrder = new CoffeeOrder();
        $coffeeOrder->addSugar();
        $this->assertEquals(5.5, $coffeeOrder->getCost());
        $this->assertEquals("Simple Coffee, with sugar", $coffeeOrder->getDescription());
    }

    public function testAddMilkAndSugar() {
        $coffeeOrder = new CoffeeOrder();
        $coffeeOrder->addMilk();
        $coffeeOrder->addSugar();
        $this->assertEquals(7.0, $coffeeOrder->getCost());
        $this->assertEquals("Simple Coffee, with milk, with sugar", $coffeeOrder->getDescription());
    }

    public function testAddMilkTwice() {
        $coffeeOrder = new CoffeeOrder();
        $coffeeOrder->addMilk();
        $coffeeOrder->addMilk();
        $this->assertEquals(6.5, $coffeeOrder->getCost()); // No debería agregar leche dos veces
        $this->assertEquals("Simple Coffee, with milk", $coffeeOrder->getDescription());
    }

    public function testAddSugarTwice() {
        $coffeeOrder = new CoffeeOrder();
        $coffeeOrder->addSugar();
        $coffeeOrder->addSugar();
        $this->assertEquals(5.5, $coffeeOrder->getCost()); // No debería agregar azúcar dos veces
        $this->assertEquals("Simple Coffee, with sugar", $coffeeOrder->getDescription());
    }
}
