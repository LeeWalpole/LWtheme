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
        <aside id="chapters" class="bg-black chapters">
            <!-- Chapters appear Below -->
        </aside>
        <?php the_content(); ?>
        <?php get_template_part( 'snippets/snippet', 'article-sharers' ); // col-4 ?>
    </article>
    <?php get_template_part( 'snippets/snippet', 'side-ad' ); // col-4 ?>
</section>
<?php endif; ?>
<?php endwhile; endif; ?>

<?php get_template_part( 'snippets/snippet', 'related' ); // col-4 ?>

<div class="row-block bg-color">
    <aside class="shares w-safe">
        <p>Email sign-up</p>

        <hr>
<div class="font">
    Class Font
</div>
<hr>
<div class="font-bold">
    Class Font Bold
</div>
<hr>
<div class="font-heavy">
    Class Font heavy
</div>

    </aside>
</div>



<?php get_footer();  ?>