<?php
  include 'banner.php';
  $checkQuantity = false;
  if ($product_detail['quantity_product'] > 0) {
    $checkQuantity = true;
  } 
   $price = formatNumber($product_detail['price_product']);
?>
    <!--================Single Product Area =================-->
    <div class="product_image_area">
      <div class="container">
        <div class="row s_product_inner">
          <div class="col-lg-6">
            <div class="s_product_img">
              <div
                id="carouselExampleIndicators"
                class="carousel slide"
                data-ride="carousel"
              >
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img
                      class="d-block w-100"
                      src="./public/img/product/inspired-product/<?php echo $product_detail['image_product']; ?>"
                      alt="First slide"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 offset-lg-1">
            <div class="s_product_text">
              <h3><?php echo $product_detail['name_product']; ?></h3>
              <h2><?php echo $price ?></h2>
              <ul class="list">
                <li>
                  <a class="active" href="#">
                    <span>Danh mục</span> : <?php echo $product_detail['name_category']; ?></a
                  >
                </li>
                <li>
                  <a class="active" href="#">
                    <span>Loại hàng</span> : <?php echo $product_detail['type_product']; ?></a
                  >
                </li>
                <li>
                  <a href="#"> <span>Trạng thái</span> <?php 
                  if ($checkQuantity) {
                    echo ": Còn Hàng";
                  }else{  
                    echo ": Hết Hàng";
                  }
                  ?></a>
                </li>
              </ul>
              <p>
              <?php echo $product_detail['decs_product']; ?>
              </p>
              <div class="product_count">
                <label for="qty">Số lượng:</label>
                <input
                  type="text"
                  name="qty"
                  id="sst"
                  maxlength="12"
                  value="1"
                  title="Quantity:"
                  class="input-text qty"
                />
                <button
                  onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                  class="increase items-count"
                  type="button"
                >
                  <i class="lnr lnr-chevron-up"></i>
                </button>
                <button
                  onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                  class="reduced items-count"
                  type="button"
                >
                  <i class="lnr lnr-chevron-down"></i>
                </button>
              </div>
              <div data-id_product= <?php echo $product_detail['decs_product']; ?> class="card_area">
                <?php 
                  if ($checkQuantity) {
                    echo '<button class="main_btn">Thêm vào giỏ hàng</button>';
                  }else{
                    echo '<button  class="main_btn out_stoke">Hết hàng</button>';
                  }
                ?>
                <a class="icon_btn" href="#">
                  <i class="lnr lnr lnr-heart"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--================End Single Product Area =================-->

    <!--================Product Description Area =================-->
    <section class="product_description_area">
      <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a
              class="nav-link"
              id="home-tab"
              data-toggle="tab"
              href="#home"
              role="tab"
              aria-controls="home"
              aria-selected="true"
              >Miêu tả</a
            >
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              id="contact-tab"
              data-toggle="tab"
              href="#contact"
              role="tab"
              aria-controls="contact"
              aria-selected="false"
              >Bình luận</a
            >
          </li>

        </ul>
        <div class="tab-content" id="myTabContent">
          <div
            class="tab-pane fade"
            id="home"
            role="tabpanel"
            aria-labelledby="home-tab">

            <p>
            <?php echo $product_detail['decs_product']; ?>
            </p>
          </div>
          <div
            class="tab-pane fade active show"
            id="contact"
            role="tabpanel"
            aria-labelledby="contact-tab"
          >
            <div class="row">
              <div class="col-lg-6">
                <div class="comment_list">

                  <?php
                    if ($showComment) {
                      foreach ($showComment as $comment){
                        extract($comment);
                        echo '
                        <div class="review_item">
                        <div class="media">
                          <div class="d-flex">
                            <img
                             width="15%" 
                              src="./public/img/user/avatar.png"
                              alt=""
                            />
                          </div>
                          <div class="media-body">
                            <h4>'.$fullname.'</h4>
                            <h5>'.$day_comment.'</h5>
                          </div>
                        </div>
                        <p>'.$content.'</p>
                      </div>
                        ';
                      }
                    }else{
                      echo "Hiện chưa có đánh giá";
                    }
                  ?>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="review_box">
                  <h4>Đánh giá</h4>
                  <?php
                    if(!$_SESSION['acctiveAcount']){
                      echo '<p>Đăng nhập để đánh giá<a href="index.php?link=login"> Đăng nhập</a></p>';
                    }else{
                      echo '       <form
                      class="row contact_form"
                      id="contactForm"
                      method="post"
                    >
                      <div class="col-md-12">
                        <div class="form-group">
                          <textarea
                            class="form-control"
                            name="message"
                            id="message"
                            rows="1"
                            placeholder="Đánh giá"
                          ></textarea>
                        </div>
                      </div>
                      <div class="col-md-12 text-right">
                        <button
                          type="submit"
                          name = "addComment"
                          value="submit"
                          class="btn submit_btn"
                        >
                          Gửi
                        </button>
                      </div>
                    </form>';
                    }
                    echo  $message;
                 ?>
           
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Modal thông báo -->
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

    <!--================End Product Description Area =================-->