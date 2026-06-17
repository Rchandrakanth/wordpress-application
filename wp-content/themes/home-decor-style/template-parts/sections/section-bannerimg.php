<section class="bannerimg-section">
    <div class="<?php if(esc_attr(get_theme_mod('banner_section_width','Box Width')) == 'Full Width'){ ?>container-fluid pd-0 <?php } elseif(esc_attr(get_theme_mod('banner_section_width','Box Width')) == 'Box Width'){ ?> container <?php }?>">

        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="content">
                    <h5><?php echo esc_html(get_theme_mod('banner_section_subheading', 'Winter Collection 2024')); ?></h5> 
                    <h3><?php echo esc_html(get_theme_mod('banner_section_heading1', 'Design Your Dream Space')); ?></h3>
                    <p><?php echo esc_html(get_theme_mod('banner_section_description', 'Discover our curated collection of contemporary furniture that blends timeless elegance with modern functionality.')); ?></p>
                    <div class="buttons">
                        <a class= "btn-1primary" href="<?php echo esc_html(get_theme_mod('banner_section_btn1_link', '#')); ?>">
                            <?php echo esc_html(get_theme_mod('banner_section_btn1_text', 'Explore Collection')); ?><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-5 h-5 group-hover:translate-x-1 transition-transform"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
                        </a>
                        <a class= "btn-2primary" href="<?php echo esc_html(get_theme_mod('banner_section_btn2_link', '#')); ?>">
                            <?php echo esc_html(get_theme_mod('banner_section_btn2_text', 'View Lookbook')); ?>
                        </a>
                    </div>
                    <div class="banner-features">
                        <div class="row">
                        <div class="products">
                            <h6><?php echo esc_html(get_theme_mod('banner_section_feature_productnum', '158+')); ?></h6>
                            <p><?php echo esc_html(get_theme_mod('banner_section_feature_producttext', 'Products')); ?></p>
                        </div>
                        <div class="happycustomer products">
                            <h6><?php echo esc_html(get_theme_mod('banner_section_feature_happycustomernum', '5,000+')); ?></h6>
                            <p><?php echo esc_html(get_theme_mod('banner_section_feature_happycustomertext', 'Happy Customers')); ?></p>
                        </div>
                        <div class="rating products">
                            <h6><?php echo esc_html(get_theme_mod('banner_section_feature_ratingnum', '1')); ?></h6>
                            <p><?php echo esc_html(get_theme_mod('banner_section_feature_ratingtext', 'Average Rating')); ?></p>
                        </div>
                    </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="image">
                    <?php 
                        $bannerimgsection_image = get_theme_mod('bannerimgsection_image'); 

                        if(!empty($bannerimgsection_image)){
                            echo '<img alt="'. esc_html(get_the_title()) .'" src="'.esc_url($bannerimgsection_image).'" class="peccular-bannerimg-imgboxshape" />';
                        }else{
                            echo '<img src="'.get_template_directory_uri().'/assets/images/bannerimg.png" />';
                        }
                    ?>   
                    <div class="offerbox">
                        <h4><?php echo esc_html(get_theme_mod('banner_section_imageoffer_text1', 'Limited Time Offer')); ?></h4>
                        <h2><?php echo esc_html(get_theme_mod('banner_section_imageoffer_text2', 'Up to 40% Off')); ?></h2>
                        <h6><?php echo esc_html(get_theme_mod('banner_section_imageoffer_text3', 'On selected items')); ?></h6>
                    </div>                
                </div>
                
            </div>
        </div>
    </div>
</section>
