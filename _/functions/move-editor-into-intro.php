<?php 
function move_posteditor( $hook ) {
    if ( $hook == 'post.php' OR $hook == 'post-new.php' ) {
        wp_enqueue_script( 'jquery' );
        add_action('admin_print_footer_scripts', 'move_posteditor_scripts');

    }
}
add_action( 'admin_enqueue_scripts', 'move_posteditor', 10, 1 );

function move_posteditor_scripts() {
    ?>
    <script type="text/javascript">
        jQuery('#postdiv, #postdivrich').appendTo('#???? .inside' );
</script>

<?php } ?>