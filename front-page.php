<?php get_header(); // includes nav and hero ?>

<article>
    <?php get_template_part( 'snippets/snippet-hero' ); ?>
    <?php // get_template_part( 'snippets/snippet-feature' ); ?>
</article>

<?php get_template_part( 'blocks/blocks' ); ?>

<?php if ( have_posts() ) :  while ( have_posts() ) : the_post();  ?>
<?php if ( !empty( get_the_content() ) ) : ?>
<article>
    <?php get_template_part( 'snippets/snippet-hero' ); ?>
    <?php // get_template_part( 'snippets/snippet-feature' ); ?>
</article>
<?php endif; ?>
<?php endwhile; endif; ?>

<div class="row-block bg-color">
    <aside class="shares w-safe">
        <p>Email sign-up</p>
    </aside>
</div>

<?php
$related = get_posts(
    array(
        'category__in' => wp_get_post_categories( $post->ID ),
        'numberposts'  => 6,
        'post__not_in' => array( $post->ID )
    )
);
if( $related ) : ?>
<div id="related-posts" class="row-block bg-offwhite prefade">
    <section class="w-max grid">
        <!-- .article-block -->
        <aside class="sidebar colspan-3">
            <div class="sidebar-sticky">
                <strong class="kicker">
                    RELATED ARTICLES
                </strong>
            </div>
        </aside>
        <article class="article colspan-9">
            <header class="header">
                <h6 class="headline">More like this:</h6>
            </header>
            <aside class="standard-teasers teasers">
                <?php foreach( $related as $post ) :  setup_postdata($post); ?>
                <p>Post</p>
                <?php endforeach;?>
            </aside>
        </article>
    </section>
</div>
<?php wp_reset_postdata(); endif; ?>

<script>
document.querySelectorAll('.myDiv').forEach((element, index) => {
    element.classList.add(`unique-${index}`)
})
</script>

<?php get_footer();  ?>