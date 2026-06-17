<?php
function homedecorstyle_footer( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	// Footer Panel // 
	$wp_customize->add_panel( 
		'footer_section', 
		array(
			'priority'      => 34,
			'capability'    => 'edit_theme_options',
			'title'			=> __('Footer', 'home-decor-style'),
		) 
	);

    

	// Footer Bottom // 
	$wp_customize->add_section(
        'footer_bottom',
        array(
            'title' 		=> __('Footer','home-decor-style'),
			'panel'  		=> 'footer_section',
			'priority'      => 3,
		)
    );
	
	// Footer Copyright Head
	$wp_customize->add_setting(
		'footer_btm_copy_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'homedecorstyle_sanitize_text',
			'priority'  => 3,
		)
	);
	
	// Footer Copyright 
	$homedecorstyle_foo_copy = esc_html__('Copyright &copy; [current_year] [site_title] | Powered by [theme_author]', 'home-decor-style' );
	$wp_customize->add_setting(
    	'footer_copyright',
    	array(
			'default' => $homedecorstyle_foo_copy,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_copyright',
		array(
		    'label'   		=> __('CopyRight','home-decor-style'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'textarea',
			'transport'         => $selective_refresh,
		)  
	);	



	// footer copyright color
	$footercopyrightcolor = esc_html__('#000', 'home-decor-style' );
	$wp_customize->add_setting(
    	'footer_copyrightcolor',
    	array(
			'default' => $footercopyrightcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_copyrightcolor',
		array(
		    'label'   		=> __('Copyright Color','home-decor-style'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer copyrightbg color
	$footercopyrightbgcolor = esc_html__('#fff', 'home-decor-style' );
	$wp_customize->add_setting(
    	'footer_copyrightbgcolor',
    	array(
			'default' => $footercopyrightbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_copyrightbgcolor',
		array(
		    'label'   		=> __('Copyright BG Color','home-decor-style'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer bg color
	$footerbgcolor1 = esc_html__('#EBEAE8BD', 'home-decor-style' );
	$wp_customize->add_setting(
    	'footer_bgcolor',
    	array(
			'default' => $footerbgcolor1,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_bgcolor',
		array(
		    'label'   		=> __('BG Color','home-decor-style'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// footer widegtstitle color
	$footerwidegtstitlecolor = esc_html__('#fff', 'home-decor-style' );
	$wp_customize->add_setting(
    	'footer_widegtstitlecolor',
    	array(
			'default' => $footerwidegtstitlecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_widegtstitlecolor',
		array(
		    'label'   		=> __('Widegts Title Color','home-decor-style'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer text color
	$footertextcolor = esc_html__('#fff', 'home-decor-style' );
	$wp_customize->add_setting(
    	'footer_textcolor',
    	array(
			'default' => $footertextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_textcolor',
		array(
		    'label'   		=> __('Text Color','home-decor-style'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);



	// footer listhover color
	$footerlisthovercolor = esc_html__('#fff', 'home-decor-style' );
	$wp_customize->add_setting(
    	'footer_listhovercolor',
    	array(
			'default' => $footerlisthovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_listhovercolor',
		array(
		    'label'   		=> __('List Hover Color','home-decor-style'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer listicon color
	$footerlisticoncolor = esc_html__('#757879', 'home-decor-style' );
	$wp_customize->add_setting(
    	'footer_listiconcolor',
    	array(
			'default' => $footerlisticoncolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_listiconcolor',
		array(
		    'label'   		=> __('List Icon Color','home-decor-style'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer backtotopicon color
	$footerbacktotopiconcolor = esc_html__('#fff', 'home-decor-style' );
	$wp_customize->add_setting(
    	'footer_backtotopiconcolor',
    	array(
			'default' => $footerbacktotopiconcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_backtotopiconcolor',
		array(
		    'label'   		=> __('Back To Top Icon Color','home-decor-style'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer backtotopbg color
	$footerbacktotopbgcolor = esc_html__('#757879', 'home-decor-style' );
	$wp_customize->add_setting(
    	'footer_backtotopbgcolor',
    	array(
			'default' => $footerbacktotopbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_backtotopbgcolor',
		array(
		    'label'   		=> __('Back To Top BG Color','home-decor-style'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer backtotopbghrv color
	$footerbacktotopbghrvcolor = esc_html__('#000', 'home-decor-style' );
	$wp_customize->add_setting(
    	'footer_backtotopbghrvcolor',
    	array(
			'default' => $footerbacktotopbghrvcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_backtotopbghrvcolor',
		array(
		    'label'   		=> __('Back To Top BG Hover Color','home-decor-style'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);




}
add_action( 'customize_register', 'homedecorstyle_footer' );
// Footer selective refresh
function homedecorstyle_footer_partials( $wp_customize ){	
	// footer_copyright
	$wp_customize->selective_refresh->add_partial( 'footer_copyright', array(
		'selector'            => '.copy-right .copyright-text',
		'settings'            => 'footer_copyright',
		'render_callback'  => 'homedecorstyle_footer_copyright_render_callback',
	) );
	
	}
add_action( 'customize_register', 'homedecorstyle_footer_partials' );


// copyright_content
function homedecorstyle_footer_copyright_render_callback() {
	return get_theme_mod( 'footer_copyright' );
}