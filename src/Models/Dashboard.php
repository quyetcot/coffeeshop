<?php

namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;

class Dashboard extends Model
{
    protected $table = 'products';

    public function getProductCountByCategory()
    {
        $sql = "SELECT COUNT(*) as count FROM {$this->table}";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(\PDO::FETCH_ASSOC);

        return $stmt->fetchAll();
    }

    public function getTotalQuantity()
    {
        $sql = "SELECT COUNT(*) as totalQuantity FROM {$this->table}";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        // Fetch the result
        $result = $stmt->fetch(\PDO::FETCH_ASSOC);

        // Access the total quantity directly
        $totalQuantity = $result['totalQuantity'];

        return $totalQuantity;
    }
    public function getTotalUser(){
        $sql = "SELECT COUNT(*) as totalUser FROM users";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        // Fetch the result
        $result = $stmt->fetch(\PDO::FETCH_ASSOC);

        // Access the total quantity directly
        $totalUser = $result['totalUser'];

        return $totalUser;
    }
    public function getTotalBill(){
        $sql = "SELECT COUNT(*) as totalBill FROM orders";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        // Fetch the result
        $result = $stmt->fetch(\PDO::FETCH_ASSOC);

        // Access the total quantity directly
        $totalBill = $result['totalBill'];

        return $totalBill;
    }
    public function getTotalSale(){
        $sql = "SELECT SUM(total_price) AS totalSale FROM orders";
        $stmt = $this->conn->prepare($sql);
    $stmt->execute();

    $result = $stmt->fetch(\PDO::FETCH_ASSOC);
    $totalSale = $result['totalSale'];

    return $totalSale;
    
    }

}