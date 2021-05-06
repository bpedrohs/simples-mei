<?php
/**
 * The template part for displaying content from categories, tags, authors and date
 *
 * @package Simples Mei
 */
?>

<article <?php post_class(); ?>>
	<h2>
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</h2>
	<div class="post-thumbnail">
		<?php 
			if( has_post_thumbnail() ):
				the_post_thumbnail( 'simples-mei-blog', array( 'class' => 'img-fluid' ) );
			endif;
		?>
	</div>
	<div class="meta">
		<p><?php esc_html_e( 'Published by', 'simples-mei' ); ?> <?php the_author_posts_link(); ?> <?php esc_html_e( 'on', 'simples-mei' ); ?> <?php echo esc_html( get_the_date() ); ?>
		<br />
		<?php if( has_category() ): ?>
			<?php esc_html_e( 'Categories', 'simples-mei' ); ?>: <span><?php the_category( ' ' ); ?></span>
		<?php endif; ?>
		<br />
		<?php if( has_tag() ): ?>
			<?php esc_html_e( 'Tags', 'simples-mei' ); ?>: <span><?php the_tags( '', ', ' ); ?></span>
		<?php endif; ?>
		</p>
	</div>
	<div><?php the_excerpt(); ?></div>
</article>