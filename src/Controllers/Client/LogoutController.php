<?php

namespace Ductong\BaseMvc\Controllers;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\User;

class LogoutController extends Controller
{
   
    /*
        Đây là hàm hiển thị danh sách user
    */
    public function logout() {
        session_start(); // Bắt đầu session

        // Hủy tất cả các biến session
        session_unset();
        
        // Xóa toàn bộ session cookie
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }
        
        // Hủy session
        session_destroy();
        
        // Chuyển hướng đến trang đăng nhập hoặc trang khác
        header("Location: /");
        exit();
   
}
}