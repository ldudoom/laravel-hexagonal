<?php

namespace Src\Example\User\Infrastructure\Repositories\Eloquent;

use Src\Example\User\Domain\Contracts\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{

    public function findAll(): array
    {
        return ['Hola desde implementacion de UserRepositoryContract'];
    }
}
