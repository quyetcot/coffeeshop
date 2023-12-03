<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Bình luận</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="/admin/dashboard"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Bình luận</a> </li>
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
                                    <h5>Danh sách Bình luận</h5>

                                    <a href="/admin/comments/create" class="btn btn-info btn-sm">Tạo mới</a>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Người bình luận </th>
                                                    <th>Sản phẩm</th>
                                                    <th>Nội dung</th>
                                                    <th>Ngày bình luận</th>
                                                    <th></th>
                                                    
                                                </tr>
                                            </thead>

                                            <tbody>
                                            <?php foreach ($comments as $comment) : ?>
                                                <tr>
                                                    <td><?= $comment['id'] ?></td>
                                                    <td> <?php foreach ($users as $user) : ?>
                                                        <?php if($comment['id_user']==$user['id']):  ?>
                                                        <?=$user['name'] ?>
                                                        <?php endif; ?>
                                                        <?php endforeach; ?>
                                                    </td>
                                                    <td>
                                                        <?php foreach ($products as $product) : ?>
                                                            <?php if($product['id']==$comment['id_product']): ?>
                                                                <?=$product['name'] ?>
                                                                <?php endif ?>
                                                        <?php endforeach;?>
                                                    </td>
                                                    <td><?= $comment['content'] ?></td>
                                                    <td><?= $comment['date'] ?></td>
                                                    <td>
                                                        <a href="/admin/comments/update?id=<?= $comment['id'] ?>" class="btn btn-primary btn-sm">Cập nhật</a>

                                                        <form action="/admin/comments/delete?id=<?= $comment['id'] ?>" method="post">
                                                            <button type="submit" onclick="return confirm('Bạn có chắc chắn xóa?');" class="btn btn-danger btn-sm mt-2">Xóa</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>

                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>