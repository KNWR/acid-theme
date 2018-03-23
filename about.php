<?php
/*
Template Name: About
*/
?>

<?php get_header(); ?>

<?php 
/*$id=5; //old*/
$post = get_post($id); 
$content = apply_filters('the_content', $post->post_content);

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div class="entry-content"> <?php echo $content; ?> 
	<div id="archive">
<?php wp_get_archives(array('type' => 'yearly')); ?>
	</div> <!-- #archive -->
	</div><!-- .entry-content -->


</article><!-- #post-## -->

<?php get_footer(); ?>

</div> <!-- /site ... shouldn't this be @ get_footer?--> 