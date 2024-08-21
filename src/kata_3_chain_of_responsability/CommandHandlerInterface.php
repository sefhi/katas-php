<?php

namespace App\kata_3_chain_of_responsability;

interface CommandHandlerInterface
{
    public function __invoke(CommandInterface $command): mixed;
}