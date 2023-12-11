<?php

namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;

class Register extends Model {
    protected $table = 'users';
    protected $columns = [
        'user_name',
        'name',
        'email',
        'address',
        'password',
        'confirm_password'
    ];
}