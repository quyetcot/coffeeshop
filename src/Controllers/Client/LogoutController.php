<?php

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\User;

class LogoutController extends Controller
{
<<<<<<< HEAD
    public function __construct() {
        check_auth();
    }

=======
    
   
>>>>>>> 62248ea8a8bff16dcf2dde454850cc8bf9267ac1
    /*
        Đây là hàm hiển thị danh sách user
    */
    public function index() {
        unset($_SESSION['user']);
        unset($_SESSION['cart']);

        $this->render('logout');
    }
}