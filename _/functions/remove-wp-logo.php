<?php 

function wps_admin_bar() {
	 global $wp_admin_bar;
	 
	 $wp_admin_bar->remove_menu('wp-logo');
	 $wp_admin_bar->remove_menu('comments');
	 $wp_admin_bar->remove_menu('new-link');
	 $wp_admin_bar->remove_menu('new-dsn_note');
	 
	if ( !current_user_can('administrator') ) {
	 $wp_admin_bar->remove_menu('new-content');
	}
	 
}
add_action( 'wp_before_admin_bar_render', 'wps_admin_bar' );

 ?>