<?php
/**
 * The template part for displaying content
 *
 * @package Simples Mei
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
    <header>
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
		
		<div class="post-thumbnail">
			<?php if( has_post_thumbnail() ): ?>
				
                <?php the_post_thumbnail( 'simples-mei-blog', array( 'class' => 'img-fluid' ) ); ?>
				
			<?php endif; ?>
			
        </div>

    </header>    
    
    <div class="the-excerpt">
        <?php the_content(); ?>
    </div>
    <?php 
        wp_link_pages(
            array(
                'before'		=> '<p class="inner-pagination">' . esc_html__( 'Pages', 'simples-mei' ),
                'after'			=> '</p>',
            )
        );
    ?>
    
</article>