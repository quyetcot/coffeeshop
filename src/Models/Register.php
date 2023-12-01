<?php

namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;

class Register extends Model {
    protected $table = 'users';
    protected $columns = [
        'name',
        'email',
        'address',
        'password',
        'confirm_password'
    ];
}