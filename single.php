<?php get_header(); // includes nav and hero ?>

<?php if ( have_posts() ) :  while ( have_posts() ) : the_post();  ?>

<?php get_template_part( 'snippets/snippet-hero' ); ?>
<?php get_template_part( 'snippets/snippet-feature' ); ?>

<?php if ( !empty( get_the_content() ) ) : ?>
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
        <?php get_template_part( 'snippets/snippet', 'byline' ); ?>

        <?php 
$post_id = false;
$chapter_status = get_field('chapter_status',$post_id); 
$chapter_prefix = get_field('chapter_prefix',$post_id); 
$chapter_tag = get_field('chapter_tag',$post_id); // for some reason this didn't work
?>
<?php switch ($chapter_status) : case "on": ?>

<aside id="chapters" class="bg-black chapters">
    <!-- Chapters appear Below -->
</aside>
<?php break; default: ?>
No chapters
<?php endswitch; ?>

        <?php the_content(); ?>
        <?php get_template_part( 'snippets/snippet', 'article-sharers' ); // col-4 ?>
    </article>
    <?php get_template_part( 'snippets/snippet', 'side-ad' ); // col-4 ?>
</section>
<?php endif; ?>
<?php endwhile; endif; ?>

<?php get_template_part( 'snippets/snippet', 'related' ); // col-4 ?>

<?php get_footer();  ?>