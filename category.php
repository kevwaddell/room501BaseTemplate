<?php get_header(); ?>

		<?php if (have_posts()) : ?>

 			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

			<h2><?php single_cat_title(); ?></h2>

			<?php while (have_posts()) : the_post(); ?>
			
			<?php 
			$intro = get_field('intro', get_the_ID());
			?>
			
				<article id="post-<?php the_ID(); ?>" <?php post_class() ?>>
				
						<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

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

			<h2>Sorry</h2>
			<p>There is no news at the moment for <?php single_cat_title(); ?>.</p>
		
		</article>

	<?php endif; ?>

<?php get_footer(); ?>
