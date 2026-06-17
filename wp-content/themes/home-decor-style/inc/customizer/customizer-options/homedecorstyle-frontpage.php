<?php
function homedecorstyle_blog_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	$wp_customize->add_panel(
		'homedecorstyle_frontpage_sections', array(
			'priority' => 32,
			'title' => esc_html__( 'Frontpage Sections', 'home-decor-style' ),
		)
	);  
	
	


	/*=========================================
	Banner Section
	=========================================*/
	$wp_customize->add_section(
		'bannerimg_setting', array(
			'title' => esc_html__( 'Banner Section', 'home-decor-style' ),
			'priority' => 1,
			'panel' => 'homedecorstyle_frontpage_sections',
		)
	);


	$wp_customize->add_setting('homedecorstyle_banner_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new homedecorstyle_Tab_Control($wp_customize, 'homedecorstyle_banner_tabs', array(
	   'section' => 'bannerimg_setting',
	   'priority' => 2,
	   'buttons' => array(
	      array(
         	'name' => esc_html__('General', 'home-decor-style'),
            'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
				'banner_section_subheading',
            	'banner_section_heading1',
				'banner_section_description',
				'banner_section_btn1_text',
				'banner_section_btn1_link',
				'banner_section_btn2_text',
				'banner_section_btn2_link',
				'banner_section_feature_productnum',
				'banner_section_feature_producttext',
				'banner_section_feature_happycustomernum',
				'banner_section_feature_happycustomertext',
				'banner_section_feature_ratingnum',
				'banner_section_feature_ratingtext',
				'bannerimgsection_image',
				'banner_section_imageoffer_text1',
				'banner_section_imageoffer_text2',
				'banner_section_imageoffer_text3'

            ),
            'active' => true,
         ), 
	      array(
            'name' => esc_html__('Style', 'home-decor-style'),
        	'icon' => 'dashicons dashicons-art',
            'fields' => array(
                'banner_subheadingcolor',
				'banner_subheadingbgcolor',
				'banner_headingcolor',
				'banner_descriptioncolor',
				'banner_btn1textcolor',
				'banner_btn1bgcolor',
				'banner_btn2textcolor',
				'banner_btn2hvrtextcolor',
				'banner_btn2hvrbgcolor',
				'banner_featuresnumbercolor',
				'banner_featurestextcolor',
				'banner_imageboxbgcolor',
				'banner_imageboxtext1color',
				'banner_imageboxtext2color',
				'banner_imageboxtext3color'

            ),
     	),
		 array(
		   'name' => esc_html__('Layout', 'home-decor-style'),
		   'icon' => 'dashicons dashicons-layout',
		   'fields' => array(
			   'banner_section_width',
		   ),
		)
    	),
	))); 


	// General Tab

	// banner_section_subheading
	$bannersectionsubheading = esc_html__('Winter Collection 2024', 'home-decor-style' );
	$wp_customize->add_setting(
    	'banner_section_subheading',
    	array(
			'default' => $bannersectionsubheading,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'banner_section_subheading',
		array(
		    'label'   		=> __('Sub Heading','home-decor-style'),
		    'section'		=> 'bannerimg_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// banner_section_heading1
	$bannersectionheading1 = esc_html__('Design Your Dream Space', 'home-decor-style' );
	$wp_customize->add_setting(
    	'banner_section_heading1',
    	array(
			'default' => $bannersectionheading1,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'banner_section_heading1',
		array(
		    'label'   		=> __('Heading','home-decor-style'),
		    'section'		=> 'bannerimg_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// banner_section_description
	$bannersectiondescription = esc_html__('Discover our curated collection of contemporary furniture that blends timeless elegance with modern functionality.', 'home-decor-style' );
	$wp_customize->add_setting(
    	'banner_section_description',
    	array(
			'default' => $bannersectiondescription,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'banner_section_description',
		array(
		    'label'   		=> __('Description','home-decor-style'),
		    'section'		=> 'bannerimg_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// banner_section_btn1_text
	$bannersectionbtn1text = esc_html__('Explore Collection', 'home-decor-style' );
	$wp_customize->add_setting(
    	'banner_section_btn1_text',
    	array(
			'default' => $bannersectionbtn1text,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'banner_section_btn1_text',
		array(
		    'label'   		=> __('Button 1 Text','home-decor-style'),
		    'section'		=> 'bannerimg_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// banner_section_btn1_link
	$bannersectionbtn1link = esc_html__('#', 'home-decor-style' );
	$wp_customize->add_setting(
    	'banner_section_btn1_link',
    	array(
			'default' => $bannersectionbtn1link,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'banner_section_btn1_link',
		array(
		    'label'   		=> __('Button 1 Link','home-decor-style'),
		    'section'		=> 'bannerimg_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// banner_section_btn2_text
	$bannersectionbtn2text = esc_html__('View Lookbook', 'home-decor-style' );
	$wp_customize->add_setting(
    	'banner_section_btn2_text',
    	array(
			'default' => $bannersectionbtn2text,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'banner_section_btn2_text',
		array(
		    'label'   		=> __('Button 2 Text','home-decor-style'),
		    'section'		=> 'bannerimg_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// banner_section_btn2_link
	$bannersectionbtn2link = esc_html__('#', 'home-decor-style' );
	$wp_customize->add_setting(
    	'banner_section_btn2_link',
    	array(
			'default' => $bannersectionbtn2link,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'banner_section_btn2_link',
		array(
		    'label'   		=> __('Button 2 Link','home-decor-style'),
		    'section'		=> 'bannerimg_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// banner_section_feature_productnum
	$bannersectionfeatureproductnum = esc_html__('158+', 'home-decor-style' );
	$wp_customize->add_setting(
    	'banner_section_feature_productnum',
    	array(
			'default' => $bannersectionfeatureproductnum,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'banner_section_feature_productnum',
		array(
		    'label'   		=> __('Feature Product Number','home-decor-style'),
		    'section'		=> 'bannerimg_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// banner_section_feature_producttext
	$bannersectionfeatureproducttext = esc_html__('Products', 'home-decor-style' );
	$wp_customize->add_setting(
    	'banner_section_feature_producttext',
    	array(
			'default' => $bannersectionfeatureproducttext,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'banner_section_feature_producttext',
		array(
		    'label'   		=> __('Feature Product Text','home-decor-style'),
		    'section'		=> 'bannerimg_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// banner_section_feature_happycustomernum
	$bannersectionfeaturehappycustomernum = esc_html__('5,000+', 'home-decor-style' );
	$wp_customize->add_setting(
    	'banner_section_feature_happycustomernum',
    	array(
			'default' => $bannersectionfeaturehappycustomernum,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'banner_section_feature_happycustomernum',
		array(
		    'label'   		=> __('Happy Customer Number','home-decor-style'),
		    'section'		=> 'bannerimg_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// banner_section_feature_happycustomertext
	$bannersectionfeaturehappycustomertext = esc_html__('Happy Customers', 'home-decor-style' );
	$wp_customize->add_setting(
    	'banner_section_feature_happycustomertext',
    	array(
			'default' => $bannersectionfeaturehappycustomertext,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'banner_section_feature_happycustomertext',
		array(
		    'label'   		=> __('Happy Customer Text','home-decor-style'),
		    'section'		=> 'bannerimg_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// banner_section_feature_ratingnum
	$bannersectionfeatureratingnum = esc_html__('1', 'home-decor-style' );
	$wp_customize->add_setting(
    	'banner_section_feature_ratingnum',
    	array(
			'default' => $bannersectionfeatureratingnum,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'banner_section_feature_ratingnum',
		array(
		    'label'   		=> __('Rating Number','home-decor-style'),
		    'section'		=> 'bannerimg_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// banner_section_feature_ratingtext
	$bannersectionfeatureratingtext = esc_html__('Average Rating', 'home-decor-style' );
	$wp_customize->add_setting(
    	'banner_section_feature_ratingtext',
    	array(
			'default' => $bannersectionfeatureratingtext,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'banner_section_feature_ratingtext',
		array(
		    'label'   		=> __('Rating Number','home-decor-style'),
		    'section'		=> 'bannerimg_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// bannerimgsection_image
	$wp_customize->add_setting(
    	'bannerimgsection_image',
	    array(
	        'sanitize_callback' => 'esc_url_raw'
	    )
	);
	$wp_customize->add_control(
	    new WP_Customize_Image_Control(
	        $wp_customize,
	        'bannerimgsection_image',
	        array(
			    'label'   		=> __('Image','home-decor-style'),
				'description'=> __('Image Size Should Be 700*701','home-decor-style'),
	            'section' => 'bannerimg_setting',
	            'settings' => 'bannerimgsection_image'
	        )
	    )
	);

	// banner_section_imageoffer_text1
	$bannersectionimageoffertext1 = esc_html__('Limited Time Offer', 'home-decor-style' );
	$wp_customize->add_setting(
    	'banner_section_imageoffer_text1',
    	array(
			'default' => $bannersectionimageoffertext1,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'banner_section_imageoffer_text1',
		array(
		    'label'   		=> __('Image Offer Text 1','home-decor-style'),
		    'section'		=> 'bannerimg_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// banner_section_imageoffer_text2
	$bannersectionimageoffertext2 = esc_html__('Up to 40% Off', 'home-decor-style' );
	$wp_customize->add_setting(
    	'banner_section_imageoffer_text2',
    	array(
			'default' => $bannersectionimageoffertext2,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'banner_section_imageoffer_text2',
		array(
		    'label'   		=> __('Image Offer Text 2','home-decor-style'),
		    'section'		=> 'bannerimg_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// banner_section_imageoffer_text3
	$bannersectionimageoffertext3 = esc_html__('On selected items', 'home-decor-style' );
	$wp_customize->add_setting(
    	'banner_section_imageoffer_text3',
    	array(
			'default' => $bannersectionimageoffertext3,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'banner_section_imageoffer_text3',
		array(
		    'label'   		=> __('Image Offer Text 3','home-decor-style'),
		    'section'		=> 'bannerimg_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	
	//style

	// banner subheading Color 
	$bannersubheadingcolor = esc_html__('#fff', 'home-decor-style' );
	$wp_customize->add_setting(
    	'banner_subheadingcolor',
    	array(
			'default' => $bannersubheadingcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'banner_subheadingcolor',
		array(
		    'label'   		=> __('Sub Heading Color','home-decor-style'),
		    'section'		=> 'bannerimg_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);	

	// banner subheadingbg Color 
	$bannersubheadingbgcolor = esc_html__('#101828', 'home-decor-style' );
	$wp_customize->add_setting(
    	'banner_subheadingbgcolor',
    	array(
			'default' => $bannersubheadingbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'banner_subheadingbgcolor',
		array(
		    'label'   		=> __('Sub Heading BG Color','home-decor-style'),
		    'section'		=> 'bannerimg_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);
	
	// banner heading Color 
	$bannerheadingcolor = esc_html__('#000', 'home-decor-style' );
	$wp_customize->add_setting(
    	'banner_headingcolor',
    	array(
			'default' => $bannerheadingcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'banner_headingcolor',
		array(
		    'label'   		=> __('Heading Color','home-decor-style'),
		    'section'		=> 'bannerimg_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// banner description Color 
	$bannerdescriptioncolor = esc_html__('#4a5565', 'home-decor-style' );
	$wp_customize->add_setting(
    	'banner_descriptioncolor',
    	array(
			'default' => $bannerdescriptioncolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'banner_descriptioncolor',
		array(
		    'label'   		=> __('Description Color','home-decor-style'),
		    'section'		=> 'bannerimg_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// banner btn1text Color 
	$bannerbtn1textcolor = esc_html__('#fff', 'home-decor-style' );
	$wp_customize->add_setting(
    	'banner_btn1textcolor',
    	array(
			'default' => $bannerbtn1textcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'banner_btn1textcolor',
		array(
		    'label'   		=> __('Button 1 Text Color','home-decor-style'),
		    'section'		=> 'bannerimg_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// banner btn1bg Color 
	$bannerbtn1bgcolor = esc_html__('#101828', 'home-decor-style' );
	$wp_customize->add_setting(
    	'banner_btn1bgcolor',
    	array(
			'default' => $bannerbtn1bgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'banner_btn1bgcolor',
		array(
		    'label'   		=> __('Button 1 BG Color','home-decor-style'),
		    'section'		=> 'bannerimg_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// banner btn2text Color 
	$bannerbtn2textcolor = esc_html__('#101828', 'home-decor-style' );
	$wp_customize->add_setting(
    	'banner_btn2textcolor',
    	array(
			'default' => $bannerbtn2textcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'banner_btn2textcolor',
		array(
		    'label'   		=> __('Button 2 Text Color','home-decor-style'),
		    'section'		=> 'bannerimg_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// banner btn2hvrtext Color 
	$bannerbtn2hvrtextcolor = esc_html__('#fff', 'home-decor-style' );
	$wp_customize->add_setting(
    	'banner_btn2hvrtextcolor',
    	array(
			'default' => $bannerbtn2hvrtextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'banner_btn2hvrtextcolor',
		array(
		    'label'   		=> __('Button 2 Hover Text Color','home-decor-style'),
		    'section'		=> 'bannerimg_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// banner btn2hvrbg Color 
	$bannerbtn2hvrbgcolor = esc_html__('#101828', 'home-decor-style' );
	$wp_customize->add_setting(
    	'banner_btn2hvrbgcolor',
    	array(
			'default' => $bannerbtn2hvrbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'banner_btn2hvrbgcolor',
		array(
		    'label'   		=> __('Button 2 Hover BG Color','home-decor-style'),
		    'section'		=> 'bannerimg_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// banner featuresnumber Color 
	$bannerfeaturesnumbercolor = esc_html__('#000', 'home-decor-style' );
	$wp_customize->add_setting(
    	'banner_featuresnumbercolor',
    	array(
			'default' => $bannerfeaturesnumbercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'banner_featuresnumbercolor',
		array(
		    'label'   		=> __('Features Number Color','home-decor-style'),
		    'section'		=> 'bannerimg_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// banner featurestext Color 
	$bannerfeaturestextcolor = esc_html__('#4a5565', 'home-decor-style' );
	$wp_customize->add_setting(
    	'banner_featurestextcolor',
    	array(
			'default' => $bannerfeaturestextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'banner_featurestextcolor',
		array(
		    'label'   		=> __('Features Text Color','home-decor-style'),
		    'section'		=> 'bannerimg_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// banner imageboxbg Color 
	$bannerimageboxbgcolor = esc_html__('#fff', 'home-decor-style' );
	$wp_customize->add_setting(
    	'banner_imageboxbgcolor',
    	array(
			'default' => $bannerimageboxbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'banner_imageboxbgcolor',
		array(
		    'label'   		=> __('Image Box BG Color','home-decor-style'),
		    'section'		=> 'bannerimg_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// banner imageboxtext1 Color 
	$bannerimageboxtext1color = esc_html__('#4a5565', 'home-decor-style' );
	$wp_customize->add_setting(
    	'banner_imageboxtext1color',
    	array(
			'default' => $bannerimageboxtext1color,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'banner_imageboxtext1color',
		array(
		    'label'   		=> __('Image Box Text 1 Color','home-decor-style'),
		    'section'		=> 'bannerimg_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// banner imageboxtext2 Color 
	$bannerimageboxtext2color = esc_html__('#000', 'home-decor-style' );
	$wp_customize->add_setting(
    	'banner_imageboxtext2color',
    	array(
			'default' => $bannerimageboxtext2color,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'banner_imageboxtext2color',
		array(
		    'label'   		=> __('Image Box Text 2 Color','home-decor-style'),
		    'section'		=> 'bannerimg_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// banner imageboxtext3 Color 
	$bannerimageboxtext3color = esc_html__('#4a5565', 'home-decor-style' );
	$wp_customize->add_setting(
    	'banner_imageboxtext3color',
    	array(
			'default' => $bannerimageboxtext3color,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'banner_imageboxtext3color',
		array(
		    'label'   		=> __('Image Box Text 3 Color','home-decor-style'),
		    'section'		=> 'bannerimg_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// layout setting
	$wp_customize->add_setting('banner_section_width',array(
        'default' => 'Box Width',
        'sanitize_callback' => 'homedecorstyle_sanitize_choices',
    ));
    $wp_customize->add_control('banner_section_width',array(
        'type' => 'select',
        'label' => __('Section Width','home-decor-style'),
        'choices' => array (
            'Box Width' => __('Box Width','home-decor-style'),
            'Full Width' => __('Full Width','home-decor-style')
        ),
        'section' => 'bannerimg_setting',
    ));

	
	/*=========================================
	collection Section
	=========================================*/
	$wp_customize->add_section(
		'collection_setting', array(
			'title' => esc_html__( 'Collection Section', 'home-decor-style' ),
			'description'=> __('<a>Note :</a> Image Size Should Be 800*600','home-decor-style'),
			'priority' => 1,
			'panel' => 'homedecorstyle_frontpage_sections',
		)
	);



	$wp_customize->add_setting('homedecorstyle_collection_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new homedecorstyle_Tab_Control($wp_customize, 'homedecorstyle_collection_tabs', array(
	   'section' => 'collection_setting',
	   'priority' => 2,
	   'buttons' => array(
	      array(
         	'name' => esc_html__('General', 'home-decor-style'),
            'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
				'collection_disable_section',
            	'collection_subheading',
				'collection_heading',
				'collection_description'
				
            ),
            'active' => true,
         ), 
	      array(
            'name' => esc_html__('Style', 'home-decor-style'),
        	'icon' => 'dashicons dashicons-art',
            'fields' => array(
                'collection_subheadingcolor',
				'collection_headingcolor',
				'collection_descriptioncolor',
				'collection_categorynamecolor',
				'collection_categoryproductcountcolor'
            ),
     	),
		 array(
		   'name' => esc_html__('Layout', 'home-decor-style'),
		   'icon' => 'dashicons dashicons-layout',
		   'fields' => array(
			   'collection_section_width',
			   'homedecorstyle_collection_padding',
			   'homedecorstyle_collection_top_padding',
			   'homedecorstyle_collection_bottom_padding'
		   ),
		)
    	),
	))); 


	// General Tab

	// hide show collection section
	$wp_customize->add_setting(
        'collection_disable_section',
        array(
            'sanitize_callback' => 'wp_kses_post',
        )
    ); 
    $wp_customize->add_control(
        new homedecorstyle_Toggle_Switch_Custom_Control(
            $wp_customize,
            'collection_disable_section',
            array(
                'settings'      => 'collection_disable_section',
                'section'       => 'collection_setting',
                'label'         => __( 'Disable Section', 'home-decor-style' ),
                'on_off_label'  => array(
                    'on' => __( 'Yes', 'home-decor-style' ),
                    'off' => __( 'No', 'home-decor-style' )
                ),
            )
        )
    );

	// collection subheading
	$collectionsubheading = esc_html__('SHOP BY ROOM', 'home-decor-style' );
	$wp_customize->add_setting(
    	'collection_subheading',
    	array(
			'default' => $collectionsubheading,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'collection_subheading',
		array(
		    'label'   		=> __('Collection Sub Heading','home-decor-style'),
		    'section'		=> 'collection_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// collection heading
	$collectionheading = esc_html__('Curated Collections', 'home-decor-style' );
	$wp_customize->add_setting(
    	'collection_heading',
    	array(
			'default' => $collectionheading,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'collection_heading',
		array(
		    'label'   		=> __('Collection Heading','home-decor-style'),
		    'section'		=> 'collection_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// collection description
	$collectiondescription = esc_html__('Transform every room in your home with our thoughtfully designed furniture pieces', 'home-decor-style' );
	$wp_customize->add_setting(
    	'collection_description',
    	array(
			'default' => $collectiondescription,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'collection_description',
		array(
		    'label'   		=> __('Collection Description','home-decor-style'),
		    'section'		=> 'collection_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	//style

	// collection subheading Color 
	$collectionsubheadingcolor = esc_html__('#6a7282', 'home-decor-style' );
	$wp_customize->add_setting(
    	'collection_subheadingcolor',
    	array(
			'default' => $collectionsubheadingcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'collection_subheadingcolor',
		array(
		    'label'   		=> __('Sub Heading Color','home-decor-style'),
		    'section'		=> 'collection_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// collection heading Color 
	$collectionheadingcolor = esc_html__('#0a0a0a', 'home-decor-style' );
	$wp_customize->add_setting(
    	'collection_headingcolor',
    	array(
			'default' => $collectionheadingcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'collection_headingcolor',
		array(
		    'label'   		=> __('Heading Color','home-decor-style'),
		    'section'		=> 'collection_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// collection description Color 
	$collectiondescriptioncolor = esc_html__('#4a5565', 'home-decor-style' );
	$wp_customize->add_setting(
    	'collection_descriptioncolor',
    	array(
			'default' => $collectiondescriptioncolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'collection_descriptioncolor',
		array(
		    'label'   		=> __('Heading Color','home-decor-style'),
		    'section'		=> 'collection_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// collection categoryname Color 
	$collectioncategorynamecolor = esc_html__('#000', 'home-decor-style' );
	$wp_customize->add_setting(
    	'collection_categorynamecolor',
    	array(
			'default' => $collectioncategorynamecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'collection_categorynamecolor',
		array(
		    'label'   		=> __('Category Name Color','home-decor-style'),
		    'section'		=> 'collection_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// collection categoryproductcount Color 
	$collectioncategoryproductcountcolor = esc_html__('#4a5565', 'home-decor-style' );
	$wp_customize->add_setting(
    	'collection_categoryproductcountcolor',
    	array(
			'default' => $collectioncategoryproductcountcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'collection_categoryproductcountcolor',
		array(
		    'label'   		=> __('Category Product Count Color','home-decor-style'),
		    'section'		=> 'collection_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	
	// layout setting
	$wp_customize->add_setting('collection_section_width',array(
        'default' => 'Box Width',
        'sanitize_callback' => 'homedecorstyle_sanitize_choices',
    ));
    $wp_customize->add_control('collection_section_width',array(
        'type' => 'select',
        'label' => __('Section Width','home-decor-style'),
        'choices' => array (
            'Box Width' => __('Box Width','home-decor-style'),
            'Full Width' => __('Full Width','home-decor-style')
        ),
        'section' => 'collection_setting',
    ));


    // collection section padding 
	$wp_customize->add_setting('homedecorstyle_collection_padding',array(
		'sanitize_callback'   => 'esc_html'
	));
	$wp_customize->add_control('homedecorstyle_collection_padding',array(
		'label' => __('Section Padding','home-decor-style'),
		'section' => 'collection_setting'
	));

	$wp_customize->add_setting('homedecorstyle_collection_top_padding',array(
		'default' => '5',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('homedecorstyle_collection_top_padding',array(
		'type' => 'number',
		'label' => __('Top','home-decor-style'),
		'section' => 'collection_setting',
	));

		$wp_customize->add_setting('homedecorstyle_collection_bottom_padding',array(
		'default' => '2',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('homedecorstyle_collection_bottom_padding',array(
		'type' => 'number',
		'label' => __('Bottom','home-decor-style'),
		'section' => 'collection_setting',
	));
	


	/*=========================================
	featured Section
	=========================================*/
	$wp_customize->add_section(
		'featured_setting', array(
			'title' => esc_html__( 'Featured Product Section', 'home-decor-style' ),
			'description'=> __('<a>Note :</a> Image Size Should Be 800*600','home-decor-style'),
			'priority' => 1,
			'panel' => 'homedecorstyle_frontpage_sections',
		)
	);


	$wp_customize->add_setting('homedecorstyle_featured_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new homedecorstyle_Tab_Control($wp_customize, 'homedecorstyle_featured_tabs', array(
	   'section' => 'featured_setting',
	   'priority' => 2,
	   'buttons' => array(
	      array(
         	'name' => esc_html__('General', 'home-decor-style'),
            'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
				'feature_disable_section',
				'featured_subheading',
            	'featured_heading'
            ),
            'active' => true,
         ), 
	      array(
            'name' => esc_html__('Style', 'home-decor-style'),
        	'icon' => 'dashicons dashicons-art',
            'fields' => array(
                'featuredproduct_subheadingcolor',
				'featuredproduct_headingcolor',
				'featuredproduct_headcategorytextcolor',
				'featuredproduct_headcategoryactivetextcolor',
				'featuredproduct_headcategoryactivebgcolor',
				'featuredproduct_categorycolor',
				'featured_titlecolor',
				'featured_salepricecolor'
            ),
     	),
		 array(
		   'name' => esc_html__('Layout', 'home-decor-style'),
		   'icon' => 'dashicons dashicons-layout',
		   'fields' => array(
			   'featured_section_width',
			   'homedecorstyle_featured_padding',
			   'homedecorstyle_featured_top_padding',
			   'homedecorstyle_featured_bottom_padding'
		   ),
		)

    	),
	))); 


	// General Tab

	// hide show feature section
	$wp_customize->add_setting(
        'feature_disable_section',
        array(
            'sanitize_callback' => 'wp_kses_post',
        )
    ); 
    $wp_customize->add_control(
        new homedecorstyle_Toggle_Switch_Custom_Control(
            $wp_customize,
            'feature_disable_section',
            array(
                'settings'      => 'feature_disable_section',
                'section'       => 'featured_setting',
                'label'         => __( 'Disable Section', 'home-decor-style' ),
                'on_off_label'  => array(
                    'on' => __( 'Yes', 'home-decor-style' ),
                    'off' => __( 'No', 'home-decor-style' )
                ),
            )
        )
    );

	// featured_subheading
	$featuredsubheading = esc_html__('TRENDING NOW', 'home-decor-style' );
	$wp_customize->add_setting(
    	'featured_subheading',
    	array(
			'default' => $featuredsubheading,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'featured_subheading',
		array(
		    'label'   		=> __('Sub Heading','home-decor-style'),
		    'section'		=> 'featured_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// featured heading
	$featuredheading = esc_html__('Best Sellers', 'home-decor-style' );
	$wp_customize->add_setting(
    	'featured_heading',
    	array(
			'default' => $featuredheading,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'featured_heading',
		array(
		    'label'   		=> __('Heading','home-decor-style'),
		    'section'		=> 'featured_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	//style

	// featuredproduct_subheadingcolor 
	$featuredproductsubheadingcolor = esc_html__('#6a7282', 'home-decor-style' );
	$wp_customize->add_setting(
    	'featuredproduct_subheadingcolor',
    	array(
			'default' => $featuredproductsubheadingcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'featuredproduct_subheadingcolor',
		array(
		    'label'   		=> __('Heading Color','home-decor-style'),
		    'section'		=> 'featured_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// featuredproduct_headingcolor 
	$featuredproductheadingcolor = esc_html__('#000', 'home-decor-style' );
	$wp_customize->add_setting(
    	'featuredproduct_headingcolor',
    	array(
			'default' => $featuredproductheadingcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'featuredproduct_headingcolor',
		array(
		    'label'   		=> __('Heading Color','home-decor-style'),
		    'section'		=> 'featured_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// featuredproduct_headcategorytextcolor 
	$featuredproductheadingcolor = esc_html__('#000', 'home-decor-style' );
	$wp_customize->add_setting(
    	'featuredproduct_headcategorytextcolor',
    	array(
			'default' => $featuredproductheadingcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'featuredproduct_headcategorytextcolor',
		array(
		    'label'   		=> __('Head Category Text Color','home-decor-style'),
		    'section'		=> 'featured_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// featuredproduct_headcategoryactivetextcolor 
	$featuredproductheadingcolor = esc_html__('#fff', 'home-decor-style' );
	$wp_customize->add_setting(
    	'featuredproduct_headcategoryactivetextcolor',
    	array(
			'default' => $featuredproductheadingcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'featuredproduct_headcategoryactivetextcolor',
		array(
		    'label'   		=> __('Head Category Active Text Color','home-decor-style'),
		    'section'		=> 'featured_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// featuredproduct_headcategoryactivebgcolor 
	$featuredproductheadingcolor = esc_html__('#000', 'home-decor-style' );
	$wp_customize->add_setting(
    	'featuredproduct_headcategoryactivebgcolor',
    	array(
			'default' => $featuredproductheadingcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'featuredproduct_headcategoryactivebgcolor',
		array(
		    'label'   		=> __('Head Category Active BG Color','home-decor-style'),
		    'section'		=> 'featured_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// featuredproduct_categorycolor 
	$featuredproductheadingcolor = esc_html__('#6a7282', 'home-decor-style' );
	$wp_customize->add_setting(
    	'featuredproduct_categorycolor',
    	array(
			'default' => $featuredproductheadingcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'featuredproduct_categorycolor',
		array(
		    'label'   		=> __('Category Color','home-decor-style'),
		    'section'		=> 'featured_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// featured title Color 
	$featuredtitlecolor = esc_html__('#000', 'home-decor-style' );
	$wp_customize->add_setting(
    	'featured_titlecolor',
    	array(
			'default' => $featuredtitlecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'featured_titlecolor',
		array(
		    'label'   		=> __('Product Title Color','home-decor-style'),
		    'section'		=> 'featured_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// featured saleprice Color 
	$featuredsalepricecolor = esc_html__('#000', 'home-decor-style' );
	$wp_customize->add_setting(
    	'featured_salepricecolor',
    	array(
			'default' => $featuredsalepricecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'featured_salepricecolor',
		array(
		    'label'   		=> __('Product Price Color','home-decor-style'),
		    'section'		=> 'featured_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// layout setting
	$wp_customize->add_setting('featured_section_width',array(
        'default' => 'Box Width',
        'sanitize_callback' => 'homedecorstyle_sanitize_choices',
    ));
    $wp_customize->add_control('featured_section_width',array(
        'type' => 'select',
        'label' => __('Section Width','home-decor-style'),
        'choices' => array (
            'Box Width' => __('Box Width','home-decor-style'),
            'Full Width' => __('Full Width','home-decor-style')
        ),
        'section' => 'featured_setting',
    ));
	


	// featured section padding 
	$wp_customize->add_setting('homedecorstyle_featured_padding',array(
		'sanitize_callback'   => 'esc_html'
	));
	$wp_customize->add_control('homedecorstyle_featured_padding',array(
		'label' => __('Section Padding','home-decor-style'),
		'section' => 'featured_setting'
	));

	$wp_customize->add_setting('homedecorstyle_featured_top_padding',array(
		'default' => '2',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('homedecorstyle_featured_top_padding',array(
		'type' => 'number',
		'label' => __('Top','home-decor-style'),
		'section' => 'featured_setting',
	));

		$wp_customize->add_setting('homedecorstyle_featured_bottom_padding',array(
		'default' => '2',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('homedecorstyle_featured_bottom_padding',array(
		'type' => 'number',
		'label' => __('Bottom','home-decor-style'),
		'section' => 'featured_setting',
	));

	$wp_customize->register_control_type('homedecorstyle_Tab_Control');

}

add_action( 'customize_register', 'homedecorstyle_blog_setting' );

// service selective refresh
function homedecorstyle_blog_section_partials( $wp_customize ){	
	// blog_title
	$wp_customize->selective_refresh->add_partial( 'blog_title', array(
		'selector'            => '.home-blog .title h6',
		'settings'            => 'blog_title',
		'render_callback'  => 'homedecorstyle_blog_title_render_callback',
	
	) );
	
	// blog_subtitle
	$wp_customize->selective_refresh->add_partial( 'blog_subtitle', array(
		'selector'            => '.home-blog .title h2',
		'settings'            => 'blog_subtitle',
		'render_callback'  => 'homedecorstyle_blog_subtitle_render_callback',
	
	) );
	
	// blog_description
	$wp_customize->selective_refresh->add_partial( 'blog_description', array(
		'selector'            => '.home-blog .title p',
		'settings'            => 'blog_description',
		'render_callback'  => 'homedecorstyle_blog_description_render_callback',
	
	) );	
	}

add_action( 'customize_register', 'homedecorstyle_blog_section_partials' );

// blog_title
function homedecorstyle_blog_title_render_callback() {
	return get_theme_mod( 'blog_title' );
}

// blog_subtitle
function homedecorstyle_blog_subtitle_render_callback() {
	return get_theme_mod( 'blog_subtitle' );
}

// service description
function homedecorstyle_blog_description_render_callback() {
	return get_theme_mod( 'blog_description' );
}


