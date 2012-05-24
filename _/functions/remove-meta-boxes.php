<?php 
if (is_admin()) {

	function remove_metaboxes() {
	
		if( !current_user_can('administrator') ) {
		remove_meta_box( 'linkxfndiv', 'link', 'normal' );
		remove_meta_box( 'linkadvanceddiv', 'link', 'normal' );
		}
		
	}
	
	add_action('admin_menu', 'remove_metaboxes');

}
 ?>