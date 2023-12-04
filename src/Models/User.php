<?php

namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;

class User extends Model {
    protected $table = 'users';
    protected $columns = [
        'name',
        'phone',
        'email',
        'address',
        'password',
        'confirm_password'
    ];
}