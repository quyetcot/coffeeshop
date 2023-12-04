<link href="assets_client/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="assets_client/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

<!-- Customized Bootstrap Stylesheet -->
<link href="assets_client/css/style.min.css" rel="stylesheet">
<link href="assets_client/css/stylemenu.css" rel="stylesheet">

<!-- Head End -->

<!-- Navbar Start -->
<div class="container-fluid p-0 nav-bar ">
    <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
        <a href="index.html" class="navbar-brand px-lg-4 m-0">
            <h1 class="m-0 display-4 text-uppercase text-white">Roza Cafe</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto p-4">
                <a href="/home" class="nav-item nav-link ">Trang chủ</a>
                <a href="/menu" class="nav-item nav-link">Menu</a>
                <a href="/about" class="nav-item nav-link">Về chúng tôi</a>
                <a href="/service" class="nav-item nav-link">Dịch vụ</a>
                <a href="/contact" class="nav-item nav-link">Liên hệ</a>
                <a href="/login" class="nav-item nav-link">Giỏ hàng</a>
                <a href="/login" class="nav-link dropdown-toggle">Đăng nhập</a>
            </div>
        </div>
    </nav>
</div>
<div class="container-fluid page-header mb-5 position-relative overlay-bottom">
    <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
        <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Đăng kí</h1>
        <div class="d-inline-flex mb-lg-5">



        </div>
    </div>
</div>

<div class="container-fluid pt-5">
    <div class="container">
        <form action="" method="post" onsubmit="return validateForm()">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" required>

            <label for="email" class="mt-3">Email</label>
            <input type="email" name="email" class="form-control" required>

            <label for="address" class="mt-3">Address</label>
            <input type="text" name="address" class="form-control" required>

            <label for="password" class="mt-3">Password</label>
            <input type="password" name="password" class="form-control" required>

            <label for="confirm_password" class="mt-3">Confirm Password</label>
            <input type="password" name="confirm_password" class="form-control" required>

            <button type="submit" name="btn-submit" class="btn btn-info mt-3">Xác nhận</button>

            <a href="/" class="btn btn-primary mt-3">Đăng nhập</a>

        </form>
    </div>

</div>
<script>
    function validateForm() {
        var password = document.forms[0].password.value;
        var confirmPassword = document.forms[0].confirm_password.value;

        if (password !== confirmPassword) {
            alert("Mật khẩu xác nhận không khớp.");
            return false;
        }
        else{
            alert("Đăng kí thành công!")
            return true;
        }

        
    }
</script>
