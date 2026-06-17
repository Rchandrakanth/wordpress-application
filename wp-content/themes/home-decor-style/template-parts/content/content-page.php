<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Home Decor Style
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class('blog-item'); ?>>	
	
	<?php if ( has_post_thumbnail() ) : ?>
		<a href="<?php echo esc_url( get_permalink() ); ?>" class="blog-image-link">
			<?php the_post_thumbnail(
				'single-post-thumbnail',
				array(
					'class' => 'blog-image-img',
					'alt'   => the_title_attribute( array( 'echo' => false ) ),
				)
			); ?>
		</a>
	<?php endif; ?>
	
	<div class="blog-content">
	<h6 class="theme-button"><i class="fa fa-calendar-o"></i> <?php echo esc_html(get_the_date('M ')); echo esc_html(get_the_date('j'));?>,<?php echo esc_html(get_the_date(' Y')); ?></h6>

		<?php 
			if ( is_single() ) :
				
			the_title('<h4 class="post-title">', '</h4>' );
			
			else:
			
			the_title( sprintf( '<h4 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' );
			
			endif; 
			
			the_content( 
					sprintf( 
						__( 'Read More', 'home-decor-style' ), 
						'<span class="screen-reader-text">  '.esc_html(get_the_title()).'</span>' 
					) 
				);
		?>
		<a class="btn_blog" href="<?php echo esc_url( get_permalink() ); ?>"><?php esc_html_e( 'More Details', 'home-decor-style' ); ?> <i class="fa-solid fa-right-long"></i></a>
	</div>
	
</div>