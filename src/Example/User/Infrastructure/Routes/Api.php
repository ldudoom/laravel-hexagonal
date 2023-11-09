<?php

use Illuminate\Support\Facades\Route;
use Src\Example\User\Infrastructure\Controllers\UsersController;


Route::get('/', [UsersController::class, 'index']);
