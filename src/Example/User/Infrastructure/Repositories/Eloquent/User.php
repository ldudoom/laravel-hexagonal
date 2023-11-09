<?php

namespace Src\Example\User\Infrastructure\Repositories\Eloquent;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $fillable = [
        'name',
        'lastname',
        'username',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
    ];
}
