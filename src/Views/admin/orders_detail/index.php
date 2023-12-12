<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Đơn hàng chi tiết</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="/admin/dashboard"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Đơn hàng</a> </li>
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
                                    <h5>Danh sách Đơn hàng chi tiết</h5>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>ID đơn hàng</th>
                                                    <th>ID Sản phẩm</th>
                                                    <th>Số lượng</th>
                                                    <th>Giá sản phẩm</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php foreach ($orders_detail as $order) : ?>
                                                    <tr>
                                                        <td><?= $order['id'] ?></td>
                                                        <td><?= $order['order_id'] ?></td>
                                                        <td><?= $order['product_id'] ?></td>
                                                        <td><?= $order['quantity'] ?></td>
                                                        <td><?= $order['price'] ?>$</td>
                                                       
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