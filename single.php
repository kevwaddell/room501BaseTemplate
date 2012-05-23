<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
			<h2 class="entry-title"><?php the_title(); ?></h2>

			<div class="entry-content">
				
				<?php the_content(); ?>
				
				<?php the_tags( 'Tags: ', ', ', ''); ?>	

			</div>
			
			<footer class="meta">
				<?php include (TEMPLATEPATH . '/_/inc/meta.php' ); ?>
			</footer>
			
		</article>

	<?php comments_template(); ?>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>