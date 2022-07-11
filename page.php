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

<?php get_template_part( 'blocks/blocks' ); ?>

<?php // get_template_part( 'snippets/snippet', 'related' ); // col-4 ?>


<h1>Category?</h1>

<?php     
$teaser_count = -1;
$teaser_category = 323;
$category_link = get_category_link( $teaser_category);
?>

<?php
    global $post;
    $myposts = get_posts( array( 
    'posts_per_page' => $teaser_count,
    'no_found_rows'  => true, 
    'offset' => 0, 
    'tag_id' => $teaser_tag, 
    'category' => $teaser_category ) ); 
    if ( $myposts ) : ?>


<div class="w-max news-block">
    <div class="news-block-feature">
        <header class="header">
            <h2 class="headline">LATEST</h2>
        </header>
        <?php foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

        <?php
// $category = get_the_category();
$category = 323; // 323 = Muscle
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

                <figure class="bg-white prefade ratio <?php if ($feature_youtube) : echo "video_teaser"; endif; ?>" data-ratio="16x9">
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

    <?php endforeach; ?>

    <a href="<?php echo esc_attr($category_link); ?>" class="more">MORE › &#8250;</a>

</div>


<?php endif; ?>




<?php get_footer();  ?>





