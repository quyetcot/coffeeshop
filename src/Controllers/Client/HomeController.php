<?php

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Category;
use Ductong\BaseMvc\Models\Product;


class HomeController extends Controller
{

    public function index() {
   
        $products = (new Product)->all();
        $categories = (new Category())->all();
        $arrayCategoryIdName = [];
        $categoryID = [];
        foreach ($categories as $category) {
            $arrayCategoryIdName[$category['id']] = $category['name'];
            $categoryID[] = $category['id'];
            
        }
        
        $getLatestLimit10 = (new Product)->getLatestLimit10();
        $getAllByCategoryID = (new Product)->getAllByCategoryID($categoryID);

        $this->renderClient('home', [
            'products' => $products,
            "arrayCategoryIdName" => $arrayCategoryIdName,
            'getAllByCategoryID' => $getAllByCategoryID,
            'getLatestLimit10' => $getLatestLimit10
            
        ]);
       
    }
}
