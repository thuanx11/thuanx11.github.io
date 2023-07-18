<?php
  include 'banner.php';
?>

    <!--================Tracking Box Area =================-->
    <section class="tracking_box_area section_gap">
        <div class="container">
            <div class="tracking_box_inner">
                <p>Nhập mã đơn hàng được gửi trong Email của bạn</p>
                <form class="row tracking_form" id="trackingForm">
                    <div class="col-md-12 form-group">
                        <input type="text" class="form-control" id="order" name="orderID" placeholder="Nhập mã đơn hàng">
                    </div>
                    <div class="col-md-12 form-group">
                        <button type="submit" value="submit" class="btn submit_btn">Tra cứu</button>
                    </div>
                </form>
            </div>
            <div id="trackingDetail"></div>
        </div>
      
    </section>
    <!--================End Tracking Box Area =================-->
