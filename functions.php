<?php add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
function wpdocs_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );    
    add_theme_support( 'html5', [ 'script', 'style' ], array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
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
    add_image_size( 'puff', 150, 100, true );
    add_image_size( 'teaser_standard', 360, 240, true );
    add_image_size( 'desktop_plus', 1920, false ); // 1920 full
    add_image_size( 'desktop', 1366, false ); // desktop full
    add_image_size( 'smartphone', 360, false ); // iPhone full
    add_image_size( 'tablet', 768, false ); // Tablet Full
    add_filter('img_caption_shortcode_width', '__return_false');
    }
    include_once( 'functions/acf-options.php' );
    include_once( 'functions/postlist-thumbnails.php' );
    include_once( 'functions/header-junk.php' );
    include_once( 'functions/lazyload-images.php' );
    include_once( 'functions/read-time.php' );
    include_once( 'functions/lazyload-video.php' );
?>
<?php $defaults = array(
  'theme_location'  => '',
  'menu'            => '', 
  'container'       => 'div', 
  'container_class' => 'menu-{menu slug}-container', 
  'container_id'    => '',
  'menu_class'      => 'menu', 
  'menu_id'         => '',
  'echo'            => true,
  'fallback_cb'     => 'wp_page_menu',
  'before'          => '',
  'after'           => '',
  'link_before'     => '',
  'link_after'      => '',
  'items_wrap'      => '<ul id=\"%1$s\" class=\"%2$s\">%3$s</ul>',
  'depth'           => 0,
  'walker'          => '');
?>
<?php
// custom menu example @ https://digwp.com/2011/11/html-formatting-custom-menus/
function clean_custom_menus() {
	$menu_name = 'nav-primary'; // specify custom menu slug
	if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
		$menu = wp_get_nav_menu_object($locations[$menu_name]);
		$menu_items = wp_get_nav_menu_items($menu->term_id);

		$menu_list = '<nav>' ."\n";
		$menu_list .= "\t\t\t\t". '<ul>' ."\n";
		foreach ((array) $menu_items as $key => $menu_item) {
			$title = $menu_item->title;
			$url = $menu_item->url;
			$menu_list .= "\t\t\t\t\t". '<li><a href="'. $url .'">'. $title .'</a></li>' ."\n";
		}
		$menu_list .= "\t\t\t\t". '</ul>' ."\n";
		$menu_list .= "\t\t\t". '</nav>' ."\n";
	} else {
		// $menu_list = '<!-- no list defined -->';
	}
	echo $menu_list;
}
?>

