<?php

namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;
 class Login extends Model
{
    protected $table = 'users';

    public function login($user_name, $password)
    {
        $sql = "SELECT * FROM {$this->table} WHERE user_name = :user_name AND password = :password LIMIT 1";

        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(':user_name', $user_name);
        $stmt->bindParam(':password', $password);

        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_ASSOC);

        return $stmt->fetch();
    }
}
?>