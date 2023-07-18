
  <!--================Home Banner Area =================-->
  <section class="home_banner_area mb-40">
    <div class="banner_inner d-flex align-items-center">
      <div class="container">
        <div class="banner_content row">
          <div class="col-lg-12">
            <p class="sub text-uppercase">Thời trang nam</p>
            <h3><span>The</span> Style <br />Of <span>No Style</span></h3>
            <h4>Ưu đãi không giới hạn.</h4>
            <a class="main_btn mt-40" href="index.php?link=product">Xem Ngay</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Home Banner Area =================-->


  <!--================ Feature Product Area =================-->
  <section class="feature_product_area section_gap_bottom_custom">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="main_title">
            <h2><span>Sản phẩm nổi bật</span></h2>
          </div>
        </div>
      </div>

      <div class="row">
      <?php
      $hotProductsHTML = "";
      foreach($hotProducts as $item){
        extract($item);
        $price_product = formatNumber($price_product);
         $hotProductsHTML.='   <div class="col-lg-3 col-md-6">
         <div data-id_product='.$id_product.' class="single-product">
           <div class="product-img">
             <img class="img-fluid w-100"src="./public/img/product/inspired-product/'.$image_product.'" alt="" />
             <div class="p_icon">
               <a href="index.php?link=detail&id_product='.$id_product.'">
                 <i class="ti-eye"></i>
               </a>
               <a class="addCart">
                 <i class="ti-shopping-cart"></i>
               </a>
             </div>
           </div>
           <div class="product-btm">
             <a href="#" class="d-block">
               <h4>'.$name_product.'</h4>
             </a>
             <div class="mt-3">
               <span class="mr-4">'.$price_product.' </span>
             </div>
           </div>
         </div>
       </div>';
      }
      echo $hotProductsHTML;
        ?>
      </div>
    </div>
  </section>
  <!--================ End Feature Product Area =================-->


  <!--================ Inspired Product Area =================-->
  <section class="inspired_product_area section_gap_bottom_custom">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="main_title">
            <h2><span>Sản phẩm mới</span></h2>
          </div>
        </div>
      </div>

      <div class="row">
        <?php
          $newProductsHTML =  "";
          foreach($newProducts as $item){
            extract($item);
            $price_product = formatNumber($price_product);
            $newProductsHTML .= '   <div class="col-lg-3 col-md-6">
            <div data-id_product='.$id_product.' class="single-product">
              <div class="product-img">
                <img class="img-fluid w-100"src="./public/img/product/inspired-product/'.$image_product.'" alt="" />
                <div class="p_icon">
                  <a href="index.php?link=detail&id_product='.$id_product.'">
                    <i class="ti-eye"></i>
                  </a>
                  <a class="addCart">
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
          </div>';
          }
          echo $newProductsHTML;
        ?>
      </div>
    </div>
  </section>
  <!--================ End Inspired Product Area =================-->
  <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Thành công!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Đặt hàng thành công!</p>
              </div>
            </div>
          </div>
     </div>
