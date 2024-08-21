<?php

namespace App\kata_3_chain_of_responsability;

interface MiddlewareInterface
{
    public function process(CommandInterface|QueryInterface $message, callable $nextHandle): mixed;
}