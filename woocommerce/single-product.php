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
    <div class="breadcrumb">
        <div class="container">
            <ul class="breadcrumb__list">
                <li class="breadcrumb__item">
                    <a href="#" class="breadcrumb__item-link">Home</a>
                </li>
                <li class="breadcrumb__item">
                    <a href="#" class="breadcrumb__item-link">Sản phẩm</a>
                </li>
								<li class="breadcrumb__item">
                    <a href="#" class="breadcrumb__item-link">Máy triệt lông</a>
                </li>
            </ul>
        </div>
    </div>
	<section class="product">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12 col-lg-9">
					<div class="product__left">
						<div class="product__left-slider">
							<!-- Main slider -->
							<div class="swiper productSlider product-slider">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<div class="product-slider__img">
											<img src="<?php echo BASE_URL; ?>/assets/images/product1.png" alt="">
										</div>
									</div>
									<div class="swiper-slide">
										<div class="product-slider__img">
											<img src="<?php echo BASE_URL; ?>/assets/images/product2.png" alt="">
										</div>
									</div>
									<div class="swiper-slide">
										<div class="product-slider-thumb__img">
											<img src="<?php echo BASE_URL; ?>/assets/images/product1.png" alt="">
										</div>
									</div>
								</div>
							</div>
							<!-- Thumb -->
							<div thumbsSlider="" class="swiper productSliderThumb product-slider-thumb">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<div class="product-slider-thumb__img">
											<img src="<?php echo BASE_URL; ?>/assets/images/product1.png" alt="">
										</div>
									</div>
									<div class="swiper-slide">
										<div class="product-slider-thumb__img">
											<img src="<?php echo BASE_URL; ?>/assets/images/product2.png" alt="">
										</div>
									</div>
									<div class="swiper-slide">
										<div class="product-slider-thumb__img">
											<img src="<?php echo BASE_URL; ?>/assets/images/product1.png" alt="">
										</div>
									</div>
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
								<p class="des">
									✅ Máy triệt lông Diode Laser AT-06 được mệnh danh là Nữ hoàng triệt lông với khả năng triệt lông ưu việt. <br>
									<br>
									✅ Chiếc máy này có thể triệt lông vĩnh viễn và hiệu quả trong thời gian rất ngắn. <br>
									<br>
									✅Triệt lông an toàn, không gây bỏng và không phân biệt giới tính. <br>
									<br>
									Sản phẩm được nhập khẩu nguyên chiếc với chất lượng đỉnh cao cả về “ngoại hình”, “nội thất” và công nghệ. </p>
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
										<div class="mona-content">
											<p><em>Máy triệt lông </em><strong><em>Diode Laser AT-06</em></strong><em> được mệnh danh là Nữ hoàng
													triệt lông với khả năng triệt lông ưu việt. Máy này có thể triệt lông vĩnh viễn và hiệu quả trong
													thời gian rất ngắn. </em></p>

											<p><em>Triệt lông an toàn, không gây bỏng và không phân biệt giới tính. Sản phẩm được nhập khẩu nguyên
													chiếc với chất lượng đỉnh cao cả về “ngoại hình”, “nội thất” và công nghệ.&nbsp;</em></p>

											<figure
												class="wp-block-embed is-type-video is-provider-youtube wp-block-embed-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio">
												<div class="wp-block-embed__wrapper">
													<iframe loading="lazy" title="HDSD MÁY TRIỆT LÔNG AT06 - A&amp;T MEDICAL" width="500" height="281"
														src="https://www.youtube.com/embed/plzvhJaePXQ?feature=oembed" frameborder="0"
														allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
														allowfullscreen=""></iframe>
												</div>
											</figure>

											<h2 class="wp-block-heading has-text-align-center"><strong>GIỚI THIỆU MÁY TRIỆT LÔNG DIODE LASER AT –
													06</strong></h2>

											<figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="878"
													src="https://atmedical.vn/wp-content/uploads/2024/01/1-7-1024x878.png" alt="" class="wp-image-1520"
													srcset="https://atmedical.vn/wp-content/uploads/2024/01/1-7-1024x878.png 1024w, https://atmedical.vn/wp-content/uploads/2024/01/1-7-300x257.png 300w, https://atmedical.vn/wp-content/uploads/2024/01/1-7-768x659.png 768w, https://atmedical.vn/wp-content/uploads/2024/01/1-7-1536x1317.png 1536w, https://atmedical.vn/wp-content/uploads/2024/01/1-7-921x790.png 921w, https://atmedical.vn/wp-content/uploads/2024/01/1-7-400x343.png 400w, https://atmedical.vn/wp-content/uploads/2024/01/1-7-600x515.png 600w, https://atmedical.vn/wp-content/uploads/2024/01/1-7-466x400.png 466w, https://atmedical.vn/wp-content/uploads/2024/01/1-7.png 1989w"
													sizes="(max-width: 1024px) 100vw, 1024px"></figure>

											<p>Máy triệt lông <strong>Diode Laser AT-06</strong> sử dụng các tia Laser đặc biệt có độ rộng xung dài
												808nm để xuyên qua nang lông. Sử dụng khả năng hấp thụ ánh sáng có chọn lọc, ánh sáng laser được hấp
												thụ tốt hơn bằng cách làm nóng tóc và nang tóc. </p>

											<p>Điều này phá hủy nang lông một cách hiệu quả và cắt đứt dòng oxy xung quanh nang lông. Hệ thống sử
												dụng công nghệ đặc biệt để làm mát và bảo vệ da khỏi bị tổn thương do tia laser chiếu vào, mang lại
												kết quả điều trị rất an toàn và thoải mái.</p>

											<h3 class="wp-block-heading"><strong>ƯU ĐIỂM MÁY TRIỆT LÔNG DIODE LASER AT-0</strong>6</h3>

											<h4 class="wp-block-heading"><strong>Thiết kế giao diện cá nhân hóa người dùng</strong></h4>

											<ul>
												<li>Với hệ thống thông minh, Diode Laser AT-06 có đến 12 loại da để chọn lựa bên cạnh đó còn có độ
													cứng và màu sắc của sợi lông. Nhờ đó mà việc điều trị trở nên hiệu quả hơn.</li>
											</ul>

											<figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="626"
													src="https://atmedical.vn/wp-content/uploads/2024/01/2-5-1024x626.png" alt="" class="wp-image-1489"
													srcset="https://atmedical.vn/wp-content/uploads/2024/01/2-5-1024x626.png 1024w, https://atmedical.vn/wp-content/uploads/2024/01/2-5-300x183.png 300w, https://atmedical.vn/wp-content/uploads/2024/01/2-5-768x469.png 768w, https://atmedical.vn/wp-content/uploads/2024/01/2-5-1536x939.png 1536w, https://atmedical.vn/wp-content/uploads/2024/01/2-5-2048x1251.png 2048w, https://atmedical.vn/wp-content/uploads/2024/01/2-5-1293x790.png 1293w, https://atmedical.vn/wp-content/uploads/2024/01/2-5-400x244.png 400w, https://atmedical.vn/wp-content/uploads/2024/01/2-5-600x367.png 600w"
													sizes="(max-width: 1024px) 100vw, 1024px"></figure>

											<h4 class="wp-block-heading"><strong>Nâng cấp lên đến 3 bước sóng</strong></h4>

											<p>Thiết bị laser diode là công nghệ mới nhất với 3 bước sóng laser: <em>Alexandrite 755nm, Diode 808nm,
													và Nd:YAG 1064nm</em>.</p>

											<figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="986" height="1024"
													src="https://atmedical.vn/wp-content/uploads/2024/01/3-7-986x1024.png" alt="" class="wp-image-1515"
													srcset="https://atmedical.vn/wp-content/uploads/2024/01/3-7-986x1024.png 986w, https://atmedical.vn/wp-content/uploads/2024/01/3-7-289x300.png 289w, https://atmedical.vn/wp-content/uploads/2024/01/3-7-768x798.png 768w, https://atmedical.vn/wp-content/uploads/2024/01/3-7-1478x1536.png 1478w, https://atmedical.vn/wp-content/uploads/2024/01/3-7-760x790.png 760w, https://atmedical.vn/wp-content/uploads/2024/01/3-7-400x416.png 400w, https://atmedical.vn/wp-content/uploads/2024/01/3-7-577x600.png 577w, https://atmedical.vn/wp-content/uploads/2024/01/3-7-385x400.png 385w, https://atmedical.vn/wp-content/uploads/2024/01/3-7.png 1971w"
													sizes="(max-width: 986px) 100vw, 986px"></figure>

											<ul>
												<li><strong>Laser Alex 755nm</strong> được khuyên dùng để điều trị lông mỏng và có màu sáng, với khả
													năng đi xuyên bề mặt nhiều hơn, nó nhắm vào phần phồng của nang lông và đặc biệt hiệu quả đối với
													những sợi lông bám bề ngoài ở một số khu vực như lông mày.</li>
											</ul>

											<ul>
												<li><strong>Laser Diode 808nm</strong> có khả năng xuyên sâu cho phép điều trị nhiều loại lông nhất.
													Nó tập trung vào chỗ phình ra của nang lông trong khi khả năng thâm nhập vào độ sâu mô vừa phải
													khiến nó trở nên lý tưởng để điều trị cánh tay, chân. </li>
											</ul>

											<ul>
												<li><strong>Laser YAG có bước sóng 1064nm</strong>, tập trung điều trị vùng da sẫm màu. Nó có thể thâm
													nhập vào lớp lông sâu hơn trong da và có khả năng hấp thụ nước tốt hơn, tạo ra nhiệt độ cao hơn, làm
													tăng độ đặc. Xử lý nhiệt để tẩy lông hiệu quả hơn.</li>
											</ul>

											<h4 class="wp-block-heading"><strong>Các tính năng độc đáo khác</strong></h4>

											<figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="860" height="1024"
													src="https://atmedical.vn/wp-content/uploads/2024/01/4-3-860x1024.png" alt="" class="wp-image-1517"
													srcset="https://atmedical.vn/wp-content/uploads/2024/01/4-3-860x1024.png 860w, https://atmedical.vn/wp-content/uploads/2024/01/4-3-252x300.png 252w, https://atmedical.vn/wp-content/uploads/2024/01/4-3-768x914.png 768w, https://atmedical.vn/wp-content/uploads/2024/01/4-3-1290x1536.png 1290w, https://atmedical.vn/wp-content/uploads/2024/01/4-3-664x790.png 664w, https://atmedical.vn/wp-content/uploads/2024/01/4-3-400x476.png 400w, https://atmedical.vn/wp-content/uploads/2024/01/4-3-504x600.png 504w, https://atmedical.vn/wp-content/uploads/2024/01/4-3-336x400.png 336w, https://atmedical.vn/wp-content/uploads/2024/01/4-3.png 1413w"
													sizes="(max-width: 860px) 100vw, 860px"></figure>

											<ul>
												<li>Được trang bị đầu điều trị có thể di chuyển để đáp ứng nhu cầu của các bộ phận khác nhau trên cơ
													thể, thực hiện điều trị chính xác cho vùng đó.</li>
											</ul>

											<ul>
												<li>10 thanh laser chất lượng cao nhập khẩu từ <em>“USA-COHERENT”</em>.</li>
											</ul>

											<ul>
												<li>Máy phát laser có thời gian phục vụ lâu dài.</li>
											</ul>

											<ul>
												<li>Hệ thống làm mát: Chất bán dẫn + gió + ống thoát nước Microchannels + Sapphire + TEC, đảm bảo
													không đau và triệt lông vĩnh viễn.</li>
											</ul>

											<h3 class="wp-block-heading">MUA MÁY TRIỆT LÔNG DIODE LASER AT-06 Ở ĐÂU TỐT?</h3>

											<p><strong>Máy triệt lông Diode Laser AT-06</strong> được nhiều chủ Spa tin dùng lựa chọn, mang lại hiệu
												quả kinh tế cao đối với các Spa chuyên triệt lông. Nhờ có lợi thế về công suất và chất lượng máy có
												thể là việc liên tục 12h/ngày, số shot cao hơn gấp nhiều lần các loại máy triệt lông khác.</p>

											<p><strong>A&amp;T Medical</strong> là công ty phân phối máy triệt lông Diode Laser AT-06 chính hãng đã
												qua kiểm định. Bên cạnh đó là chế độ bảo hành đầy đủ cũng như chăm sóc khách hàng tận tâm nhất.</p>

											<p>Để tìm hiểu kỹ hơn về dòng máy thẩm mỹ công nghệ triệt lông Diode Laser AT-06. </p>

											<p><span style="text-decoration: underline;">Quý khách có thể đến xem máy trực tiếp tại:</span></p>

											<ul>
												<li>Chi nhánh 1: Số 985/19 Âu Cơ, P. Tân Sơn Nhì, Q. Tân Phú, TP. HCM.</li>

												<li>Chi nhánh 2: Số 2 , Đường Nguyễn Minh Quang , P. An Khánh , Q. Ninh Kiều , TP. Cần Thơ.</li>
											</ul>

											<p>Mọi thắc mắc, khách hàng vui lòng liên hệ trực tiếp qua Fanpage hoặc gọi số Hotline&nbsp;<strong>0948
													818 159</strong>&nbsp;để được chuyên viên&nbsp;<strong>A&amp;T MEDICAL</strong>&nbsp;hỗ trợ nhanh
												nhất.</p>
										</div>
									</div>
								</div>
								<div class="tabPanel product__cnt-des">
									<div class="contenntTab">
										<div class="ts-table">
											<table>
												<tbody>
													<tr>
														<td>
															Model </td>
														<td>
															Máy triệt Diode Laser AT- Pro Plus </td>
													</tr>
													<tr>
														<td>
															Công suất </td>
														<td>
															3000W </td>
													</tr>
													<tr>
														<td>
															Màn hình máy </td>
														<td>
															12.1 inch </td>
													</tr>
													<tr>
														<td>
															Màn hình tay cầm </td>
														<td>
															1.54 inch </td>
													</tr>
													<tr>
														<td>
															Mật độ năng lượng </td>
														<td>
															1-120J/cm2 (Độ lệch ≤ ±2) </td>
													</tr>
													<tr>
														<td>
															Độ rộng xung </td>
														<td>
															1-200ms </td>
													</tr>
													<tr>
														<td>
															Hệ thống làm mát </td>
														<td>
															Hệ thống làm mát TEC (hệ thống làm lạnh bằng điện) </td>
													</tr>
													<tr>
														<td>
															Khối lượng tịnh </td>
														<td>
															57kg </td>
													</tr>
													<tr>
														<td>
															Kích thước </td>
														<td>
															470*500* 1330mm </td>
													</tr>
													<tr>
														<td>
															Kích thước gói </td>
														<td>
															530*492*1120mm </td>
													</tr>
													<tr>
														<td>
															Đặc điểm kỹ thuật cầu chì </td>
														<td>
															Ø5×25 10A </td>
													</tr>
													<tr>
														<td>
															Hiệu điện thế </td>
														<td>
															AC220V±10% 10A 50HZ , 110v±10% 10A 60HZ </td>
													</tr>
												</tbody>
											</table>
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
