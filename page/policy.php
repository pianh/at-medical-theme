<?php
/*
Template name: Chính sách
*/
get_header();
?>
<main class="main">
    <section class="policy">
        <div class="policy__wrapper">
            <div class="row tabJS">
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="policy__left">
                        <a href="#" class="tabBtn policy__left-tab">
                            <img src="<?php echo BASE_URL; ?>/assets/icons/icon-baohanh.svg" class="attachment-thumbnail size-thumbnail" alt="" decoding="async" loading="lazy">
                            <span>Bảo hành sản phẩm</span>
                        </a>
                        <a href="#" class="tabBtn policy__left-tab">
                            <img src="<?php echo BASE_URL; ?>/assets/icons/icon-vanchuyen.svg" class="attachment-thumbnail size-thumbnail" alt="" decoding="async" loading="lazy">
                            <span>Vận chuyển</span>
                        </a>
                        <a href="#" class="tabBtn policy__left-tab">
                            <img src="<?php echo BASE_URL; ?>/assets/icons/icon-baomat.svg" class="attachment-thumbnail size-thumbnail" alt="" decoding="async" loading="lazy">
                            <span>Bảo mật</span>
                        </a>
                        <a href="#" class="tabBtn policy__left-tab">
                           <img src="<?php echo BASE_URL; ?>/assets/icons/icon-doitra.svg" class="attachment-thumbnail size-thumbnail" alt="" decoding="async" loading="lazy">
                            <span>Đổi trả sản phẩm</span>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-8 col-lg-9">
                    <div class="policy__right">
                        <div class="contentTab tabPanel">
                            <?php the_field('product-warranty', 'option') ?>
                        </div>
                        <div class="contentTab tabPanel">
                            <?php the_field('transport', 'option') ?>
                        </div>
                        <div class="contentTab tabPanel">
                            <?php the_field('security', 'option') ?>
                        </div>
                        <div class="contentTab tabPanel">
                            <?php the_field('return-product', 'option') ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


<?php get_footer(); ?>