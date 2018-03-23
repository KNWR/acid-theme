<!DOCTYPE html>

<html <?php language_attributes(); ?> class="no-js no-svg">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">

		<?php wp_head(); ?>
	</head>

	<div id="site-header">

			<p id="logo" class="h1" itemscope itemtype="http://schema.org/Organization"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></p>
					</div>

<div class="wrap" id="frontpage">
	<body <?php body_class(); ?>>

<div id="singlepg">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h2 class="entry-title"><a href='<?php the_permalink() ?>'><?php the_title() ?></a></h2>
		<div class="entry-date"><?php the_date('d.F.Y'); ?></div>
		<div class="entry-content">
			<?php the_content() ?>
		</div>

	</article>
	<?php endwhile ?>
<?php endif ?>

<?php get_footer();?>
</div>