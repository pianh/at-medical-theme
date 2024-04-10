<?php
/* Template Name: Template Xác nhận đặt hàng */
 get_header();
?>

<main class="main" style="height: 70vh;">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="confirm__tp" style="margin-top:50px;">
            <h1 class="fs-3">Xác nhận đặt hàng</h1>
            <div class="the_content">
              <p>Xin cảm ơn quý khách đã đặt hàng thành công. Chúng tôi sẽ liên hệ quý khách sớm nhất có thể, trân trọng
                cảm ơn.</p>
              <a href="<?php echo home_url('/'); ?>" class="back__page">
                  <span class="icon">
                    <img src="<?php echo BASE_URL; ?>/assets/icons/backto-tuyendung.png" alt="back icon">
                  </span>
                  <span class="txt">Quay lại trang chủ</span>
                </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
</main>

<?php get_footer(); ?>

