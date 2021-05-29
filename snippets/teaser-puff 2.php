
    <?php
    $acf_kicker = get_field('hero_kicker');
    $acf_headline = get_field('hero_headline');
    ?>

    <?php 
    $category = get_the_category(); $kicker_alt = $category[0]->name; // get category name
    $kicker = $acf_kicker ?: $kicker_alt; // if acf_kicker exists, else get the category
    $headline = $acf_headline ?: get_the_title(); // if acf_headline exists, else get the post title
    $teaser_image_url = get_the_post_thumbnail_url($post->ID, 'puff') ? : "https://i0.wp.com/www.ladsholidayguide.com/wp-content/uploads/g-logo.png?w=360h=240&ssl=1";
    ?>

    

<a href="<?php echo esc_url(get_permalink()); ?>" title="<?php echo esc_attr($headline); ?>"
        class="puff bg-white teaser">
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
        <header class="header">
            <strong class="kicker"><?php echo $kicker; ?></strong>
            <h6 class="headline"><?php echo $headline; ?></h6>
        </header>
    </a>