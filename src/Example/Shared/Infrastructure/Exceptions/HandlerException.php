<?php

namespace Src\Example\Shared\Infrastructure\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Src\Example\Shared\Domain\Exceptions\CustomException;
use Throwable;

final class HandlerException extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->renderable(function (Throwable $e) {
            if($e instanceof CustomException){
                return response()->json($e->toException(),$e->getCode());
            }
        });
    }
}
