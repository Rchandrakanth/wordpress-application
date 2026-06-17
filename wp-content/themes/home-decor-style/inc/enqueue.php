<?php

// Load the JS and CSS.
add_action( 'customize_controls_enqueue_scripts', function() {

	$version = wp_get_theme()->get( 'Version' );

	wp_enqueue_script(
		'homedecorstyle-customize-section-button',
		get_theme_file_uri( 'assets/js/customize-controls.js' ),
		[ 'customize-controls' ],
		$version,
		true
	);
	wp_localize_script(
		'homedecorstyle-customize-section-button',
		'homedecorstyle_customizer_params',
		array( 
			'ajaxurl' => esc_url(admin_url( 'admin-ajax.php' ))
		)
	);

	wp_enqueue_style(
		'homedecorstyle-customize-section-button',
		get_theme_file_uri( 'assets/css/customize-controls.css' ),
		[ 'customize-controls' ],
 		$version
	);

} );

function home_decor_style_scripts() {

	$version = wp_get_theme()->get( 'Version' );

	/* =====================
	 * STYLES
	 * ===================== */

	wp_enqueue_style(
		'homedecorstyle-swiper',
		get_template_directory_uri() . '/assets/css/swiper.css',
		array(),
		$version
	);

	wp_enqueue_style(
		'homedecorstyle-bootstrap',
		get_template_directory_uri() . '/assets/css/bootstrap.css',
		array(),
		$version
	);

	wp_enqueue_style(
		'homedecorstyle-owl-carousel',
		get_template_directory_uri() . '/assets/css/owl.carousel.css',
		array(),
		$version
	);

	wp_enqueue_style(
		'homedecorstyle-font-awesome',
		get_template_directory_uri() . '/assets/css/fontawesome.css',
		array(),
		'6.5.2'
	);

	wp_enqueue_style(
		'homedecorstyle-animate',
		get_template_directory_uri() . '/assets/css/animate.css',
		array(),
		$version
	);

	wp_enqueue_style(
		'homedecorstyle-main',
		get_template_directory_uri() . '/assets/css/main.css',
		array(),
		$version
	);

	wp_enqueue_style(
		'homedecorstyle-woo',
		get_template_directory_uri() . '/assets/css/woo.css',
		array(),
		$version
	);


	wp_enqueue_style(
		'homedecorstyle-style',
		get_stylesheet_uri(),
		array(),
		$version
	);

	/* =====================
	 * SCRIPTS
	 * ===================== */

	wp_enqueue_script(
		'homedecorstyle-swiper',
		get_template_directory_uri() . '/assets/js/swiper.js',
		array(),
		$version,
		true
	);

	wp_enqueue_script(
		'homedecorstyle-swiper-init',
		get_template_directory_uri() . '/assets/js/swiperslide.js',
		array( 'jquery', 'homedecorstyle-swiper' ),
		$version,
		true
	);

	wp_enqueue_script(
		'homedecorstyle-slider',
		get_template_directory_uri() . '/assets/js/sliderscript.js',
		array( 'jquery' ),
		$version,
		true
	);

	wp_enqueue_script(
		'homedecorstyle-bootstrap',
		get_template_directory_uri() . '/assets/js/bootstrap.bundle.js',
		array( 'jquery' ),
		$version,
		true
	);

	wp_enqueue_script(
		'homedecorstyle-owl-carousel',
		get_template_directory_uri() . '/assets/js/owl.carousel.js',
		array( 'jquery' ),
		$version,
		true
	);

	wp_enqueue_script(
		'homedecorstyle-wow',
		get_template_directory_uri() . '/assets/js/wow.js',
		array(),
		$version,
		true
	);

	wp_enqueue_script(
		'homedecorstyle-theme',
		get_template_directory_uri() . '/assets/js/theme.js',
		array( 'jquery' ),
		$version,
		true
	);

	wp_enqueue_script(
		'homedecorstyle-footer-scripts',
		get_template_directory_uri() . '/assets/js/footerscript.js',
		array( 'jquery' ),
		$version,
		true
	);

	wp_enqueue_script(
		'homedecorstyle-featureajax',
		get_template_directory_uri() . '/assets/js/featureajax.js',
		array( 'jquery' ),
		$version,
		true
	);


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'home_decor_style_scripts' );
