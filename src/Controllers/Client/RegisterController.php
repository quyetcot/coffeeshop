<?php

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Register;

class RegisterController extends Controller
{
    /*
        Đây là hàm hiển thị danh sách user
    */
   

    public function create()
    {
        if (isset($_POST['btn-submit'])) {


            $register = new Register();
            $data = [
                'user_name' => $_POST['user_name'],
                'name' => $_POST['name'],
                'address' => $_POST['address'],
                'email' => $_POST['email'],
                'password' => $_POST['password'],
                'confirm_password' => $_POST['confirm_password'],
            ];
            $register->insert($data);
         
            header('Location: /login');
        }

        $this->render('register');
    }

    public function update()
    {
        if (isset($_POST['btn-submit'])) {
            $data = [
                'user_name' => $_POST['user_name'],
                'name' => $_POST['name'],
                'address' => $_POST['address'],
                'email' => $_POST['email'],
                'password' => $_POST['password'],
            ];

            $conditions = [
                ['id', '=', $_GET['id']]
            ];

            (new Register)->update($data, $conditions);
        }

        $register = (new Register)->findOne($_GET['id']);

        $this->renderAdmin('users/update', ['user' => $register]);
    }

    public function delete()
    {
        $conditions = [
            ['id', '=', $_GET['id']]
        ];

        (new Register)->delete($conditions);

        header('Location: /admin/users');
    }
}
