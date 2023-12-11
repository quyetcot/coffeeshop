<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 position-relative overlay-bottom">
    <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 200px">
        <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Giỏ hàng</h1>
        <div class="d-inline-flex mb-lg-5">
            <p class="m-0 text-white"><a class="text-white" href="">Trang chủ</a></p>
            <p class="m-0 text-white px-2">/</p>
            <p class="m-0 text-white">Giỏ hàng</p>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- About Start -->
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <aside class="col-lg-9">
                <?php if (empty($_SESSION['cart'])) : ?>
                    <div class="card">
                        <p>Giỏ hàng chưa có sản phẩm nào.</p>
                    </div>
                <?php else : ?>
                    <div class="table-responsive">
                        <table class="table table-borderless table-shopping-cart">
                            <thead class="text-muted">
                                <tr class="small text-uppercase">
                                    <th scope="col">STT</th>
                                    <th scope="col">Sản phẩm</th>
                                    <th scope="col" width="200">Số lượng</th>
                                    <th scope="col" width="80">Giá</th>
                                    <th scope="col" width="120">Thành tiền</th>
                                    <th scope="col" class="text-right d-none d-md-block" width="120">Action</th>
                                </tr>
                            </thead>
                            <tbody id="orderS">
                                <?php
                                $sum_price = 0;
                                $stt = 0;
                                foreach ($_SESSION['cart'] as $idSP => $item) :
                                    $sum_price += ($item['price'] * $item['quantity']);
                                ?>
                                    <tr class="product-row" data-product-id="<?= $idSP?>">
                                        <td>
                                        <figcaption class="info">
                                                    <?=++$stt?>
                                                </figcaption>
                                        </td>
                                        <td>
                                            <figure class="itemside align-items-center">
                                           
                                                <figcaption class="info">
                                                    <a href="#" class="title text-dark" data-abc="true"><?= $item['name'] ?></a>
                                                </figcaption>
                                            </figure>
                                        </td>
                                        <td>
                                        <a href="/decrementQuantity?id=<?= $idSP ?>" class="btn btn-danger">-</a>
                                        <button type="button" class="btn btn-info"><?= $item['quantity'] ?></button>
                                        <a href="/incrementQuantity?id=<?= $idSP ?>" class="btn btn-success">+</a>
                                        </td>
                                        <td>
                                            <div class="price-wrap-1"><var class="price"><?= $item['price'] ?>$</var></div>
                                        </td>
                                        <td>
                                            <div class="price-wrap"><var class="price" id="subtotal_<?= $idSP ?>"><?= $item['quantity'] * $item['price'] ?>$</var></div>
                                        </td>

                                        <td class="d-none d-md-block text-center">
                                        <a href="/removeFromCart?id=<?= $idSP ?>" class="btn btn-danger">Xóa</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                <?php endif; ?>
            </aside>
            <aside class="col-lg-3">
            <?php if (!empty($_SESSION['cart'])) : ?>
                <div class="card">
                    <div class="card-body">
                        <dl class="dlist-align">
                            <dt>Thanh toán:</dt>
                            <dd id="total_price" class="text-right text-dark b ml-3"><strong><?= $sum_price ?>$</strong></dd>
                        </dl>
                        <hr>
                        <a href="/pay" class="btn btn-primary m-1" data-abc="true">Tiếp tục</a>
                        <a href="#" class="btn btn-dark" data-abc="true">Quay lại</a>
                    </div>
                </div>
                <?php endif; ?>
            </aside>
        </div>
    </div>
</div>

   