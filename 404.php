<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Simples Mei
 */

get_header(); ?>
<div class="content-area">
	<main>
		<div class="container">
			<div class="error-404">
				<header class="text-center">
					<h1><?php _e( 'Page not found', 'simples-mei' ); ?></h1>
					<p><?php _e( 'Unfortunately, the page you tried to reach does not exist.', 'simples-mei' ); ?></p>
				</header>
			</div>
		</div>
	</main>
</div>
<?php get_footer(); ?>