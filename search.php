<?php get_header(); ?>

	<?php if (have_posts()) : ?>

		<h2>Search Results</h2>

		<?php while (have_posts()) : the_post(); ?>
		
		<?php 
		$intro = get_field('intro', get_the_ID());
		?>

			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

				<h2><?php the_title(); ?></h2>

				<div class="entry">

					<?php if ($intro) { ?>
					<p><?php echo $intro; ?></p>
					<?php } else { ?>
					<?php the_excerpt(); ?>
					<?php } ?>

				</div>

			</article>

		<?php endwhile; ?>

		<?php wp_pagenavi(); ?>

	<?php else : ?>

		<article class="post">

		<h2>Sorry no search results found.</h2>
		
		<p>You searched for " <?php the_search_query(); ?> ".</p>
		
		</article>

	<?php endif; ?>

<?php get_footer(); ?>
