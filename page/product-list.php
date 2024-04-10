<?php
/*
Template name: Danh sách Sản phẩm
*/
get_header();
?>
<main class="main">
    <!-- Breadcrumb -->
    <?php getBreadcrumb(); ?>
   <div class="container">
      <div class4="product__list">
         <div class="product__list-banner">
            <img src="<?php echo BASE_URL; ?>/assets/images/banner-list.png" alt="">
         </div>
         <div class="product__list-wr">
            <div class="row product__list-row">
               <div class="col col-3">
                  <div class="product__side">
                     <div class="product__site-cat">
                        <p class="product__side-tt">DANH MỤC SẢN PHẨM</p>
                        <?php 
                          $args = array( 
                           'type' => 'post',
                            'hide_empty' => 0,
                            'taxonomy' => 'product_cat',
                            'exclude' => array( 16 ),
                            'orderby' => 'date',
                            'order' => 'DESC',
                            'parent' => 0
                          ); 
                          $cates = get_categories( $args ); 
                        ?>
                        <?php 
                        foreach ($cates as $key => $cate) { 
                           if ($cate->slug == 'uncategorized') {
                              continue;
                           }
                           ?>
                           <div class="product__side-item prod-collapse__block">
                              <div class="prod-collapse__item">
                                 <div class="prod-collapse__head">
                                    <span class="txt"><?php echo $cate->name  ?></span>
                                    <span class="icon"></span>
                                 </div>
                                 <div class="prod-collapse__body">
                                    <?php 
                                       // Lấy danh sách các category con của category cha hiện tại
                                       $child_args = array(
                                             'type' => 'post',
                                             'hide_empty' => 0,
                                             'taxonomy' => 'product_cat',
                                             // 'exclude' => array( 16 ),
                                             'orderby' => 'date',
                                             'parent' => $cate->term_id // Sử dụng term_id của category cha
                                       );
                                       $child_cates = get_categories( $child_args ); 
                                    ?>
                                    <?php foreach ($child_cates as $child_cate) { ?>
                                    <a href="#">
                                       <span class="product-device"><?php echo $child_cate->name ?></span>
                                       <span class="product-total">(<?php echo $child_cate->count ?>)</span>
                                    </a>
                                    <?php } ?>
                                 </div>
                              </div>
                           </div>
                        <?php } ?>
                     </div>
                     <?php get_template_part("template_part/outstanding", "product"); ?>
                  </div>
               </div>
               <div class="col col-9">
                  <div class="product__main">
                     <h2 class="product__main-tt">Sản phẩm máy triệt lông và trị mụn</h2>
                     <div class="card__list">
                        <div class="row">
                           <?php 
                           $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                           $args = array( 
                              'post_type' => 'product', 
                              'posts_per_page' => 2, 
                              'post_status' => 'publish',
                              'paged' => $paged,
                              'tax_query'      => array(
                                 array(
                                    'taxonomy' => 'product_cat',
                                    'field'    => 'term_id', 
                                    'terms'    => 16, 
                                 ),
                                 ),
                              ); 
                              ?>
                           <?php $getposts = new WP_query( $args);?>
                           <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                           <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                           <?php global $product; ?>
                              <div class="col-6 col-sm-6 col-md-4">
                                 <div class="product-list__item card__item">
                                    <div class="card__item-img">
                                       <a href="<?php the_permalink() ?>">
                                          <img src="<?php echo BASE_URL; ?>/assets/images/product2.png" alt="item">
                                       </a>
                                    </div>
                                    <div class="card__item-info">
                                       <h4>
                                          <a href="<?php the_permalink() ?>" class="card-title"><?php the_title() ?></a>
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
                                       <p class="card-des"><?php echo wp_trim_words( get_the_excerpt(), 20, '...' ); ?></p>
                                       <a href="<?php the_permalink() ?>" class="card-btn btn-primary">
                                          <span class="text">Liên hệ tư vấn</span>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           <?php endwhile;?>
                              <div class="col-12 recruit-pagination">
                                <div class="pagination">
                                    <ul class="pagination__list pagination__new">
                                        <?php 
                                            $paginate_links = paginate_links( array(
                                                'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                                                'total'        => $getposts->max_num_pages,
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
                        </div>
                     </div>

                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</main>
<?php get_footer(); ?>