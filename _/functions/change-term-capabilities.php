<?php 
add_action( 'init', 'update_taxonomy', 0 );
function update_taxonomy() {
global $wp_taxonomies;
$page_items = $wp_taxonomies['???'];
$page_items->public = false;
$page_items->show_tagcloud = false;
$page_items->show_in_nav_menus = false;

$page_items->cap = (object)array(
         'manage_terms' => 'add_users',
         'edit_terms' => 'add_users',
         'delete_terms' => 'add_users',
         'assign_terms' => 'edit_posts'   
         );
    
}
?>