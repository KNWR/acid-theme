<?php
/*
Template Name: Front
*/
?>

<?php get_header('front'); ?>


<?php // Only show the post(s) from today.
$the_query = new WP_Query( array('year' => current_time('Y'), 'monthnum' => current_time('m'), 'day' => current_time('d') ) );
if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) {
		$the_query->the_post(); ?>
	
	<body <?php body_class(); ?>>
			<h1 id="logo-front" class="entry-title"><a href='<?php the_permalink() ?>'><?php the_title() ?></a></h1>

	<div class="wrap" id="frontpage">

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<!-- <div class="entry-date"><?php the_date('d.F.Y'); ?></div> -->
		<div class="entry-content">
			<?php the_content(); ?>
			<br>
		</div>
	</article>
<?php } }
	wp_reset_postdata();
?>

<?php 

// Getting content from the page, here for the footer shortcode
$post = get_post($id); 
$content = apply_filters('the_content', $post->post_content);
echo $content;
?>
	
<?php get_footer(); ?>