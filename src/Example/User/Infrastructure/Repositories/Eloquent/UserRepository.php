<?php

namespace Src\Example\User\Infrastructure\Repositories\Eloquent;

use Src\Example\User\Domain\Contracts\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{

    private User $user;

    /**
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }


    public function findAll(): array
    {
        return $this->user
                    ->all()
                    ->toArray();
    }
}
