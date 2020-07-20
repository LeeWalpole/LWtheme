<?php
$related = get_posts( 
    array( 
        'category__in' => wp_get_post_categories( $post->ID ), 
        'numberposts'  => 3, 
        'post__not_in' => array( $post->ID ) 
    ) 
);
if( $related ) : ?>

<div class="bg-offwhite row-block">
<div class="news-block w-max">
    <div class="news-block-feature ">
        <header class="header">
            <h2 class="headline">YOU MIGHT LIKE</h2>
        </header>
        <?php foreach ( $related as $post ) : setup_postdata( $post ); ?>

        <?php
$category = get_the_category();
$kicker = get_field('hero_kicker') ?: $category[0]->cat_name;
$headline = get_field('hero_headline') ?: get_the_title(); 
$subdeck = get_field('hero_subdeck'); // for some reason this didn't work
$teaser_image_url = get_the_post_thumbnail_url($post->ID, 'puff');
?>

        <?php $i++; if($i <= 1 ) : ?>
        <article class="teaser teaser_standard bg-offwhite">
            <a href="<?php echo esc_url(get_permalink()); ?>" title="<?php echo esc_attr($headline); ?>"
                value="<?php echo esc_attr($headline); ?>">

                <figure class="bg-white prefade ratio" data-ratio="16x9">
                    <picture>
                        <source type="image/jpeg" media="(min-width: 461px)"
                            srcset="<?php echo esc_url(get_the_post_thumbnail_url($post->ID, 'medium')); ?>">
                        <source type="image/jpeg" media="(max-width: 460px)"
                            srcset="<?php echo esc_url(get_the_post_thumbnail_url($post->ID, 'thumbnail')); ?>">
                        <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                            alt="<?php echo esc_attr($headline); ?>" class="lazyload" loading="lazy">
                    </picture>
                </figure>
                <header class="header bg-offwhite postfade">
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
        class="puff bg-offwhite">
        <figure>
            <picture>
                <source type="image/jpeg" media="(min-width: 461px)"
                    srcset="<?php echo esc_attr($teaser_image_url); ?>">
                <source type="image/jpeg" media="(max-width: 460px)"
                    srcset="<?php echo esc_attr($teaser_image_url); ?>">
                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                    alt="<?php echo esc_attr($headline); ?>" class="lazyload" loading="lazy">
            </picture>
        </figure>
        <header class="header bg-offwhite">
            <strong class="kicker"><?php echo $kicker; ?></strong>
            <h6 class="headline"><?php echo $headline; ?></h6>
        </header>
    </a>

    <?php endif; ?>

    <?php endforeach; ?>

    <a href="<?php echo esc_attr($category_link); ?>" class="more">MORE › &#8250;</a>

</div>
</div><!-- rowblock -->
<?php endif; ?>