<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 position-relative overlay-bottom">
    <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
        <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Menu</h1>
        <div class="d-inline-flex mb-lg-5">
            <p class="m-0 text-white"><a class="text-white" href="">Trang chủ</a></p>
            <p class="m-0 text-white px-2">/</p>
            <p class="m-0 text-white">Menu</p>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Menu Start -->
<div class="container-fluid pt-5">
    <div class="container">
        <div class="section-title">
            <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Menu </h4>
            <h1 class="display-4">Competitive Pricing</h1>
        </div>
        <div class="main_dyn">
            <div class="menu_menu_left">

                <?php foreach ($categories as $category): ?>
                    <ul>
                        <li><a href="#category_<?= $category['id'] ?>">
                                <?= $category['name'] ?>
                            </a></li>
                    </ul>
                <?php endforeach; ?>

            </div>
            <div class="menu_main_right">
                <?php
                $displayedCategories = []; // Mảng để lưu trữ danh sách các danh mục đã hiển thị
                foreach ($products as $product):
                    // Kiểm tra xem danh mục đã được hiển thị hay chưa
                    if (!in_array($product['category_id'], $displayedCategories)) {
                        echo '<h4>' . $arrayCategoryIdName[$product['category_id']] . '</h4>';
                        $displayedCategories[] = $product['category_id']; // Đánh dấu danh mục đã được hiển thị
                    }
                    ?>

                    <div class="col-lg-6sp_dyn" id="category_<?= $product['category_id'] ?>">
                        <a href="/detail_product?id=<?= $product['id'] ?>" class="btn btn_primary">
                            <div class="row align-items-center mb-5">
                                <div class="col-4 col-sm-3">
                                    <img class="w-100 rounded-circle mb-3 mb-sm-0" src="<?= $product['img'] ?>" alt="">
                                    <h5 class="menu-price">$
                                        <?= $product['price_sale'] ?>
                                    </h5>
                                </div>
                                <div class="col-8 col-sm-9">
                                    <h4>
                                        <?= $product['name'] ?>
                                    </h4>
                                    <p class="m-0">
                                        <?= $product['price'] ?>$
                                        
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>

                <?php endforeach; ?>

            </div>
        </div>
    </div>
</div>
<!-- Menu End -->