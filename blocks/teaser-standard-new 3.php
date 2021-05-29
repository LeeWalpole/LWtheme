<?php 
$category = get_the_category(); 
$kicker = get_field('hero_kicker') ?: $category[0]->cat_name;
$headline = get_field('hero_headline') ?: get_the_title();
$subdeck = get_field('hero_subdeck');
?>
<article class="teaser bg-white">
    <a href="<?php echo esc_url(get_permalink()); ?>" title="<?php echo esc_attr ( get_the_title ()); ?>" class=""
        value="<?php echo esc_attr ( get_the_title ()); ?>">
        <?php $featured_image_smartphone = get_the_post_thumbnail_url($post->ID, 'thumbnail'); ?>
        <figure class="bg-white prefade ratio" data-ratio="3x2">
            <picture>
                <source type="image/jpeg" media="(min-width: 461px)"
                    srcset="<?php echo esc_attr($featured_image_smartphone); ?>">
                <source type="image/jpeg" media="(max-width: 460px)"
                    srcset="<?php echo esc_attr($featured_image_smartphone); ?>">
                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                    alt="<?php echo esc_attr ( get_the_title ()); ?>" class="lazyload" loading="lazy">
            </picture>
        </figure>
        <header class="header bg-white postfade">
            <strong class="kicker"><?php echo esc_html($kicker); ?></strong>
            <h6 class="headline"><?php echo esc_html($headline); ?></h6>
            <?php if($subdeck) : ?><p><?php echo esc_html(get_the_excerpt()); ?></p><?php endif;?>
        </header>
    </a>
</article>