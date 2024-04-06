<?php
/*
Template name: About
*/
 get_header();
?>

<main class="main">
    <!-- About -->
    <section class="about">
        <div class="about__banner">
            <img src="<?php echo BASE_URL; ?>/assets/images/bn-about.jpg" alt="bn">
        </div>
        <!-- Breadcrumb -->
        <div class="breadcrumb">
            <div class="container">
                <ul class="breadcrumb__list">
                    <li class="breadcrumb__item">
                        <a href="#" class="breadcrumb__item-link">Home</a>
                    </li>
                    <li class="breadcrumb__item">
                        <a href="#" class="breadcrumb__item-link">Về chúng tôi</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="about__vision">
            <div class="container">
                <div class="about__vision-head">
                    <h3 class="section__subtitle">01 <span class="line">-</span> VỀ A&T MEDICAL</h3>
                    <h2 class="section__title">Tầm nhìn và sứ mệnh</h2>
                </div>
                <div class="about__vision-cnt">
                    <div class="row row-cols-1">
                        <div class="col col-12 col-md-5">
                            <div class="vision__card">
                                <div class="vision__card-top">
                                        <div class="vision__card-img">
                                            <img src="<?php echo BASE_URL; ?>/assets/images/abm-img.jpg "alt="card">
                                        </div>
                                        <div class="vision__card-tag">
                                            <span class="text">Tầm nhìn</span>
                                        </div>
                                </div>
                                <div class="vision__card-bot">
                                        <p class="des"><?php the_field('vision','option') ?></p>
                                        <div class="img-cycle">
                                            <img src="<?php echo BASE_URL; ?>/assets/icons/vision-cycle.svg"
                                                alt="">
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-12 col-md-5 offset-md-2">
                            <div class="vision__card">
                            <div class="vision__card-top">
                                    <div class="vision__card-img">
                                        <img src="<?php echo BASE_URL; ?>/assets/images/abm-img2.jpg "alt="card">
                                    </div>
                                    <div class="vision__card-tag">
                                        <span class="text">Sứ mệnh</span>
                                    </div>
                            </div>
                            <div class="vision__card-bot">
                                    <p class="des"><?php the_field('mission','option') ?></p>
                                    <div class="img-cycle">
                                        <img src="<?php echo BASE_URL; ?>/assets/icons/vision-cycle.svg" alt="">
                                    </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about__value">
            <div class="container">
                <div class="about__value-head">
                    <h3 class="section__subtitle">02 <span class="line">-</span> GIÁ TRỊ CỐT LÕI</h3>
                    <h2 class="section__title">5 giá trị cốt lõi của A&T Medical</h2>
                </div>
                <div class="about__value-row row row-cols-3 gy-md-4 gx-2 gy-2">
                    <?php $core_values = get_field('core-values', 'option') ?>
                    <?php foreach ($core_values as $key => $value) { ?>                   
                        <div class="col col-6">
                            <div class="about__item">
                                <div class="about__item-left">
                                    <div class="about__item-icon">
                                        <img src="<?php echo $value['image'] ?>" alt="<?php echo $value['title'] ?>">
                                    </div>
                                </div>
                                <div class="about__item-right">
                                    <h4 class="title"><?php echo $value['title'] ?></h4>
                                    <p class="des"><?php echo $value['subtitle'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="about__why">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col col-12 col-sm-6">
                        <div class="about__why-head">
                            <h3 class="section__subtitle">03 <span class="line">-</span> VÌ SAO CHỌN
                                CHÚNG TÔI</h3>
                            <h2 class="section__title">6 tiêu chí nên lựa chọn A&T Medical</h2>
                        </div>
                        <?php $criteria_selected = get_field('criteria-selecte', 'option') ?>
                        <div class="collapse-block">
                            <div class="collapse-list">
                                <?php foreach ($criteria_selected as $key => $value) { ?>
                                    <div class="collapse-item">
                                        <div class="collapse-head">
                                            <div class="collapse-head-tt">
                                                <span class="num"><?php echo $key + 1 ?></span>
                                                <span class="text"><?php echo $value['title'] ?></span>
                                            </div>
                                            <div class="collapse-head-icon"></div>
                                        </div>
                                        <div class="collapse-body">
                                            <p><?php echo $value['subtitle'] ?></p>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>

                        </div>
                    </div>
                    <div class="col col-12 col-sm-6">
                        <div class="about__why-bn">
                            <img src="<?php echo BASE_URL; ?>/assets/images/model.png" alt="model">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about__partner about__partner-slider">
            <div class="about__partner-head">
                <h2 class="section__title about__partner-tt">Các đối tác đã đồng hành và <br/> tín nhiệm A&T Medical</h2>
            </div>
            <div class="container">
                <div class="about__partner-bot">
                    <?php $companion_partner = get_field('companion-partner', 'option') ?>
                    <!-- Swiper -->
                    <div class="swiper mySwiperAbout swiper__partner">
                        <div class="swiper-wrapper">
                            <?php foreach ($companion_partner as $key => $value) { ?>
                                <div class="swiper-slide">
                                    <div class="about__partner-img">
                                        <img src="<?php echo $value['image'] ?>" alt="Đối tác đồng hành">
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="about__booking booking">
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
                                    <button type="button" class="booking__btn">
                                        <span class="icon">
                                            <i class="fa-solid fa-paper-plane"></i>
                                        </span>
                                        <span>Gửi thông tin</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>

