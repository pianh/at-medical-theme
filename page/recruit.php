<?php
/*
Template name: Tuyển dụng
*/
get_header();
?>
<main class="main">
    <!-- Breadcrumb -->
    <?php getBreadcrumb() ?>
    <!-- Recruit -->
    <section class="recruit">
        <div class="container">
            <div class="recruit__top">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-6">
                        <div class="recruit__top-left">
                            <h2 class="title">Tại <span class="highlight">A&T Medical</span>, sự sáng tạo và trách nhiệm
                                luôn được trân trọng.</h2>
                            <p class="des">
                                Vị trí bạn muốn ứng tuyển?
                            </p>
                            <form class="search__recruit" action="<?php bloginfo('url'); ?>">
                                <?php $nominee = get_field('nominee', 'option') ?>
                                <select name="" id="" class="search__recruit-select">
                                    <option value="" disabled selected hidden></option>
                                    <?php foreach ($nominee as $key => $value) { ?>
                                        <option value="<?php $value['name'] ?>"><?php echo $value['name'] ?></option>
                                    <?php } ?>
                                </select>
                                <button type="button" class="search__recruit-btn btn-primary" name="s">
                                    <i class="fa-light fa-magnifying-glass"></i>
                                    Tìm kiếm
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6">
                        <div class="recruit__top-right">
                            <img src="<?php the_field('banner', 'option') ?>" alt="recruit banner">
                        </div>
                    </div>
                </div>
            </div>
            <div class="recruit__bottom">
                <h1 class="title">
                    Các vị trí đang tuyển dụng
                </h1>
                <div class="recruit__list card__list">
                    <div class="row">
                            <?php
                                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                                $query = new WP_Query( array(
                                    'post_type' => 'recruitment', 
                                    'posts_per_page' => 5, 
                                    'post_status' => 'publish',
                                    'paged' => $paged,
                                ) );
                            ?>
                            <?php if ( $query->have_posts() ) : ?>
                            <!-- begin loop -->
                            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                                <div class="col-6 col-sm-4 col-md-4 col-xl-3">
                                    <div class="recruit__item card__item">
                                        <div class="card__item-img">
                                            <span class="tag"><?php the_field('calendar') ?></span>
                                            <a href="#">
                                                <img src='<?php echo get_the_post_thumbnail_url($post_id, 'medium');?>'
                                                alt='<?php the_title(); ?>' />
                                            </a>
                                        </div>
                                        <div class="card__item-info">
                                            <div class="location"><i class="fa-regular fa-location-dot"></i><?php the_field('address') ?>
                                            </div>
                                            <h4>
                                                <a href="<?php the_permalink(); ?>" class="card-title"><?php the_field('job-detail') ?></a>
                                            </h4>
                                            <p class="card-des"><?php echo wp_trim_words( get_the_excerpt(), 28, '...' ); ?></p>
                                            <a href="<?php the_permalink(); ?>" class="card-btn btn-primary">
                                                <span class="text">Xem thêm</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                            <!-- end loop -->

                            <div class="col-12 recruit-pagination">
                                <div class="pagination">
                                    <ul class="pagination__list pagination__new">
                                        <?php 
                                            $paginate_links = paginate_links( array(
                                                'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                                                'total'        => $query->max_num_pages,
                                                'current'      => max( 1, get_query_var( 'paged' ) ),
                                                'format'       => '?paged=%#%',
                                                'show_all'     => false,
                                                'type'         => 'array', // lấy mảng các liên kết
                                                'end_size'     => 2,
                                                'mid_size'     => 1,
                                                'prev_next'    => true,
                                                'prev_text'    => __('«'),
                                                'next_text'    => __('»'),
                                                'add_args'     => false,
                                                'add_fragment' => '',
                                            ) );

                                        foreach ( $paginate_links as $link ) {
                                            echo '<li class="pagination__item">' . $link . '</li>';
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                            <?php wp_reset_postdata(); ?>

                            <?php else : ?>
                                <p><?php _e( 'Xin lỗi, không có bài viết nào được tìm thấy' ); ?></p>
                            <?php endif; ?>

                        <!-- <div class="col-6 col-sm-4 col-md-4 col-xl-3">
                            <div class="recruit__item card__item">
                                <div class="card__item-img">
                                    <span class="tag">Parttime</span>
                                    <a href="#">
                                        <img src="<?php echo BASE_URL; ?>/assets/images/card-item-1.png" alt="item">
                                    </a>
                                </div>
                                <div class="card__item-info">
                                    <div class="location"><i class="fa-regular fa-location-dot"></i> TP. Hồ Chí Minh
                                    </div>
                                    <h4>
                                        <a href="#" class="card-title">Trường phòng nghiên cứu thị trường mới</a>
                                    </h4>
                                    <p class="card-des">Lĩnh vực: Thiết bị y tế thẩm mỹ công nghệ cao.Số lượng: 05 bạn
                                        Mô tả công việc kinh doanh</p>
                                    <a href="#" class="card-btn btn-primary">
                                        <span class="text">Xem thêm</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-4 col-xl-3">
                            <div class="recruit__item card__item">
                                <div class="card__item-img">
                                    <span class="tag">Parttime</span>
                                    <a href="#">
                                        <img src="<?php echo BASE_URL; ?>/assets/images/card-item-1.png" alt="item">
                                    </a>
                                </div>
                                <div class="card__item-info">
                                    <div class="location"><i class="fa-regular fa-location-dot"></i> TP. Hồ Chí Minh
                                    </div>
                                    <h4>
                                        <a href="#" class="card-title">Trường phòng nghiên cứu thị trường mới</a>
                                    </h4>
                                    <p class="card-des">Lĩnh vực: Thiết bị y tế thẩm mỹ công nghệ cao.Số lượng: 05 bạn
                                        Mô tả công việc kinh doanh</p>
                                    <a href="#" class="card-btn btn-primary">
                                        <span class="text">Xem thêm</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-4 col-xl-3">
                            <div class="recruit__item card__item">
                                <div class="card__item-img">
                                    <span class="tag">Parttime</span>
                                    <a href="#">
                                        <img src="<?php echo BASE_URL; ?>/assets/images/card-item-1.png" alt="item">
                                    </a>
                                </div>
                                <div class="card__item-info">
                                    <div class="location"><i class="fa-regular fa-location-dot"></i> TP. Hồ Chí Minh
                                    </div>
                                    <h4>
                                        <a href="#" class="card-title">Trường phòng nghiên cứu thị trường mới</a>
                                    </h4>
                                    <p class="card-des">Lĩnh vực: Thiết bị y tế thẩm mỹ công nghệ cao.Số lượng: 05 bạn
                                        Mô tả công việc kinh doanh</p>
                                    <a href="#" class="card-btn btn-primary">
                                        <span class="text">Xem thêm</span>
                                    </a>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
                <!-- <div class="pagination">
                    <ul class="pagination__list">
                        <li class="pagination__item">
                            <a href="#">1</a>
                        </li>
                        <li class="pagination__item">
                            <a href="#">2</a>
                        </li>
                        <li class="pagination__item">
                            <a href="#">3</a>
                        </li>
                        <li class="pagination__item">
                            <a href="#">4</a>
                        </li>
                        <li class="pagination__item next">
                            <a class="" href="#">
                                <i class="fa fa-angle-right icon"></i>
                            </a>
                        </li>
                    </ul>
                </div> -->
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>