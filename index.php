<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article class="home-post" id="post-<?php the_ID(); ?>">

			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

			<div class="entry">
				<?php the_content(); ?>
			</div>

		</article>

	<?php endwhile; ?>

	<?php wp_pagenavi(); ?>

	<?php else : ?>

		<h2>Sorry</h2>
		<p>No posts found</p>

	<?php endif; ?>

<?php get_footer(); ?>
