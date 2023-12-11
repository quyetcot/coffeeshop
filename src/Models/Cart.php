<?php

namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;

class Cart extends Model
{
    protected $table = 'orders';
    protected $columns = [
        'name',
        'email',
        'phone',
        'address',
        'total_price',
        'status',
        'created_at',
    ];
}