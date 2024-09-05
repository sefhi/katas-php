<?php

namespace App\kata_5_decorator;

interface Coffee
{
    public function getCost(): float;
    public function getDescription(): string;
}