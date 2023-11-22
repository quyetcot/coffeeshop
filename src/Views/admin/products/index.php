<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Quản lý Sản phẩm</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index.html"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Quản lý Sản phẩm</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">

                    <div class="row">

                        <table class="table">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>

                            <?php foreach ($products as $product) : ?>
                                <tr>
                                    <td><?= $product['id'] ?></td>
                                    <td><?= $product['name'] ?></td>
                                    <td><?= $product['price'] ?></td>
                                    <td><?= $product['image'] ?></td>
                                    <td><?= $product['description'] ?></td>
                                    <td>
                                        <a href="/admin/products/update?id=<?= $product['id'] ?>" class="btn btn-primary btn-sm">Cập nhật</a>

                                        <form action="/admin/products/delete?id=<?= $product['id'] ?>" method="post">
                                            <button type="submit" onclick="return confirm('Bạn có chắc chắn xóa?');" class="btn btn-danger btn-sm">Xóa</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>

                        </table>
                        <a href="/admin/products/create"><button class="btn btn-primary">Thêm sản phẩm</button> </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>