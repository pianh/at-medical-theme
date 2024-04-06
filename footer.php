    <footer class="footer">
      <div class="container">
        <div class="footer__wrapper">
          <div class="row">
            <div class="footer__item col-3 col-md-4">
              <h5>Liên hệ với chúng tôi</h5>
              <ul class="footer__list-left">
                <li>
                  <span class="icon">
                    <img src="https://atmedical.vn/wp-content/uploads/2023/10/ic-pin.svg" class="attachment-thumbnail size-thumbnail" alt="" decoding="async" loading="lazy">
                  </span>
                  <span class="text"><?php the_field('address','option') ?></span>
                </li>
                <li>
                  <span class="icon">
                    <img src="https://atmedical.vn/wp-content/uploads/2023/10/ic-ph.svg" class="attachment-thumbnail size-thumbnail" alt="" decoding="async" loading="lazy">
                  </span>
                  <a href="tel:0948818159" class="text">
                      <?php the_field('phone-number', 'option') ?>
                  </a>
                </li>
                <li>
                  <span class="icon">
                    <img src="https://atmedical.vn/wp-content/uploads/2023/10/ic-mail.svg" class="attachment-thumbnail size-thumbnail" alt="" decoding="async" loading="lazy">
                  </span>
                  <a href="mailto:atmedical242@gmail.com" class="text">
                      <?php the_field('email', 'option') ?>
                  </a>
                </li>
              </ul>
              <ul class="footer__ifr">
                <?php the_field('fan-page', 'option') ?>
              </ul>
            </div>
            <div class="footer__item col-6 col-md-4">
              <div class="footer__center">
                <div class="footer__center-logo">
                  <a href="" class="logo-custom-link">
                    <img src="<?php echo BASE_URL; ?>/assets/images/LOGO-FT.png" alt="footer logo" />
                    </a>
                </div>
                <p>
                  Công ty TNHH A&T Medical là đơn vị cung cấp các thiết bị Spa, thiết bị thẩm mỹ chính hãng. Qua nhiều năm hoạt động và phát triển cùng các quý khách hàng, A&T Medical tự hào là đơn vị uy tín, chất lượng, vận chuyển nhanh chóng
                </p>
                <div class="footer__center-social">
                  <a href="https://www.facebook.com/atmedical159.vn/" target="_blank" class="social-link">
                    <img src="https://atmedical.vn/wp-content/uploads/2023/10/ic-fb.svg" class="attachment-thumbnail size-thumbnail" alt="" decoding="async" loading="lazy">
                  </a>
                    <a href="https://www.youtube.com/@atmedical" target="_blank" class="social-link">
                    <img src="https://atmedical.vn/wp-content/uploads/2023/10/ic-yt.svg" class="attachment-thumbnail size-thumbnail" alt="" decoding="async" loading="lazy">                                        
                  </a>
                </div>
              </div>

            </div>
            <div class="footer__item col-3 col-md-4">
              <h5>Về chúng tôi</h5>
              <!-- <ul class="footer__list-right">
                <li>Về chúng tôi</li>
                <li>Sản phẩm</li>
                <li>Tuyển dụng</li>
                <li>Liên hệ</li>
                <li>Chính sách</li>
              </ul> -->
              <?php 
                wp_nav_menu( 
                    array( 
                        'theme_location' => 'main_nav', 
                        'container' => 'false', 
                        'menu_id' => 'main-nav',
                        'depth' => -1,
                        'menu_class' => 'footer__list-right'),
                ); 
              ?>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <?php wp_footer() ?>
    <script type="module" src="<?php echo  BASE_URL; ?>/js/main.js"></script>
</body>
</html>