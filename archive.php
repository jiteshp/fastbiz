<?php get_header(); ?>

<div id="site-content">
	<header id="page-header">
		<div class="container">
			<?php the_archive_title( '<h1 id="page-title">', '</h1>' ); ?>
		</div>
	</header>
	
	<div class="container clr">
		<main id="main" role="main">
			<?php
				if( have_posts() ):
					while( have_posts() ):
						the_post();
						get_template_part( 'template-parts/content' );
					endwhile;
					
					the_posts_navigation();
				else:
					get_template_part( 'template-parts/content', 'none' );
				endif;
			?>
		</main>
		
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>