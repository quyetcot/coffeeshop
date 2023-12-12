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
                                    <h5>Cập nhật </h5>
                                </div>
                                <div class="card-block">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        < <label for="name">Name</label>
                                            <input type="text" required name="name" class="form-control" value="<?= $order['name'] ?>">

                                            <label for="email">Email</label>
                                            <input type="text" required name="email" class="form-control" value="<?= $order['email'] ?>">

                                            <label for="phone">Phone</label>
                                            <input type="tel" required name="phone" class="form-control" value="<?= $order['phone'] ?>">

                                            <label for="address">Address</label>
                                            <input type="text" required name="address" class="form-control" value="<?= $order['address'] ?>">

                                            <label for="status">Trang thái đơn hàng</label>
                                            <select name="status" id="" class="form-control">
                                                <option value="0">Chờ duyệt</option>
                                                <option value="1">Đã duyệt</option>
                                                <option value="2">Thanh toán thành công</option>
                                                <option value="4">Đã giao hàng</option>
                                                <option value="3">Đã hủy</option>
                                            </select>

                                            <button  type="submit" name="btn-submit" class="btn btn-info mt-3">Submit</button>
                                            <a href="/admin/orders" class="btn btn-primary mt-3">Quay lại d/s</a>
                                          
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