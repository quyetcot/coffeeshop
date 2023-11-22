<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Cập nhật Sản phẩm</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index.html"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Cập nhật sản phẩm</a> </li>
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
                    <div class="container">
        <h1>Cập nhật Product</h1>

        <form action="" method="post">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="<?= $product['name'] ?>">

            <label for="price" class="mt-3">Price</label>
            <input type="number" name="price" class="form-control" value="<?= $product['price'] ?>">

            <label for="image" class="mt-3">Image</label>
            <input type="file" name="image" class="form-control" value="<?= $product['image'] ?>">

            <label for="description" class="mt-3">Description</label>
            <input type="text" name="description" class="form-control" value="<?= $product['description'] ?>">

            <button type="submit" name="btn-submit" class="btn btn-info mt-3">Submit</button>
            <a href="/admin/products" class="btn btn-primary mt-3">Quay lại d/s</a>
        </form>
    </div>

                    
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>