<?php

namespace Src\Example\User\Infrastructure\Services;

use Illuminate\Support\ServiceProvider;
use Src\Example\User\Application\Find\UserFindAllUseCase;
use Src\Example\User\Domain\Contracts\UserRepositoryInterface;
use Src\Example\User\Infrastructure\Repositories\Eloquent\UserRepository;

class DependencyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app
            ->when(UserFindAllUseCase::class)
            ->needs(UserRepositoryInterface::class)
            ->give(UserRepository::class);
    }


}
