<article id="entry-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php 
		the_title( 
			'<header class="entry-header"><h2 class="entry-title h1">', 
			'</h2></header>' 
		); 
	?>
	
	<div class="entry-content">
		<?php the_content(); ?>
	</div>
</article>