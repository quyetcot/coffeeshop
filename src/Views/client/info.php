<div class="container-fluid page-header mb-5 position-relative overlay-bottom">
    <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 300px">
        <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Thông tin tài khoản</h1>
        <div class="d-inline-flex mb-lg-5">



        </div>
    </div>
</div>

<div class="container-fluid pt-5">
    <div class="container">
        <form action="" method="post" onsubmit="return validateForm()">
       
            <label for="name">Họ và Tên</label>
            <input type="text" name="name" class="form-control" value="<?=$user['name']?>">

            <label for="email" class="mt-3">Email</label>
            <input type="email" name="email" class="form-control"  value="<?=$user['email']?>">

            <label for="phone" class="mt-3">Số điện thoại</label>
            <input type="tel" name="phone" class="form-control" value="<?=$user['phone']?>">

            <label for="address" class="mt-3">Địa chỉ</label>
            <input type="text" name="address" class="form-control" value="<?=$user['address']?>">

            <label for="name">Tên đăng nhập</label>
            <input type="text" name="user_name" class="form-control" value="<?=$user['user_name']?>">

          

            <label for="password" class="mt-3">Mật khẩu</label>
            <input type="text" name="password" class="form-control" value="<?=$user['password']?>">

            <label for="confirm_password" class="mt-3">Xác nhận mật khẩu</label>
            <input type="password" name="confirm_password" class="form-control" required>
 <input type="submit" name="btn-submit" class="btn btn-primary mt-3" value="Cập nhật">

        </form>
    </div>

</div>