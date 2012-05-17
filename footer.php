		</section>
		<!-- MAIN CONTENT END -->
		
		<!-- FOOTER CONTENT START -->
		<footer id="footer" clas="source-org vcard copyright">
			<small>&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?></small>
			
			<?php wp_nav_menu(array( 'container' => 'nav', 'container_id' => 'footer-nav', 'theme_location' => 'footer_menu', 'fallback_cb' => false ) ); ?>
		</footer>
		<!-- FOOTER CONTENT END -->

	<?php wp_footer(); ?>

<!-- this is where we put our custom functions -->
<script src="<?php bloginfo('template_directory'); ?>/_/js/functions.js"></script>
	
</body>

</html>
