<?php
/*
Template name: Liên Hệ
*/
get_header();
?>
<main class="main">
    <!-- breacrum -->
    <?php getBreadcrumb() ?>
    <section class="contact">
        <div class="container">
            <div class="contact__head">
                <h2 class="contact__head-title">Liên hệ</h2>
                <h2 class="contact__head-sub">Vui lòng để lại thông tin, chúng tôi sẽ phản hồi trong thời gian
                    sớm nhất</h2>
            </div>
            <div class="contact__body">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <?php $headquarters = get_field('headquarters', 'option') ?>
                        <?php $secondary_facility = get_field('secondary-facility', 'option') ?>

                        <div class="contact__left">
                            <h3 class="company">Công ty TNHH A&T Medical</h3>
                            <?php foreach ($headquarters as $key => $value) { ?>
                                <div class="headquarter">
                                    <div class="name">Trụ sở chính</div>
                                    <div class="address">
                                        <span>Địa chỉ:</span>
                                        <div><?php echo $value['address'] ?></div>
                                    </div>
                                    <div class="hotline">
                                        <span>Hotline:</span>
                                        <a href="tel:0948 818 159" target="_blank"><?php echo $value['hotline'] ?></a>
                                    </div>
                                    <div class="email">
                                        <span>Email:</span>
                                        <a href="mailto:atmedical242@gmail.com" target="_blank"><?php echo $value['email'] ?></a>
                                    </div>
                                    <div class="map">
                                        <img class="map__img"
                                            src=" https://atmedical.vn/template/assets/images/lienhe/point-on-map.png"
                                            alt="point-on-map">
                                        <a href="" class="map__text">Xem vị trí trên bản đồ</a>
                                    </div>
                                </div>
                            <?php } ?>

                            <?php foreach ($secondary_facility as $key => $value) { ?>
                                <div class="headquarter">
                                    <div class="name">Trụ sở chính</div>
                                    <div class="address">
                                        <span>Địa chỉ:</span>
                                        <div><?php echo  $value['address'] ?></div>
                                    </div>
                                    <div class="hotline">
                                        <span>Hotline:</span>
                                        <a href="tel:0948 818 159" target="_blank"><?php echo  $value['phone'] ?></a>
                                    </div>
                                    <div class="email">
                                        <span>Email:</span>
                                        <a href="mailto:atmedical242@gmail.com" target="_blank"><?php echo  $value['email'] ?></a>
                                    </div>
                                    <div class="map">
                                        <img class="map__img"
                                            src=" https://atmedical.vn/template/assets/images/lienhe/point-on-map.png"
                                            alt="point-on-map">
                                        <a href="" class="map__text">Xem vị trí trên bản đồ</a>
                                    </div>
                                </div>
                           <?php } ?>

                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="contact__right">
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
                                    <textarea id="my-textarea" class="list__item-input" name="" rows="3"
                                        cols="63"></textarea>
                                    </textarea>
                                </div>
                                <div class="list__item">
                                    <button type="button" class="btn-four">
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