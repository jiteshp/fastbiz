( function( $ ) {
	
	/**
	 *	Wait for the document to load.
	 */
	$( document ).ready( function() {
		
		/**
		 *	Toggle primary menu.
		 */
		$( '#primary-menu-toggle' ).click( function( e ) {
			var $menu = $( '#primary-menu' );
			
			if( $menu.is( ':visible' ) ) {
				$menu.slideUp();
			}
			else {
				$menu.slideDown();
			}
			
			e.preventDefault();
		} );
		
	} );
	
} )( jQuery );