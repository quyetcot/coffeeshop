<?php

$sum_price = 0;
foreach ($cart as $item) {
    $sum_price += ($item['price'] * $item['quantity']);
}

// Kiểm tra xem người dùng đã đăng nhập chưa
if (isset($_SESSION['user'])) {
    // Kiểm tra xem người dùng đã đăng nhập chưa
    $user = isset($_SESSION['user']) ? $_SESSION['user'] : array('name' => '', 'email' => '', 'address' => '');
} else {
    $user = array('name' => '', 'email' => '', 'address' => '');
}
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btn-submit'])) {
    // Người dùng đã nhấn submit
    // Thực hiện xử lý đặt hàng và kiểm tra điều kiện thành công

    // Kiểm tra điều kiện để đơn hàng được coi là thành công (ví dụ: có thể thêm kiểm tra dữ liệu, thanh toán, v.v.)
    $orderSuccess = true; // Đây chỉ là một ví dụ, bạn cần thay đổi dựa trên logic của bạn

    if ($orderSuccess) {
        unset($_SESSION['cart']);
        // Các bước xử lý khác (gửi email xác nhận, cập nhật cơ sở dữ liệu, v.v.)...
        header("Location:/menu");
        exit();
    } else {
        // Đơn hàng không thành công, có thể chuyển hướng về trang lỗi hoặc hiển thị thông báo
        echo "Đơn hàng không thành công!";
    }
}
?>


<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 position-relative overlay-bottom">
    <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 200px">
        <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Đặt hàng</h1>
        <div class="d-inline-flex mb-lg-5">
            <p class="m-0 text-white"><a class="text-white" href="">Trang chủ</a></p>
            <p class="m-0 text-white px-2">/</p>
            <p class="m-0 text-white">Đặt hàng</p>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- About Start -->
<div class="container-fluid ">
    <div class="container">
        <style>
            h2 {
                margin-bottom: 20px;
                font-size: 24px;
                text-align: center;
            }

            input[type="text"],
            input[type="tel"],
            input[type="phone"] {
                padding: 8px 10px;
                width: 300px;
                margin-bottom: 10px;
            }

            input[type="submit"] {
                padding: 10px 20px;
                margin-top: 15px;
            }

            .page-order {
                display: flex;
            }

            .form-order {
                width: 70%;
            }

            .sub-order {
                width: 30%;
            }

            .sub-order td,
            .sub-order th {
                padding: 5px;
            }

            .sub-order td:first-child,
            .sub-order th:first-child {
                width: 70%;
            }

            .sub-order td:last-child,
            .sub-order th:last-child {
                text-align: right;
            }
        </style>
        <div class="page-order">
            <div class="form-order">
            <form action="/createOrder" method="POST">
                <label for="name">Name</label>
                <input type="text" required name="name" class="form-control" value="<?=$user['name']?>">

                <label for="email">Email</label>
                <input type="text" required name="email" class="form-control" value="<?=$user['email']?>">

                <label for="phone">Phone</label>
                <input type="tel" required name="phone" class="form-control">

                <label for="address">Address</label>
                <input type="text" required name="address" class="form-control" value="<?=$user['address']?>">
                <label for="pttt">Phương thức thanh toán</label><br>
                <input type="radio" name="pttt" id="" value="chuyển khoản" > Chuyển khoản <br>
                <input type="radio" name="pttt" id="" value="tiền mặt" > Tiền mặt <br>

                <button type="submit" class="btn btn-primary mt-3" onclick="ValidateForm()">Đặt hàng</button>
            </form>

            </div>
            <div class="sub-order">
                <h2>Đơn hàng</h2>
                <table>
                    <tr>
                        <th>Sản phẩm</th>
                        <th>Thành tiền</th>
                    </tr>
                    <?php
                    // print_r($cart);
                    // $sum_price = 0;
                    foreach ($cart as $item) {
                        // $sum_price += ($item['price']*$item['quantity']);
                    ?>
                        <tr>
                            <td>
                                <?php echo $item['name']; ?><br>
                                <small>SL: <?php echo $item['quantity']; ?></small>
                            </td>
                            <td><?php echo number_format($item['quantity'] * $item['price'], 0, ",", "."); ?> $</td>
                        </tr>
                    <?php
                    }
                    ?>
                    <tr>
                        <td><b>Tổng tiền</b></td>
                        <td><b><?= $sum_price ?> $</b></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
<script>
    function ValidateForm() {
        alert("Đặt hàng thành công!")
    }
</script>