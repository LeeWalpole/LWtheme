<?php get_header(); // includes nav and hero ?>

<style>
.article-body img  { 
width:100%!important;
object-fit:contain!important;
height:auto;
} 

.article-body > p > a  { 
color:#ee0099;
} 
</style>

<?php if ( have_posts() ) :  while ( have_posts() ) : the_post();  ?>

<?php get_template_part( 'snippets/snippet-hero' ); ?>
<?php get_template_part( 'snippets/snippet-feature' ); ?>

<?php if ( !empty( get_the_content() ) ) : ?>

    <?php get_template_part( 'snippets/ad', 'header' ); ?>

<section class="row-block bg-white grid grid-gap w-max">
    <?php get_template_part( 'snippets/snippet', 'side-sharers' ); // col-1 ?>
    <article class="article-body w-safe colspan-7">
        <header class="header w-max">
            <!-- <strong class="kicker">Kicker Category</strong> -->
            <h1 class="title"><?php the_title(); ?></h1>
            <?php if ( ! has_excerpt() ) { ?>
            <?php } else {?>
            <em class="description"><?php echo get_the_excerpt();?></em>
            <?php } ?>
        </header>
        <?php // get_template_part( 'snippets/snippet', 'byline' ); ?>
 <!-- 
        <aside id="chapters" class="bg-black">
        </aside>
 -->
        <?php the_content(); ?>
        <?php get_template_part( 'snippets/snippet', 'article-sharers' ); // col-4 ?>
    </article>
    <?php get_template_part( 'snippets/ad', 'sidebar' ); ?>
</section>
<?php endif; ?>
<?php endwhile; endif; ?>

<?php // get_template_part( 'blocks/blocks' ); ?>

<?php // get_template_part( 'snippets/snippet', 'related' ); // col-4 ?>





<?php if ( have_posts() ) : ?>
<div class="bg-white row-block">
    <div class="grid grid-gap w-max">
        <article class="teaser standard_teaser teaser_highlight bg-white colspan-7">

            <?php while ( have_posts() ) : the_post();  ?>
            <?php
$category = get_the_category(323);
$kicker = get_field('hero_kicker') ?: $category[0]->cat_name;
$headline = get_field('hero_headline') ?: get_the_title(); 
$subdeck = get_field('hero_subdeck'); // for some reason this didn't work
$teaser_image_url = get_the_post_thumbnail_url($post->ID, 'thumbnail');
$feature_youtube = get_field('feature_youtube'); 
?>

            <?php if( $wp_query->current_post  <= 0 ) : ?>
            <a href="<?php echo esc_url(get_permalink()); ?>" title="<?php echo esc_attr($headline); ?>"
                value="<?php echo esc_attr($headline); ?>">
                <figure class="bg-white prefade ratio <?php if ($feature_youtube) : echo "video_teaser"; endif; ?>"
                    data-ratio="3x2">
                    <picture>
                        <source type="image/jpeg" media="(min-width: 461px)"
                            srcset="<?php echo esc_url(get_the_post_thumbnail_url($post->ID, 'thumbnail')); ?>">
                        <source type="image/jpeg" media="(max-width: 460px)"
                            srcset="<?php echo esc_url(get_the_post_thumbnail_url($post->ID, 'thumbnail')); ?>">
                        <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                            alt="<?php echo esc_attr($headline); ?>" class="lazyload" loading="lazy">
                    </picture>
                </figure>
                <header class="header bg-white postfade">
                    <strong class="kicker"><?php echo $kicker; ?></strong>
                    <h6 class="headline"><?php echo $headline; ?></h6>
                    <?php if($subdeck) : ?><p class="subdeck"><?php echo $subdeck; ?></p><?php endif; ?>
                </header>
            </a>
            <?php endif; // first post ?>
            <?php endwhile; ?>
        </article>
        <?php rewind_posts(); ?>

        <div class="puff_teasers colspan-5 bg-white">
            <?php while ( have_posts() ) : the_post(); ?>
            <?php
$category = get_the_category();
$kicker = get_field('hero_kicker') ?: $category[0]->cat_name;
$headline = get_field('hero_headline') ?: get_the_title(); 
$subdeck = get_field('hero_subdeck'); // for some reason this didn't work
$teaser_image_url = get_the_post_thumbnail_url($post->ID, 'thumbnail');
$feature_youtube = get_field('feature_youtube'); 
?>
            <?php if( $wp_query->current_post  >= 1  && $wp_query->current_post  <= 4  ) : ?>
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
            <?php endif; // posts 2+ ?>
            <!-- endwhile below -->
            <?php endwhile; ?>
                        <!-- endwhile above -->
        </div><!-- puff_teasers -->
    </div>
</div>
          <!-- end have posts below -->
<?php endif; // have_posts ?>







<?php get_footer();  ?>





