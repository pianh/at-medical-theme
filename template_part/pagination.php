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