<?php

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Models\Cart;
use Ductong\BaseMvc\Models\Pay;
use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Product;



class CartController extends Controller
{
<<<<<<< HEAD
    function index()
    {

        $this->renderClient('cart');
    }

    public function removeFromCart()
    {
        $id = $_GET['id'] ?? '';

        if (!empty($id)) {
            unset($_SESSION['cart'][$id]);
=======
    public function __construct() {
        check_auth();
    }
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
        
>>>>>>> 62248ea8a8bff16dcf2dde454850cc8bf9267ac1
        }

        header('Location: /cart');
    }

    public function incrementQuantity()
    {
        $id = $_GET['id'] ?? '';

        if (!empty($id) && isset($_SESSION['cart'][$id])) {
            ++$_SESSION['cart'][$id]['quantity'];
        }

        header('Location: /cart');
    }

    public function decrementQuantity()
    {
        $id = $_GET['id'] ?? '';

        if (!empty($id) && isset($_SESSION['cart'][$id])) {
            if ($_SESSION['cart'][$id]['quantity'] > 1) {
                --$_SESSION['cart'][$id]['quantity'];
            }
        }

        header('Location: /cart');
    }
    public function createOrder()
    {
        if (!empty($_POST)) {
            // Tạo mới Order
            $sum = 0;
            foreach ($_SESSION['cart'] as $item) {
                $sum += $item['price'] * $item['quantity'];
            }

            $data = [
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'phone' => $_POST['phone'],
                'address' => $_POST['address'],
                'total_price' => $sum,
                'status' => STATUS_PENDING,
                'created_at' => date('Y-m-d', time()),
            ];

            $orderID = (new Cart)->insert($data);



            // Tạo Order detail
            foreach ($_SESSION['cart'] as $productID => $item) {
                $data = [
                    'order_id' => $orderID,
                    'product_id' => $productID,
                    'quantity' => $item['quantity'],
                    'price' => $item['price'],
                ];

                (new Pay)->insert($data);
            }

            $_SESSION['cart'] = [];
        }

        header('Location: /home');
    }
    public function show_order(){
        $orders = (new Cart)->all();

        $this->renderAdmin('orders/index', ['orders' => $orders]);
    }
    public function update() {
        if (isset($_POST['btn-submit'])) { 
            $data = [
                'name' => $_POST['name'],
                'phone' => $_POST['phone'],
                'address' => $_POST['address'],
                'email' => $_POST['email'],
                'total_price' => $_POST['total_price'],
                'status' => $_POST['tatus'],
            ];

            $conditions = [
                ['id', '=', $_GET['id']]
            ];

            (new Cart)->update($data, $conditions);
        }

        $order = (new Cart)->findOne($_GET['id']);

        $this->renderAdmin('orders/update', ['order' => $order]);
    }
}
