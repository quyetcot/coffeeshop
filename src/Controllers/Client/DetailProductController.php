<?php

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Category;
use Ductong\BaseMvc\Models\Product;


class DetailProductController extends Controller
{


    public function index()
    {
        $products = (new Product())->all();
        $categories = (new Category())->all();


        // Mảng này có cấu trúc, key là id danh mục, value là tên danh mục
        // Tạo ra mảng này để hiển thị tên danh mục sản phẩm ở danh sách
        $arrayCategoryIdName = [];
        foreach ($categories as $category) {
            $arrayCategoryIdName[$category['id']] = $category['name'];
        }
        $productId = $_GET['id']; 
        $detailProduct = (new Product())->detailProduct($productId);

        $this->renderClient(
            "detail_product",
            [
                "products" => $products,
                "arrayCategoryIdName" => $arrayCategoryIdName,
                "detailProduct" => $detailProduct,
                'categories'=>$categories
            ]
        );
    }
}
