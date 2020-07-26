<?php get_header(); // includes nav and hero and main ?>



<?php get_template_part( 'snippets/snippet-hero' ); ?>


<h2>Loop n°1</h2>
<?php
$ids = array();
while (have_posts()) : the_post();
the_title();
?>
<?php $ids[]= $post->ID;
endwhile; ?>
 
<h2>Loop n°2</h2>
<?php
query_posts("showposts=50");
while (have_posts()) : the_post();
if (!in_array($post->ID, $ids)) {
  the_title();?>
<?php }
endwhile; ?>

<?php get_template_part( 'blocks/blocks' ); ?>

<?php get_template_part( 'snippets/newsletter' ); ?>

<?php get_footer();  ?>
