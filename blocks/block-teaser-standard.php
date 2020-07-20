

<?php global $post; if( have_rows('teasers',$post->ID) ) : ?>
<?php while( have_rows('teasers',$post->ID) ) : the_row();  ?>
<?php // $counter = 0;?>
<?php if( have_rows('teaser',$post->ID) ) : while( have_rows('teaser',$post->ID) ) : the_row(); $counter++; ?>
<?php 
$category = get_the_category(); 
$kicker = get_sub_field('kicker') ?: $category[0]->cat_name;
$headline = get_sub_field('headline') ?: get_the_title();
$lead = get_sub_field('lead');
$url = get_sub_field('url');
$acf_image_thumbnail = wp_get_attachment_image_src(get_sub_field('image'), '')[0]; 
$image_thumbnail = Jetpack_PostImages::fit_image_url ($acf_image_thumbnail, 360, $teaser_image_height);
?>
<?php 
$link = get_sub_field('url');
$link_target = $link['target'] ? $link['target'] : '_self'; 
$link_title = $link['title'];
$link_url = $link['url'];
?>

<a href="<?php echo $link_url ?: "javascript:void(0)"; ?>" title="<?php echo esc_attr($link_title); ?>"
target="<?php echo esc_attr( $link_target ); ?>" class="teaser bg-white">
<figure class="z-index-1 ratio" data-ratio="<?php echo $ratio ?: "3:2"; ?>">
    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
        alt="<?php echo esc_attr($link_title); ?>"
        data-src="<?php echo esc_attr($image_thumbnail); ?>" loading="lazy" class="lazyload">
</figure>

    <header class="header">
    <?php if( $kicker ) : ?>
    <strong class="kicker"><?php echo $kicker ?: $counter; ?></strong><?php endif; ?>
    <h4 class="headline"><?php echo $headline; ?></h4>
    <?php if( $lead ) : ?><em class="lead w-safe"><?php echo $lead; ?></em><?php endif; ?>
    </header>
</a>
<?php endwhile; endif; ?>
<?php endwhile; ?>
<?php endif; //teasers loops ?>



