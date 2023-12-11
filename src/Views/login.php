<?php
//print_r($_SESSION['user']);
?>
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
<!-- Navbar End -->



<div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 200px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Đăng nhập</h1>
            <div class="d-inline-flex mb-lg-5">
            
        
          
            </div>
        </div>
    </div>

<div class="container-fluid pt-5">
    <div class="container">
    <form action="" method="post">
    <label for="name">Tên đăng nhập</label>
    <input type="text" name="user_name" class="form-control">

   
    <label for="password" class="mt-3">Mật khẩu</label>
    <input type="password" name="password" class="form-control">



    <button type="submit" name="btn-login" class="btn btn-info mt-3">Đăng nhập</button>
    <a href="/register" class="btn btn-primary mt-3">Đăng kí</a>
</form>
    </div>
</div>
<!-- Footer Start -->
<div class="container-fluid footer text-white mt-5 pt-5 px-0 position-relative overlay-top">
    <div class="row mx-0 pt-5 px-sm-3 px-lg-5 mt-4">
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Get In Touch</h4>
            <p><i class="fa fa-map-marker-alt mr-2"></i>123 Street, New York, USA</p>
            <p><i class="fa fa-phone-alt mr-2"></i>+012 345 67890</p>
            <p class="m-0"><i class="fa fa-envelope mr-2"></i>info@example.com</p>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Follow Us</h4>
            <p>Amet elitr vero magna sed ipsum sit kasd sea elitr lorem rebum</p>
            <div class="d-flex justify-content-start">
                <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-lg btn-outline-light btn-lg-square" href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Open Hours</h4>
            <div>
                <h6 class="text-white text-uppercase">Monday - Friday</h6>
                <p>8.00 AM - 8.00 PM</p>
                <h6 class="text-white text-uppercase">Saturday - Sunday</h6>
                <p>2.00 PM - 8.00 PM</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Newsletter</h4>
            <p>Amet elitr vero magna sed ipsum sit kasd sea elitr lorem rebum</p>
            <div class="w-100">
                <div class="input-group">
                    <input type="text" class="form-control border-light" style="padding: 25px;" placeholder="Your Email">
                    <div class="input-group-append">
                        <button class="btn btn-primary font-weight-bold px-3">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-center text-white border-top mt-4 py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
        <p class="mb-2 text-white">Copyright &copy; <a class="font-weight-bold" href="#">Domain</a>. All Rights Reserved.</a></p>
        <p class="m-0 text-white">Designed by <a class="font-weight-bold" href="https://htmlcodex.com">HTML Codex</a></p>
    </div>
</div>
<!-- Footer End -->
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<!-- Component Foot Start -->
<script src="assets_client/lib/easing/easing.min.js"></script>
<script src="assets_client/lib/waypoints/waypoints.min.js"></script>
<script src="assets_client/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="assets_client/lib/tempusdominus/js/moment.min.js"></script>
<script src="assets_client/lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="assets_client/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Contact Javascript File -->
<script src="assets_client/mail/jqBootstrapValidation.min.js"></script>
<script src="assets_client/mail/contact.js"></script>

<!-- Template Javascript -->
<script src="assets_client/js/main.js"></script>

<!-- Component Foot End -->