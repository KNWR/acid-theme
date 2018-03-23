<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<h2 class="entry-title"><a href='<?php the_permalink() ?>'><?php the_title() ?></a></h2>
	<div class="entry-date"><?php echo get_the_date('d.F.Y'); ?></div>
		<div class="entry-content">
			<?php the_content(); ?>
			<br>
		</div>

	</article>
<?php endwhile; ?>

<?php get_footer(); ?>