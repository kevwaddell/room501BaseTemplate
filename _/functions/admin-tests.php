<?php 
function get_options_tests () {
global $wpdb;
global $current_screen;
global $post;
global $posts;
global $wp_taxonomies;
global $pagenow, $typenow;

$expire = get_post_meta($post->ID, 'expiration_date', true);
$end_time = get_post_meta($post_id, 'end_time', true);

$convert_expire = strtotime($expire. " " .$end_time);
$expire_formated = date('Y-m-d H:i:s', $convert_expire);

/* echo '<pre>';print_r( $expire_formated );echo '</pre>'; */


/* echo '<pre>';print_r( get_post_status_object('passed') );echo '</pre>'; */

/*
$date_format = get_option('date_format');
$time_format = get_option('time_format');
$time_zone = get_option('timezone_string');
date_default_timezone_set($time_zone);
$now = date('Y-m-d H:i:s', time());
$today = get_gmt_from_date( $now );
*/

/*
echo '<pre>';print_r($typenow);echo '</pre>';
echo '<pre>';print_r($pagenow);echo '</pre>';
*/

/*
	if ($post) {
	$expire = get_post_meta($post->ID, 'expiration_date', true);
	$end_time = get_post_meta($post->ID, 'end_time', true);
	$convert_expire = strtotime($expire. " " .$end_time);
	$expire_formated = date('Y-m-d H:i:s', $convert_expire);

	echo '<pre>';print_r($expire_formated);echo '</pre>';

	}
*/
}
add_action('admin_head', 'get_options_tests');
?>