<?php
	
// Add RSS links to <head> section
automatic_feed_links();
	
// Load jQuery
if ( !function_exists(core_mods) ) {
	function core_mods() {
		if ( !is_admin() ) {
			wp_deregister_script('jquery');
			wp_deregister_script('jquery-ui-core');
			wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"), false);
			wp_register_script('jquery-ui-core', ("https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"), false);
			wp_register_script('jquery-easing', (get_bloginfo('template_directory')."/_/js/jquery.easing.1.3.js"), false);
			wp_register_script('widow-fix', (get_bloginfo('template_directory')."/_/js/jquery.widowFix-1.3.1.min.js"), false);
			wp_register_script('flexcroll', (get_bloginfo('template_directory')."/_/js/flexcroll.js"), false);
			wp_enqueue_script('jquery');
			wp_enqueue_script('jquery-ui-core');
			wp_enqueue_script('jquery-easing');
			wp_enqueue_script('widow-fix');
			wp_enqueue_script('flexcroll');
		}
	}
	core_mods();
}

// CLEAN UP HEAD<head>
function removeHeadLinks() {
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
}
add_action('init', 'removeHeadLinks');

remove_action('wp_head', 'wp_generator');
    
/* REGISTER MENUS */
include (TEMPLATEPATH . '/_/functions/register-menus.php');

/* ADD EDITOR STYLES */		
add_editor_style();
	
/* ADD CUSTOM BACKGROUND */	
add_custom_background();

/* ADD POST THUMBNAILS */
include (TEMPLATEPATH . '/_/functions/add-post-thumbnails.php');

/* CHANGE EDITOR BUTTONS */
include (TEMPLATEPATH . '/_/functions/change-editor-buttons.php');

    
// add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'audio', 'chat', 'video'));  Add 3.1 post format theme support.

/* CUSTOM FUNCTIONS ----------------------------------------*/

//CHANGE DEFAULT LABELS AND ICONS
include (TEMPLATEPATH . '/_/functions/change-default-labels.php');

//CUSTOMISE DASHBOARD
include (TEMPLATEPATH . '/_/functions/customise-dashboard.php');

// ADD ADMIN STYLESHEET
include (TEMPLATEPATH . '/_/functions/add-admin-stylesheet.php');

//REMOVE UPDATE FOR NONE ADMINS
include (TEMPLATEPATH . '/_/functions/remove-wp-update-notice.php');

//CHANGE HOWDY MESSAGE TO WELCOME
include (TEMPLATEPATH . '/_/functions/change-howdy-to-welcome.php');

//ADMIN FOOTER COPYRIGHT
include (TEMPLATEPATH . '/_/functions/admin-footer-copyright.php');

//REMOVE USER CONTACT METHODS
include (TEMPLATEPATH . '/_/functions/remove-user-contact-methods.php');

//MANAGE POST COLUMNS
include (TEMPLATEPATH . '/_/functions/manage-post-columns.php');

//MANAGE PAGE COLUMNS
include (TEMPLATEPATH . '/_/functions/manage-page-columns.php');

/* REMOVE ADMIN COLOR SCHEME OPTIONS */
include (TEMPLATEPATH . '/_/functions/admin-color-scheme-options.php');

/* ADMIN META BOX POSITIONS */
include (TEMPLATEPATH . '/_/functions/meta-box-positions.php');

/* REMOVE META BOXES */
include (TEMPLATEPATH . '/_/functions/remove-meta-boxes.php');


/* TEST AREA -------------- */

/* ADMIN TESTS */
include (TEMPLATEPATH . '/_/functions/admin-tests.php');

?>