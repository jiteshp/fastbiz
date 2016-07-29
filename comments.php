<?php
if( post_password_required() ):
	return;
endif;
?>

<div id="comments" class="entry-comments">
	<div class="inner-container">
		<?php if( have_comments() ): ?>
			<h2 id="comments-title">
				<?php comments_number( '', __( 'Comments', 'fastbiz' ), __( 'Comments (%)', 'fastbiz' ) ); ?>
			</h2>
			
			<ol id="comments-list">
				<?php
					wp_list_comments( array(
						'avatar_size' => 60,
						'style'		  => 'ol',
						'type'		  => 'comment',
					) );
				?>
			</ol>
			
			<?php the_comments_navigation(); ?>
		<?php endif; ?>

		<?php if( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ): ?>
			<p class="comments-closed"><?php _e( 'Comments are closed.', 'fastbiz' ); ?></p>
		<?php endif; ?>
		
		<?php comment_form(); ?>
	</div>
</div>