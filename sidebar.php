<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package Simples Mei
 */
?>
<?php if( is_active_sidebar( 'simples-mei-sidebar-1' ) ): ?>
	<aside class="col-lg-3 col-md-4 col-12 h-100">
		<?php dynamic_sidebar( 'simples-mei-sidebar-1' ) ?>
	</aside>
<?php endif;