<?php 
function remove_footer_admin () {
echo 'Created by <a href="http://www.room501.co.uk" target="_blank">room501 Publishing</a> | <a href="mailto:kevin@room501.co.uk">Webmaster</a></p>';
}

add_filter('admin_footer_text', 'remove_footer_admin');
?>