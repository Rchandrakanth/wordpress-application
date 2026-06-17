<?php

if ( ! function_exists( 'home_decor_style_setup' ) ) :
function home_decor_style_setup() {

// Root path/URI.
define( 'HOME_DECOR_STYLE_PARENT_DIR', get_template_directory() );
define( 'HOME_DECOR_STYLE_PARENT_URI', get_template_directory_uri() );

// Root path/URI.
define( 'HOME_DECOR_STYLE_PARENT_INC_DIR', HOME_DECOR_STYLE_PARENT_DIR . '/inc');
define( 'HOME_DECOR_STYLE_PARENT_INC_URI', HOME_DECOR_STYLE_PARENT_URI . '/inc');

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 */
	add_theme_support( 'title-tag' );
	
	add_theme_support( 'custom-header' );


	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );
	
	//Add selective refresh for sidebar widget
	add_theme_support( 'customize-selective-refresh-widgets' );
	
	/*
	 * Make theme available for translation.
	 */
	load_theme_textdomain( 'home-decor-style' );
		
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary_menu' => esc_html__( 'Primary Menu', 'home-decor-style' ),
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
	
	
	add_theme_support('custom-logo');

	/*
	 * WooCommerce Plugin Support
	 */
	add_theme_support( 'woocommerce' );
	
	// Gutenberg wide images.
	add_theme_support( 'align-wide' );
	
	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'assets/css/editor-style.css', home_decor_style_google_font() ) );
	
	//Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'home_decor_style_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'home_decor_style_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function home_decor_style_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'home_decor_style_content_width', 1170 );
}
add_action( 'after_setup_theme', 'home_decor_style_content_width', 0 );


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

function home_decor_style_widgets_init() {
	
	register_sidebar( array(
		'name' => __( 'Sidebar Widget Area', 'home-decor-style' ),
		'id' => 'home-decor-style-sidebar-primary',
		'description' => __( 'The Primary Widget Area', 'home-decor-style' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4><div class="title"><span class="shap"></span></div>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Footer Widget Area', 'home-decor-style' ),
		'id' => 'home-decor-style-footer-widget-area',
		'description' => __( 'The Footer Widget Area', 'home-decor-style' ),
		'before_widget' => '<div class="footer-widget col-lg-3 col-sm-6 wow fadeIn" data-wow-delay="0.2s"><aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside></div>',
		'before_title' => '<h5 class="widget-title w-title">',
		'after_title' => '</h5><span class="shap"></span>',
	) );

	register_sidebar( array(
		'name' => __( 'WooCommerce Widget Area', 'home-decor-style' ),
		'id' => 'home-decor-style-woocommerce-sidebar',
		'description' => __( 'This Widget area for WooCommerce Widget', 'home-decor-style' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4><div class="title"><span class="shap"></span></div>',
	) );
}
add_action( 'widgets_init', 'home_decor_style_widgets_init' );

/**
 * All Styles & Scripts.
 */

require_once get_template_directory() . '/inc/enqueue.php';

/**
 * Nav Walker fo Bootstrap Dropdown Menu.
 */

require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

// Custom page walker.
require get_template_directory() . '/inc/class-homedecorstyle-walker-page.php';


/**
 * Implement the Custom Header feature.
 */
require_once get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require_once get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require_once get_template_directory() . '/inc/extras.php';


/**
 * Customizer additions.
 */
require_once get_template_directory() . '/inc/homedecorstyle-customizer.php';

require_once get_template_directory() . '/inc/tab-control.php';





add_filter( 'nav_menu_link_attributes', 'home_decor_style_dropdown_data_attribute', 20, 3 );
/**
 * Use namespaced data attribute for Bootstrap's dropdown toggles.
 *
 * @param array    $atts HTML attributes applied to the item's `<a>` element.
 * @param WP_Post  $item The current menu item.
 * @param stdClass $args An object of wp_nav_menu() arguments.
 * @return array
 */
function home_decor_style_dropdown_data_attribute( $atts, $item, $args ) {
    if ( is_a( $args->walker, 'WP_Bootstrap_Navwalker' ) ) {
        if ( array_key_exists( 'data-toggle', $atts ) ) {
            unset( $atts['data-toggle'] );
            $atts['data-bs-toggle'] = 'dropdown';
        }
    }
    return $atts;
}


function home_decor_style_fonts() {
    wp_enqueue_style( 'home_decor_style-google-fonts-Philosopher', 'https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@0,700;1,400&display=swap" rel="stylesheet', false );
    
    wp_enqueue_style( 'home_decor_style-google-fonts-Kaushan', 'https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap', false );

}
add_action( 'wp_enqueue_scripts', 'home_decor_style_fonts' );

// Function to limit excerpt length
function home_decor_style_custom_excerpt_length($length) {
    return 20; // Change this number to limit the excerpt to your desired length
}
add_filter('excerpt_length', 'home_decor_style_custom_excerpt_length', 999);


/**
 * Register and Enqueue Scripts.
 *
 * @since Home Decor Style 1.0
 */
function homedecorstyle_register_scripts() {

	$theme_version = wp_get_theme()->get( 'Version' );

	if ( ! is_admin() && is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_script(
		'homedecorstyle-navigation',
		get_template_directory_uri() . '/assets/js/navigation.js',
		array( 'jquery' ),
		$theme_version,
		true
	);

	wp_enqueue_script(
		'homedecorstyle-js',
		get_template_directory_uri() . '/assets/js/index.js',
		array(),
		$theme_version,
		true
	);

	wp_script_add_data( 'homedecorstyle-js', 'async', true );
}

add_action( 'wp_enqueue_scripts', 'homedecorstyle_register_scripts' );

// feature product section
add_action('wp_ajax_filter_featured_products', 'filter_featured_products');
add_action('wp_ajax_nopriv_filter_featured_products', 'filter_featured_products');

function filter_featured_products() {

    $category = isset($_POST['category']) ? sanitize_text_field($_POST['category']) : '';

    $meta_query = WC()->query->get_meta_query();
    $tax_query  = WC()->query->get_tax_query();

    $tax_query[] = array(
        'taxonomy' => 'product_visibility',
        'field'    => 'name',
        'terms'    => 'featured',
    );

    if ( ! empty($category) ) {
        $tax_query[] = array(
            'taxonomy' => 'product_cat',
            'field'    => 'slug',
            'terms'    => $category,
        );
    }

    $args = array(
        'post_type'      => 'product',
        'posts_per_page' => 8,
        'meta_query'     => $meta_query,
        'tax_query'      => $tax_query,
    );

    $loop = new WP_Query($args);

    if ($loop->have_posts()) :
        while ($loop->have_posts()) : $loop->the_post();
            global $product;
            ?>
            <div class="col-lg-3 col-md-6 col-sm-6 product-bx">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="<?php the_permalink(); ?>">
                            <?php has_post_thumbnail() ? the_post_thumbnail('shop_catalog') : ''; ?>
                        </a>
                    </div>
                    <div class="productcontent-wrap">
                        <div class="pcontent">
                            <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                            <span class="price"><?php echo $product->get_price_html(); ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        endwhile;
    else :
        echo '<p class="text-center">No products found</p>';
    endif;

    wp_die();
}

// end