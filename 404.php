<?php get_header(); ?>
	
	<div id="content" class="site-content">
		<div class="container clr">
			<main id="main" role="main">
				<div class="hentry">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Page not found', 'fastbiz' ); ?></h1>
					</header>
					
					<div class="entry-content">
						<p><?php _e( 'The page you&rsquo;re looking for couldn&rsquo;t be found. It may have ben removed or moved elsewhere. Perhaps try a search.', 'fastbiz' ); ?></p>
					
						<?php get_search_form(); ?>
					</div>
				</div>
			</main>
		</div>
	</div>
	
<?php get_footer(); ?>