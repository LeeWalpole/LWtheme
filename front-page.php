<?php get_header(); // includes nav and hero and main ?>

<?php get_template_part( 'snippets/snippet-hero' ); ?>

<?php if(have_posts()) :
  // Loop#1
  $rp_query = new WP_Query('posts_per_page=4');
  while ($rp_query->have_posts()) :
    $rp_query->the_post(); ?>
    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    <?php the_excerpt();
  endwhile;
endif; ?>
  
  <?php if(have_posts()) :
  // Loop#2 for category ID 23
  $sm_query = new WP_Query(array(
    'category'  =>  "Grooming",
    'posts_per_page'  =>  3
  ));
  while ($sm_query->have_posts()) :
    $sm_query->the_post(); ?>
    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    <?php the_excerpt();
  endwhile;
endif; ?>


<?php get_template_part( 'blocks/blocks' ); ?>

<?php get_template_part( 'snippets/newsletter' ); ?>

<?php get_footer();  ?>
