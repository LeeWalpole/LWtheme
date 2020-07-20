<?php global $post; if( have_rows('icons',$post->ID) ) : ?>
<?php while( have_rows('icons',$post->ID) ) : the_row();  ?>
<?php // $counter = 0;?>
<?php if( have_rows('icon',$post->ID) ) : while( have_rows('icon',$post->ID) ) : the_row(); $counter++; ?>
<?php 
$kicker = get_sub_field('kicker');
$headline = get_sub_field('headline');
$lead = get_sub_field('lead');
$url = get_sub_field('url');
$image = get_sub_field('image');
?>
<?php 
$link = get_sub_field('url');
$link_target = $link['target'] ? $link['target'] : '_self'; 
$link_title = $link['title'];
?>

<figure class="colspan-4 mobspan-6 icon">
    <a href="<?php echo $link['url']; ?>" title="<?php echo esc_attr($link_title); ?>" target="<?php echo esc_attr( $link_target ); ?>">
        <!-- <i class="fas fa-beer grow icon-large"></i> -->
        <?php echo $image; ?>
    </a>
    <?php if( $headline ) : ?>
    <figcaption class="<?php echo $bg_color; ?>">
        <b class="headline"><?php echo $headline; ?></b>
        <?php if( $lead ) : ?><small class="lead"><?php echo $lead; ?></small><?php endif; ?>
    </figcaption>
    <?php endif; //headine ?>
</figure>

<?php endwhile; endif; ?>
<?php endwhile; ?>
<?php endif; //teasers loops ?>