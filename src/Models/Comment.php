<?php

namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;

class Comment extends Model {
    protected $table = 'comments';
    protected $columns = [
        'id_user',
        'id_product',
        'content',
        'date'
    ];

    public function addComment(){

    }

}