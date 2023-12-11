<?php

namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;

class Pay extends Model {
    protected $table = 'order_details';
    protected $columns = [
        'order_id',	
        'product_id',	
        'quantity',	
        'price',	
    ];
}