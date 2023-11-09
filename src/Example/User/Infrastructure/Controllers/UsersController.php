<?php

namespace Src\Example\User\Infrastructure\Controllers;

use Src\Example\User\Application\Find\UserFindAllUseCase;

final class UsersController
{
    private UserFindAllUseCase $findAllUseCase;

    /**
     * @param UserFindAllUseCase $findAllUseCase
     */
    public function __construct(UserFindAllUseCase $findAllUseCase)
    {
        $this->findAllUseCase = $findAllUseCase;
    }


    public function index(): array
    {
        return $this->findAllUseCase->findAllUsers();
    }
}
