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
    public function getCurrentUserId() {
        if (isset($_SESSION['id'])) {
            return $_SESSION['id'];
        } else {
            return null; 
        }
    }
    public function getCurrentProductId() {
        return isset($_GET['id']) ? $_GET['id'] : null;
    }
    public function detailProduct($id)
{
    $sql = "SELECT * FROM {$this->table} WHERE id = :id LIMIT 1";

    $stmt = $this->conn->prepare($sql);

    $stmt->bindParam(':id', $id);

    $stmt->execute();

    $stmt->setFetchMode(\PDO::FETCH_ASSOC);

    return $stmt->fetch();
}
public function load_binhluan($id_product){
    $sql="  SELECT c.content,c.date,u.name  FROM comments c 
    JOIN users ON u.id=c.id_user
    JOIN products pro ON c.id_product=pro.id where 
    pro.id=1";
    $stmt = $this->conn->prepare($sql);

    $stmt->bindParam(':id', $id_product);

    $stmt->execute();

    $stmt->setFetchMode(\PDO::FETCH_ASSOC);

    return $stmt->fetch();
} 
}