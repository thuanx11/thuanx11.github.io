<?php
  include 'banner.php';
?>

    <!--================Cart Area =================-->
    <section class="cart_area">
      <div class="container">
        <div class="cart_inner">
          <div class="table-responsive">
            <table class="table">
          
                <?php
                      $totalAmout = 0;     
                      if (is_array($cart) && count($cart) > 0) {
                        echo '    <thead>
                                      <tr>
                                        <th scope="col">Sản phẩm</th>
                                        <th scope="col">Giá</th>
                                        <th scope="col">Số lượng</th>
                                        <th scope="col">Tổng</th>
                                      </tr>
                                    </thead>
                                    <tbody>';
                        foreach ($cart as $item) {
                          extract($item);
                          $fomatItemPrice =  $price_product * $quantity;
                          $ItemPrice= formatNumber($fomatItemPrice);                   
                          $price =  formatNumber($price_product);
                          $totalAmout +=  $fomatItemPrice;
                          $formatTotalAmount = formatNumber($totalAmout); 
                          echo '
                                <tr class="cart-product" data-id_product="'.$id_product.'">
                                <td>
                                  <div class="media">
                                    <div class="d-flex">
                                      <img
                                        width="80px"
                                        src="./public/img/product/inspired-product/'.$image_product.'"
                                        alt=""
                                      />
                                    </div>
                                    <div class="media-body">
                                      <p>'.$name_product.'</p>
                                      <p>Xoá</p>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <h5>'.$price.'</h5>
                                </td>
                                <td>
                                <div class="product_count">
                                  <input
                                    type="text"
                                    name="qty"
                                    id="sst"
                                    maxlength="12"
                                    value="'.$quantity.'"
                                    title="Quantity:"
                                    class="input-text qty"
                                  />
                                  <button
                                    class="increase items-count"
                                    type="button"
                                  >
                                    <i class="lnr lnr-chevron-up"></i>
                                  </button>
                                  <button
                                    class="reduced items-count"
                                    type="button"
                                  >
                                    <i class="lnr lnr-chevron-down"></i>
                                  </button>
                                </div>
                              </td>
                                <td>
                                  <h5>'.$ItemPrice.'</h5>
                                </td>
                              </tr>
                          ';
                        }
                        echo '
                        <tr class="bottom_button">
                          <td>
                            <a class="gray_btn" href="">Làm mới giỏ hàng</a>
                          </td>
                          <td></td><td></td><td></td>
                        </tr>
                        ';
                      } else {
                        echo '<h4 class="text-center" > Không có sản phẩm </h4>';
                      }
                ?>
                <?php
                if ( $totalAmout == 0) {
                  echo "";
                }else{
                  echo '
                 <tr>
                  <td></td><td></td><td>
                    <h5>Tạm tính</h5>
                  </td>
                  <td>
                    <h5> '.$formatTotalAmount.'</h5>
                  </td>
                  </tr> 
                <tr class="out_button_area">
                  <td></td><td></td><td></td><td>
                    <div class="checkout_btn_inner">
                      <a class="gray_btn" href="index.php?link=product">Tiếp tục mua hàng</a>
                     <a class="main_btn" href="index.php?link=checkout">Thanh toán</a>
                    </div>
                  </td>
                </tr>
                  ';  
                }
                    
                ?>
              </tbody>  
            </table>
          </div>
        </div>
      </div>
    </section>
    <!--================End Cart Area =================-->