<?php
/**
 * Food Truck Promotions functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Food_Truck_Promotions
 */

if ( ! function_exists( 'food_truck_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function food_truck_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Food Truck Promotions, use a find and replace
		 * to change 'food-truck' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'food-truck', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'food-truck' ),
			'menu-2' => esc_html__( 'Fotter', 'food-truck' ),
		) );


		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'food_truck_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'food_truck_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function food_truck_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'food_truck_content_width', 640 );
}
add_action( 'after_setup_theme', 'food_truck_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function food_truck_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'food-truck' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'food-truck' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'food_truck_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function food_truck_scripts() {
	wp_enqueue_style( 'food-truck-style', get_stylesheet_uri() );

	wp_enqueue_script( 'food-truck-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'food-truck-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'food-truck-custom-js', get_template_directory_uri() . '/js/custom-js.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'food-truck-owl-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array( 'jquery' ), '1.0.0', true );

	wp_localize_script('food-truck-custom-js', 'wp_ajax_custom_vars', array(
	    'ajaxurl' => admin_url( 'admin-ajax.php' )
	));

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'food_truck_scripts' );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Theme General Settings',
        'menu_title'	=> 'Theme Settings',
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));

    acf_add_options_sub_page(array(
      'page_title'  => 'Get in touch', /* Use whatever title you want */
      'menu_title' => 'Get in touch',
      'parent_slug' => 'edit.php?post_type=case_studies',
      'capability' => 'manage_options'
    ));

}

add_shortcode('post__print', 'get_recent_post');
function get_recent_post () {

	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

    $args = array(
        'orderby' => 'post_date',
        'order' => 'DESC',
        'posts_per_page' => 6,
        'post_type' => 'post',
        'post_status' => 'publish',
        'paged' => $paged,
    );
    
    $query = new WP_Query( $args );
    
    if ($query->have_posts()) :

    ob_start(); ?>
    <div class='post__recent_content'>
    
    <?php  while ($query->have_posts()) :
        $query->the_post();

    	get_template_part( 'template-parts/post', 'thumbnails' );
    	
   	endwhile; ?>

	</div>
<?php
   	$get_post = ob_get_clean();
	endif; 
   wp_reset_query();

   return $get_post;

   wp_die();

}

add_action('wp_ajax_nopriv_get_recent_post_filter','get_recent_post_filter');
add_action('wp_ajax_get_recent_post_filter','get_recent_post_filter');

function get_recent_post_filter () {

	$cat_id = $_POST['cat'];
	$nextpage = $_POST['nextpage'];

	//$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

	if($nextpage){
		$current_page = $nextpage;
	}else{
		$current_page = 1;
	}

	if($cat_id > 0){
		$cat = array('taxonomy' => 'category', 'field' => 'id','terms' => $cat_id, );
	}else{
		$cat = '';
	}
	

    $args = array(
        'orderby' => 'post_date',
        'order' => 'DESC',
        'posts_per_page' => 6,
        'post_type' => 'post',
        'post_status' => 'publish',
        'paged' => $current_page,
        'tax_query' => array(
        	$cat
        ),
    );
    
    $query = new WP_Query( $args );
    
    if ($query->have_posts()) :

    ob_start(); ?>
    <div class='post__recent_content'>
    
    <?php  while ($query->have_posts()) :
        $query->the_post();

    	get_template_part( 'template-parts/post', 'thumbnails' );
    	
   	endwhile; ?>

	</div>
	<?php
	$total_page = $query->max_num_pages;

   	$get_post = ob_get_clean();
	endif; 
   wp_reset_query();

   echo json_encode( array('html' => $get_post, 'currentPage' => $nextpage, 'nextpage' => ($current_page+1), 'totalPage' => $total_page, 'cat_id' => $cat_id));;

   wp_die();

}

add_action('wp_ajax_nopriv_load_more_post','load_more_post');
add_action('wp_ajax_load_more_post','load_more_post');

function load_more_post () {

	$cat_id = $_POST['cat'];
	$nextpage = $_POST['nextpage'];


	if($nextpage){
		$current_page = $nextpage;
	}else{
		$current_page = 1;
	}

	if($cat_id > 0){
		$cat = array('taxonomy' => 'category', 'field' => 'id','terms' => $cat_id, );
	}else{
		$cat = '';
	}
	

    $args = array(
        'orderby' => 'post_date',
        'order' => 'DESC',
        'posts_per_page' => 6,
        'post_type' => 'post',
        'post_status' => 'publish',
        'paged' => $current_page,
        'tax_query' => array(
        	$cat
        ),
    );
    
    $query = new WP_Query( $args );
    
    if ($query->have_posts()) :

    ob_start(); ?>

    <?php  while ($query->have_posts()) :
        $query->the_post();

    	get_template_part( 'template-parts/post', 'thumbnails' );
    	
   	endwhile; ?>

	<?php
	$total_page = $query->max_num_pages;


   	$get_post = ob_get_clean();
	endif; 
   wp_reset_query();

   echo json_encode( array('html' => $get_post, 'currentPage' => $nextpage, 'nextpage' => ($current_page+1), 'totalPage' => $total_page, 'cat_id' => $cat_id));

   wp_die();

}