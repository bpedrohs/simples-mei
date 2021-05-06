<?php
/**
 * The template part for displaying content
 *
 * @package Simples Mei
 */
?>

	<article class="entry" <?php post_class(); ?> data-aos="zoom-in" data-aos-delay="200">
		<div class="row">
			<div class="col-12">
				<h1 class="title-blog"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			</div>
			<div class="col-12 col-lg-6">
				
				<div class="post-thumbnail">
					<?php if( has_post_thumbnail() ): ?>
						<a href="<?php the_permalink() ?>">
							<?php the_post_thumbnail( 'simples-mei-blog', array( 'class' => 'img-fluid' ) ); ?>
						</a>
					<?php endif; ?>
					
				</div>
			</div>
			
			<div class="col-12 col-lg-6 text-left">
				<div class="meta">
					<p>
							<?php echo esc_html( get_the_date() ); ?><br />
						<?php if( has_category() ): ?>
							<span class="text-category"><?php esc_html_e( 'Categories', 'simples-mei' ); ?>: <span class="name-category"><?php the_category( ' ' ); ?></span></span>
						<?php endif; ?>
						<br />
						<?php if( has_tag() ): ?>
							<?php esc_html_e( 'Tags', 'simples-mei' ); ?>: <span><?php the_tags( '', ', ' ); ?></span>
						<?php endif; ?>
					</p>
				</div>

				<div class="the-excerpt">
					
					<?php
						the_excerpt(); 
					?>
					
				</div>

			</div>
		</div>

	</article>
	
	