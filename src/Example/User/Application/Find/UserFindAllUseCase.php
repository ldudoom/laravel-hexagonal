<?php

namespace Src\Example\User\Application\Find;

use Src\Example\User\Domain\Contracts\UserRepositoryInterface;
use Src\Example\User\Domain\Exceptions\UserException;

final class UserFindAllUseCase
{

    private UserRepositoryInterface $repository;
    public function __construct(UserRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function findAllUsers(): array
    {
        //throw new UserException('Esta es una excepcion personalizada', 400);
        //throw new UserException('Usuario no encontrado', 404);
        /*return [
            'Saludo' => 'Hola mundo desde el caso de Uso'
        ];*/
        return $this->repository->findAll();
    }
}
