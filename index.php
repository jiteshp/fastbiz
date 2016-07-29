<?php get_header(); ?>

<div id="site-content">
	<?php if( is_home() && ! is_front_page() ): ?>
		<header id="page-header">
			<div class="container">
				<h1 id="page-title"><?php single_post_title(); ?></h1>
			</div>
		</header>
	<?php endif; ?>
	
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