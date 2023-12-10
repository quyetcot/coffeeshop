<?php

namespace Ductong\BaseMvc\Controllers;

use Ductong\BaseMvc\Controller;


class LogoutController extends Controller
{
    
   
    /*
        Đây là hàm hiển thị danh sách user
    */
    public function logout() {
        session_start(); // Bắt đầu session

        // Hủy tất cả các biến session
        session_unset();
        
        
        // Hủy session
        session_destroy();
        
        // Chuyển hướng đến trang đăng nhập hoặc trang khác
        header("Location: /");
        exit();
        $this->render('logout');
}

}