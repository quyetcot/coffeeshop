<?php
if (isset($_SESSION['user'])) {
    // Kiểm tra xem người dùng đã đăng nhập chưa
    $user = isset($_SESSION['user']) ? $_SESSION['user'] : array('name' => '');


} else {
    echo "bạn chưa đăng nhập";
}
?>
<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 position-relative overlay-bottom">
    <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
        <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Detail Product</h1>
        <div class="d-inline-flex mb-lg-5">
            <p class="m-0 text-white"><a class="text-white" href="">Home</a></p>
            <p class="m-0 text-white px-2">/</p>
            <p class="m-0 text-white">Reservation</p>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Reservation Start -->
<div class="container-fluid py-5">
    <div class="container">

        <div class="reservation position-relative  ">
            <div class="row align-items-center ">
                <div class="col-lg-6 my-5 my-lg-0 ">
                    <div class="p-5">
                        <div class="mb-4">
                            <h1 class="display-3 text-primary" name="name">
                                <?php echo $detailProduct['name']; ?>
                            </h1>
                            <h1 class="text-white" name="price">$
                                <?= $detailProduct['price']; ?>
                            </h1>
                        </div>
                        <p class="text-white" name="description">
                            <?php echo $detailProduct['description']; ?>
                        </p>
                        <button data-id="<?= $detailProduct['id'] ?>" class="btn btn-primary"
                            onclick="addToCart(<?= $detailProduct['id'] ?>,'<?= $detailProduct['name'] ?>',<?= $detailProduct['price'] ?>,'<?= $detailProduct['img'] ?>')">Add
                            to Cart</button>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="">
                        <img src="<?= $detailProduct['img'] ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
        <?php $isCategoryDisplayed = false; ?>

        <?php foreach ($products as $product): ?>
            <?php if ($product['category_id'] == $detailProduct['category_id'] && $product['id'] != $detailProduct['id']): ?>

                <?php if (!$isCategoryDisplayed): ?>
                    <div>
                        <h3> Sản phẩm cùng loại</h3>
                        <?php $isCategoryDisplayed = true; ?>
                    <?php endif; ?>

                    <a href="/chi-tiet-product?id=<?= $product['id'] ?>">
                        <br>
                        <?= $product['name'] ?>
                    </a>

                <?php endif; ?>
            <?php endforeach; ?>

            <div id="commentSection">
                <h2>Bình luận</h2>
                <?php foreach ($comments as $comment): ?>
                    <?php foreach ($users as $user): ?>
                        <?php if ($comment['id_user'] == $user['id'] && $comment['id_product'] == $detailProduct['id']): ?>
                            <div class="fa fa-check text-primary mr-3">
                                Người gửi:
                                <?= $user['name'] ?>
                            </div>

                            <div class="fa fa-check text-primary mr-3">
                                <?= $comment['date'] ?> |
                                <?= $comment['content'] ?>
                            </div>
                            <hr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </div>
            <div class="comment-form">
                <form action="/admin/comments/create" method="post">
                    <input type="hidden" name="id_product" value="<?= $product['id'] ?>">

                    <label for="users" class="btn btn-primary mt-3">Người bình luận:</label>
                    <input type="text" name="users" class="btn btn-primary mt-2" value="<?= $user['id'] ?? ''  ?>" >
                    <input type="text" name="users" class="btn btn-primary mt-2" value="<?= $user['name'] ?? ''  ?>" required>
                            <br>
                    <label for="content" class="btn btn-primary mt-3">Nội dung bình luận:</label>
                    <input type="text" name="content" class="btn btn-primary mt-2" rows="3" required >
                    <br>
                    <label for="content" class="btn btn-primary mt-3">Ngày bình luận:</label>
                    <input type="date" name="content" class="btn btn-primary mt-2" rows="3" required >

                    <button type="submit" name="btn-submit" class="btn btn-info mt-3">Gửi bình luận</button>
                </form>
                
            </div>



        </div>

    </div>
</div>



<!-- Reservation End -->

<!-- Reservation End -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    let totalProduct = document.getElementById('totalProduct');

    function addToCart(productId, productName, productPrice, productImg) {
        // console.log(productId, productName, productPrice);
        // Sử dụng jQuery
        $.ajax({
            type: 'POST',
            // Đường dẫ tới tệp PHP xử lý dữ liệu
            url: './src/Views/client/addToCart.php',
            data: {
                id: productId,
                name: productName,
                price: productPrice,
                img: productImg
            },
            success: function (response) {
                totalProduct.innerText = response;
                alert('Bạn đã thêm sản phẩm vào giỏ hàng thành công!')
            },
            error: function (error) {
                console.log(error);
            }
        });
    }

</script>