<h6>block-standard-teasers</h6>
<?php /*

<div class="standard-teasers teasers <?php echo $bg_color; ?>">
            <?php
    global $post;
    $myposts = get_posts( array(
        'posts_per_page' => $teaser_count,
        'no_found_rows'  => true,
        'offset' => 0,
        'tag_id' => $teaser_tag,
        'category' => $teaser_category // club-18-30
    ) );
 
    if ( $myposts ) {
        foreach ( $myposts as $post ) : 
            setup_postdata( $post ); ?>
                <?php get_template_part( 'teaser-standard' ); ?>
                <?php
        endforeach;
        wp_reset_postdata();
    }
    ?>
            </div>

    */?>

