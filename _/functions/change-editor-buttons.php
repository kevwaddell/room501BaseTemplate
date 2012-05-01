<?php 
function myformatTinyMCE($in)
	{
	 $in['theme_advanced_blockformats'] = 'p,h3';
	 $in['theme_advanced_buttons1']='formatselect,|,bold,italic,underline,|,bullist,numlist,blockquote,|,justifyleft,justifycenter,justifyright,justifyfull,|,link,unlink,|,hr,|,wp_adv';
	 $in['theme_advanced_buttons2']='pastetext,pasteword,removeformat,|,charmap,|,undo,redo';
	 $in['theme_advanced_buttons3']='';
	 $in['theme_advanced_buttons4']='';
	 return $in;
	}
	add_filter('tiny_mce_before_init', 'myformatTinyMCE' );
?>