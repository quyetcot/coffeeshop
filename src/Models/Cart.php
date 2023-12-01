<?php

namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;

class Cart extends Model
{
    protected $table = 'products';
public function loadone_sanphamCart ($idList)
    {
        $sql = "SELECT * FROM {$this->table} WHERE id = :id";

        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(':id', $idList);

        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_ASSOC);

        return $stmt->fetch();
    }
    
}

