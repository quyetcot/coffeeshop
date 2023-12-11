<?php

namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $columns = [
        'id_user',
        'id_product',
        'content',
        'date'
    ];

    public function saveComment($data)
    {
        // Thực hiện truy vấn để lưu bình luận vào cơ sở dữ liệu
        $sql = "INSERT INTO {$this->table} (id_user, id_product, content, data) VALUES (:id_user, :id_product, :content, :data)";
    $stmt = $this->conn->prepare($sql);
    $stmt->bindParam(':id_user', $data['id_user']);
    $stmt->bindParam(':id_product', $data['id_product']);
    $stmt->bindParam(':content', $data['content']);
    $stmt->bindParam(':data', $data['date']);
    
    $stmt->execute();

        return $this->conn->lastInsertedId();
    }



}