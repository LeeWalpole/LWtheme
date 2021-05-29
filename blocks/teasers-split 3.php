<!-- Split Box Below -->
<a href="<?php echo esc_url(get_permalink()); ?>" title="<?php echo esc_attr ( get_the_title ()); ?>" id=""
    class="split-box bg-white" value="lee">
    <article class="w-full grid">
        <figure class="colspan-5 bg-color prefade">
            <?php $featured_image_smartphone = get_the_post_thumbnail_url($post->ID, 'thumbnail'); ?>
            <picture class="ratio" data-ratio="3x2">
                <source type="image/jpeg" media="(min-width: 461px)"
                    srcset="<?php echo esc_attr($featured_image_smartphone); ?>">
                <source type="image/jpeg" media="(max-width: 460px)"
                    srcset="<?php echo esc_attr($featured_image_smartphone); ?>">
                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                    alt="<?php echo esc_attr(get_the_title()); ?>" class="lazyload" loading="lazy">
            </picture>
        </figure>        
        <?php $category = get_the_category(); ?>
        <section class="colspan-7 article-body bg-white">
            <div class="valign bg-white">
                <section class="split-header bg-white prefade">
                    <strong class="kicker"><?php echo $category[0]->cat_name; ?></strong>
                    <h6 class="headline"><?php echo esc_html(get_the_title()); ?></h6>
                    <p><?php echo esc_html(get_the_excerpt()); ?></p>
                </section>
            </div>
    </article>
</a>
</a>
<!-- Split Teasers Split Box Above -->