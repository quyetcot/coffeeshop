<?php

namespace Ductong\BaseMvc\Controllers\Admin;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Comment;
use Ductong\BaseMvc\Models\Product;
use Ductong\BaseMvc\Models\User;

class CommentController extends Controller
{
    public function __construct()
    {
        check_auth();
    }

    public function index()
    {
        $comments = (new Comment())->all();
        $products = (new Product())->all();
        $users = (new User())->all();
        $this->renderAdmin('comments/index', ['comments' => $comments, 'products' => $products, 'users' => $users]);
    }

    public function create()
    {
        $products = (new Product())->all();
        $users = (new User())->all();
        $arrayUserIdName = [];
        foreach ($users as $user) {
            $arrayUserIdName[$user['id']] = $user['name'];
        }
        if (isset($_POST["btn-submit"])) {
            $data = [
                'id_user' => $_POST['id_user'],
                'id_product' => $_POST['id_product'],
                'content' => $_POST['content'],
                'date' => $_POST['date'],
            ];

            (new Comment())->insert($data);

            header('Location: /admin/comments');
        }

        // Call the ktra method to handle comment checking and saving
        $this->ktra();

        $this->renderAdmin("comments/create", ["products" => $products, "users" => $users, "arrayUserIdName" => $arrayUserIdName]);
    }

    /* Cập nhật */
    public function update()
    {
        $products = (new Product())->all();
        $users = (new User())->all();
        if (isset($_POST["btn-submit"])) {
            $data = [
                'id_user' => $_POST['id_user'],
                'id_product' => $_POST['id_product'],
                'content' => $_POST['content'],
                'date' => $_POST['date'],
            ];

            $conditions = [
                ['id', '=', $_GET['id']],
            ];

            (new Comment())->update($data, $conditions);
        }

        $comments = (new Comment())->findOne($_GET["id"]);

        $this->renderAdmin("comments/update", ["comments" => $comments, "products" => $products, "users" => $users]);
    }

    /* Xóa */
    public function delete()
    {
        $conditions = [
            ['id', '=', $_GET['id']],
        ];

        (new Comment())->delete($conditions);

        header('Location: /admin/comments');
    }

    // Phương thức để thêm bình luận
    public function ktra()
    {
        $products = (new Product())->all();
        $users = (new User())->all();
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
                // Kiểm tra xem người dùng đã đăng nhập chưa
                $data = [
                    'id_user' => $_SESSION['user']['id'],
                    'id_product' => $_POST['id_product'],
                    'content' => $_POST['content'],
                    'date' => $_POST['date'],
                ];
                
            (new Comment())->saveComment($data);
            
            $this->renderAdmin("/detail_product", [ "products" => $products, "users" => $users]);
    
        }
    }
}
