<?php 
function get_options_tests () {
global $wpdb;
global $current_screen;
global $post;
global $posts;
global $wp_taxonomies;
global $pagenow, $typenow;

/* echo '<pre>';print_r($current_screen);echo '</pre>'; */
}
add_action('admin_head', 'get_options_tests');
?>