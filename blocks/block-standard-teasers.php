<h1>block-standard-teaser</h1>


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
                <?php // get_template_part( 'teaser-standard' ); ?>

    <?php 
    $category = get_the_category(); $kicker_alt = $category[0]->name; // get category name
    $kicker = $acf_kicker ?: get_the_excerpt(); // if acf_kicker exists, else get the category
    $headline = $acf_headline ?: get_the_title(); // if acf_headline exists, else get the post title
    $subdeck = $acf_headline ?: get_the_excerpt(); // if acf_headline exists, else get the post title
    $teaser_image_url = get_the_post_thumbnail_url($post->ID, 'thumbnail') ? : "https://i0.wp.com/www.ladsholidayguide.com/wp-content/uploads/g-logo.png?w=360h=240&ssl=1";
    ?>

<a href="<?php echo esc_url(get_permalink()); ?>" title="<?php echo esc_attr ( get_the_title ()); ?>" class="teaser bg-white">
    <figure class="z-index-1">
        <picture class="ratio" data-ratio="3:2">
        <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
        alt="<?php echo esc_attr(get_the_title()); ?>"
        data-src="<?php echo esc_attr($teaser_image_url); ?>"
        loading="lazy" class="lazyload">
        </picture>
    </figure>
    <header class="header">
        <strong class="kicker"><?php echo $kicker; ?></strong>
        <h4 class="headline"><?php echo $headline; ?></h4>
        <p class="subdeck"><?php echo $subdeck; ?></p>
    </header>
    </a>   


                <?php
        endforeach;
        wp_reset_postdata();
    }
    ?>
            </div>


