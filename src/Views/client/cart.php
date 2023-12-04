 <!-- Page Header Start -->
 <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
     <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
         <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Giỏ hàng</h1>
         <div class="d-inline-flex mb-lg-5">
             <p class="m-0 text-white"><a class="text-white" href="">Trang chủ</a></p>
             <p class="m-0 text-white px-2">/</p>
             <p class="m-0 text-white">Giỏ hàng</p>
         </div>
     </div>
 </div>
 <!-- Page Header End -->


 <!-- About Start -->
 <div class="container-fluid ">
     <div class="container">
         <div class="row">
             <aside class="col-lg-9">
                 <div class="card">
                     <div class="table-responsive">
                         <table class="table table-borderless table-shopping-cart">
                             <thead class="text-muted">
                                 <tr class="small text-uppercase">
                                     <th scope="col">Ảnh</th>
                                     <th scope="col">Sản phẩm</th>
                                     <th scope="col" width="120">Số lượng</th>
                                     <th scope="col" width="120">Giá</th>
                                     <th scope="col" width="120">Thành tiền</th>
                                     <th scope="col" class="text-right d-none d-md-block" width="120">Action</th>
                                 </tr>
                             </thead>
                             <tbody id="orderS" >

                                <?php  
                                $sum_price = 0;
                                foreach ($cart as $item) : {
                                    $sum_price += ($item['price']*$item['quantity']);
                                } ?>
                                 <tr>
                                     <td>
                                         <img src="" alt="">
                                     </td>
                                     <td>

                                         <figure class="itemside align-items-center">
                                             <div class="aside"><img src="" class="img-sm"></div>
                                             <figcaption class="info"> <a href="#" class="title text-dark" data-abc="true"><?=$item['name']?></a>
                                             </figcaption>
                                         </figure>
                                     </td>
                                     <td>
                                         <input type="number" class="form-control" name="quantity" min="1" id="quantity_<?$item['id']?>" value="<?=$item['quantity']?>" oninput="updateQuantity(<?=$item['id']?>)">
                                     </td>
                                     <td>
                                         <div class="price-wrap"> <var class="price"><?=$item['price']?>$</var></div>
                                     </td>
                                     <td>
                                         <div class="price-wrap"> <var class="price"><?=$item['quantity']*$item['price']?>$</var></div>
                                     </td>
                                     <td class="d-none d-md-block text-center">
                                         <a href="" class="btn btn-danger rounder" data-abc="true" onclick="removeFormCart(<?= $item['id'] ?>)"> Xóa</a>
                                     </td>
                                 </tr>
                                

                                <?php endforeach; ?>
                             </tbody>
                         </table>
                     </div>
                 </div>
             </aside>
             <aside class="col-lg-3">
                
                 <div class="card">
                     <div class="card-body">
                         
                       
                         <dl class="dlist-align">
                             <dt>Thanh toán:</dt>
                             <dd class="text-right text-dark b ml-3"><strong><?=$sum_price?>$</strong></dd>
                         </dl>
                         <hr> <a href="/pay" class="btn btn-primary m-1 " data-abc="true">Tiếp tục</a>
                         <a href="#" class="btn btn-dark" data-abc="true">Quay lại</a>
                     </div>
                 </div>
             </aside>
         </div>
     </div>
 </div>
 <!-- About End -->
 <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    // hàm cập nhật số lượng
    function updateQuantity(id, index) {
        // lấy giá trị của ô input
        let newQuantity = $('#quantity_' + id).val();
        if (newQuantity <= 0) {
            newQuantity = 1
        }

        // Gửi yêu cầu bằng ajax để cập nhật giỏ hàng
        $.ajax({
            type: 'POST',
            url: './src/Views/client/updateQuantity.php',
            data: {
                id: id,
                quantity: newQuantity
            },
            success: function(response) {
                // Sau khi cập nhật thành công
                $.post('./src/Views/tableCartOrder.php', function(data) {
                    $('#order').html(data);
                })
            },
            error: function(error) {
                console.log(error);
            },
        })
    }

    function removeFormCart(id) {
        if (confirm("Bạn có đồng ý xóa sản phẩm hay không?")) {
            // Gửi yêu cầu bằng ajax để cập nhật giỏ hàng
            $.ajax({
                type: 'POST',
                url: './src/Views/client/removeFormCart.php',
                data: {
                    id: id
                },
                success: function(response) {
                    // Sau khi cập nhật thành công
                    $.post('view/tableCartOrder.php', function(data) {
                        $('#order').html(data);
                    })
                },
                error: function(error) {
                    console.log(error);
                },
            })
        }
    }
</script>