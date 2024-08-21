<?php

declare(strict_types=1);

namespace App\kata_3_chain_of_responsability;

final class Dispatcher
{
    public function __invoke(): string
    {
        $middleware = new ExampleMiddleware();
        $dispatcher = new QueryDispatcher([$middleware]);
        $dispatcher->registerQueryHandler(GetUserQuery::class, new GetUserQueryHandler());

        return $dispatcher->query(new GetUserQuery());
    }
}