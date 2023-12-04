<?php

namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;

class Pay extends Model {
    protected $table = 'bills';
    protected $columns = [
        'name',
        'phone',
        'address',
        'sum_price',
        'pttt'
    ];
}