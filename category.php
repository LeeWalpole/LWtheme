<?php get_header(); // includes nav and hero ?>

<article>
    <?php get_template_part( 'snippets/snippet-hero' ); ?>

    <?php     
$teaser_count = -1;
$teaser_category = get_sub_field('category');
$teaser_tag = get_sub_field('tag');
$category_link = get_category_link( $teaser_category);
?>



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

        <a href="<?php echo esc_attr($category_link); ?>" class="more">MORE › &#8250;</a>

    </div>


    <?php endif; ?>




</article>

<?php get_template_part( 'blocks/blocks' ); ?>

<?php if ( have_posts() ) :  while ( have_posts() ) : the_post();  ?>
<?php if ( !empty( get_the_content() ) ) : ?>
<article>
    <?php get_template_part( 'snippets/snippet-hero' ); ?>
    <?php // get_template_part( 'snippets/snippet-feature' ); ?>
</article>
<?php endif; ?>
<?php endwhile; endif; ?>

<div class="row-block bg-color">
    <aside class="shares w-safe">
        <p>Email sign-up</p>
    </aside>
</div>

<?php
$related = get_posts(
    array(
        'category__in' => wp_get_post_categories( $post->ID ),
        'numberposts'  => 6,
        'post__not_in' => array( $post->ID )
    )
);
if( $related ) : ?>
<div id="related-posts" class="row-block bg-offwhite prefade">
    <section class="w-max grid">
        <!-- .article-block -->
        <aside class="sidebar colspan-3">
            <div class="sidebar-sticky">
                <strong class="kicker">
                    RELATED ARTICLES
                </strong>
            </div>
        </aside>
        <article class="article colspan-9">
            <header class="header">
                <h6 class="headline">More like this:</h6>
            </header>
            <aside class="standard-teasers teasers">
                <?php foreach( $related as $post ) :  setup_postdata($post); ?>
                <p>Post</p>
                <?php endforeach;?>
            </aside>
        </article>
    </section>
</div>
<?php wp_reset_postdata(); endif; ?>

<script>
document.querySelectorAll('.myDiv').forEach((element, index) => {
    element.classList.add(`unique-${index}`)
})
</script>

<?php get_footer();  ?>