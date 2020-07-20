<?php
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
add_action( 'after_setup_theme', 'wpdocs_theme_setup' );

function wpdocs_theme_setup() {
    if ( ! isset( $content_width ) ) {
        $content_width = 640;
    }
    update_option( 'thumbnail_size_w', 360 );
    update_option( 'thumbnail_size_h', 9999 );
    update_option( 'thumbnail_crop', false );
    update_option( 'medium_size_w', 640 );
    update_option( 'medium_size_h', 9999 );
    update_option( 'medium_crop', false );
    update_option( 'medium_large_size_w', 640 );
    update_option( 'medium_large_size_h', 9999 );
    update_option( 'medium_large_crop', false );
    update_option( 'large_size_w', 1920 );
    update_option( 'large_size_h', 9999 );
    update_option( 'large_crop', true );
	}
    add_filter('img_caption_shortcode_width', '__return_false');
    add_image_size( 'puff', 120, 120, true );
    add_image_size( 'desktop_plus', 1920, false ); // 1920 full
    add_image_size( 'desktop', 1366, false ); // desktop full
    add_image_size( 'smartphone', 360, false ); // iPhone full
    add_image_size( 'tablet', 768, false ); // Tablet Full	
?>
<?php
// add_theme_support( 'post-thumbnails' );
// include_once( 'functions/image-sizes.php' );
// include_once( 'functions/acf-options.php' );
include_once( 'functions/postlist-thumbnails.php' );
include_once( 'functions/header-junk.php' );
include_once( 'functions/lazyload-images.php' );
?>
<?php 
add_action(
    'after_setup_theme',
    function() {
        add_theme_support( 'html5', [ 'script', 'style' ] );
    }
);
?>