<?php     
$teaser_count = -1;
$teaser_category = get_sub_field('category') ?: "no category";
$teaser_tag = get_sub_field('tag');
$category_link = get_category_link( $teaser_category) ?: "#";
$offset = 0;
$layout = get_sub_field('layout');
$showcase_limit = get_sub_field('showcase_limit') ?: "-1";
$showcase_heading = get_sub_field('showcase_heading');
?>

<?php 
$posts = get_posts(array(
'post_type'			=> 'post',
'posts_per_page' => 1,
'offset' => 0,
'tag_id' => $teaser_tag, 
'post__not_in' => array($splashID),
'exclude' => array($splashID),
'category' => $teaser_category ) ); 
if( $posts ): ?>

<div class="bg-white row-block">
    <div class="grid grid-gap w-max showcase">

        <?php if ($showcase_heading) : ?>
        <a href="<?php echo esc_url($category_link); ?>" title="<?php echo esc_attr($showcase_heading); ?>" class="colspan-12">
            <header class="showcase_header header">
                <i class="fas fa-arrow-circle-right color"></i>
                <h2 class="headline">
                    <?php echo $showcase_heading; ?>
                </h2>
            </header>
        </a>
        <?php endif; ?>

        <article class="teaser standard_teaser teaser_highlight bg-white colspan-7">
            <?php $i=0; foreach ( $posts as $post ) : setup_postdata( $post ); ?>
            <?php
$category = get_the_category();
$kicker = get_field('hero_kicker') ?: $category[0]->cat_name;
$headline = get_field('hero_headline') ?: get_the_title(); 
$subdeck = get_field('hero_subdeck'); // for some reason this didn't work
$teaser_image_url = get_the_post_thumbnail_url($post->ID, 'puff');
$feature_youtube = get_field('feature_youtube'); 
?>
            <?php $i++; if($i <= 1 ) : ?>
            <?php $splashID = $post->ID; ?>
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
                <header class="header bg-white postfade">
                    <strong class="kicker"><?php echo $kicker; echo $splashID; ?></strong>
                    <h6 class="headline"><?php echo $headline; ?></h6>
                    <?php if($subdeck) : ?><p class="subdeck"><?php echo $subdeck; ?></p><?php endif; ?>
                </header>
            </a>
            <?php endif; // first post ?>
            <?php endforeach; ?>
        </article>
        <?php endif; // have_posts ?>

        <?php wp_reset_postdata(); ?>

        <?php 
$posts = get_posts(array(
'post_type'			=> 'post',
'posts_per_page' => 4,
'offset' => 1,
'tag_id' => $teaser_tag, 
'category' => $teaser_category ) ); 
if( $posts ): ?>

        <div class="puff_teasers colspan-5 bg-white">
            <?php $i=0; foreach ( $posts as $post ) : setup_postdata( $post ); ?>
            <?php
$category = get_the_category();
$kicker = get_field('hero_kicker') ?: $category[0]->cat_name;
$headline = get_field('hero_headline') ?: get_the_title(); 
$subdeck = get_field('hero_subdeck'); // for some reason this didn't work
$teaser_image_url = get_the_post_thumbnail_url($post->ID, 'puff');
$feature_youtube = get_field('feature_youtube'); 
?>

            <a href="<?php echo esc_url(get_permalink()); ?>" title="<?php echo esc_attr($headline); ?>"
                class="puff_teaser teaser bg-white">
                <figure>
                    <picture>
                        <source type="image/jpg" srcset="<?php echo esc_attr($teaser_image_url); ?>">
                        <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                            alt="<?php echo esc_attr($headline); ?>" class="lazyload" loading="lazy">
                    </picture>
                </figure>
                <header class="header">
                    <strong class="kicker"><?php echo $kicker; ?></strong>
                    <h6 class="headline"><?php echo $headline; ?></h6>
                </header>
            </a>
            <?php endforeach; ?>
            <!-- endwhile above -->
        </div><!-- puff_teasers -->
    </div>
</div>
<!-- end have posts below -->
<?php endif; // have_posts ?>

<?php wp_reset_postdata(); ?>


<?php if ($layout == "showcase_all" || $layout == "showcase_limit")  { ?>
<!-- Showcase ALL -->

<?php get_template_part( 'snippets/snippet-search' ); ?>

<?php 
$posts = get_posts(array(
'post_type'			=> 'post',
'posts_per_page' => $showcase_limit,
'tag_id' => $teaser_tag, 
'category' => $teaser_category ) ); 
if( $posts ): ?>

<div class="bg-offwhite row-block">
    <div class="w-max grid grid-gap padding-x teasers standard_teasers">

        <?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>

        <?php
$category = get_the_category();
$kicker = get_field('hero_kicker') ?: $category[0]->cat_name;
$headline = get_field('hero_headline') ?: get_the_title(); 
$subdeck = get_field('hero_subdeck'); // for some reason this didn't work
$teaser_image_url = get_the_post_thumbnail_url($post->ID, 'puff');
$feature_youtube = get_field('feature_youtube'); 
?>

        <article class="teaser standard_teaser bg-white">
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
        <?php endforeach; ?>
    </div>
</div>
<?php endif; // have_posts ?>
<?php } else  { ?>
<!-- Showcase 5 Only -->
<?php } // $showcase == "showcase_all" || "showcase_limit")  ?>

<?php wp_reset_postdata(); ?>