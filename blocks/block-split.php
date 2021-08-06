<h1>Block Teaser</h1>

<?php include ('block-settings.php'); ?>

<?php if( have_rows('teaser_settings') ) :  while( have_rows('teaser_settings') ): the_row(); ?>
<?php $teaser_ratio = get_sub_field('teaser_ratio');?>
    <?php switch ($teaser_ratio) : case "3x2": ?>
    <?php $ratio = "3:2"; 
    // $teaser_image_height = 240;
    ?>
    <?php break; ?>
    <?php case "1x1": ?>
    <?php $ratio = "1:1"; 
    // $teaser_image_height = 360;
    ?>
    <?php break; ?>
    <?php default: ?>
    <?php $ratio = "3:2"; 
    // $teaser_image_height = 240;
    ?>
    <?php endswitch; ?>
<?php endwhile; endif; //teaser_settings ?>

        <?php if( have_rows('teaser',$post->ID) ) : while( have_rows('teaser',$post->ID) ) : the_row(); $counter++; ?>
        <?php 
        $kicker = get_sub_field('kicker');
        $headline = get_sub_field('headline');
        $lead = get_sub_field('lead');
        $url = get_sub_field('url');
        $acf_image_thumbnail = wp_get_attachment_image_src(get_sub_field('image'), '')[0]; 
        $image_thumbnail = 

        $image_url_large = Jetpack_PostImages::fit_image_url ($acf_image_thumbnail, 1000, $teaser_image_height);
        $image_url_medium = Jetpack_PostImages::fit_image_url ($acf_image_thumbnail, 600, $teaser_image_height);
        $image_url_small = Jetpack_PostImages::fit_image_url ($acf_image_thumbnail, 360, $teaser_image_height);
        ?>
        <?php 
        $url = get_sub_field('url');
        $link_target = $url['target'] ? $url['target'] : '_self'; 
        $link_title = $url['title'];
        ?>

<div id="<?php echo esc_attr($block_id); ?>" class="split-box prefade <?php echo esc_attr($bg_color); ?>">
    <section class="<?php echo esc_attr($width); ?> grid">
        <figure class="z-index-1 colspan-6 ratio postfade" data-ratio="<?php echo $ratio ?: "3:2"; ?>">
            <picture class="slideshow-picture">
                <source type="image/png" media="(min-width: 1600px)"
                    srcset="<?php echo esc_attr($image_url_large); ?>">
                <source type="image/png" media="(min-width: 461px) and (max-width: 1600px)"
                    srcset="<?php echo esc_attr($image_url_medium); ?>">
                <source type="image/png"
                    media="(min-width: 461px) and (max-width: 1280px) and (orientation: landscape)"
                    srcset="<?php echo esc_attr($image_url_medium); ?>">
                <source type="image/png" media="(min-width: 461px) and (max-width: 900px)"
                    srcset="<?php echo esc_attr($image_url_medium); ?>">
                <source type="image/png" media="(max-width: 460px)"
                    srcset="<?php echo esc_attr($image_url_small); ?>">
                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt="<?php echo esc_attr($headline);  ?>"
                    data-src="<?php echo esc_attr($image_url_small); ?>"
                    class="slideshow-image  lazyloaded" loading="lazy">
            </picture>
        </figure>
        <article class="colspan-6 article valign prefade">
            <header class="header <?php echo $bg_color; ?>">
                <?php if( $kicker ) : ?>
                <strong class="kicker"><?php echo $kicker; ?></strong><?php endif; ?>
                <h4 class="headline"><?php echo $headline; ?></h4>
                <?php if( $lead ) : ?><p class="lead w-safe"><?php echo $lead; ?></p><?php endif; ?>
            </header>
        </article>
    </section>
</div>
<?php endwhile; endif; // end splitbox ?>