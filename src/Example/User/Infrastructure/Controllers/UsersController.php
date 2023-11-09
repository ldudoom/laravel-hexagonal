<?php

namespace Src\Example\User\Infrastructure\Controllers;

final class UsersController
{
    public function index(): array
    {
        return [
            'Saludo' => 'Hola Mundo!!!',
        ];
    }
}
