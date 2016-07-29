<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header id="site-header" role="banner">
	<div class="container">
		<div id="brand">
			<?php
				if( function_exists( 'the_custom_logo' ) ):
					the_custom_logo();
				endif;
				
				if( is_front_page() && is_home() ): ?>
					<h1 class="site-title h3"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else: ?>
					<p class="site-title h3"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php endif;
			?>
		</div>
		
		<?php if( has_nav_menu( 'primary-menu' ) ): ?>
			<button id="primary-menu-toggle">&#9776; <?php _e( 'Menu', 'fastbiz' ); ?></button>
			
			<nav id="primary-menu" role="navigation">
				<?php
					wp_nav_menu( array(
						'container' 	 => false,
						'depth' 	 	 => 1,
						'theme_location' => 'primary-menu',
					) );
				?>
			</nav>
		<?php endif; ?>
	</div>
</header>