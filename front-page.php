<?php get_header(); // includes nav and hero and main ?>

<?php get_template_part( 'snippets/snippet-hero' ); ?>

<?php
$do_not_duplicate = array(); // set befor loop variable as array

// 1. Loop
query_posts('showposts=5');
while ( have_posts() ) : the_post();
    $do_not_duplicate[] = $post->ID; // remember ID's in loop
    // display post ...
    "<p>".the_title()."</p>";
endwhile;
?>
<hr>
<?php
// 2. Loop
query_posts( 'showposts=15' );
while (have_posts()) : the_post();
    if ( !in_array( $post->ID, $do_not_duplicate ) ) { // check IDs         
// display posts ...
"<p>".the_title()."</p>";
    }
endwhile;
?>




<?php get_template_part( 'blocks/blocks' ); ?>

<?php get_template_part( 'snippets/newsletter' ); ?>

<?php get_footer();  ?>
