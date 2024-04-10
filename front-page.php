<?php get_header(); ?>
<main class="main">
    <section class="home-hero">
        <?php 
            $slide_show = get_field('slide_show', 'option')
        ?>
        <div class="home-hero__bg">
            <div class="swiper mySwiperBg swiper__bg">
                <div class="swiper-wrapper">
                    <?php foreach ($slide_show as $key => $slide_bg) { ?>
                    <div class="swiper-slide">
                        <div class="home-hero__bg-img">
                            <img src="<?php echo  $slide_bg['slide_show_image'] ?>" alt="<?php echo $slide_bg['slide_show_product'] ?>">
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <!-- <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div> -->
            </div>

            <div class="swiper__box-container container">
                <div class="row swiper__row">
                    <div class="col-12 col-sm-6">
                        <div class="swiper mySwiperBox swiper__box">
                            <div class="swiper-wrapper">
                                <?php foreach ($slide_show as $key => $slide_box) { ?>
                                    <div class="swiper-slide">
                                        <div class="home-hero__box">
                                            <a href="#" class="title"><?php echo $slide_box['slide_show_product'] ?></a>
                                            <a href="#" class="btn-box">
                                                <span class="txt">Chi tiết</span>
                                                <span class="icon"><i class="fa-solid fa-caret-right"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
              
        </div>
        <!-- Thumb -->

        <div class="container">
            <div thumbsSlider="" class="swiper swiperHeroThumb home-hero__thumb">
                <div class="swiper-wrapper pointer mt-1">
                    <?php foreach ($slide_show as $key => $slide_tab) { ?>
                        <div class="swiper-slide">
                            <div class="hero__tab">
                                <?php echo $slide_tab['slide_show_product'] ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        
    </section>
    <section class="home-intro">
        <div class="container">
            <div class="home-intro__head">
                <h3 class="section__subtitle">01 <span class="line">-</span> VỀ A&T MEDICAL</h3>
                <h2 class="section__title">Giới thiệu chung</h2>
                <p class="section__des">Công ty TNHH A&T Medical là đơn vị cung cấp các thiết bị Spa, thiết bị thẩm mỹ
                    chính hãng. Qua nhiều năm hoạt động và phát triển cùng các quý khách hàng, A&T Medical tự hào là đơn
                    vị uy tín, chất lượng, vận chuyển nhanh chóng nhất.</p>
            </div>
        </div>
        <div class="home-intro-coverflow">
            <?php $general_introduction = get_field('general-introduction', 'option') ?>
            <div class="home-coverflow homeCoverFlow">
                <div class="swiper-wrapper">
                    <?php foreach ($general_introduction as $key => $general_introduction) { ?>
                        <div class="swiper-slide">
                            <div class="home-intro__slide">
                                <img src="<?php echo $general_introduction['image'] ?>" />
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <section class="home-choose">
        <?php $at_medical_have = get_field('at_medical-have','option') ?>
        <div class="container">
            <div class="home-choose__head">
                <div class="title__wrapper">
                    <h3 class="section__subtitle">
                        <span class="num">02</span> <span class="line">-</span>
                        <span class="text">A&T MEDICAL CÓ GÌ ?</span></h3>
                    <h2 class="section__title">Vì sao chọn chúng tôi</h2>
                </div>
                <p class="section__des">
                    Công ty TNHH A&T Medical là đơn vị cung cấp các thiết bị Spa, thiết bị thẩm mỹ chính hãng. Qua nhiều
                    năm hoạt động và phát triển cùng các quý khách hàng, A&T Medical tự hào là đơn vị uy tín, chất
                    lượng, vận chuyển nhanh chóng nhất.
                </p>
            </div>
        </div>
        <!-- Vì sao chọn chúng tôi -->
        <div class="home-choose-content">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-5">
                    <div class="home-choose__left">
                        <div class="swiper homeChoose">
                            <div class="swiper-wrapper">
                                <?php foreach ($at_medical_have as $key => $at_medical_circle) { ?>
                                    <div class="swiper-slide">
                                        <div class="circle">
                                            <div class="circle__bg">
                                                <span class="txt"><?php echo $at_medical_circle['title'] ?></span>
                                            </div>
                                            <div class="circle__img">
                                                <img src="<?php echo $at_medical_circle['image'] ?>" alt="<?php echo $at_medical_circle['title'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>

                            </div>
                        </div>
                        <div class="home-choose__ctrl">
                            <div class="home-choose-prev">
                                <img src="<?php echo BASE_URL; ?>/assets/icons/chev-u.svg" alt="">
                            </div>
                            <div class="line"></div>
                            <div class="home-choose-next">
                                <img src="<?php echo BASE_URL; ?>/assets/icons/chev-d.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-7">
                    <div class="home-choose__right">
                        <div class="swiper homeChooseThumb">
                            <div class="swiper-wrapper">
                                <?php foreach ($at_medical_have as $key => $at_medical_have) { ?>
                                    <div class="swiper-slide">
                                        <h3 class="title"><?php echo $at_medical_have['title'] ?></h3>
                                        <p class="des"><?php echo $at_medical_have['subtitle'] ?></p>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Năm kinh nghiệm -->
        <div class="home-count">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-4">
                        <div class="home-count__left">
                            <span class="num">10</span>
                            <span class="text">
                                Năm kinh nghiệm
                            </span>
                        </div>
                    </div>
                    <div class="col-12 col-sm-7 offset-md-1">
                        <div class="home-count__right">
                            <div class="count__grid">
                                <div class="count__item">
                                    <div class="num__wrap">
                                        <p class="num">500</p>
                                        <p class="plust">+</p>
                                    </div>
                                    <p class="text">Sản phẩm</p>
                                </div>
                                <div class="count__item">
                                    <div class="num__wrap">
                                        <p class="num">50</p>
                                        <p class="plust">+</p>
                                    </div>
                                    <p class="text">Nhân sự</p>
                                </div>
                                <div class="count__item">
                                    <div class="num__wrap">
                                        <p class="num">5k</p>
                                        <p class="plust">+</p>
                                    </div>
                                    <p class="text">Khách hàng</p>
                                </div>
                                <div class="count__item">
                                    <div class="num__wrap">
                                        <p class="num">500</p>
                                        <p class="plust">+</p>
                                    </div>
                                    <p class="text">Đối tác</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="home-outs">
        <div class="home-outs__left">
            <div class="swiper home-outs__thumb homeOutsThumb">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="home-outs__left-img">
                            <img src="<?php echo BASE_URL; ?>/assets/images/homeprod-1.png" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="home-outs__left-img">
                            <img src="<?php echo BASE_URL; ?>/assets/images/homeprod-2.png" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="home-outs__left-img">
                            <img src="<?php echo BASE_URL; ?>/assets/images/homeprod-1.png" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="home-outs__left-img">
                            <img src="<?php echo BASE_URL; ?>/assets/images/homeprod-2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="home-outs__right">
            <div class="outs__head">
                <div class="outs__head-tt">
                    <h3 class="section__subtitle">03 <span class="line">-</span> A&T MEDICAL CHUYÊN CUNG CẤP</h3>
                    <h2 class="section__title">Sản phẩm nổi bật</h2>
                    <p class="section__des">Công ty TNHH A&T Medical là đơn vị cung cấp các thiết bị Spa, thiết bị thẩm mỹ
                        chính hãng. Qua nhiều năm hoạt động và phát triển cùng các quý khách hàng, A&T Medical tự hào</p>
                </div>
                <div class="outs__control swiper__control-custom">
                    <div class="home-outs-prev swiper__control-prev">
                        <img src="<?php echo BASE_URL; ?>/assets/icons/chev-l.svg" alt="">
                    </div>
                    <div class="home-outs-next swiper__control-next">
                        <img src="<?php echo BASE_URL; ?>/assets/icons/chev-r.svg" alt="">
                    </div>
                </div>
                <div class="outs__progress">
                    <div class="progress-line"></div>
                </div>
            </div>

            <div class="outs__bottom outs__cnt">
                <div class="swiper home__out homeOuts">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="row">
                                <div class="outs__cnt-left">
                                    <h4 class="sub">Trị sẹo - trẻ hóa da</h4>
                                    <h3 class="tt">Máy LASER FRACTIONAL CO2 F100</h3>
                                    <p class="des">✅ Để giải quyết những vấn đề này, công nghệ trẻ hóa da và điều
                                        trị sẹo rỗ ngày càng được ứng dụng phổ biến. Trong số đó, máy laser
                                        Fractional CO2 F100 đã thể hiện sự đột phá và hiệu quả vượt trội trong lĩnh
                                        vực này.</p>
                                    <a href="#" class="btn-secondary">
                                        <span class="text">Xem sản phẩm</span>
                                        <span class="icon">
                                            <img src="<?php echo BASE_URL; ?>/assets/icons/chev-r.svg" alt="">
                                        </span>
                                    </a>
                                </div>
                                <div class="outs__cnt-right">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row">
                                <div class="outs__cnt-left">
                                    <h4 class="sub">Trị sẹo - trẻ hóa da 2</h4>
                                    <h3 class="tt">Máy LASER FRACTIONAL CO2 F100</h3>
                                    <p class="des">✅ Để giải quyết những vấn đề này, công nghệ trẻ hóa da và điều
                                        trị sẹo rỗ ngày càng được ứng dụng phổ biến. Trong số đó, máy laser
                                        Fractional CO2 F100 đã thể hiện sự đột phá và hiệu quả vượt trội trong lĩnh
                                        vực này.</p>
                                    <a href="#" class="btn-secondary">
                                        <span class="text">Xem sản phẩm</span>
                                        <span class="icon">
                                            <img src="<?php echo BASE_URL; ?>/assets/icons/chev-r.svg" alt="">
                                        </span>
                                    </a>
                                </div>
                                <div class="outs__cnt-right">
                                    <div class="video-atmedia">
                                        <a href="" class="video_play">
                                            <img src="<?php echo BASE_URL; ?>/assets/images/ic-play.png" alt="">
                                        </a>
                                        <div class="video-img">
                                            <img src="<?php echo BASE_URL; ?>/assets/images/homeprodvid.jpg" alt="">
                                        </div>
                                        <div class="video-des">
                                            <span class="icon-logo">
                                            <img src="<?php echo BASE_URL; ?>/assets/images/logo-2.png" alt="">
                                            </span>
                                            <span class="text">Hướng dẫn sử dụng Máy Laser Diode AT-Pro Plus</span>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row">
                                <div class="outs__cnt-left">
                                    <h4 class="sub">Trị sẹo - trẻ hóa da 3</h4>
                                    <h3 class="tt">Máy LASER FRACTIONAL CO2 F100</h3>
                                    <p class="des">✅ Để giải quyết những vấn đề này, công nghệ trẻ hóa da và điều
                                        trị sẹo rỗ ngày càng được ứng dụng phổ biến. Trong số đó, máy laser
                                        Fractional CO2 F100 đã thể hiện sự đột phá và hiệu quả vượt trội trong lĩnh
                                        vực này.</p>
                                    <a href="#" class="btn-secondary">
                                        <span class="text">Xem sản phẩm</span>
                                        <span class="icon">
                                            <img src="<?php echo BASE_URL; ?>/assets/icons/chev-r.svg" alt="">
                                        </span>
                                    </a>
                                </div>
                                <div class="outs__cnt-right">
                                    <div class="video-atmedia">
                                        <a href="" class="video_play">
                                            <img src="<?php echo BASE_URL; ?>/assets/images/ic-play.png" alt="">
                                        </a>
                                        <div class="video-img">
                                            <img src="<?php echo BASE_URL; ?>/assets/images/homeprodvid.jpg" alt="">
                                        </div>
                                        <div class="video-des">
                                            <span class="icon-logo">
                                            <img src="<?php echo BASE_URL; ?>/assets/images/logo-2.png" alt="">
                                            </span>
                                            <span class="text">Hướng dẫn sử dụng Máy Laser Diode AT-Pro Plus</span>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="talk">
        <?php $customer_talk_atmedical = get_field('customer-talk-atmedical', 'option') ?>
        <div class="container">
            <div class="talk__head">
                <h3 class="section__subtitle">04 <span class="line">-</span> KHÁCH HÀNG NÓI GÌ VỀ CHÚNG TÔI ?</h3>
                <h2 class="section__title">Ký kết chuyển giao công nghệ</h2>
            </div>
        </div>
        <div class="talk__cnt">
            <div class="tabJS">
                <div class="container talk__cnt-tab">
                    <button class="tabBtn">
                        <span class="text">1.000.000+ KHÁCH HÀNG TIN DÙNG</span>
                    </button>
                    <button class="tabBtn">
                        <span class="text">SỰ KIỆN NỔI BẬT</span>
                    </button>
                </div>
                <div class="talk__cnt-des">
                    <div class="tabPanel">
                        <div class="talk__cnt-wr">
                            <div class="talk__cnt-left">
                                <div class="talkSwiperMain talk-swiper-main">
                                    <div class="swiper-wrapper">
                                        
                                        <?php foreach ($customer_talk_atmedical as $key => $customer_talk_img) { ?>
                                            <div class="swiper-slide">
                                                <div class="talk-slide-img">
                                                    <img src="<?php echo $customer_talk_img['image'] ?>" alt="<?php echo $customer_talk_img['title'] ?>">
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="talk__control swiper__control-custom">
                                    <div class="talk-prev swiper__control-prev">
                                        <img src="<?php echo BASE_URL; ?>/assets/icons/chev-l.svg" alt="">
                                    </div>
                                    <div class="talk-next swiper__control-next">
                                        <img src="<?php echo BASE_URL; ?>/assets/icons/chev-r.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="talk__cnt-right">
                                <div class="talkSwiperThumb talk-swiper-thumb">
                                    <div class="swiper-wrapper">
                                        <?php foreach ($customer_talk_atmedical as $key => $customer_talk_slide) { ?>
                                            <div class="swiper-slide">
                                                <div class="talk__slide-vertical-it">
                                                    <p class="tt"><?php echo $customer_talk_slide['title'] ?></p>
                                                    <p class="sub"><?php echo $customer_talk_slide['subtitle'] ?></p>
                                                    <p class="des"><?php echo $customer_talk_slide['des'] ?></p>
                                                </div>
                                            </div>                                       
                                        <?php } ?>
                                    </div>
                                    <div class="talk__progress">
                                        <div class="talk-line"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tabPanel">
                        <div class="container">
                            <p>Hiện chưa có sự kiện nổi bật nào diễn ra.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="home-news">
        <div class="container">
            <div class="head">
                <div class="left">
                    <h3 class="section__subtitle">04 <span class="line">-</span> CẬP NHẬT LIÊN TỤC</h3>
                    <h2 class="section__title">Tin tức nổi bật</h2>
                </div>
                <div class="right">
                    <a href="#" class="btn-secondary">
                        <span class="text">Xem tất cả</span>
                        <span class="icon">
                            <img src="<?php echo BASE_URL; ?>/assets/icons/chev-r.svg" alt="">
                        </span>
                    </a>
                </div>
            </div>
            <div class="home-news-cnt">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-8">
                        <div class="home-news__big">
                            <a class="home-news__img">
                                <img src="<?php echo BASE_URL; ?>/assets/images/Img-1.jpg" alt="">
                            </a>
                            <a href="#" class="tt">
                                Binary Premium – Tiên phong ứng dụng Công nghệ 5.0 trong nâng cao miễn dịch toàn diện                                                        
                            </a>
                            <p class="des">✅ Máy Laser Diode AT-Pro Plus có hai tay cầm điều trị với kích thước điểm khác nhau, áp dụng công nghệ làm mát TEC mới nhất giúp cải thiện hiệu quả điều trị và kéo dài tuổi thọ của máy. ✅ Hơn 100 triệu lần chụp của một tay cầm điốt 1200W có thể tăng số lượng xử lý do đó tăng lợi nhuận ị và kéo dài tuổi thọ của máy. ✅ Hơn 100 triệu lần chụp của một tay cầm điốt 1200W có thể tăng số lượng xử lý do đó tăng lợi nhuận</p>
                            <div class="sk">
                                <span class="cate">Công nghệ</span>
                                <span class="dot"></span>
                                <span class="date">09/10/2023</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4">
                        <div class="home-news__small">
                            <div class="row">
                                <div class="col-6 col-sm-12">
                                    <div class="home-news__img">
                                        <div class="img">
                                            <img src="<?php echo BASE_URL; ?>/assets/images/Img-1.jpg" alt="">
                                        </div>
                                        
                                        <a href="#" class="des">
                                            <span>Máy Laser Diode AT-Pro Plus có hai tay cầm điều trị với kích thước điểm khác nhau, áp dụng công nghệ làm mát
                                                    TEC mới nhất giúp cải thiện hiệu quả điều trị và kéo dài tuổi thọ của máy. ✅ Hơn 100 triệu lần chụp của một
                                                    tay cầm điốt 1200W có thể tăng số lượng xử lý do đó tăng lợi nhuận ị và kéo dài tuổi thọ của máy. ✅ Hơn 100
                                                    triệu lần chụp của một tay cầm điốt 1200W có thể tăng số lượng xử lý do đó tăng lợi nhuận</span>
                                        </a>

                                        <div class="sk">
                                            <span class="cate">Công nghệ</span>
                                            <span class="dot"></span>
                                            <span class="date">09/10/2023</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-12">
                                    <div class="home-news__img">
                                        <div class="img">
                                            <img src="<?php echo BASE_URL; ?>/assets/images/Img-1.jpg" alt="">
                                        </div>
                                        <a href="#" class="des">
                                            <span>Máy Laser Diode AT-Pro Plus có hai tay cầm điều trị với kích thước điểm khác nhau, áp dụng công nghệ làm mát
                                                    TEC mới nhất giúp cải thiện hiệu quả điều trị và kéo dài tuổi thọ của máy. ✅ Hơn 100 triệu lần chụp của một
                                                    tay cầm điốt 1200W có thể tăng số lượng xử lý do đó tăng lợi nhuận ị và kéo dài tuổi thọ của máy. ✅ Hơn 100
                                                    triệu lần chụp của một tay cầm điốt 1200W có thể tăng số lượng xử lý do đó tăng lợi nhuận</span>
                                        </a>
                                        <div class="sk">
                                            <span class="cate">Công nghệ</span>
                                            <span class="dot"></span>
                                            <span class="date">09/10/2023</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home-update">
        <?php $home_update = get_field('home-update', 'option') ?>
        <div class="container">
            <div class="head">
                <h3 class="section__subtitle">04 <span class="line">-</span> CẬP NHẬT LIÊN TỤC</h3>
                <h2 class="section__title">Tự hào 1000+ Khách hàng đã chọn A&T Medical</h2>
            </div>
        </div>

        <div class="container">
            <div class="home-update-cnt">
                <div class="home-update-top">
                    <div class="homeUpdateSwiperMain home-update-swiper-main">
                        <div class="swiper-wrapper">
                            <?php foreach ($home_update as $key => $value) { ?>
                                <div class="swiper-slide home-update-slide">
                                    <div class="video-atmedia">                 
                                            <a href="<?php echo $value['link'] ?>" class="video_play" target="_blank">
                                                <img src="<?php echo BASE_URL; ?>/assets/images/ic-play.png" alt="<?php echo $value['title'] ?>">
                                            </a>
                                        <div class="home-update-img">
                                            <img src="<?php echo $value['image'] ?>" alt="<?php echo $value['title'] ?>">
                                        </div>
                                        <div class="video-des">
                                            <span class="icon-logo">
                                                <img src="<?php echo BASE_URL; ?>/assets/images/logo-2.png"
                                                    alt="">
                                            </span>
                                            <span class="text"><?php echo $value['title'] ?></span>
                                        </div>
                                    </div>
        
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="home-update__control swiper__control-custom">
                        <div class="home-update-prev swiper__control-prev">
                            <img src="<?php echo BASE_URL; ?>/assets/icons/chev-l.svg" alt="">
                        </div>
                        <div class="home-update-next swiper__control-next">
                            <img src="<?php echo BASE_URL; ?>/assets/icons/chev-r.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="home-update-bot">
                    <div class="homeUpdateSwiperThumb home-update-swiper-thumb">
                        <div class="swiper-wrapper">
                            <?php foreach ($home_update as $key => $home_update_text) { ?>
                                <div class="swiper-slide">
                                    <div class="home-update__tab">
                                     <?php echo $home_update_text['title'] ?>                                      
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
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
                        <?php get_template_part( 'template_part/booking-main') ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


<?php get_footer(); ?>