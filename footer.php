<?php if( is_active_sidebar( 'sidebar-footer' ) ): ?>
	<aside id="sidebar-footer" role="complementary">
		<div class="container">
			<div class="row">
				<?php dynamic_sidebar( 'sidebar-footer' ); ?>
			</div>
		</div>
	</aside>
<?php endif; ?>

<footer id="site-footer">
	<div class="container">
		<?php
			echo apply_filters( 'fbm_copyright', sprintf( 
				__( 'Copyright &copy; %1$s <a href="%2$s" rel="home">%3$s</a>. All rights reserved.', 'fastbiz' ),
				date( 'Y' ), esc_url( home_url( '/' ) ), get_bloginfo( 'name' )
			) );
		?>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>