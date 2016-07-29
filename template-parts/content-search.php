<article id="entry-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php 
		the_title( '<header class="entry-header">' .
			sprintf( '<h2><a href="%s" rel="bookmark">',
				esc_url( get_permalink() )
			),
			'</a></h2></header>'
		);
	?>
	
	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div>
</article>