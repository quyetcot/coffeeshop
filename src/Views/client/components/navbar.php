  <!-- Navbar Start -->
  <div class="container-fluid p-0 nav-bar " >
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
                   <div>
                   <a href="/cart" class="nav-item nav-link">Giỏ hàng   <span id="totalProduct"><?= !empty($_SESSION['cart']) ? count($_SESSION['cart']) : 0 ?></span> </a>
                 
                   </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Tài khoản</a>
                        <div class="dropdown-menu text-capitalize">
                            <a href="/logout" class="dropdown-item">Đăng xuất</a>
                            <a href="/info?id=<?=$_SESSION['user']['id']?>" class="dropdown-item">Thông tin</a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

  