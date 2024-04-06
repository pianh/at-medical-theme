<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <meta charset="<?php bloginfo('charset'); ?>">

     <!-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" /> -->

    <?php $urltheme = get_bloginfo('stylesheet_directory'); ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="header" id="header">
        <div class="header__wrapper">
            <a href="<?php echo site_url('/') ?>" class="header__logo">
                <img src="<?php the_field('logo', 'option') ?>" alt="<?php bloginfo( 'name' ) ?>">
            </a>
            
            <!-- <ul class="header__menu">
                <li>
                    <a href="<?php echo site_url('/ve-chung-toi') ?>">Về chúng tôi</a>
                </li>
                <li class="has-children">
                   <a href="<?php echo site_url('/san-pham') ?>"> Sản phẩm <i class="fa-solid fa-caret-down"></i></a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo site_url('/product/may-triet-long-diode-laser-at-pro-plus/') ?>">Máy triệt lông và trị mụn</a></li>
                        <li><a href="<?php echo site_url('/product/may-triet-long-diode-laser-at-pro-plus/') ?>">Trị sẹo - Trẻ hóa da</a></li>
                        <li><a href="<?php echo site_url('/product/may-triet-long-diode-laser-at-pro-plus/') ?>">Xoá xăm - điều trị sắc tố</a></li>
                        <li><a href="<?php echo site_url('/product/may-triet-long-diode-laser-at-pro-plus/') ?>">Nâng cơ - Giảm béo</a></li>
                        <li><a href="<?php echo site_url('/product/may-triet-long-diode-laser-at-pro-plus/') ?>">Thiết bị cơ bản</a></li>
                        <li><a href="<?php echo site_url('/product/may-triet-long-diode-laser-at-pro-plus/') ?>">Đèn - Giường - Ghế - Kệ</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo site_url('/tuyen-dung') ?>">Tuyển dụng</a></li>
                <li><a href="<?php echo site_url('/tin-tuc') ?>">Tin tức</a></li>
                <li><a href="<?php echo site_url('/lien-he') ?>">Liên hệ</a></li>
                <li><a href="<?php echo site_url('/chinh-sach') ?>">Chính sách</a></li>
            </ul> -->
            <?php 
                wp_nav_menu( 
                    array( 
                        'theme_location' => 'main_nav', 
                        'container' => 'false', 
                        'menu_id' => 'main-nav',
                        'menu_class' => 'header__menu',
                        'submenu_class' => 'sub-menu'),
                ); 
            ?>

            <div class="header__action">
                <button class="action__search popup-open" type="button" data-popup="popup-search">
                    <i class="fa-regular fa-magnifying-glass"></i>
                </button>
                <a href="tel:0964561306" class="action__call">
                    <i class="fa-solid fa-phone"></i>
                </a>
                <div class="hotline-log">
                    <div class="hotline">
                        <span class="text">Hotline</span>
                        <span class="phone"><?php the_field('hot_line','option') ?></span>
                    </div>
                    <a href="" class="log">Đăng nhập/ Đăng ký</a>
                </div>
                <div class="mobile-icon">
                    <span class="open-icon"><i class="fa-solid fa-bars"></i></span>
                    <span class="close-icon"><i class="fa-solid fa-xmark"></i></span>
                </div>
            </div>
        </div>
        <div class="mobile__overlay"></div>
        <div class="popup popup-overlay" data-popup-id="popup-search"></div>
        <div class="popup popup__search" data-popup-id="popup-search">
            <div class="popup-cnt">
                <div class="icon-close popup-close">
                    <i class="fa-regular fa-xmark"></i>
                </div>
                <div class="popup-search-img">
                    <img src="<?php echo BASE_URL; ?>/assets/images/model.png" alt="">
                </div>
                <input type="text" placeholder="Nhập từ khóa" class="popup-search-input" />
                <button class="btn-primary btn-search" type="button">Tìm kiếm</button>
            </div>
        </div>
    </header>

