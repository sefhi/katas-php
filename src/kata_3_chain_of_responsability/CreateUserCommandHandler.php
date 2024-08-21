<?php

declare(strict_types=1);

namespace App\kata_3_chain_of_responsability;

final class CreateUserCommandHandler implements CommandHandlerInterface
{

    public function __invoke(CommandInterface $command): mixed
    {
        if (!$command instanceof CreateUserCommand) {
            throw new \InvalidArgumentException("Invalid command");
        }

        // Lógica para crear un usuario
        return 'User created';
    }
}