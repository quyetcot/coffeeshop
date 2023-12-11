<?php

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Category;
use Ductong\BaseMvc\Models\Comment;
use Ductong\BaseMvc\Models\Product;
use Ductong\BaseMvc\Models\User;


class DetailProductController extends Controller
{


    public function index()
    {
        $products = (new Product())->all();
        $categories = (new Category())->all();
        $comments = (new Comment())->all();
        $users = (new User())->all();


        // Mảng này có cấu trúc, key là id danh mục, value là tên danh mục
        // Tạo ra mảng này để hiển thị tên danh mục sản phẩm ở danh sách
        $arrayCategoryIdName = [];
        foreach ($categories as $category) {
            $arrayCategoryIdName[$category['id']] = $category['name'];
        }
        $productId = $_GET['id'];
        $detailProduct = (new Product())->detailProduct($productId);
        if (isset($_POST["btn-submit"])) {
            $data = [
                'id_user' =>  $_POST['id_user'],
                'id_product' =>  $_POST['id_product'],
                'content' => $_POST['content'],
                'date' => date('Y-m-d', time()),
            ];

            (new Comment())->insert($data);

         
        }
        $this->renderClient(
            "detail_product",
            [
                "products" => $products,
                "comments" => $comments,
                "arrayCategoryIdName" => $arrayCategoryIdName,
                "detailProduct" => $detailProduct,
                'categories' => $categories,
                'users' => $users
            ]
        );
    }
}
