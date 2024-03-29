<?php 
add_filter('manage_posts_columns', 'add_custom_posts_column');
add_action('manage_posts_custom_column', 'show_post_column', 10, 2);

function add_custom_posts_column($defaults){
    $defaults['active'] = __('Published');
    return $defaults;
}

function show_post_column($column_name, $id) {
		global $wpdb;
		 switch($column_name) {
        	case 'active':
        	$active = $wpdb->get_var($wpdb->prepare("SELECT post_status FROM $wpdb->posts WHERE ID = {$id} AND post_status = 'publish';"));
        	/* echo '<pre>';print_r($active);echo '</pre>'; */
        	if ($active == 'publish') {
        	echo "<span class=\"tick\">Yes</span>";
        	} else {
        	echo "<span class=\"cross\">No</span>";
        	}
       	 break;     
       	}
}

?>