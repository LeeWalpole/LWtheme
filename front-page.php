<?php get_header(); // includes nav and hero and main ?>

<?php get_template_part( 'snippets/snippet-hero' ); ?>

<?php if ( have_posts() ) :  while ( have_posts() ) : the_post();  ?>
<?php if ( !empty( get_the_content() ) ) : ?>
<article>
    <?php get_template_part( 'blocks/blocks' ); ?>
</article>
<?php endif; ?>
<?php endwhile; endif; ?>

<?php get_template_part( 'snippets/newsletter' ); ?>

<?php get_footer();  ?>
