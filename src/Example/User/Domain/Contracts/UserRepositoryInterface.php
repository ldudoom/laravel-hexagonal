<?php

namespace Src\Example\User\Domain\Contracts;

use Src\Example\User\Domain\User;

interface UserRepositoryInterface
{
    public function findAll(): array;
}
