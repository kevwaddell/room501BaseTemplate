<?php 
add_action( 'admin_init', 'my_admin_stylesheet_init' );
function my_admin_stylesheet_init() {
       /* Register our stylesheet. */
       $syles_url = get_template_directory_uri()."/_/css/admin-styles.css";
       wp_register_style( 'myAdminStylesheet', $syles_url);
       wp_enqueue_style( 'myAdminStylesheet' );
}
?>