<?php     
$teaser_count = -1;
$teaser_category = get_sub_field('category');
$teaser_tag = get_sub_field('tag');
$category_link = get_category_link( $teaser_category);
$offset = 0;
?>

<?php
    global $post;
    $myposts = get_posts( array( 
    'posts_per_page' => $teaser_count,
    'no_found_rows'  => true, 
    'offset' => 0, 
    'tag_id' => $teaser_tag, 
    'category' => $teaser_category ) ); 
    if ( $myposts ) : ?>


<div id="<?php echo $block_id; ?>" class="row-block <?php echo $bg_color; ?> prefade">
    <section class="w-max grid grid-gap">
        <?php foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

        <?php
        $category = get_the_category();
        $kicker = get_field('hero_kicker') ?: $category[0]->cat_name;
        $headline = get_field('hero_headline') ?: get_the_title(); 
        $subdeck = get_field('hero_subdeck'); // for some reason this didn't work
        $teaser_image_url = get_the_post_thumbnail_url($post->ID, 'puff');
        $feature_youtube = get_field('feature_youtube'); 
        ?>

        <?php $i++; if($i <= 1 ) : ?>
        <article class="teaser teaser_standard colspan-4 <?php echo $bg_color; ?>">
            <a href="<?php echo esc_url(get_permalink()); ?>" title="<?php echo esc_attr($headline); ?>"
                value="<?php echo esc_attr($headline); ?>">

                <figure class="bg-white prefade ratio <?php if ($feature_youtube) : echo "video_teaser"; endif; ?>" data-ratio="16x9">
                    <picture>
                        <source type="image/jpeg" media="(min-width: 461px)"
                            srcset="<?php echo esc_url(get_the_post_thumbnail_url($post->ID, 'medium')); ?>">
                        <source type="image/jpeg" media="(max-width: 460px)"
                            srcset="<?php echo esc_url(get_the_post_thumbnail_url($post->ID, 'thumbnail')); ?>">
                        <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                            alt="<?php echo esc_attr($headline); ?>" class="lazyload" loading="lazy">
                    </picture>
                </figure>
                <header class="header bg-white postfade">
                    <strong class="kicker"><?php echo $kicker; ?></strong>
                    <h6 class="headline"><?php echo $headline; ?></h6>
                    <?php if ($subdeck) : ?><p><?php echo $subdeck; ?></p><?php endif; ?>
                </header>
            </a>
        </article>
    </div><!-- puff bg-white1 -->
    <?php endif; ?>

    <?php if($i >=2 && $i <=5) :?>

    <a href="<?php echo esc_url(get_permalink()); ?>" title="<?php echo esc_attr($headline); ?>"
        class="puff bg-white">
        <figure class="<?php if ($feature_youtube) : echo "video_teaser"; endif; ?>">
            <picture>
                <source type="image/jpeg" media="(min-width: 461px)"
                    srcset="<?php echo esc_attr($teaser_image_url); ?>">
                <source type="image/jpeg" media="(max-width: 460px)"
                    srcset="<?php echo esc_attr($teaser_image_url); ?>">
                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                    alt="<?php echo esc_attr($headline); ?>" class="lazyload" loading="lazy">
            </picture>
        </figure>
        <header class="header">
            <strong class="kicker"><?php echo $kicker; ?></strong>
            <h6 class="headline"><?php echo $headline; ?></h6>
        </header>
    </a>

    <?php endif; ?>

    <?php endforeach; ?>

    <a href="<?php echo esc_attr($category_link); ?>" class="more">MORE › &#8250;</a>

</div>


<?php endif; ?>