<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Đơn hàng</h5>
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
                                    <h5>Danh sách Đơn hàng</h5>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Phone</th>
                                                    <th>Address</th>
                                                    <th>Tổng giá tiền</th>
                                                    <th>Trạng thái đơn hàng</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php foreach ($orders as $order) : ?>
                                                    <tr>
                                                        <td><?= $order['id'] ?></td>
                                                        <td><?= $order['name'] ?></td>
                                                        <td><?= $order['phone'] ?></td>
                                                        <td><?= $order['address'] ?></td>
                                                        <td><?= $order['total_price'] ?>$</td>
                                                        <td><?php if($order['status'] == 0 ){
                                                            echo "Chờ duyệt";
                                                        }
                                                        
                                                        if($order['status'] == 1 ){
                                                            echo "Đã duyệt";
                                                        }
                                                        
                                                        if($order['status'] == 2 ){
                                                            echo "Thanh toán thành công";
                                                        }?></td>
                                                        <td>
                                                            <a href="/admin/orders/update?id=<?=$order['id']?>" name class="btn btn-primary btn-sm">Cập nhật</a>

                                                            <!-- <form action="/admin/orders/delete?id=<?= $order['id'] ?>" method="post">
                                                            <button type="submit" onclick="return confirm('Bạn có chắc chắn xóa?');" class="btn btn-danger btn-sm mt-2">Xóa</button>
                                                        </form> -->
                                                    </td>
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