<?php get_header(); ?>

		<?php if (have_posts()) : ?>

 			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

			<h2><?php single_cat_title(); ?></h2>

			<?php while (have_posts()) : the_post(); ?>
			
				<article <?php post_class() ?>>
				
						<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

						<div class="entry">
							<?php the_excerpt(); ?>
						</div>

				</article>

			<?php endwhile; ?>

			<?php wp_pagenavi(); ?>
			
	<?php else : ?>

		<article class="post">

			<h2>Sorry</h2>
		
			<p>No posts found.</p>
		
		</article>

	<?php endif; ?>

<?php get_footer(); ?>
