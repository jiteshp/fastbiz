<article id="entry-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if( is_sticky() ): ?>
			<div class="entry-sticky uppercase">
				<?php _e( 'Featured', 'fastbiz' ); ?>
			</div>
		<?php endif; ?>
		
		<?php 
			the_title(
				sprintf( '<h2 class="entry-title h1"><a href="%s" rel="bookmark">',
					esc_url( get_permalink() )
				),
				'</a></h2>'
			);
		?>
		
		<p class="entry-meta">
			<span class="entry-author">
				<?php _e( 'by ', 'fastbiz' ); the_author_link(); ?>
			</span>
			
			<span class="entry-time">
				<?php _e( 'on ', 'fastbiz' ); ?>
				<a href="<?php the_permalink(); ?>"><?php the_time( 'F j, Y' ); ?></a>
			</span>
			
			<span class="entry-category">
				<?php _e( 'in ', 'fastbiz' ); the_category( ', ' ); ?>
			</span>
		</p>
	</header>
	
	<div class="entry-content">
		<?php the_content( 'Read More' ); ?>
	</div>
</article>