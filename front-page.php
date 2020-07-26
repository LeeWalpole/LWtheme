<?php get_header(); // includes nav and hero and main ?>

<?php get_template_part( 'snippets/snippet-hero' ); ?>

<?php get_template_part( 'blocks/blocks' ); ?>

<?php get_template_part( 'snippets/newsletter' ); ?>

<?php $my_query = new WP_Query('category_name=featured&posts_per_page=5');
  while ($my_query->have_posts()) : $my_query->the_post();
 
  $do_not_duplicate = $post->ID; //This is the magic line
 
?>
<p>Title: 1: <?php the_title(); ?></p>
    <!-- Do stuff... -->
<?php endwhile; ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); 
 
  if( $post->ID == $do_not_duplicate ) continue; //This is the Magic Line
 
 ?>
<p>Title: 2: <?php the_title(); ?></p>
  <?php endwhile; endif; ?>

<?php get_footer();  ?>
