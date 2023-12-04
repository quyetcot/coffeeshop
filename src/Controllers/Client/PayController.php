<?php

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Pay;
class PayController extends Controller
{

    public function index() {
        $cart = $_SESSION['cart'];
        $bills = (new Pay)->all();
        
        $this->renderAdmin('bills/index',
        [
            'cart'=> $cart,
            'bills'=>$bills
        ]);
    }

    /*
        Đây là hàm hiển thị danh sách user
    */
    public function create() {
        $cart = $_SESSION['cart'];
        if (isset($_POST['btn-submit'])) { 
            $data = [
                'name' => $_POST['name'],
                'address' => $_POST['address'],
                'phone' => $_POST['phone'],
                'sum_price' => $_POST['sum_price'],
                'pttt' =>  $_POST['pttt']
            ];

            (new Pay)->insert($data);

            header('Location: /cart');
        }

        $this->renderClient('pay',
    [
        'cart'=> $cart,
        
    ]);
    }

    // public function update() {
    //     if (isset($_POST['btn-submit'])) { 
    //         $data = [
    //             'name' => $_POST['name'],
    //             'address' => $_POST['address'],
    //             'email' => $_POST['email'],
    //             'password' => $_POST['password'],
    //         ];

    //         $conditions = [
    //             ['id', '=', $_GET['id']]
    //         ];

    //         (new Pay)->update($data, $conditions);
    //     }

    //     $user = (new Pay)->findOne($_GET['id']);

    //     $this->renderAdmin('users/update', ['user' => $user]);
    // }

    // public function delete() {
    //     $conditions = [
    //         ['id', '=', $_GET['id']]
    //     ];

    //     (new User)->delete($conditions);

    //     header('Location: /admin/users');
    // }
}
