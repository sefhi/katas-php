<?php

declare(strict_types=1);

namespace App\kata_5_decorator;

final class CoffeeOrder
{
    private $cost;
    private $description;
    private $withMilk;
    private $withSugar;

    public function __construct()
    {
        $this->cost = 5.0;
        $this->description = "Simple Coffee";
        $this->withMilk = false;
        $this->withSugar = false;
    }

    public function addMilk()
    {
        if (!$this->withMilk) {
            $this->cost += 1.5;
            $this->description .= ", with milk";
            $this->withMilk = true;
        }
    }

    public function addSugar()
    {
        if (!$this->withSugar) {
            $this->cost += 0.5;
            $this->description .= ", with sugar";
            $this->withSugar = true;
        }
    }

    public function getCost()
    {
        return $this->cost;
    }

    public function getDescription()
    {
        return $this->description;
    }
}