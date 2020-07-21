<?php get_header(); // includes nav and hero ?>

<div>
    <?php get_template_part( 'snippets/snippet-hero' ); ?>

    <?php if ( have_posts() ) : ?>
    <div class="w-max news-block">
        <div class="news-block-feature">
            <!-- <header class="header">
                <h2 class="headline">LATEST</h2>
            </header> -->
            <?php while ( have_posts() ) : the_post();  ?>

            <?php
$category = get_the_category();
$kicker = get_field('hero_kicker') ?: $category[0]->cat_name;
$headline = get_field('hero_headline') ?: get_the_title(); 
$subdeck = get_field('hero_subdeck'); // for some reason this didn't work
$teaser_image_url = get_the_post_thumbnail_url($post->ID, 'puff');
$feature_youtube = get_field('feature_youtube'); 
?>

            <?php $i++; if($i <= 1 ) : ?>
            <article class="teaser teaser_standard bg-white">
                <a href="<?php echo esc_url(get_permalink()); ?>" title="<?php echo esc_attr($headline); ?>"
                    value="<?php echo esc_attr($headline); ?>">

                    <figure class="bg-white prefade ratio <?php if ($feature_youtube) : echo "video_teaser"; endif; ?>"
                        data-ratio="16x9">
                        <picture>
                            <source type="image/jpeg" media="(min-width: 461px)"
                                srcset="<?php echo esc_url(get_the_post_thumbnail_url($post->ID, 'medium')); ?>">
                            <source type="image/jpeg" media="(max-width: 460px)"
                                srcset="<?php echo esc_url(get_the_post_thumbnail_url($post->ID, 'thumbnail')); ?>">
                            <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                                alt="<?php echo esc_attr($headline); ?>" class="lazyload" loading="lazy">
                        </picture>
                    </figure>
                    <header class="header bg-white postfade">
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
            class="puff bg-white">
            <figure class="<?php if ($feature_youtube) : echo "video_teaser"; endif; ?>">
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

        <?php endif; ?>

        <?php endwhile; ?>

    </div>
    <?php endif; ?>

    <div class="bg-offwhite row-block">
        <form class="category-search w-max" role="search" aria-label="On this page">
            <input placeholder="Search articles..." autofocus type="search" name="type" class="type" maxlength="89"
                onkeyup="filter(this)" />
        </form>
    </div>

    <?php if ( have_posts() ) : ?>
    <div class="bg-offwhite row-block">
        <div class="w-max grid grid-gap padding-x teasers ">

            <?php while ( have_posts() ) : the_post();  ?>

            <?php
$category = get_the_category();
$kicker = get_field('hero_kicker') ?: $category[0]->cat_name;
$headline = get_field('hero_headline') ?: get_the_title(); 
$subdeck = get_field('hero_subdeck'); // for some reason this didn't work
$teaser_image_url = get_the_post_thumbnail_url($post->ID, 'puff');
$feature_youtube = get_field('feature_youtube'); 
?>

            <article class="teaser teaser_standard bg-white colspan-4">
                <a href="<?php echo esc_url(get_permalink()); ?>" title="<?php echo esc_attr($headline); ?>"
                    value="<?php echo esc_attr($headline); ?>">
                    <figure class="bg-white prefade ratio <?php if ($feature_youtube) : echo "video_teaser"; endif; ?>"
                        data-ratio="3x2">
                        <picture>
                            <source type="image/jpeg" media="(min-width: 461px)"
                                srcset="<?php echo esc_url(get_the_post_thumbnail_url($post->ID, 'medium')); ?>">
                            <source type="image/jpeg" media="(max-width: 460px)"
                                srcset="<?php echo esc_url(get_the_post_thumbnail_url($post->ID, 'thumbnail')); ?>">
                            <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                                alt="<?php echo esc_attr($headline); ?>" class="lazyload" loading="lazy">
                        </picture>
                    </figure>
                    <header class="header bg-white prefade">
                        <strong class="kicker"><?php echo $kicker; ?></strong>
                        <h6 class="headline"><?php echo $headline; ?></h6>
                        <?php if ($subdeck) : ?><p><?php echo $subdeck; ?></p><?php endif; ?>
                    </header>
                </a>
            </article>

            <?php endwhile; ?>

        </div>
    </div>
    <?php endif; // (have posts) ?>

</div><!-- root -->


<?php if ( have_posts() ) :  while ( have_posts() ) : the_post();  ?>
<?php if ( !empty( get_the_content() ) ) : ?>
<article>
    <?php get_template_part( 'blocks/blocks' ); ?>
</article>
<?php endif; ?>
<?php endwhile; endif; ?>

<div class="row-block bg-color">
    <aside class="shares w-safe">
        <p>Email sign-up</p>
    </aside>
</div>

<?php get_footer();  ?>