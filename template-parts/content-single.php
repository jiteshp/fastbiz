<article id="entry-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if( is_sticky() ): ?>
			<div class="entry-sticky uppercase">
				<?php _e( 'Featured', 'fastbiz' ); ?>
			</div>
		<?php endif; ?>
		
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		
		<p class="entry-meta">
			<span class="entry-author">
				<?php _e( 'By ', 'fastbiz' ); the_author_link(); ?>
			</span>
			
			<span class="entry-time">
				<?php _e( 'on ', 'fastbiz' ); the_time( 'F j, Y' ); ?>
			</span>
			
			<span class="entry-category">
				<?php _e( 'in ', 'fastbiz' ); the_category( ', ' ); ?>
			</span>
		</p>
	</header>
	
	<div class="entry-content">
		<?php 
			the_content(); 
			
			wp_link_pages();
		?>
	</div>
	
	<?php
		the_tags(  
			'<footer class="entry-meta entry-tags">' . __( 'Tags: ', 'fastbiz' ),
			', ',
			'</footer>'
		);
	?>
</article>