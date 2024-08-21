<?php

namespace App\kata_3_chain_of_responsability;

interface QueryHandlerInterface
{
    public function __invoke(QueryInterface $query): mixed;
}