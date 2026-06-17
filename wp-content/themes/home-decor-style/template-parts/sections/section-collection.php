<section id="collection-section" class="ht-section">
    <div class="<?php if(esc_attr(get_theme_mod('collection_section_width','Box Width')) == 'Full Width'){ ?>container-fluid pd-0 <?php } elseif(esc_attr(get_theme_mod('collection_section_width','Box Width')) == 'Box Width'){ ?> container <?php }?>">
        
        <div class="section-title">
            <div class="sub-title"><?php echo esc_html(get_theme_mod('collection_subheading', 'SHOP BY ROOM')); ?></div>
            <h2 class="main-title"><?php echo esc_html(get_theme_mod('collection_heading', 'Curated Collections')); ?></h2>
            <div class="htext"><?php echo esc_html(get_theme_mod('collection_description', 'Transform every room in your home with our thoughtfully designed furniture pieces')); ?></div>
        </div>
        

        <?php
        if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) {
        ?>
            <div class="row">
                <!-- <div class="swiper-wrapper"> -->
                    <?php
                    $args = array(
                        'number'     => 0,
                        'orderby'    => 'title',
                        'order'      => 'ASC',
                        'hide_empty' => false,
                    );
                    $product_categories = get_terms('product_cat', $args);

                    if (!empty($product_categories)) {
                        foreach ($product_categories as $product_category) {
                            $thumbnail_id = get_term_meta($product_category->term_id, 'thumbnail_id', true);
                            $image = $thumbnail_id ? wp_get_attachment_url($thumbnail_id) : esc_html(get_template_directory_uri()) . '/assets/images/default.png';
                           $product_count = $product_category->count;
     
                            echo '<div class="catbox">';
                            echo '<div class="pro-cat-img">';
                            echo '<a href="' . get_term_link($product_category) . '" data-hover="' . esc_attr($product_category->name) . '">';
                            echo '<img src="' . esc_url($image) . '" alt="' . esc_attr($product_category->name) . '" />';
                            echo '<div class="p_oly"></div>';
                            echo '<div class="btnbx">';
                            echo '<p class="btnitm">' . esc_html( $product_count ) . ' Item</p>';
                           echo '<div class="btntxt">Shop Now 
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4">
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                </svg>
                                </div>';
                            echo '</div>';
                            echo '</a>';
                            echo '</div>';
                            echo '<div class="pro-cat-content">';
                            echo '<h5>';
                            echo '<a href="' . get_term_link($product_category) . '" target="_blank" data-hover="' . esc_attr($product_category->name) . '">';
                            echo '<span>' . esc_html($product_category->name) . '</span>';
                            echo '</a>';

                            echo '</h5>';

                            echo '<p>' . esc_html( $product_count ) . ' Products</p>';

                            
                           
                            echo '</div>';
                            echo '</div>';
                             
                        }
                    }
                    ?>
                <!-- </div> -->
                <div class="clearfix"></div>
            </div>
        <?php } ?>
    </div>
</section>