<?php
  include 'banner.php';
?>
    <!--================Category Product Area =================-->
    <section class="cat_product_area section_gap">
      <div class="container">
        <div class="row flex-row-reverse">
          <div class="col-lg-9">    
            <div class="latest_product_inner">
              <div class="row">
             
                <?php
              $allProductsHTML = "";
              foreach($allproducts as $item){
                extract($item);
                $price_product = formatNumber($price_product);
                $allProductsHTML .= '
                <div class="col-lg-4 col-md-6">
                <div class="single-product" data-id_product='.$id_product.'>
                  <div class="product-img">
                    <img
                      class="card-img"
                      src="./public/img/product/inspired-product/'.$image_product.'"
                      alt=""
                    />
                    <div class="p_icon">
                    <a href="index.php?link=detail&id_product='.$id_product.'">
                        <i class="ti-eye"></i>
                      </a>
                      <a class="addCart" href="#">
                        <i class="ti-shopping-cart"></i>
                      </a>
                    </div>
                  </div>
                  <div class="product-btm">
                    <a href="#" class="d-block">
                      <h4>'.$name_product.'</h4>
                    </a>
                    <div class="mt-3">
                      <span class="mr-4">'.$price_product.'</span>
                    </div>
                  </div>
                </div>
              </div> ';
              }
              echo $allProductsHTML;
               ?>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <a href="index.php?link=product">Tất cả sản phẩm</a>
            <div class="left_sidebar_area">
              <aside class="left_widgets p_filter_widgets">
                <div class="l_w_title">
                  <h3>Danh mục</h3>
                </div>
                <div class="widgets_inner">
                  <ul class="list">
                  <?php
                    foreach ($category as $item) {
                     extract($item);
                      echo '<li>
                              <a href="index.php?link=product&id_category='.$id_category.'">'.$name_category.'</a>
                            </li>';
                    }
                  ?>
                  </ul>
                </div>
              </aside>

              <aside class="left_widgets p_filter_widgets">
                <div class="l_w_title">
                  <h3>Loại sản phẩm</h3>
                </div>
                <div class="widgets_inner">
                  <ul class="list">
                    <?php
                    foreach ($typeProduct as $item) {
                     extract($item);
                      echo '<li>
                              <a href="index.php?link=product&type_product='.$type_product.'">'.$type_product.'</a>
                            </li>';
                    }
                  ?>
                  </ul>
                </div>
              </aside>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!--================End Category Product Area =================-->
    <div class="modal" id="successModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Thành công!</h5>
            <button type="button" class="close" data-dismiss="modal">&times;</button> <!-- Nút tắt -->
          </div>
          <div class="modal-body">
            <p>Đặt hàng thành công!</p>
          </div>
        </div>
      </div>
    </div>