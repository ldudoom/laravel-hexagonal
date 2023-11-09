<?php

namespace Src\Example\User\Infrastructure\Controllers;

use Src\Example\User\Application\Find\UserFindAllUseCase;

final class UsersController
{
    public function index(UserFindAllUseCase $findAllUseCase): array
    {
        return $findAllUseCase->findAllUsers();
    }
}
