<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Quản lý Danh mục</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index.html"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Quản lý Danh mục</a> </li>
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
                                <th>Action</th>
                            </tr>

                            <?php foreach ($categories as $category) : ?>
                                <tr>
                                    <td><?= $category['id'] ?></td>
                                    <td><?= $category['name'] ?></td>
                                    <td>
                                        <a href="/admin/categories/update?id=<?= $category['id'] ?>" class="btn btn-primary btn-sm">Cập nhật</a>

                                        <form action="/admin/categories/delete?id=<?= $category['id'] ?>" method="post">
                                            <button type="submit" onclick="return confirm('Bạn có chắc chắn xóa?');" class="btn btn-danger btn-sm">Xóa</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>

                        </table>
                        <a href="/admin/categories/create"><button class="btn btn-primary">Thêm danh mục</button> </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>