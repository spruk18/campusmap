<?php

namespace App;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
class Login extends Model implements AuthenticatableContract
{

    //
    use Authenticatable;
    protected $fillable = [
        'username', 'password', 'role',
    ];
}
