<?php
 get_header();
?>

<main class="main">
    <!-- breacrum -->
    <?php getBreadcrumb(); ?>
    <section class="srt">
      <div class="container">
        <div class="row">
            <div class="col-12 col-sm-8">
              <div class="srt__left">
                <div class="job-require">
                  <h4 class="job-require__tt">Chi tiết công việc</h4>
                  <div class="job-require__des">Nhân viên thới vụ bán sản phẩm</div>
                  <div class="job__list">
                    <div class="job__item">
                      <div class="job__item-icon">
                        <img src="<?php echo BASE_URL; ?>/assets/icons/Dollar-Minimalistic.png" alt="">
                      </div>
                      <div class="job__item-cnt">
                        <div class="tt">Mức lương</div>
                        <div class="des">30 - 40 triệu VNĐ</div>
                      </div>
                    </div>
                    <div class="job__item">
                      <div class="job__item-icon">
                        <img src="<?php echo BASE_URL; ?>/assets/icons/Dollar-Minimalistic.png" alt="">
                      </div>
                      <div class="job__item-cnt">
                        <div class="tt">Mức lương</div>
                        <div class="des">30 - 40 triệu VNĐ</div>
                      </div>
                    </div>
                    <div class="job__item">
                      <div class="job__item-icon">
                        <img src="<?php echo BASE_URL; ?>/assets/icons/Dollar-Minimalistic.png" alt="">
                      </div>
                      <div class="job__item-cnt">
                        <div class="tt">Mức lương</div>
                        <div class="des">30 - 40 triệu VNĐ</div>
                      </div>
                    </div>

                  </div>
                </div>
                <div class="job__detail">
                  <p>
                    <strong>Lĩnh vực:</strong> Thiết bị y tế thẩm mỹ công nghệ cao.<br>
                    <strong>Số lượng: </strong>05
                    bạn<br><br>
                    <strong>Mô tả công việc:<br></strong>– Giới thiệu, tư vấn và bán các sản phẩm máy móc thiết bị thẩm mỹ do
                    Công ty cung cấp đến khách hàng.<br>– Lên kế hoạch kinh doanh theo định hướng phát triển của Công ty.<br>– Khai
                    thác, tiếp cận và chăm sóc khách hàng tại khu vực phân công.<br>– Đề xuất các sản phẩm và chính sách kinh doanh phù
                    hợp với khách hàng.<br>– Đạt mục tiêu bán hàng tháng, quý, năm, tìm kiếm khách hàng mới và duy trì khách hàng
                    cũ.<br>– Đề xuất các sáng kiến cải thiện hoạt động kinh doanh.<br>– Phối hợp với kế toán thực hiện đốc thúc khách
                    hàng trả nợ công nợ theo quy định.<br> <br><strong>Yêu cầu:<br></strong>– Ưu tiên ứng viên đã từng làm NVKD, ưu tiên
                    các ngành thiết bị y tế, thiết bị thẩm mỹ, mỹ phẩm…<br>– Trình độ Trung cấp trở lên- Giao tiếp tốt, đam mê kinh
                    doanh, có thể đi công tác<br><br><strong>Quyền lợi:<br></strong>– Thu nhập: Từ 15 – 25tr/tháng (trong đó: lương cứng
                    từ 6-8tr/tháng; lương thành tích theo doanh số tháng; hoa hồng kinh doanh).<br>– Tham gia BHXH, lương tháng 13, du
                    lịch, khám sức khỏe…<br>– Có phương tiện của công ty khi đi chuyển giao công nghệ cho khách hàng.<br><br>Công ty
                    chuyên môn hóa từng bộ phận, môi trường làm việc thoải mái.<br><br><strong>Thời gian, địa điểm làm
                      việc:<br></strong>?Thời gian làm việc: Từ thứ 2 – Sáng T7<br>?Làm việc tại Tầng 09 Tòa Nhà 381 Đội Cấn, Ba Đình,
                    Hà Nội.<br><br><strong>Thông tin Liên hệ :<br>A&amp;T Medical</strong><br>Website: <a
                      href="https://atmedical.vn/">https://atmedical.vn/</a></p>
                </div>
                <a href="" class="back__page">
                  <span class="icon">
                    <img src="<?php echo BASE_URL; ?>/assets/icons/backto-tuyendung.png" alt="back icon">
                  </span>
                  <span class="txt">Quay lại danh sách tuyển dụng</span>
                </a>


              </div>
            </div>
            <div class="col-12 col-sm-4">
              <div class="srt__right">
                <div class="news__product-outs">
                    <h3 class="product__title">
                        Sản phẩm nổi bật
                    </h3>
                    <?php 
                    $tax_query[] = array(
                        'taxonomy' => 'product_visibility',
                        'field'    => 'name',
                        'terms'    => 'featured',
                        'operator' => 'IN', // or 'NOT IN' to exclude feature products
                    );
                    $args = array( 
                        'post_type' => 'product', 
                        'posts_per_page' => 10,
                        'tax_query' => $tax_query, 
                        'post_status' => 'publish'); 
                    ?>
                    <?php $getposts = new WP_query( $args);?>
                    <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                    <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                    <?php global $product; ?>
                    <a href="<?php the_permalink(); ?>" class="product__item">
                        <div class="product__img">
                            <img src='<?php echo get_the_post_thumbnail_url($post_id);?>' alt='<?php the_title(); ?>' />
                        </div>
                        <div class="product__name"><?php the_title(); ?>
                        </div>
                    </a>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
              </div>
            </div>
        </div>
      </div>
    </section>
</main>

<?php get_footer(); ?>