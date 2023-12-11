<?php

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\User;

class LogoutController extends Controller
{
    public function __construct() {
        check_auth();
    }

    /*
        Đây là hàm hiển thị danh sách user
    */
    public function index() {
        unset($_SESSION['user']);
        unset($_SESSION['cart']);

        $this->render('logout');
    }
}