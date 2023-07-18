<?php
  include 'banner.php';
?>

    <!--================Checkout Area =================-->
    <section class="checkout_area section_gap">
      <div class="container">
        <div class="returning_customer">
           <?php
            if(!$_SESSION['acctiveAcount']){
              echo '<p>Đăng nhập để hoàn tất thanh toán <a href="index.php?link=login">Đăng nhập</a></p>';
            }
           ?>
        </div>
        <div class="cupon_area">
          <div class="check_title">
            <h2>
             Mã khuyến mãi
            </h2>
          </div>
          <input type="text" placeholder="Nhập mã khuyến mãi" />
          <a class="tp_btn" href="#">Thêm </a>
        </div>
        <div class="billing_details">
          <div class="row">
            <div class="col-lg-8">
              <h3>Thông tin của bạn</h3>
              <form>
                <div class="col-md-8 form-group">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Họ và tên"
                    value ="<?php echo $_SESSION['acctiveAcount']['fullname'] ?>"
                  />
                </div>
                <div class="col-md-8 form-group p_star">
                  <input
                    type="text"
                    class="form-control"
                    value ="<?php echo $_SESSION['acctiveAcount']['mobile'] ?>"
                    placeholder="Số điện thoại"
                  />
                </div>
                <div class="col-md-8 form-group p_star">
                  <input
                    type="text"
                    class="form-control"
                    value ="<?php echo $_SESSION['acctiveAcount']['email'] ?>"
                    placeholder="Địa chỉ Email"
                  />
                </div>
                <div class="col-md-8 form-group p_star">
                  <input
                    type="text"
                    class="form-control"
                    value ="<?php echo $_SESSION['acctiveAcount']['address'] ?>"
                    placeholder="Địa chỉ Email"
                  />
                </div>
              </form>
            </div>
            <div class="col-lg-4">
              <div class="order_box">
                <h2>Đơn hàng</h2>
                <ul class="list">
                  <li>
                    <a href="#"
                      >Sản phẩm
                      <span>Tổng</span>
                    </a>
                  </li>
                  <li>
                    <a href="#"
                      >Fresh Blackberry
                      <span class="middle">x 02</span>
                      <span class="last">$720.00</span>
                    </a>
                  </li>
                  <li>
                    <a href="#"
                      >Fresh Tomatoes
                      <span class="middle">x 02</span>
                      <span class="last">$720.00</span>
                    </a>
                  </li>
                  <li>
                    <a href="#"
                      >Fresh Brocoli
                      <span class="middle">x 02</span>
                      <span class="last">$720.00</span>
                    </a>
                  </li>
                </ul>
                <ul class="list list_2">
                  <li>
                    <a href="#"
                      >Tạm tính
                      <span>$2160.00</span>
                    </a>
                  </li>
                  <li>
                    <a href="#"
                      >Khuyến mãi
                      <span> -$50.00</span>
                    </a>
                  </li>
                  <li>
                    <a href="#"
                      >Tổng
                      <span>$2210.00</span>
                    </a>
                  </li>
                </ul>
                <div class="payment_item">
                </div>
                <a class="main_btn" href="#">Thanh toán</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Checkout Area =================-->