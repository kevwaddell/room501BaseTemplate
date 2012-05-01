<?php 

/* CHANGE POST LABELS */
    function change_post_menu_label() {
	global $menu;
	global $submenu;
	$menu[5][0] = 'News';
	$submenu['edit.php'][5][0] = 'Articles';
	$submenu['edit.php'][10][0] = 'Add Article';
	$submenu['edit.php'][15][0] = 'Article Subjects';
	$submenu['edit.php'][16][0] = 'Article Topics';
	echo '';
}
add_action( 'admin_menu', 'change_post_menu_label' );
	
/* CHANGE POST LABELS */
function change_post_object_label() {
	global $wp_post_types;
	$labels = &$wp_post_types['post']->labels;
	$labels->name = 'News';
	$labels->singular_name = 'Article';
	$labels->add_new = 'Add Article';
	$labels->add_new_item = 'Add Article';
	$labels->edit_item = 'Edit Article';
	$labels->new_item = 'Article';
	$labels->view_item = 'View Articles';
	$labels->search_items = 'Search Articles';
	$labels->not_found = 'No Articles found';
	$labels->not_found_in_trash = 'No Article found in Trash';
}
add_action( 'init', 'change_post_object_label' );

/* CHANGE CATEGORY LABELS */
function change_category_object_label() {
	global $wp_taxonomies;
	$labels = &$wp_taxonomies['category']->labels;
	$labels->name = 'Subjects';
	$labels->singular_name = 'Subject';
	$labels->search_items = 'Search Subjects';
	$labels->all_items = 'All Subjects';
	$labels->parent_item = 'Parent Subject';
	$labels->parent_item_colon = 'Parent Subject:';
	$labels->edit_item = 'Edit Subject';
	$labels->view_item = 'View Subject';
	$labels->update_item = 'Update Subject';
	$labels->add_new_item = 'Add New Subject';
	$labels->new_item_name = 'New Subject Name';
	}
add_action( 'init', 'change_category_object_label' );

/* CHANGE TAG LABELS */
function change_tag_object_label() {
	global $wp_taxonomies;
	$labels = &$wp_taxonomies['post_tag']->labels;
	$labels->name = 'Topics';
	$labels->singular_name = 'Topic';
	$labels->search_items = 'Search Topics';
	$labels->popular_items = 'Popular Topics';
	$labels->all_items = 'All Topics';
	$labels->edit_item = 'Edit Topic';
	$labels->view_item = 'View Topic';
	$labels->update_item = 'Update Topic';
	$labels->add_new_item = 'Add New Topic';
	$labels->new_item_name = 'New Topic Name';
	$labels->separate_items_with_commas = 'Separate topics with commas';
	$labels->add_or_remove_items = 'Add or remove topics';
	$labels->choose_from_most_used = 'Choose from the most used topics';
	}
add_action( 'init', 'change_tag_object_label' );

//CHANGE POST ICONS
add_action( 'admin_head', 'change_icons');
        	
function change_icons() {
    global $post_type;
    $temp_directory = get_bloginfo('template_directory');
    
?>
<style>

#menu-posts .wp-menu-image {background: url(<?php echo $temp_directory; ?>/_/img/admin-news-icon.png) no-repeat 0 0 !important;}

#menu-posts:hover .wp-menu-image, 
#menu-posts.wp-has-current-submenu .wp-menu-image {
background-position:0 -32px !important;
}

<?php if ($post_type == 'post') : ?>
#icon-edit { background: transparent url(<?php echo $temp_directory; ?>/_/img/news-icon-big.png) no-repeat center center; }		
<?php endif; ?>
	
 </style>
 
<?php } ?>