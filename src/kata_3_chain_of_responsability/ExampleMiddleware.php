<?php

declare(strict_types=1);

namespace App\kata_3_chain_of_responsability;

final class ExampleMiddleware implements MiddlewareInterface
{
    /**
     * @throws \Exception
     */
    public function process(QueryInterface|CommandInterface $message, callable $nextHandle): mixed
    {
        try {
            return $nextHandle($message);
        } catch (\Exception $e) {
            throw $e;
        }
    }
}