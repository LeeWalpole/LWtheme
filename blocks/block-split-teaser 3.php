<?php if (have_rows('hero_header') ) : ?>
        <?php while( have_rows('hero_header') ) : the_row(); ?>
        <?php
        $acf_kicker = get_sub_field('kicker');
        $acf_headline = get_sub_field('headline');
        $acf_lead = get_sub_field('lead');
        ?>
        <?php endwhile; ?>
    <?php endif; //  end have_rows('hero_header' ?>

<a href="<?php echo esc_url(get_permalink()); ?>" title="<?php echo esc_attr ( get_the_title ()); ?>" class="teaser bg-white">
    <figure class="z-index-1 ratio" data-ratio="3:2">
        <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
        alt="<?php echo esc_attr(get_the_title()); ?>"
        data-src="<?php echo esc_attr($teaser_image_url); ?>"
        loading="lazy" class="lazyload">
    </figure>
    <header class="header">
        <strong class="kicker"><?php echo $kicker; ?></strong>
        <h4 class="headline"><?php echo $headline; ?></h4>
    </header>
    <?php /*
    <small class="small">By <?php echo get_the_author_meta( 'display_name', $author_id ); ?></small>
    */ ?>
</a>


<?php /*

            <article class="article colspan-8">
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
        </article>

*/


?>