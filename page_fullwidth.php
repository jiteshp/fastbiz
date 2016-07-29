<?php 
/**
 *	Template name: Full Width Template
 */
get_header(); ?>

<div id="site-content">
	<div class="container clr">
		<main id="main" role="main">
			<?php
				while( have_posts() ):
					the_post();
					get_template_part( 'template-parts/content', 'page' );

					if( comments_open() || get_comments_number() ):
						comments_template();
					endif;
				endwhile;
			?>
		</main>
	</div>
</div>

<?php get_footer(); ?>