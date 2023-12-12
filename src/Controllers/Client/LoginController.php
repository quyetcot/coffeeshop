<?php

namespace Ductong\BaseMvc\Controllers\Client;


use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Login;

class LoginController extends Controller
{

    public function index()
    {
        // Đảm bảo rằng bạn đã khởi động phiên làm việc session

        // Tạo một đối tượng CheckUser
        $login = new Login();

        // Kiểm tra xem người dùng đã nhấn nút Đăng nhập hay chưa
        if (isset($_POST['btn-login'])) {
            $user_name = $_POST['user_name'];
            $password = $_POST['password'];

            // Xác thực đăng nhập sử dụng UserModel
            $user = $login->login($user_name, $password);
           
            if ($user) {
                // Kiểm tra nếu tên đăng nhập là "admin" và mật khẩu là "một"
                if ($user_name === 'admin' && $password === '1') {
                    // Đăng nhập thành công với tài khoản admin
                    $_SESSION['logged_in'] = true;
                    $_SESSION['user'] = $user;
    
                    // Chuyển hướng người dùng đến trang admin/dashboard
                    header('Location: /admin/dashboard');
                    exit();
                } else {
                    // Đăng nhập thành công với tài khoản người dùng khác
                    $_SESSION['logged_in'] = true;
                    $_SESSION['user'] = $user;
    
                    // Chuyển hướng người dùng đến trang chính
                    header('Location: /home');
                    exit();
                }
            } else {
                // Đăng nhập không thành công, hiển thị thông báo lỗi
                echo "Email hoặc mật khẩu không chính xác.";
            }
        }
        $this->render('login');
    }
}
