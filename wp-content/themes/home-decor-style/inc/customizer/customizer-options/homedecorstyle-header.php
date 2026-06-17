<?php
function homedecorstyle_header_settings( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Header Settings Panel
	=========================================*/
	$wp_customize->add_panel( 
		'header_section', 
		array(
			'priority'      => 2,
			'capability'    => 'edit_theme_options',
			'title'			=> __('Header', 'home-decor-style'),
		) 
	);

	
	/*=========================================
	Home Decor Style Site Identity
	=========================================*/
	$wp_customize->add_section(
        'title_tagline',
        array(
        	'priority'      => 1,
            'title' 		=> __('Site Identity','home-decor-style'),
			'panel'  		=> 'header_section',
		)
    );





    // top header Site Title Color
	$topheadersitetitlecol = esc_html__('#000', 'home-decor-style' );
	$wp_customize->add_setting(
    	'topheader_sitetitlecol',
    	array(
			'default' => $topheadersitetitlecol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'topheader_sitetitlecol',
		array(
		    'label'   		=> __('Site Title Color','home-decor-style'),
		    'section'		=> 'title_tagline',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// top header Tagline Color
	$topheadertaglinecol = esc_html__('#000', 'home-decor-style' );
	$wp_customize->add_setting(
    	'topheader_taglinecol',
    	array(
			'default' => $topheadertaglinecol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'topheader_taglinecol',
		array(
		    'label'   		=> __('Tagline Color','home-decor-style'),
		    'section'		=> 'title_tagline',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);
	
 
	/*=========================================
	Home Decor Style header
	=========================================*/
	$wp_customize->add_section(
        'top_header',
        array(
        	'priority'      => 5,
            'title' 		=> __('Header','home-decor-style'),
			'panel'  		=> 'header_section',
		)
    );	


    $wp_customize->add_setting('homedecorstyle_reset_header_settings',array(
	  'sanitize_callback'   => 'sanitize_text_field'
	));
	$wp_customize->add_control(new homedecorstyle_Reset_Custom_Control($wp_customize, 'home_decor_style_reset_header_settings',array(
	  'type' => 'reset_control',
	   'priority' => 1,
	  'label' => __('Reset Header Settings', 'home-decor-style'),
	  'description' => 'home_decor_style_header_reset_settings',
	  'section' => 'top_header'
	)));



    $wp_customize->add_setting('homedecorstyle_top_header_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new homedecorstyle_Tab_Control($wp_customize, 'homedecorstyle_top_header_tabs', array(
	   'section' => 'top_header',
	   'priority' => 1,
	   'buttons' => array(
	      array(
     		'name' => esc_html__('General', 'home-decor-style'),
 			'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'hide_show_sticky',
				'topheader_topheadtext1',
				'topheader_topheadtext2',
				'topheader_topheadtext3',
				'topheader_topheadtext3link',
				'topheader_topheadtext4',
				'topheader_topheadtext4link'
            ),
            'active' => true,
         ),
	      array(
            'name' => esc_html__('Style', 'home-decor-style'),
            'icon' => 'dashicons dashicons-art',
            'fields' => array(
				'header_topheadbgcolor',
				'header_topheadtextcolor',
            	'header_bgcolor',
				'header_menuscolor',
            	'header_menuiconcolor',
            	'header_submenusbgcolor',
            	'header_submenutextcolor',
            	'header_submenustxthovercolor',
				'header_searchbariconcolor',
				'header_searchbarbgcolor',
				'header_carticoncolor',
				'header_cartnumcolor',
				'header_cartnumbgcolor',
				'header_acciconcolor'
            ),
         )
	    
    	),
	)));


	// general setting

	// sticky header
	$wp_customize->add_setting( 'hide_show_sticky',array(
        'default' => false,
        'sanitize_callback' => 'homedecorstyle_switch_sanitization'
   	) );
   	$wp_customize->add_control( new homedecorstyle_Toggle_Switch_Custom_Control( $wp_customize, 'hide_show_sticky',array(
        'label' => __( 'Show Sticky Header','home-decor-style' ),
        'section' => 'top_header'
   	)));


	// topheader topheadtext1
	$topheadertopheadtext1 = esc_html__('Free Shipping on Orders Over $500', 'home-decor-style' );
	$wp_customize->add_setting(
    	'topheader_topheadtext1',
    	array(
			'default' => $topheadertopheadtext1,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'topheader_topheadtext1',
		array(
		    'label'   		=> __('Top Head Text 1','home-decor-style'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// topheader topheadtext2
	$topheadertopheadtext2 = esc_html__('24/7 Customer Support', 'home-decor-style' );
	$wp_customize->add_setting(
    	'topheader_topheadtext2',
    	array(
			'default' => $topheadertopheadtext2,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'topheader_topheadtext2',
		array(
		    'label'   		=> __('Top Head Text 2','home-decor-style'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// topheader topheadtext3
	$topheadertopheadtext3 = esc_html__('My Account', 'home-decor-style' );
	$wp_customize->add_setting(
    	'topheader_topheadtext3',
    	array(
			'default' => $topheadertopheadtext3,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'topheader_topheadtext3',
		array(
		    'label'   		=> __('Top Head Text 3','home-decor-style'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);


	// topheader topheadtext3link
	$topheadertopheadtext3link = esc_html__('#', 'home-decor-style' );
	$wp_customize->add_setting(
    	'topheader_topheadtext3link',
    	array(
			'default' => $topheadertopheadtext3link,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'topheader_topheadtext3link',
		array(
		    'label'   		=> __('Top Head Text 3 Link','home-decor-style'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// topheader topheadtext4
	$topheadertopheadtext4 = esc_html__('Store Locator', 'home-decor-style' );
	$wp_customize->add_setting(
    	'topheader_topheadtext4',
    	array(
			'default' => $topheadertopheadtext4,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'topheader_topheadtext4',
		array(
		    'label'   		=> __('Top Head Text 4','home-decor-style'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// topheader topheadtext4link
	$topheadertopheadtext4link = esc_html__('#', 'home-decor-style' );
	$wp_customize->add_setting(
    	'topheader_topheadtext4link',
    	array(
			'default' => $topheadertopheadtext4link,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'topheader_topheadtext4link',
		array(
		    'label'   		=> __('Top Head Text 4 Link','home-decor-style'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);



	// Style setting

	// header topheadbg Color
	$headertopheadbgcolor = esc_html__('#212121', 'home-decor-style' );
	$wp_customize->add_setting(
    	'header_topheadbgcolor',
    	array(
			'default' => $headertopheadbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_topheadbgcolor',
		array(
		    'label'   		=> __('Top Head BG Color','home-decor-style'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header topheadtext Color
	$headertopheadtextcolor = esc_html__('#fff', 'home-decor-style' );
	$wp_customize->add_setting(
    	'header_topheadtextcolor',
    	array(
			'default' => $headertopheadtextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_topheadtextcolor',
		array(
		    'label'   		=> __('Top Head Text Color','home-decor-style'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header bg Color
	$headerbgcolor = esc_html__('#F4F4F4', 'home-decor-style' );
	$wp_customize->add_setting(
    	'header_bgcolor',
    	array(
			'default' => $headerbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_bgcolor',
		array(
		    'label'   		=> __('BG Color','home-decor-style'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// header menus Color
	$headermenuscolor = esc_html__('#000', 'home-decor-style' );
	$wp_customize->add_setting(
    	'header_menuscolor',
    	array(
			'default' => $headermenuscolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_menuscolor',
		array(
		    'label'   		=> __('Menus Color','home-decor-style'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header menuicon Color
	$headermenuiconcolor = esc_html__('#000', 'home-decor-style' );
	$wp_customize->add_setting(
    	'header_menuiconcolor',
    	array(
			'default' => $headermenuiconcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_menuiconcolor',
		array(
		    'label'   		=> __('SubMenu Icon Color','home-decor-style'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	$headersubmenusbgcolor = esc_html__('#000', 'home-decor-style' );
	$wp_customize->add_setting(
    	'header_submenusbgcolor',
    	array(
			'default' => $headersubmenusbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_submenusbgcolor',
		array(
		    'label'   		=> __('SubMenus BG Color','home-decor-style'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	

	// header submenutext Color
	$headersubmenutextcolor = esc_html__('#fff', 'home-decor-style' );
	$wp_customize->add_setting(
    	'header_submenutextcolor',
    	array(
			'default' => $headersubmenutextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_submenutextcolor',
		array(
		    'label'   		=> __('SubMenus Text Color','home-decor-style'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// header submenustxthover Color
	$headersubmenustxthovercolor = esc_html__('#e7000b', 'home-decor-style' );
	$wp_customize->add_setting(
    	'header_submenustxthovercolor',
    	array(
			'default' => $headersubmenustxthovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_submenustxthovercolor',
		array(
		    'label'   		=> __('Active Menu & Hover Color','home-decor-style'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header searchbaricon Color 
	$headersearchbariconcolor = esc_html__('#000', 'home-decor-style' );
	$wp_customize->add_setting(
    	'header_searchbariconcolor',
    	array(
			'default' => $headersearchbariconcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_searchbariconcolor',
		array(
		    'label'   		=> __('Search Bar Icon Color','home-decor-style'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header searchbarbg Color 
	$headersearchbarbgcolor = esc_html__('#000', 'home-decor-style' );
	$wp_customize->add_setting(
    	'header_searchbarbgcolor',
    	array(
			'default' => $headersearchbarbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_searchbarbgcolor',
		array(
		    'label'   		=> __('Search Bar BG Color','home-decor-style'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	
	// header carticon Color 
	$headercarticoncolor = esc_html__('#000', 'home-decor-style' );
	$wp_customize->add_setting(
    	'header_carticoncolor',
    	array(
			'default' => $headercarticoncolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_carticoncolor',
		array(
		    'label'   		=> __('Cart Icon Color','home-decor-style'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// header cartnum Color 
	$headercartnumcolor = esc_html__('#fff', 'home-decor-style' );
	$wp_customize->add_setting(
    	'header_cartnumcolor',
    	array(
			'default' => $headercartnumcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_cartnumcolor',
		array(
		    'label'   		=> __('Cart Number Color','home-decor-style'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header cartnumbg Color 
	$headercartnumbgcolor = esc_html__('#8B060B', 'home-decor-style' );
	$wp_customize->add_setting(
    	'header_cartnumbgcolor',
    	array(
			'default' => $headercartnumbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_cartnumbgcolor',
		array(
		    'label'   		=> __('Cart Number BG Color','home-decor-style'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header accicon Color 
	$headeracciconcolor = esc_html__('#000', 'home-decor-style' );
	$wp_customize->add_setting(
    	'header_acciconcolor',
    	array(
			'default' => $headeracciconcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_acciconcolor',
		array(
		    'label'   		=> __('Account Icon Color','home-decor-style'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);



	$wp_customize->register_control_type('homedecorstyle_Tab_Control');
	$wp_customize->register_panel_type( 'homedecorstyle_WP_Customize_Panel' );
	$wp_customize->register_section_type( 'homedecorstyle_WP_Customize_Section' );

}
add_action( 'customize_register', 'homedecorstyle_header_settings' );



if ( class_exists( 'WP_Customize_Panel' ) ) {
  	class homedecorstyle_WP_Customize_Panel extends WP_Customize_Panel {
	   public $panel;
	   public $type = 'homedecorstyle_panel';
	   public function json() {

	      $array = wp_array_slice_assoc( (array) $this, array( 'id', 'description', 'priority', 'type', 'panel', ) );
	      $array['title'] = html_entity_decode( $this->title, ENT_QUOTES, get_bloginfo( 'charset' ) );
	      $array['content'] = $this->get_content();
	      $array['active'] = $this->active();
	      $array['instanceNumber'] = $this->instance_number;
	      return $array;
    	}
  	}
}

if ( class_exists( 'WP_Customize_Section' ) ) {
  	class homedecorstyle_WP_Customize_Section extends WP_Customize_Section {
	   public $section;
	   public $type = 'homedecorstyle_section';
	   public function json() {

	      $array = wp_array_slice_assoc( (array) $this, array( 'id', 'description', 'priority', 'panel', 'type', 'description_hidden', 'section', ) );
	      $array['title'] = html_entity_decode( $this->title, ENT_QUOTES, get_bloginfo( 'charset' ) );
	      $array['content'] = $this->get_content();
	      $array['active'] = $this->active();
	      $array['instanceNumber'] = $this->instance_number;

	      if ( $this->panel ) {
	        $array['customizeAction'] = sprintf( 'Customizing &#9656; %s', esc_html( $this->manager->get_panel( $this->panel )->title ) );
	      } else {
	        $array['customizeAction'] = 'Customizing';
	      }
	      return $array;
    	}
  	}
}






