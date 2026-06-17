<?php
/**
 * side bar template
 *
 * @package Home Decor Style
 */
?>
<?php if ( ! is_active_sidebar( 'home-decor-style-woocommerce-sidebar' ) ) {	return; } ?>
<div class="col-lg-4 pl-lg-4 my-5 order-0">
	<div class="sidebar">
		<?php dynamic_sidebar('home-decor-style-woocommerce-sidebar'); ?>
	</div>
</div>