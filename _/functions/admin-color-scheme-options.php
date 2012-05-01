<?php 
if (!current_user_can('administrator')) {
	remove_action("admin_color_scheme_picker", "admin_color_scheme_picker");
  	add_action( 'personal_options', 'chrome_personal_options');
}

function chrome_personal_options() {
?>
<script type="text/javascript">
  jQuery(document).ready(function(){
    jQuery("#your-profile fieldset.first, #your-profile legend.first:first").remove();
    jQuery("#your-profile legend.header:last").text('Password');
    jQuery("#description").parents('tr').remove();
  });
</script>
<?php } ?>