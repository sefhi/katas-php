<?php

declare(strict_types=1);

namespace App\kata_3_chain_of_responsability;

final class Dispatcher
{
    public function __invoke(): string
    {
        $dispatcher = new QueryDispatcher();
        $dispatcher->registerQueryHandler(GetUserQuery::class, new GetUserQueryHandler());

        return $dispatcher->query(new GetUserQuery());
    }
}