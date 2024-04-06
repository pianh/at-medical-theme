<?php
/*
Template name: Tin tức
*/
get_header();
?>
<main class="main">
    <!-- breacrum -->
    <?php getBreadcrumb(); ?>
    </div>
    <!-- News -->
    <section class="news">
        <div class="container">
            <div class="news__outs">
                <h1 class="news__title">Tin tức nổi bậc</h1>
                <div class="news__outs-cnt">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <?php $args = array( 
                                'post_type' => 'post', 
                                'posts_per_page' => 1,
                                'order' => 'DESC', 
                                'post_status' => 'publish'); 
                            ?>
                            <?php $getposts = new WP_query( $args);?>
                            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                                <div class="news__outs-left">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="news__outs-left-img">
                                            <img src='<?php echo get_the_post_thumbnail_url($post_id, 'large');?>' alt='<?php the_title(); ?>' />
                                        </div>
                                        <h2 class="news__outs-title"><?php the_title(); ?></h2>
                                        <div class="author">
                                            <span class="date"><?php echo get_the_date(); ?></span>
                                            <div class="dot"></div>
                                            <span class="name">by <strong><?php echo get_the_author(); ?></strong></span>
                                        </div>
                                        <p class="des"><?php echo wp_trim_words( get_the_excerpt(), 20, '...' ); ?></p>
                                    </a>
                                    <a href="<?php the_permalink(); ?>" class="see-btn">
                                        <span>Đọc thêm</span>
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </a>
                                </div>    
                            <?php endwhile; wp_reset_postdata(); ?>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="news__outs-right">
                                <?php 
                                    // Lấy bài viết mới nhất
                                    $latest_post_args = array(
                                        'post_type' => 'post',
                                        'posts_per_page' => 1,
                                        'post_status' => 'publish',
                                        'orderby' => 'date',
                                        'order' => 'DESC',
                                    );

                                    $latest_post_query = new WP_Query($latest_post_args);

                                    // Lấy ID của bài viết mới nhất
                                    $latest_post_id = 0;
                                    if ($latest_post_query->have_posts()) {
                                        $latest_post_query->the_post();
                                        $latest_post_id = get_the_ID();
                                    }
                                    wp_reset_postdata();
                                ?>

                                <?php 
                                    // Lấy 4 bài viết khác với bài viết mới nhất
                                    $args = array(
                                        'post_type' => 'post',
                                        'posts_per_page' => 4, // Lấy 4 bài viết
                                        'post_status' => 'publish',
                                        'orderby' => 'date',
                                        'order' => 'DESC',
                                        'post__not_in' => array($latest_post_id),
                                    ); 
                                ?>
                                <?php $getposts = new WP_Query($args);?>
                                <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                                    <div href="<?php the_permalink(); ?>" class="news__outs-right-item">
                                        <a href="<?php the_permalink(); ?>">
                                            <div class="news__outs-right-img">
                                                <img src='<?php echo get_the_post_thumbnail_url($post_id, 'medium');?>' alt='<?php the_title(); ?>' />
                                            </div>
                                        </a>
                                        <div class="news__outs-right-cnt">
                                            <h3 class="highlight title"><?php the_title(); ?></h3>
                                            <div class="author">
                                                <span class="date"><?php echo custom_vn_date(); ?></span>
                                                <span class="dot"></span>
                                                <span class="name">by  <?php echo get_the_author(); ?></span>
                                            </div>
                                            <a href="<?php the_permalink(); ?>" class="see-btn">
                                            <span> Đọc thêm</span>
                                                <i class="fa-solid fa-arrow-right-long"></i>
                                            </a>
                                        </div>
                                    </div>
                                <?php endwhile; wp_reset_postdata(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="news__bottom">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="news__new">
                            <h1 class="news__title">Bài viết mới nhất</h1>
                            <?php
                                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                                $query = new WP_Query( array(
                                    'post_type' => 'post', 
                                    'posts_per_page' => 5, 
                                    'post_status' => 'publish',
                                    'paged' => $paged,
                                ) );
                            ?>
                            <?php if ( $query->have_posts() ) : ?>
                            <!-- begin loop -->
                            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                                <div class="news__new-item">
                                    <div class="news__new-item">
                                        <a href="#" class="news__new-img">
                                            <img src='<?php echo get_the_post_thumbnail_url($post_id, 'medium');?>'
                                                alt='<?php the_title(); ?>' />
                                        </a>
                                        <div class="news__new-cnt">
                                            <h3 class="highlight title">Hướng dẫn điều
                                                trị nám bằng Laser dành cho SPA</h3>
                                            <div class="author">
                                                <span class="date">16 Tháng Mười,
                                                    2023</span>
                                                <span class="dot"></span>
                                                <span class="name">by monamedia</span>
                                            </div>
                                            <p>Triệt lông công nghệ IPL hiệu quả và được
                                                sử dụng rộng rãi trong ngành thẩm mỹ.
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                            <!-- end loop -->
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
                            <?php wp_reset_postdata(); ?>

                            <?php else : ?>
                                <p><?php _e( 'Xin lỗi, không có bài viết nào được tìm thấy' ); ?></p>
                            <?php endif; ?>
                            <!-- <div class="pagination">
                                <ul class="pagination__list pagination__new">
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
                    <div class="col-12 col-lg-4">
                        <div class="news__product-outs">
                            <h3 class="product__title">
                                Sản phẩm nổi bật
                            </h3>
                            <a href="#" class="product__item">
                                <div class="product__img">
                                    <img src="<?php echo BASE_URL; ?>/assets/images/product1.png" alt="Product">
                                </div>
                                <div class="product__name">Máy Triệt Lông IPL K3: 2 TAY CẦM</div>
                            </a>
                            <a href="#" class="product__item">
                                <div class="product__img">
                                    <img src="<?php echo BASE_URL; ?>/assets/images/product1.png" alt="Product">
                                </div>
                                <div class="product__name">Máy Triệt Lông IPL K3: 2 TAY CẦM</div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>