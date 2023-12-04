<?php

namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;
 class Login extends Model
{
    protected $table = 'users';

    public function login($name, $password)
    {
        $sql = "SELECT * FROM {$this->table} WHERE name = :name AND password = :password LIMIT 1";

        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':password', $password);

        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_ASSOC);

        return $stmt->fetch();
    }
}
?>