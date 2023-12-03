<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Product</h5>
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
                                    <h5>Cập nhật </h5>
                                </div>
                                <div class="card-block">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="id" value="<?= $comments['id'] ?>">

                                        <label for="name">Người bình luận</label>
                                        <select name="category_id" id="category_id" class="form-control">
                                            <?php foreach ($users as $user) : ?>
                                                <option 
                                                    <?= $comments['id_user'] == $user['id'] ? 'selected' : '' ?> 
                                                    value="<?= $user['id'] ?>">
                                                    
                                                    <?= $user['name'] ?>

                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                        
                                        <label for="category_id">Sản phẩm</label>
                                        <select name="category_id" id="category_id" class="form-control">
                                            <?php foreach ($products as $product) : ?>
                                                <option 
                                                    <?= $comments['id_product'] == $product['id'] ? 'selected' : '' ?> 
                                                    value="<?= $product['id'] ?>">
                                                    
                                                    <?= $product['name'] ?>

                                                </option>
                                            <?php endforeach; ?>
                                        </select>

                                        <label for="img">Nội dung</label>
                                        <input type="text" name="content" id="content" class="form-control" value="<?= $comments['content']?>">
                                        <label for="price">Thời gian</label>
                                        <input type="date" name="date" id="date" class="form-control" value="<?= $comments['date'] ?>">
                                        <button type="submit" name="btn-submit" class="btn btn-info mt-3">Submit</button>
                                        <a href="/admin/comments" class="btn btn-primary mt-3">Quay lại d/s</a>
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