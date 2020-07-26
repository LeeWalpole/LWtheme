<?php get_header(); // includes nav and hero and main ?>

<?php get_template_part( 'snippets/snippet-hero' ); ?>

<?php get_template_part( 'blocks/blocks' ); ?>

<?php get_template_part( 'snippets/newsletter' ); ?>

<?php
 
// The Query
$query1 = new WP_Query( $args );
 
// The Loop
while ( $query1->have_posts() ) {
    $query1->the_post();
    echo '<li>' . get_the_title() . '</li>';
}
 
/* Restore original Post Data 
 * NB: Because we are using new WP_Query we aren't stomping on the 
 * original $wp_query and it does not need to be reset with 
 * wp_reset_query(). We just need to set the post data back up with
 * wp_reset_postdata().
 */
wp_reset_postdata();
 
 
/* The 2nd Query (without global var) */
$query2 = new WP_Query( $args2 );
 
// The 2nd Loop
while ( $query2->have_posts() ) {
    $query2->the_post();
    echo '<li>' . get_the_title( $query2->post->ID ) . '</li>';
}
 
// Restore original Post Data
wp_reset_postdata();
 
?>


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
