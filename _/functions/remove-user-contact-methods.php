<?php 
add_filter('user_contactmethods', 'remove_im_options', 10, 2);
function remove_im_options( $user_contactmethods, $user ) {
    unset($user_contactmethods['aim']);
    unset($user_contactmethods['yim']);
    unset($user_contactmethods['jabber']);
    //$user_contactmethods = array();
    return $user_contactmethods;
}
?>