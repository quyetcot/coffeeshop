  <!-- Page Header Start -->
  <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
      <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 200px">
          <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Detail Product</h1>
          <div class="d-inline-flex mb-lg-5">
              <p class="m-0 text-white"><a class="text-white" href="">Home</a></p>
              <p class="m-0 text-white px-2">/</p>
              <p class="m-0 text-white">Reservation</p>
          </div>
      </div>
  </div>
  <!-- Page Header End -->


  <!-- Reservation Start -->
  <div class="container-fluid py-5">
      <div class="container">

          <div class="reservation position-relative  ">
              <div class="row align-items-center ">

                  <div class="col-lg-6 my-5 my-lg-0 ">
                      <div class="p-5">
                          <div class="mb-4">
                              <h1 class="display-3 text-primary" name="name"><?php echo $detailProduct['name']; ?></h1>
                              <h1 class="text-white" name="price"> $<?= $detailProduct['price']; ?></h1>
                          </div>
                          <p class="text-white" name="description"><?php echo $detailProduct['description']; ?></p>
                          <button data-id="<?= $detailProduct['id'] ?>" class="btn btn-primary" onclick="addToCart(<?= $detailProduct['id'] ?>,'<?= $detailProduct['name'] ?>',<?= $detailProduct['price'] ?>,'<?= $detailProduct['img'] ?>')">Add to Cart</button>
                          <button class="btn btn-primary" name="buy-now">Buy now</button>
                      </div>
                  </div>
                  <div class="col-lg-6">
                      <div class="">
                          <img src="<?= $detailProduct['img'] ?>" alt="">
                      </div>
                  </div>
              </div>
          </div>

      </div>
  </div>
  <!-- Reservation End -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script>
      let totalProduct = document.getElementById('totalProduct');

      function addToCart(productId, productName, productPrice, productImg) {
          // console.log(productId, productName, productPrice);
          // Sử dụng jQuery
          $.ajax({
              type: 'POST',
              // Đường dẫ tới tệp PHP xử lý dữ liệu
              url: './src/Views/client/addToCart.php',
              data: {
                  id: productId,
                  name: productName,
                  price: productPrice,
                  img: productImg
              },
              success: function(response) {
                  totalProduct.innerText = response;
                  alert('Bạn đã thêm sản phẩm vào giỏ hàng thành công!')
              },
              error: function(error) {
                  console.log(error);
              }
          });
      }
  </script>