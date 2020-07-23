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
<?php function example_cats_related_post() {
    $post_id = get_the_ID();
    $cat_ids = array();
    $categories = get_the_category( $post_id );
    if(!empty($categories) && is_wp_error($categories)):
        foreach ($categories as $category):
            array_push($cat_ids, $category->term_id);
        endforeach;
    endif;
    $current_post_type = get_post_type($post_id);
    $query_args = array( 
        'category__in'   => $cat_ids,
        'post_type'      => $current_post_type,
        'post__not_in'    => array($post_id),
        'posts_per_page'  => '3'
     );
    $related_cats_post = new WP_Query( $query_args );
    if($related_cats_post->have_posts()):
         while($related_cats_post->have_posts()): $related_cats_post->the_post(); ?>
            <ul>
                <li>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </li>
            </ul>
        <?php endwhile;
        // Restore original Post Data
        wp_reset_postdata();
     endif;
}
?>