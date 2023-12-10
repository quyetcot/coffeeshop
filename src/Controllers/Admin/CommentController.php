<?php 

namespace Ductong\BaseMvc\Controllers\Admin;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Comment;
use Ductong\BaseMvc\Models\Product;
use Ductong\BaseMvc\Models\User ;


class CommentController extends Controller {
    public function __construct() {
        check_auth();
    }
    
    public function index() {
        $comments = (new Comment())->all(); 
        $products = (new Product())->all();
        $users = (new User())->all();
        $this->renderAdmin('comments/index', ['comments' => $comments,'products'=> $products,'users'=> $users]);
        
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
    // Phương thức để thêm bình luận
    public function addComment() {
        // Kiểm tra xem có dữ liệu được gửi từ form không
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Xử lý dữ liệu và thêm bình luận vào cơ sở dữ liệu
            // Lưu ý: Đây chỉ là một ví dụ, bạn cần điều chỉnh nó dựa trên cấu trúc cơ sở dữ liệu và logic của bạn.
            
            // Lấy dữ liệu từ form
            $productId = $_POST['product_id'];
            $content = $_POST['content'];

            // Thực hiện thêm bình luận vào cơ sở dữ liệu (ví dụ)
                (new Comment())->addComment($productId, $content);
            // Chuyển hướng hoặc thực hiện bất kỳ xử lý nào khác sau khi thêm bình luận thành công
            header("Location: /detail_product?id=" . $productId);
            exit();
            
        }
    }
    public function ktra(){
        if (isset($_SESSION['user_id'])) {
            // Người dùng đã đăng nhập, thực hiện các thao tác cần thiết
            $userId = $_SESSION['user_id'];
            // Các xử lý khác...
        } else {
            // Người dùng chưa đăng nhập, có thể chuyển hướng hoặc xử lý theo logic của bạn
            // Ví dụ chuyển hướng đến trang đăng nhập
            header("Location: /login");
            exit();
        }
    }
}
