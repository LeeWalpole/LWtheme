<?php get_header(); // includes nav and hero ?>

<?php if ( have_posts() ) :  while ( have_posts() ) : the_post();  ?>

<article>

    <?php get_template_part( 'snippets/snippet-hero' ); ?>

    <?php get_template_part( 'snippets/snippet-feature' ); ?>

    <div class="row-block bg-white grid grid-gap w-max">
    <?php // get_template_part( 'snippets/snippet', 'side-sharers' ); // col-1 ?>
    <?php if ( !empty( get_the_content() ) ) : ?>
    <section class="article-body w-safe colspan-8">
        <?php the_content(); ?>
    </section>
    </div>
    <?php // get_template_part( 'snippets/snippet', 'side-ad' ); // col-4 ?>
    <?php endif; ?>

    <?php get_template_part( 'blocks/blocks' ); ?>

</article>

<?php endwhile; endif; ?>

<?php get_footer();  ?>