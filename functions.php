<?php
add_action( 'wp_enqueue_scripts', 'mat_assets' );
// Enqueue stylesheet
function mat_assets() {
	wp_enqueue_style( 'beginnersTheme', get_stylesheet_uri() );
}

// Add support for Jetpack's infinite-scroll plugin
add_theme_support( 'infinite-scroll', array(
	'container'      => 'site-content',
    'footer'		 => 'page',
) );

// Add support for title-tag 
add_theme_support( 'title-tag' );

// Footer shortcode
function add_footer_shortcode($atts, $content="") {
	return '<footer>' . $content . '</footer>';
}

add_shortcode('footer', 'add_footer_shortcode');

?>