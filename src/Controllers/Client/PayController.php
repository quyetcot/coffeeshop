<?php

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Cart;
use Ductong\BaseMvc\Models\Pay;

class PayController extends Controller
{
    public function index()
    {
        $cart = $_SESSION['cart'];
        $this->renderClient('pay', [
            'cart' => $cart
        ]);
    }


    
}
