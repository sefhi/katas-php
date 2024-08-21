<?php

declare(strict_types=1);

namespace App\kata_3_chain_of_responsability;

final class QueryDispatcher
{
    private array $queryHandlers = [];

    public function __construct(
        private array $middlewares = []
    ) {
    }

    public function registerQueryHandler(
        string $queryClass, QueryHandlerInterface $handler
    ): void {
        $this->queryHandlers[$queryClass] = $handler;
    }

    public function query(QueryInterface $queryMessage): mixed
    {
        $handler = $this->queryHandlers[get_class($queryMessage)] ?? null;

        if (!$handler) {
            throw new \RuntimeException("Handler not found");
        }

        $next = fn (QueryInterface $query) => $handler($query);

        return $next($queryMessage);
    }
}