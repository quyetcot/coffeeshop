<?php

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Models\Cart;
use Ductong\BaseMvc\Controller;



class CartController extends Controller
{
    function index(){
        if (!empty($_SESSION['cart'])) {
            $cart = $_SESSION['cart'];
          
            // Tạo mảng chứa ID các sản phẩm trong giỏ hàng
            // $productId = array_column($cart, 'id');
            
            // Chuyển đôi mảng id thành một cuỗi để thực hiện truy vấn
            // $idList = implode(',', $productId);
            
            // Lấy sản phẩm trong bảng sản phẩm theo id
            // $dataDb = (new Cart())->loadone_sanphamCart($idList);
            // var_dump(   $_SESSION['cart'] );
        
        }
        $this->renderClient('cart',[
            // 'dataDb' => $dataDb
            'cart' => $cart
        ]
    );
    }
}

    
   