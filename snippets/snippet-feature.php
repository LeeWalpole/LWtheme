<?php $feature_youtube = get_field( "feature_youtube" ); ?>
<?php if( $feature_youtube ) { ?>
<?php $iframeCSS = "<style>.play{width:33%;height:33%;position:absolute;z-index:2;left:0;right:0;top:0;bottom:0;margin:auto;background-image:url(https://www.ladsholidayguide.com/wp-content/uploads/play.png);background-repeat:no-repeat;background-size:contain;background-position:center;opacity:.8}a:hover .play{opacity:1}*{padding:0;margin:0;overflow:hidden}body,html{height:100%}img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto}</style>" ?>
<figure class="feature">
    <figure class="feature-video ratio" data-ratio="16x9">
        <iframe src="https://www.youtube.com/embed/<?php echo esc_attr($feature_youtube); ?>" srcdoc="<?php echo $iframeCSS; ?>
            <a href=https://www.youtube.com/embed/<?php echo esc_attr($feature_youtube); ?>?autoplay=1>
            <img src=https://img.youtube.com/vi/<?php echo esc_attr($feature_youtube); ?>/hqdefault.jpg alt='<?php echo esc_attr(get_the_title()); ?>'>
            <span class='play'></span></a>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen title="<?php echo esc_attr(get_the_title()); ?>"></iframe>
    </figure>
</figure>
<?php } else { // no feature video ID ?>
    <?php if ( has_post_thumbnail() ) : ?>
    <?php   
    $hero_image_smartphone = get_the_post_thumbnail_url(get_the_ID(),'smartphone'); 
    $hero_image_tablet = get_the_post_thumbnail_url(get_the_ID(),'tablet'); 
    $hero_image_desktop = get_the_post_thumbnail_url(get_the_ID(),'desktop'); 
    $hero_image_desktop_plus = get_the_post_thumbnail_url(get_the_ID(),'desktop_plus'); 
    ?>

    <figure class="feature feature-image">
        <picture>
            <!-- desktop (plus / massive) -->
            <source type="image/jpg" media="(min-width: 1600px)"
            srcset="<?php echo $hero_image_desktop_plus; ?>">
            <!-- desktop (most) -->
            <source type="image/jpg" media="(min-width: 461px) and (max-width: 1600px)"
            srcset="<?php echo $hero_image_desktop; ?>">
            <!-- tablet (landscape) -->
            <source type="image/jpg"
                media="(min-width: 461px) and (max-width: 1280px) and (orientation: landscape)"
                srcset="<?php echo $hero_image_desktop; ?>">
            <!-- tablet (portrait) -->
            <source type="image/jpg" media="(min-width: 461px) and (max-width: 900px)"
            srcset="<?php echo $hero_image_tablet; ?>">
            <!-- Smartphone (portrait) -->
            <source type="image/jpg" media="(max-width: 460px)"
            srcset="<?php echo $hero_image_smartphone; ?>">
                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="lazyload" loading="eager" data-src="<?php echo $hero_image_smartphone; ?>" alt="<?php echo esc_attr( get_the_title() ); ?>"  />
        </picture>
    </figure>
    <?php endif; ?>
<?php } // end feature video ?>
<?php // get_template_part( 'snippets/snippet-feature-image' ); ?>