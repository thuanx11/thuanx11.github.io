<?php
  $linkMapping = [
    'product' => 'Bộ sưu tập',
    'detail' => 'Chi tiết sản phẩm',
    'cart' => 'Giỏ hàng',
    'checkout' => 'Thanh toán',
    'tracking' => 'Tra cứu đơn hàng',
    'user' => 'Thông tin khách hàng'
  ];
  $currentLink = $linkMapping[$_GET['link']] ?? '';
?>
<section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="container">
          <div class="banner_content d-md-flex justify-content-between align-items-center">
            <div class="mb-3 mb-md-0">
              <h2><?php echo $currentLink; ?></h2>
            </div>
          </div>
        </div>
      </div>
    </section>