<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Comment</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="/admin/dashboard"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Comment</a> </li>
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
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Thêm mới </h5>
                                </div>
                                <div class="card-block">
                                    <form action="" method="post">
                                        <label for="id_user">Người dùng</label>
                                        <select name="id_user" id="id_user" class="form-control">
                                            <?php foreach ($users as $user) : ?>
                                                <option value="<?= $user['id'] ?>"><?= $user['name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>

                                        <label for="id_product">Sản Phẩm</label>
                                        <select name="id_product" id="id_product" class="form-control">
                                            <?php foreach ($products as $product) : ?>
                                                <option value="<?= $product['id'] ?>"><?= $product['name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>

                                        <label for="content">Bình luận</label>
                                        <input type="text" name="content" class="form-control">

                                        <label for="date">Ngày</label>
                                        <input type="date" name="date" class="form-control">

                                        <button type="submit" name="btn-submit" class="btn btn-info mt-3">Submit</button>
                                        <a href="/admin/comments" class="btn btn-primary mt-3">Quay lại danh sách</a>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>