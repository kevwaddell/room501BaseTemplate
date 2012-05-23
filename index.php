<?php get_header(); ?>

<?php 
$news_page_option = get_option('page_for_posts');
$news_page = get_page($news_page_option);

if ($news_page) {
$news_intro = apply_filters('the_content', $news_page->post_content );
?>
	<div class="intro">
		<p><?php echo $news_intro; ?></p>
	</div>
<?php } ?>


	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<?php 
	$intro = get_field('intro', get_the_ID());
	?>

		<article class="post" id="post-<?php the_ID(); ?>">

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

		<h2>Sorry</h2>
		<p>There is no news at the moment.</p>

	<?php endif; ?>

<?php get_footer(); ?>
