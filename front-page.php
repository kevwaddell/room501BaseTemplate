<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="intro" id="post-<?php the_ID(); ?>">

			<?php the_content(); ?>

		</div>

	<?php endwhile; ?>

	<?php wp_pagenavi(); ?>

	<?php endif; ?>

<?php get_footer(); ?>
