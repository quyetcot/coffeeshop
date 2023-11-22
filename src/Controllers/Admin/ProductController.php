<?php

namespace Ductong\BaseMvc\Controllers\Admin;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Product;

class ProductController extends Controller
{
    /*
        Đây là hàm hiển thị danh sách user
    */
    public function index() {
        $products = (new Product)->all();
        
        $this->renderAdmin('products/index', ['products' => $products]);
    }

    public function create() {
        if (isset($_POST['btn-submit'])) { 
            $data = [
                'name' => $_POST['name'],
                'image' => $_POST['image'],
                'price' => $_POST['price'],
                'description' => $_POST['description'],
                'id_category' => $_POST['id_category'],
            ];

            (new Product)->insert($data);

            header('Location: /admin/products');
        }

        $this->renderAdmin('products/create');
    }

    public function update() {
        if (isset($_POST['btn-submit'])) { 
            $data = [
                'name' => $_POST['name'],
                'image' => $_POST['image'],
                'price' => $_POST['price'],
                'description' => $_POST['description'],
                'id_category' => $_POST['id_category'],
            ];

            $conditions = [
                ['id', '=', $_GET['id']]
            ];

            (new Product)->update($data, $conditions);
        }

        $product = (new Product)->findOne($_GET['id']);

        $this->renderAdmin('products/update', ['product' => $product]);
    }

    public function delete() {
        $conditions = [
            ['id', '=', $_GET['id']]
        ];

        (new Product)->delete($conditions);

        header('Location: /admin/products');
    }
}
