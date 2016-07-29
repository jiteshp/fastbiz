<?php
/**
 *	Content width
 */
function fbm_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'fbm_content_width', 624 );
}

add_action( 'after_setup_theme', 'fbm_content_width' );

/**
 *	Theme features
 */
function fbm_setup() {
	load_theme_textdomain( 'fbm', get_template_directory() . '/languages' );
	
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo', array(
		'flex-width'  => true,
		'header-text' => 'site-title',
		'height' 	  => 90,
		'width' 	  => 270,
	) );
	add_theme_support( 'html5', array(
		'caption',
		'comment-form',
		'comment-list',
		'gallery',
		'search-form',
	) );
	
	register_nav_menu( 'primary-menu', __( 'Primary Menu', 'fastbiz' ) );
}

add_action( 'after_setup_theme', 'fbm_setup' );

/**
 *	Sidebars
 */
function fbm_sidebars() {
	register_sidebar( array(
		'id'			=> 'sidebar',
		'name'			=> __( 'Sidebar', 'fastbiz' ),
		'before_widget'	=> '<aside id="%1$s" class="widget %2$s">',
		'after_widget'	=> '</aside>',
		'before_title'	=> '<h4 class="widget-title">',
		'after_title'	=> '</h4>',
	) );
	
	register_sidebar( array(
		'id'			=> 'sidebar-footer',
		'name'			=> __( 'Footer', 'fastbiz' ),
		'before_widget'	=> '<aside id="%1$s" class="widget col-md-4 %2$s">',
		'after_widget'	=> '</aside>',
		'before_title'	=> '<h4 class="widget-title">',
		'after_title'	=> '</h4>',
	) );
}

add_action( 'widgets_init', 'fbm_sidebars' );

/**
 *	Styles & scripts
 */
function fbm_scripts() {
	wp_enqueue_style( 'fbm-styles', get_stylesheet_uri() );
	wp_enqueue_style( 'fbm-fonts', apply_filters( 'fbm_fonts_url',
		'https://fonts.googleapis.com/css?family=Karla:400,400i,700' ) );
		
	if( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_enqueue_script( 'comment-script', 
		get_template_directory_uri() . '/js/functions.js', 
		array( 'jquery' ), null, true 
	);
}

add_action( 'wp_enqueue_scripts', 'fbm_scripts' );

/**
 *	Excerpt length
 */
function fbm_excerpt_length( $length ) {
	return 25;
}

add_filter( 'excerpt_length', 'fbm_excerpt_length' );

/**
 *	Excerpt more
 */
function fbm_excerpt_more( $more ) {
	return sprintf( 
		'&nbsp;<a href="%s">[&hellip;]</a>', 
		esc_url( get_permalink() ) 
	);
}

add_filter( 'excerpt_more', 'fbm_excerpt_more' );
 
/**
 *	Echo featured image url
 */
function fbm_featured_image_url( $post_id = 0, $size = 'full' ) {
	if( ! $post_id ) {
		global $post;
		$post_id = $post->ID;
	}
	
	if( has_post_thumbnail( $post_id ) ) {
		$thumb_id = get_post_thumbnail_id();
		$thumb_url_array = wp_get_attachment_image_src($thumb_id, $size, true);
		echo esc_url( $thumb_url_array[0] );
	}
}