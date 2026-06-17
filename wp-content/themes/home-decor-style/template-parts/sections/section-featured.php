<section id="featuredproduct-product-section" class="ht-section">
    <div class="<?php echo ( get_theme_mod('featured_section_width','Box Width') == 'Full Width' ) ? 'container-fluid pd-0' : 'container'; ?>">
        <div class="featuredproduct-posts-box">

            <!-- TITLE + CATEGORY TABS -->
            <div class="section-titlebx">
                <div class="row m-0">
                    <div class="section-title">
                        <div class="sub-title"><?php echo esc_html( get_theme_mod('featured_subheading', 'TRENDING NOW') ); ?></div>
                        <h2 class="main-title"><?php echo esc_html( get_theme_mod('featured_heading', 'Best Sellers') ); ?></h2>
                    </div>

                    <!-- CATEGORY TABS -->
                    <div class="catbx">
                        <?php
                        $terms = get_terms(array(
                            'taxonomy'   => 'product_cat',
                            'hide_empty' => false,
                        ));
                        ?>
                        <div class="all-categories-list">
                            <ul class="category-tabs">
                                <li class="active" data-cat="">All</li>
                                <?php if ( ! empty($terms) && ! is_wp_error($terms) ) : ?>
                                    <?php foreach ( $terms as $term ) : ?>
                                        <li data-cat="<?php echo esc_attr( $term->slug ); ?>">
                                            <?php echo esc_html( $term->name ); ?>
                                        </li>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PRODUCTS WRAPPER (AJAX LOAD) -->
            <div class="row m-0" id="featured-products-wrapper">
                <?php
                $meta_query = WC()->query->get_meta_query();
                $tax_query  = WC()->query->get_tax_query();
                $tax_query[] = array(
                    'taxonomy' => 'product_visibility',
                    'field'    => 'name',
                    'terms'    => 'featured',
                );

                $args = array(
                    'post_type'      => 'product',
                    'posts_per_page' => 8,
                    'orderby'        => 'date',
                    'order'          => 'DESC',
                    'meta_query'     => $meta_query,
                    'tax_query'      => $tax_query,
                );

                $loop = new WP_Query( $args );
                if ( $loop->have_posts() ) :
                    while ( $loop->have_posts() ) : $loop->the_post();
                        global $product;
                ?>
                <div class="col-lg-3 col-md-6 col-sm-6 product-bx">
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="<?php the_permalink(); ?>">
                                <?php
                                if ( has_post_thumbnail() ) {
                                    the_post_thumbnail('shop_catalog');
                                } else {
                                    echo '<img src="'.esc_url(get_template_directory_uri().'/assets/images/default.png').'" />';
                                }
                                ?>
                                
                                <div class="icnbx">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shopping-cart w-5 h-5">
                                    <circle cx="8" cy="21" r="1"></circle>
                                    <circle cx="19" cy="21" r="1"></circle>
                                    <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"></path></svg>
                                                            </div>
                                <div class="qvbtn">
                                    <?php esc_html_e('Quick View','home-decor-style'); ?>
                                </div>
                            </a>
                            
                        </div>
                        <div class="productcontent-wrap">
                            <div class="pcontent">
                                <?php
                                    $categories = get_the_terms(get_the_ID(), 'product_cat');
                                    if ($categories && !is_wp_error($categories)) {
                                        echo '<div class="product-categories">';
                                        foreach ($categories as $category) {
                                            echo '<span class="category-item">' . esc_html($category->name) . '</span>';
                                        }
                                        echo '</div>';
                                    }
                                ?>
                                <a class="add-to-cart" id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">    
                                    <h3><?php the_title(); ?></h3>
                                </a>
                                <!-- Rating -->
                                <div class="product-rating">
                                    <?php 
                                    if (wc_review_ratings_enabled()) {
                                        $avg   = $product->get_average_rating();
                                        $count = $product->get_rating_count();

                                        if ($count > 0) {
                                            echo '<div class="custom-rating-stars">';
                                            for ($i=1; $i<=5; $i++) {
                                                echo ($i <= $avg) 
                                                    ? "<span class='star full'>★</span>"
                                                    : "<span class='star empty'>☆</span>";
                                            }
                                            echo "<span class='rating-count'> ($count)</span>";
                                            echo '</div>';
                                        }
                                    }
                                    ?>
                                </div>
                                <span class="price">
                                    <?php
                                        $sale_price = $product->get_sale_price();
                                        if ($sale_price) {
                                            echo '<span class="sale-price">' . wc_price($sale_price) . '</span>';
                                        }
                                        $regular_price = $product->get_regular_price();
                                        echo '<span class="regular-price">' . wc_price($regular_price) . '</span>';
                                    ?>
                                </span>

                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; wp_reset_postdata(); endif; ?>
            </div>

        </div>
    </div>
</section>
