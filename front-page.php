<?php get_header(); // includes nav and hero and main ?>

<?php get_template_part( 'snippets/snippet-hero' ); ?>

<?php get_template_part( 'blocks/blocks' ); ?>

<?php get_template_part( 'snippets/newsletter' ); ?>

<?php // first query
 
   $my_query = new WP_Query('posts_per_page=3');
   while ($my_query->have_posts()) : $my_query->the_post();
   $do_not_duplicate[] = $post->ID 
   // starts an array and puts the post ID in the array
?>
     
<p>Title1:<?php the_title(); ?></p>
 
<?php endwhile; ?>
     
   <!-- Do other stuff... -->
   
<?php // second query
 
   if (have_posts()) : while (have_posts()) : the_post(); 
   if (in_array($post->ID, $do_not_duplicate)) continue; 
   // checks if the post is in the array. if yes, skip, if no proceed as usual
?>
    
    <p>Title2:<?php the_title(); ?></p>

   <!-- Do stuff... -->
 
<?php endwhile; endif; ?>

<?php get_footer();  ?>
