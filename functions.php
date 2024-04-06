<?php 
    require get_theme_file_path('/inc/rest-api.php');  // Inc rest-api.php file
    define("BASE_URL", get_template_directory_uri());   
    function load_assets() {
        // import css file
        //wp_enqueue_style("bootstrapCss", get_theme_file_uri('/assets/vendors/css/bootstrap.min.css'), array(), "5.0.2", "all");
        wp_enqueue_style("aos", get_theme_file_uri('/js/library/aos/aos.css'), array(), "1.0.1", "all");
        wp_enqueue_style("swiper", get_theme_file_uri('/js/library/swiper/swiper.css'), array(), "1.0.5", "all");
        wp_enqueue_style("font-awesome", get_theme_file_uri('/js/library/fontawesome/css/all.min.css'), array(), "6.5.1", "all");
        wp_enqueue_style("favicon", get_theme_file_uri('/assets/favicon/favicon.ico'), array(), "1.0.0", "all");
        wp_enqueue_style("css-style", get_theme_file_uri('/css/style.css'), array(), "1.0.0", "all");
        wp_enqueue_style("css-backdoor", get_theme_file_uri('/css/backdoor.css'), array(), "1.0.0", "all");
        
        // import js file
        wp_enqueue_script("jquery-js", get_theme_file_uri() . '/js/library/jquery/jquery.min.js', array('jquery'), "3.7.1", true);
        wp_enqueue_script("font-awesome-js", get_theme_file_uri() . '/js/library/fontawesome/js/all.min.js', array('jquery'), "6.5.1", true);
        wp_enqueue_script("aos-js", get_theme_file_uri('/js/library/aos/aos.js'),  array('jquery'), "1.0.1", true);
        wp_enqueue_script("swiper-js", get_theme_file_uri('/js/library/swiper/swiper.js'),  array('jquery'), "1.0.5", true);
        wp_localize_script("variableGlobal", 'variableGlobal', array('root_url' => get_site_url()));
    }
    add_action("wp_enqueue_scripts", "load_assets");

    // Ẩn thanh Admin Bar
    add_filter('show_admin_bar', '__return_false');

    // Register Menu
    function leo_setup_theme(){
        add_theme_support('post-thumbnails');
        // Register sidebar
        if (function_exists('register_sidebar')){
            register_sidebar(array(
            'name'=> __( 'Sidebar', 'leo' ),
            'id' => 'sidebar',
            'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
            'before_widget' => '<div class="widget">',
            'after_widget'  => "</div>",
            'before_title'  => '<h3 class="title">',
            'after_title'   => "</h3>",
            ));
        }
        // Register menu
        register_nav_menus(
            array(
            'main_nav' => __( 'Menu chính', 'leo' ),
            )
        );
    }
    add_action('init','leo_setup_theme');

    // Thêm class has-children vào li 
    function add_menu_item_classes($classes, $item, $args) {
        // Check if the current menu item has children
        if (in_array('menu-item-has-children', $item->classes)) {
            $classes[] = 'has-children';
        }
        return $classes;
    }
    add_filter('nav_menu_css_class', 'add_menu_item_classes', 10, 3);

    //Thêm fa-caret-down vào thẻ a khi có sub-menu
    function add_icon_to_menu_item($item_output, $item, $depth, $args) {
        if (in_array('menu-item-has-children', $item->classes)) {
            $item_output .= '<i class="fa-solid fa-caret-down"></i>';
        }
        return $item_output;
    }
    add_filter('walker_nav_menu_start_el', 'add_icon_to_menu_item', 10, 4);

    // Custom post date vn
    function custom_vn_date() {
        $post_date = get_the_date('d F, Y'); // Định dạng ngày sẽ được lấy từ hàm get_the_date()
        // Định dạng lại ngày đăng theo tiếng Việt
        setlocale(LC_TIME, 'vi_VN'); 
        $vn_date = strftime('%e tháng %m, %Y', strtotime($post_date));
        return $vn_date;
    }

    function getBreadcrumb() {
        echo '<div class="breadcrumb">';
        echo '<div class="container">';
        echo '<ul class="breadcrumb__list">';
        echo '<li class="breadcrumb__item">';

        if (!is_home()) {
            // In ra breadcrumb bắt đầu từ trang chủ
            echo '<a href="' . home_url('/') . '" class="breadcrumb__item-link">Home</a>';
        }
        
        if (is_singular()) {
            $post_type = get_post_type();
            echo '<li class="breadcrumb__item">';
            echo '<a href="#" class="breadcrumb__item-link">' . the_title() . '</a>';
        } elseif (is_archive()) {
            // Kiểm tra nếu là trang lưu trữ (archive)
            echo '<li class="breadcrumb__item">';
            echo '<a href="#" class="breadcrumb__item-link">' . single_cat_title() . '</a>';
        }
        echo '</li>';
        echo '</li>';
        echo '</ul>';
        echo '</div>';
        echo '</div>';
    }



    // Create theme options
    if( function_exists('acf_add_options_page') ) {
        acf_add_options_page(array(
            'page_title' 	=> 'Theme options', // Title hiển thị khi truy cập vào Options page
            'menu_title'	=> 'Theme options', // Tên menu hiển thị ở khu vực admin
            'menu_slug' 	=> 'theme-settings', // Url hiển thị trên đường dẫn của options page
            'capability'	=> 'edit_posts',
            'redirect'	=> false
        ));
    }

    // Switch to the home page when the user clicks on the wordpress icon
    add_filter('login_headerurl', 'leo_redirectHomePage');
    function leo_redirectHomePage() {
        return esc_url(site_url('/'));
    }

 /**
 * WooCommerce
 */

 add_theme_support( 'woocommerce');


    
