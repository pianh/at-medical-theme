<div class="news__product-outs">
  <h3 class="product__title">
    Sản phẩm nổi bật
  </h3>
  <?php 
      $tax_query[] = array(
        'taxonomy' => 'product_visibility',
        'field'    => 'name',
        'terms'    => 'featured',
        'operator' => 'IN', // or 'NOT IN' to exclude feature products
      );
      $args = array( 
        'post_type' => 'product', 
        'posts_per_page' => 10,
        'tax_query' => $tax_query, 
        'post_status' => 'publish'); 
  ?>
  <?php $getposts = new WP_query( $args);?>
  <?php global $wp_query; $wp_query->in_the_loop = true; ?>
  <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
  <?php global $product; ?>
  <a href="<?php the_permalink(); ?>" class="product__item">
    <div class="product__img">
      <img src='<?php echo get_the_post_thumbnail_url($post_id);?>' alt='<?php the_title(); ?>' />
    </div>
    <div class="product__name"><?php the_title(); ?>
    </div>
  </a>
  <?php endwhile; wp_reset_postdata(); ?>
</div>