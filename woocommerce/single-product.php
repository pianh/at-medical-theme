<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woo.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

<main class="main">
    <!-- Breadcrumb -->
	<?php getBreadcrumb(); ?>
	<section class="product">
<?php
	 // Kiểm tra xem có phải là trang single-product của WooCommerce hay không
		if (function_exists('is_product') && is_product()) {
				$product = wc_get_product(get_the_ID());
				$image_ids = $product->get_gallery_image_ids();

		} else {
				echo 'Tải trang thất bại';
		}


    

?>



		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12 col-lg-9">
					<div class="product__left">
						<div class="product__left-slider">
							<!-- Main slider -->
							<div class="swiper productSlider product-slider">

								<div class="swiper-wrapper">
									<?php
										$product = wc_get_product(get_the_ID());
										$image_ids = $product->get_gallery_image_ids();

										foreach ($image_ids as $image_id) {
											$image_url = wp_get_attachment_url($image_id); ?>
											<div class="swiper-slide">
											<div class="product-slider__img">
												<img src="<?php echo $image_url; ?>" alt="">
											</div>
											</div>
									<?php } ?>
								</div>
							</div>
							<!-- Thumb -->
							<div thumbsSlider="" class="swiper productSliderThumb product-slider-thumb">
								<div class="swiper-wrapper">
									<?php
										$product = wc_get_product(get_the_ID());
										$image_ids = $product->get_gallery_image_ids();

										foreach ($image_ids as $image_thumb_id) {
											$image_url = wp_get_attachment_url($image_thumb_id); ?>
										<div class="swiper-slide">
											<div class="product-slider-thumb__img">
												<img src="<?php echo $image_url; ?>" alt="">
											</div>
										</div>										
									<?php } ?>
								</div>
								<div class="product__control swiper__control-custom">
									<div class="product-prev swiper__control-prev">
										<img src="<?php echo BASE_URL; ?>/assets/icons/chev-l.svg" alt="">
									</div>
									<div class="product-next swiper__control-next">
										<img src="<?php echo BASE_URL; ?>/assets/icons/chev-r.svg" alt="">
									</div>
								</div>
							</div>
						</div>
						<div class="product__left-info">
							<h1 class="product__tt">Máy triệt lông DIODE LASER AT-06</h1>
							<div class="product-review">
								<p class="number">5.0</p>
								<div class="evaluate">
									<div class="start-wr">
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
									</div>
									<div class="txt">1,010+ đánh giá</div>
								</div>
							</div>
							<div class="product-preliminary">
								<p class="title">Mô tả sơ bộ:</p>
								<p class="des"><?php the_excerpt(); ?></p>
							</div>
							<div class="product-guarantee">
								<p class="text">Bảo hành:</p>
								<p class="month">18 tháng</p>
							</div>
							<div class="product__bt-wr">
								<a href="tel:0964561306" class="btn-third product__btn btn__call">
									<span class="product__btn-if">
										<span class="icon">
											<img src="<?php echo BASE_URL; ?>/assets/icons/icon-phone.svg" alt="">
										</span>
										<span class="txt">0948 818 159</span>
									</span>
								</a>
								<button class="btn-primary product__btn btn__price popup-open" type="button" data-popup="popup-bk">
										<span class="product__btn-if">
												<span class="txt">Nhận báo giá</span>
										</span>
								</button>
							</div>
							<div class="product__social">
								<span class="txt">Chia sẻ: </span>
								<div class="social__list">
									<a href="#" class="social__icon">
										<img src="<?php echo BASE_URL; ?>/assets/icons/ic-fb.svg" alt="">
									</a>
									<a href="#" class="social__icon">
										<img src="<?php echo BASE_URL; ?>/assets/icons/ic-fb.svg" alt="">
									</a>
									<a href="#" class="social__icon">
										<img src="<?php echo BASE_URL; ?>/assets/icons/ic-fb.svg" alt="">
									</a>
								</div>
							</div>
						</div>

					</div>
				</div>
				<div class="col-12 col-sm-12 col-lg-3">
					<div class="product__right">
						<div class="product__right-list">
							<div class="product__right-item">
								<div class="img">
									<img src="<?php echo BASE_URL; ?>/assets/images/Medal.png" alt="">
								</div>
								<div class="cnt">
									<p class="name">CHÍNH HÃNG 100%</p>
									<p class="des">Cam kết sản phẩm nhập khẩu chính hãng đầy đủ giấy tờ xuất xứ</p>
								</div>
							</div>
							<div class="product__right-item">
								<div class="img">
									<img src="<?php echo BASE_URL; ?>/assets/images/Medal.png" alt="">
								</div>
								<div class="cnt">
									<p class="name">CHÍNH HÃNG 100%</p>
									<p class="des">Cam kết sản phẩm nhập khẩu chính hãng đầy đủ giấy tờ xuất xứ</p>
								</div>
							</div>
							<div class="product__right-item">
								<div class="img">
									<img src="<?php echo BASE_URL; ?>/assets/images/Medal.png" alt="">
								</div>
								<div class="cnt">
									<p class="name">CHÍNH HÃNG 100%</p>
									<p class="des">Cam kết sản phẩm nhập khẩu chính hãng đầy đủ giấy tờ xuất xứ</p>
								</div>
							</div>
							<div class="product__right-item">
								<div class="img">
									<img src="<?php echo BASE_URL; ?>/assets/images/Medal.png" alt="">
								</div>
								<div class="cnt">
									<p class="name">CHÍNH HÃNG 100%</p>
									<p class="des">Cam kết sản phẩm nhập khẩu chính hãng đầy đủ giấy tờ xuất xứ</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="product__bot">
						<div class="tabJS">
							<div class="product__tab">
								<button class="tabBtn product__tab-btn">Mô tả sản phẩm</button>
								<button class="tabBtn product__tab-btn">Thông số kỹ thuật</button>
								<button class="tabBtn product__tab-btn">Tab 3</button>
							</div>
							<div class="content product__cnt">
								<div class="tabPanel product__cnt-des">
									<div class="contentTab">
										<?php the_content() ?>
									</div>
								</div>
								<div class="tabPanel product__cnt-des">
									<div class="contenntTab">
										<div class="ts-table">
											<?php the_field('thong_so_ky_thuat') ?>
										</div>
									</div>
								</div>
								<div class="tabPanel product__cnt-des">Panel 3</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<section class="product-similar">
		<div class="container">
				<div class="product__main">
					<h2 class="product__main-tt">Sản phẩm tương tự</h2>
					<div class="card__list">
							<div class="productSimilarMain">
								<div class="swiper-wrapper">
									<?php 
												$tax_query[] = array(
													'taxonomy' => 'product_visibility',
													'field'    => 'name',
												);
												$args = array( 
													'post_type' => 'product', 
													'posts_per_page' => 10,
													'tax_query' => $tax_query, 
													'post_status' => 'publish'
												); 
										?>
										<?php $getposts = new WP_query( $args);?>
										<?php global $wp_query; $wp_query->in_the_loop = true; ?>
										<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
										<?php global $product; ?>
											<div class="swiper-slide">
												<div class="product-list__item card__item">
													<div class="card__item-img">
														<a href="#">
															<img src="<?php echo BASE_URL; ?>/assets/images/product2.png" alt="item">
														</a>
													</div>
													<div class="card__item-info">
														<h4>
															<a href="#" class="card-title">Trường phòng nghiên cứu thị trường mới</a>
														</h4>
														<div class="rate">
															<div class="rate__start">
																<div class="rate__start-list">
																	<i class="fa-solid fa-star"></i>
																	<i class="fa-solid fa-star"></i>
																	<i class="fa-solid fa-star"></i>
																	<i class="fa-solid fa-star"></i>
																	<i class="fa-solid fa-star"></i>
																</div>
															</div>
															<div class="rate__txt">(1,010+ đánh giá)</div>
														</div>
														<p class="card-des">Lĩnh vực: Thiết bị y tế thẩm mỹ công nghệ cao.Số lượng: 05 bạn
															Mô tả công việc kinh doanh</p>
														<a href="#" class="card-btn btn-primary">
															<span class="text">Liên hệ tư vấn</span>
														</a>
													</div>
												</div>
											</div>
									<?php endwhile; wp_reset_postdata(); ?>
								</div>
							</div>
							<div class="product-similar-ctl">
								<div class="swiper-pagination product-similar-pagination"></div>
							</div>
					</div>
				</div>
		</div>
	</section>
	<section class="booking">
        <div class="about__booking">
            <div class="about__booking-bg">
                <img src="<?php echo BASE_URL; ?>/assets/images/book-bg.png" alt="bn">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-5">
                        <div class="booking__left">
                            <div class="booking__left-img"><img src="<?php echo BASE_URL; ?>/assets/images/model2.png" alt="model"></div>
                            <div class="evaluate__wrapper">
                                <div class="evaluate__num">5.0</div>
                                <div class="evaluate__box">
                                    <div class="start__list">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <div class="start__text">1,000+ đánh giá</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-7">
                        <div class="booking__right">
                            <div class="title">Booking now</div>
                            <div class="booking__form form__list">
                                <div class="list__item">
                                    <div class="list__item-text">Họ và tên <span class="asterisk">*</span></div>
                                    <input class="list__item-input"></input>
                                </div>
                                <div class="list__item">
                                    <div class="list__item-text">Email <span class="asterisk">*</span></div>
                                    <input class="list__item-input"></input>
                                </div>
                                <div class="list__item">
                                    <div class="list__item-text">Số điện thoại <span class="asterisk">*</span></div>
                                    <input class="list__item-input"></input>
                                </div>
                                <div class="list__item">
                                    <div class="list__item-text">Khu vực <span class="asterisk">*</span></div>
                                    <input class="list__item-input"></input>
                                </div>
                                <div class="list__item">
                                    <div class="list__item-text">Nội dung cần tư vấn <span class="asterisk">*</span></div>
                                    <textarea id="my-textarea" class="list__item-input" name="" rows="3" cols="63"></textarea>
                                    </textarea>
                                </div>
                                <div class="list__item">
                                    <button  type="button" class="booking__btn btn-secondary">
                                        <span class="icon">
                                            <i class="fa-solid fa-paper-plane"></i>
                                        </span>
                                        <span class="text">Gửi thông tin</span>
                                    </button>
                                    <!-- <button type="button" class="booking__btn">
                                        <span class="icon">
                                            <i class="fa-solid fa-paper-plane"></i>
                                        </span>
                                        <span>Gửi thông tin</span>
                                    </button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<!-- POPUP BK -->
	<div class="popup-booking">
		<div class="popup popup-overlay" data-popup-id="popup-bk"></div>

		<div class="popup" data-popup-id="popup-bk">
				<div class="popup-content">
					<div class="icon-close popup-close">
						<i class="fa-regular fa-xmark"></i>
					</div>
					<div class="row">
						<div class="col-12 col-lg-3">
							<div class="modal">
								<img src="<?php echo BASE_URL; ?>/assets/images/model2.png" alt="">
							</div>
						</div>
						<div class="col-12 col-lg-9">
							<div class="tt">Booking form</div>
							<div class="box">
								<p class="sub">
										Vui lòng điền thông tin bên dưới để nhận báo giá
								</p>
								<div class="form__contact form__list">
									<div class="list__item">
										<div class="list__item-text">Họ và tên <span class="asterisk">*</span></div>
										<input class="list__item-input"></input>
									</div>
									<div class="list__item">
										<div class="list__item-text">Email <span class="asterisk">*</span></div>
										<input class="list__item-input"></input>
									</div>
									<div class="list__item">
										<div class="list__item-text">Số điện thoại <span class="asterisk">*</span></div>
										<input class="list__item-input"></input>
									</div>
									<div class="list__item">
										<div class="list__item-text">Khu vực <span class="asterisk">*</span></div>
										<input class="list__item-input"></input>
									</div>
									<div class="list__item">
										<div class="list__item-text">Nội dung cần tư vấn <span class="asterisk">*</span>
										</div>
										<textarea id="my-textarea" class="list__item-input" name="" rows="3" cols="63"></textarea>
										</textarea>
									</div>
									<div class="list__item">
										<button type="button" class="btn-four">
											<span class="txt">Gửi thông tin</span>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
		</div>
	</div>


</main>

<?php
get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
