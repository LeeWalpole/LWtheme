<?php if (is_tax("demographic") || is_post_type_archive("travel-guides")) { ?>
    
    <?php $term = get_queried_object(); $term = $post->ID; ?>
    <?php if (have_rows('hero_header') ) : ?>
        <?php while( have_rows('hero_header',$term) ) : the_row(); ?>
        <?php
        $acf_kicker = get_sub_field('kicker');
        $acf_headline = get_sub_field('headline');
        $acf_lead = get_sub_field('lead');
        ?>
        <?php endwhile; ?>
    <?php endif; //  end have_rows('hero_header' ?>

    <?php 
    $kicker_alt = "TRAVEL GUIDES";
    $kicker = $acf_kicker ?: $kicker_alt; // if acf_kicker exists, else get the category
    $headline = $acf_headline ?: get_the_title(); // if acf_headline exists, else get the post title
    $teaser_image_url = get_the_post_thumbnail_url($post->ID, 'thumbnail') ? : "https://i0.wp.com/www.ladsholidayguide.com/wp-content/uploads/g-logo.png?w=360h=240&ssl=1";
    ?>
<?php } else { ?>

    <?php if (have_rows('hero_header') ) : ?>
        <?php while( have_rows('hero_header') ) : the_row(); ?>
        <?php
        $acf_kicker = get_sub_field('kicker');
        $acf_headline = get_sub_field('headline');
        $acf_lead = get_sub_field('lead');
        ?>
        <?php endwhile; ?>
    <?php endif; //  end have_rows('hero_header' ?>
    
    <?php 
    $category = get_the_category(); $kicker_alt = $category[0]->name; // get category name
    $kicker = $acf_kicker ?: $kicker_alt; // if acf_kicker exists, else get the category
    $headline = $acf_headline ?: get_the_title(); // if acf_headline exists, else get the post title
    $teaser_image_url = get_the_post_thumbnail_url($post->ID, 'thumbnail') ? : "https://i0.wp.com/www.ladsholidayguide.com/wp-content/uploads/g-logo.png?w=360h=240&ssl=1";
    ?>

<?php } ?>

<!--
<style>
:root { 
 --teaser-footer-height:40px;
}

aside.teasers {
grid-template-columns: repeat(auto-fit,minmax(320px,1fr))!important;
}

aside.teasers .teaser { 
position:relative;
padding-bottom:var(--teaser-footer-height);
}
.teaser small { 
position:absolute;
bottom:0; left:0;
width:100%;
height:var(--teaser-footer-height);
padding: 0 var(--padding-small);
}
</style>
-->

<a href="<?php echo esc_url(get_permalink()); ?>" title="<?php echo esc_attr ( get_the_title ()); ?>" class="teaser bg-white">
    <figure class="z-index-1 ratio" data-ratio="3:2">
        <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
        alt="<?php echo esc_attr(get_the_title()); ?>"
        data-src="<?php echo esc_attr($teaser_image_url); ?>"
        loading="lazy" class="lazyload">
    </figure>
    <header class="header">
        <strong class="kicker"><?php echo $kicker; ?></strong>
        <h4 class="headline"><?php echo $headline; ?></h4>
    </header>
    </a>   
    <?php /*
    <small class="small">By <?php echo get_the_author_meta( 'display_name', $author_id ); ?></small>
*/ ?>
