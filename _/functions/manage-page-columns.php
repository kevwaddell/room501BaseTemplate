<?php 
add_filter('manage_pages_columns', 'custom_pages_columns');
add_action('manage_pages_custom_column', 'show_page_column', 10, 2);

function custom_pages_columns($defaults) {
  unset($defaults['comments']);
  unset($defaults['date']);
  unset($defaults['author']);
  $defaults['thumb'] = __('Featured Image');
  $defaults['active'] = __('Active');
  return $defaults;
}

function show_page_column($column_name, $id) {
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
       	 case 'thumb':
        	$image = get_the_post_thumbnail( $id, 'thumbnail');
        	/* echo '<pre>';print_r($active);echo '</pre>'; */
        	if ($image) {
        	echo $image;
        	} else {
        	echo "-";
        	}
       	 break;      
       	}
}

?>