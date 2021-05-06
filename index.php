<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Simples Mei
 */

get_header();
?>

<main>
	<div class="container" data-aos="fade-up">
		<div class="row">
			<div class="col-12">
				<?php
				$slug = 'destaque';
				$cat = get_category_by_slug($slug);
				$catID = $cat->term_id;

				$slug2 = 'destaque-alterar-mei';
				$cat2 = get_category_by_slug($slug2);
				$catID2 = $cat2->term_id;

				$slug3 = 'destaque-cancelar-mei';
				$cat3 = get_category_by_slug($slug3);
				$catID3 = $cat3->term_id;

				$slug4 = 'depoimentos';
				$cat4 = get_category_by_slug($slug4);
				$catID4 = $cat4->term_id;
				
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

				$args = array(
					'post_type' => 'post',
					'post_status' => 'publish',
					'category__not_in' => array($catID, $catID2, $catID3, $catID4),
					'paged' => $paged
				);

				$query = new WP_Query($args);

				if ($query->have_posts()) :
					while ($query->have_posts()) : $query->the_post();

						get_template_part('template-parts/content');

					endwhile;

				?>
					<div id="news-navigation">
						<?php
						$GLOBALS['wp_query']->max_num_pages = $query->max_num_pages;
						the_posts_pagination(array(
							'mid_size' => 3,
							'prev_text' => __('<<', 'welsh-womens-aid'),
							'next_text' => __('>>', 'welsh-womens-aid'),
						)); ?>

					<?php
				else :
					?>
						<p><?php _e('Nothing to display.', 'simples-mei'); ?></p>
					<?php
				endif;
					?>
					</div>
			</div>
		</div>
</main>


<?php get_footer(); ?>