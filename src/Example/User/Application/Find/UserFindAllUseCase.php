<?php

namespace Src\Example\User\Application\Find;

final class UserFindAllUseCase
{
    public function __construct()
    {
        //TODO
    }

    public function findAllUsers(): array
    {
        return [
            'Saludo' => 'Hola mundo desde el caso de Uso'
        ];
    }
}
