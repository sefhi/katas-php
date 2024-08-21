<?php

declare(strict_types=1);

namespace App\kata_3_chain_of_responsability;

final class GetUserQueryHandler implements QueryHandlerInterface
{
    public function __invoke(QueryInterface $query): mixed {
        if (!$query instanceof GetUserQuery) {
            throw new \InvalidArgumentException("Invalid query");
        }

        // Lógica para obtener un usuario
        return 'User details';
    }
}