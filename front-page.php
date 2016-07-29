<?php
if( 'posts' == get_option( 'show_on_front' ) ):
	include( get_home_template() );
else:
	get_header(); ?>

	<div id="site-content" class="clr">
		<?php while( have_posts() ): the_post(); ?>
			<main id="main" role="main">
				<section class="parent" style="background-image: url( '<?php fbm_featured_image_url(); ?>' )">
					<div class="container">
						<?php get_template_part( 'template-parts/content', 'page' ); ?>
					</div>
				</section>
				
				<?php
					$child_pages = new WP_Query( array(
						'no_found_rows'  => true,
						'order'  		 => 'ASC',
						'orderby'  		 => 'menu_order',
						'post_parent' 	 => $post->ID,
						'post_type' 	 => 'page',
						'posts_per_page' => -1,
					) );
					
					while( $child_pages->have_posts() ): $child_pages->the_post(); ?>
						<section class="child">
							<div class="container">
								<?php get_template_part( 'template-parts/content', 'page-child' ); ?>
							</div>
						</section>
					<?php endwhile;
					
					wp_reset_postdata();
				?>
			</main>
		<?php endwhile; ?>
	</div>

	<?php get_footer(); 
endif;