<?php

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Category;
use Ductong\BaseMvc\Models\Product;

class MenuController extends Controller
{  public function __construct() {
    check_auth();
}

    
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
           

            
            $this->renderClient('menu', [
                'products' => $products,
                "arrayCategoryIdName" => $arrayCategoryIdName,
                'getAllByCategoryID' => $getAllByCategoryID,
                'getLatestLimit10' => $getLatestLimit10,
                'categories'=>$categories
                
            ]);
        }

        public function thongtin()
        {
            $user = array('name' => '', 'phone' => '', 'address' => '');
        
            if (isset($_SESSION['user'])) {
               
                $user = $_SESSION['user'];
            }

            return $user;
        }
        
    }

