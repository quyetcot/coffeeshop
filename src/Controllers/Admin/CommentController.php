<?php 

namespace Ductong\BaseMvc\Controllers\Admin;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Comment;
use Ductong\BaseMvc\Models\Product;
use Ductong\BaseMvc\Models\User ;


class CommentController extends Controller {

    
    public function index() {
        $comments = (new Comment())->all(); 
        $this->renderAdmin('comments/index', ['comments' => $comments]);
        
    }
    public function create() {
        $products = (new Product())->all();
        $users = (new User())->all();
        $arrayUserIdName = [];
        foreach ($users as $user) {
            $arrayUserIdName[$user['id']] = $user['name'];   
        }
        if (isset($_POST["btn-submit"])) { 
            $data = [
                'id_user' =>  $_POST['id_user'],
                'id_product' =>  $_POST['id_product'],
                'content' => $_POST['content'],
                'date' => $_POST['date'],
            ];

            (new Comment())->insert($data);

            header('Location: /admin/comments');
        }

        $this->renderAdmin("comments/create", 
        ["products"=> $products ,"users"=> $users, "arrayUserIdName" => $arrayUserIdName,]);
    }

    /* Cập nhật */
    public function update() {
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

        $this->renderAdmin("comments/update", ["comments" => $comments,"products" => $products ,"users"=> $users]);
    }

    /* Xóa */
    public function delete() {
        $conditions = [
            ['id', '=', $_GET['id']],
        ];

        (new Comment())->delete($conditions);

        header('Location: /admin/comments');
    }
}
