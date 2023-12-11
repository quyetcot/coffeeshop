<div class="pcoded-content">
    <div class="page-header card">
        <div class="row align-items-end"></div>
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="feather icon-home bg-c-blue"></i>
                <div class="d-inline">
                    <h5>Thống kê</h5>
                </div>
            </div>
        </div>
    </div>


    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="row">
                        <div class="col-md-4 col-xl-4">
                            <div class="card comp-card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-b-25">Sản Phẩm</h6>
                                            <h3 class="f-w-700 text-c-blue">
                                                <?= $totalQuantity; ?>
                                            </h3>
                                            <p class="m-b-0">As of
                                                <?= date('M d, Y'); ?>
                                            </p>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-cubes bg-c-blue"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-xl-4">
                            <div class="card comp-card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-b-25">Người dùng</h6>
                                            <h3 class="f-w-700 text-c-green">
                                                <?= $totalUser; ?>
                                            </h3>
                                            <p class="m-b-0">As of
                                                <?= date('M d, Y'); ?>
                                            </p>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-bullseye bg-c-green"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xl-4">
                            <div class="card comp-card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-b-25">Đơn Đặt Hàng</h6>
                                            <h3 class="f-w-700 text-c-yellow">
                                                <?= $totalBill; ?>
                                            </h3>
                                            <p class="m-b-0">As of
                                                <?= date('M d, Y'); ?>
                                            </p>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-hand-paper bg-c-yellow"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xl-4">
                            <div class="card comp-card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-b-25">Tổng doanh thu</h6>
                                            <h3 class="f-w-700 text-c-yellow">
                                                <?= $totalSale; ?> $
                                            </h3>
                                            <p class="m-b-0">As of
                                                <?= date('M d, Y'); ?>
                                            </p>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-hand-paper bg-c-yellow"></i>
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