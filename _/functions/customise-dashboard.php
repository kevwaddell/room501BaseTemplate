<?php 

/* REMOVE DASHBOARD WIDGETS */
	function remove_dashboard_widgets(){
 		global$wp_meta_boxes;
  		unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
		unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
		unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
		unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
		unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']); 
		unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
		unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
		unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);
		unset($wp_meta_boxes['dashboard']['normal']['core']['tribe_dashboard_widget']);
		unset($wp_meta_boxes['dashboard']['normal']['core']['quick_chat_dashboard_widget']);
		unset($wp_meta_boxes['dashboard']['normal']['core']['bbp-dashboard-right-now']);		
}

add_action('wp_dashboard_setup', 'remove_dashboard_widgets');

/* REMOVE WELCOME PANEL */
add_action( 'load-index.php', 'hide_welcome_panel' );

function hide_welcome_panel() {
    $user_id = get_current_user_id();

    if ( 1 == get_user_meta( $user_id, 'show_welcome_panel', true ) )
        update_user_meta( $user_id, 'show_welcome_panel', 0 );
}

/* ONE COLUMN DASHBOARD */
function one_col_dashboard_screen () {
global $current_user;
get_currentuserinfo();
$user_id = $current_user->ID;
$prev_value = NULL;
update_user_meta($user_id, 'screen_layout_dashboard', 1, $prev_value);
}

add_action('admin_head', 'one_col_dashboard_screen');

?>