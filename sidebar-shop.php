<?php
/**
 * The template for the sidebar containing the WooCommerce shop widget area
 *
 * @package Simples Mei
 */
?>
<?php if( is_active_sidebar( 'simples-mei-sidebar-shop' ) ): ?>
	<?php dynamic_sidebar( 'simples-mei-sidebar-shop' ) ?>
<?php endif;