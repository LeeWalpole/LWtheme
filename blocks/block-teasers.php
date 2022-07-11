<h1>block-teasers</h1>


<?php include ('block-settings.php'); ?>

<?php if( have_rows('teaser_settings') ) : while( have_rows('teaser_settings') ) : the_row();?>
<?php
$teaser_styles = get_sub_field('teaser_styles'); // this works
$teaser_ratio = get_sub_field('teaser_ratio'); // this works
?>
<?php endwhile; endif; ?>

<?php switch ($teaser_ratio) : case "3x2": ?>
    <?php $ratio = "3:2"; 
    $teaser_image_height = 240;
    ?>
    <?php break; ?>
    <?php case "1x1": ?>
    <?php $ratio = "1:1"; 
    $teaser_image_height = 360;
    ?>
    <?php break; ?>
    <?php default: ?>
    <?php $ratio = "3:2"; 
    $teaser_image_height = 240;
    ?>
<?php endswitch; ?>

<?php if( $block_layout == 'sidebar') { ?>
<div id="<?php echo esc_attr($block_id); ?>" class="row-block prefade <?php echo esc_attr($bg_color); ?>">
    <section class="<?php echo esc_attr($width); ?> grid"><!-- .article-block -->
        <aside class="sidebar colspan-4">
            <div class="sidebar-sticky">
                <?php include ('block-header.php'); ?>
            </div>
        </aside>
        <article class="article colspan-8">
            <div class="standard-teasers teasers <?php echo $bg_color; ?>">
            <?php 
$category = get_the_category(); 
$kicker = get_sub_field('kicker') ?: $category[0]->cat_name;
$headline = get_sub_field('headline');
$lead = get_sub_field('lead');
$url = get_sub_field('url');
$acf_image_thumbnail = wp_get_attachment_image_src(get_sub_field('image'), '')[0]; 
$image_thumbnail = Jetpack_PostImages::fit_image_url ($acf_image_thumbnail, 360, $teaser_image_height);
$link = get_sub_field('url');
$link_target = $link['target'] ? $link['target'] : '_self'; 
$link_title = $link['title'];
$link_url = $link['url'];
?>



<?php if ( has_post_thumbnail() ) { 
    $featured_image_thumbnail = get_the_post_thumbnail_url("thumbnail"); 
    $featured_image_medium = get_the_post_thumbnail_url("medium"); 
    $featured_image_large = get_the_post_thumbnail_url("large"); 
} else { 
    $featured_image_thumbnail = "data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=";
    $featured_image_medium = "data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=";
    $featured_image_large = "data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=";
}
?>


<a href="<?php echo $link_url ?: "javascript:void(0)"; ?>" title="<?php echo esc_attr($link_title); ?>"
target="<?php echo esc_attr( $link_target ); ?>" class="teaser bg-white">
    <figure class="z-index-1 ratio" data-ratio="<?php echo $ratio ?: "3:2"; ?>">
        <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
            alt="<?php echo esc_attr($link_title); ?>"
            data-src="<?php echo esc_attr($featured_image_thumbnail); ?>" loading="lazy" class="lazyload">
    </figure>
    <?php if ($teaser_styles == "standard_teasers") : ?>
        <header class="header">
        <?php if( $kicker ) : ?><strong class="kicker"><?php echo $kicker ?></strong><?php endif; ?>
        <h4 class="headline"><?php echo $headline; ?></h4>
        <?php if( $lead ) : ?><em class="lead w-safe"><?php echo $lead; ?></em><?php endif; ?>
        </header>
    <?php endif; ?>

</a>
            </div>
        </article>
    </section>
</div>
<?php } else { ?>
<div id="<?php echo esc_attr($block_id); ?>" class="row-block prefade <?php echo esc_attr($bg_color); ?>">
    <section class="<?php echo esc_attr($width); ?> grid"><!-- .article-block -->
        <article class="article colspan-12">
            <?php include ('block-header.php'); ?>
            <div class="standard-teasers teasers <?php echo $bg_color; ?>">
            <?php 
$category = get_the_category(); 
$kicker = get_sub_field('kicker') ?: $category[0]->cat_name;
$headline = get_sub_field('headline');
$lead = get_sub_field('lead');
$url = get_sub_field('url');
$acf_image_thumbnail = wp_get_attachment_image_src(get_sub_field('image'), '')[0]; 
$link = get_sub_field('url');
$link_target = $link['target'] ? $link['target'] : '_self'; 
$link_title = $link['title'];
$link_url = $link['url'];
?>



<?php if ( has_post_thumbnail() ) { 
    $featured_image_thumbnail = get_the_post_thumbnail_url("thumbnail"); 
    $featured_image_medium = get_the_post_thumbnail_url("medium"); 
    $featured_image_large = get_the_post_thumbnail_url("large"); 
} else { 
    $featured_image_thumbnail = "data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=";
    $featured_image_medium = "data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=";
    $featured_image_large = "data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=";
}
?>


<a href="<?php echo $link_url ?: "javascript:void(0)"; ?>" title="<?php echo esc_attr($link_title); ?>"
target="<?php echo esc_attr( $link_target ); ?>" class="teaser bg-white">
    <figure class="z-index-1 ratio" data-ratio="<?php echo $ratio ?: "3:2"; ?>">
        <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
            alt="<?php echo esc_attr($link_title); ?>"
            data-src="<?php echo esc_attr($acf_image_thumbnail); ?>" loading="lazy" class="lazyload">
    </figure>
    <?php if ($teaser_styles == "standard_teasers") : ?>
        <header class="header">
        <?php if( $kicker ) : ?><strong class="kicker"><?php echo $kicker ?></strong><?php endif; ?>
        <h4 class="headline"><?php echo $headline; ?></h4>
        <?php if( $lead ) : ?><em class="lead w-safe"><?php echo $lead; ?></em><?php endif; ?>
        </header>
    <?php endif; ?>

</a>
            </div>
        </article>
    </section>
</div>
<?php } // block layout ?>
