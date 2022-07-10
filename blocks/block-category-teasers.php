

<?php     
$teaser_count = get_sub_field('teaser_count');
$teaser_category = get_sub_field('category');
$teaser_tag = get_sub_field('tag');
$teasers_headline = "";
$teasers_sideline = "sideline";
$category_link = get_category_link( $teaser_category);
?>

<?php include ('block-settings.php'); ?>
<?php include ('teaser-settings.php'); ?>

<?php // get_template_part( 'blocks/teaser-standard' ); ?>
<?php if( $block_layout == 'sidebar') { ?>
<div id="<?php echo esc_attr($block_id); ?>" class="row-block prefade <?php echo esc_attr($bg_color); ?>">
    <section class="<?php echo esc_attr($width); ?> grid">
        <!-- .article-block -->
        <aside class="sidebar colspan-3">
            <div class="sidebar-sticky">
                <?php include ('block-header.php'); ?>
            </div>
        </aside>
        <?php $colspan = "colspan-9 with-side"; ?>
        <!-- Split Block Teasers Below -->
        <?php
    global $post;
    $myposts = get_posts( array(
        'posts_per_page' => $teaser_count,
        'no_found_rows'  => true,
        'offset' => 0,
        'tag_id' => $teaser_tag,
        'category' => $teaser_category // club-18-30
    ) ); ?>

        <?php if ( $myposts ) : ?>

        <?php switch ($teaser_styles) { case "split_teasers" : ?>
        <!-- Split Boxes Below -->
        <div class="split-boxes <?php echo esc_attr($colspan); ?>">
            <?php foreach ( $myposts as $post ) :  setup_postdata( $post ); ?>
            <?php get_template_part( 'blocks/teasers-split' ); ?>
            <?php endforeach; wp_reset_postdata(); ?>
        </div>
        <!-- Split Teasers Split Boxes Above -->

        <?php break; case "standard_teasers":  ?>

        <!-- Standard Teasers inside block below -->
        <div
            class="<?php echo esc_attr($colspan); ?> <?php echo esc_attr($bg_color); ?> <?php echo esc_attr($teaser_styles); ?>">
            <?php foreach ( $myposts as $post ) :  setup_postdata( $post ); ?>
            <?php get_template_part( 'blocks/teaser-standard-new' ); ?>
            <?php endforeach; wp_reset_postdata(); ?>
        </div>
        <!-- Standard Teasers inside block above -->

        <?php break; case "puff_teasers": ?>
        puff_teasers
        <?php break; case "image_teasers": ?>
        image_teasers
        <?php // get_template_part( 'blocks/split-teasers' ); ?>
        <?php break; default: ?>
        <!-- No teaser style selected -->
        <?php } ?>


        <?php endif; // $myposts (get_posts query) ?>

    </section>
</div>
<?php } else { // Sidebar not selected ?>


<div id="<?php echo esc_attr($block_id); ?>" class="row-block prefade <?php echo esc_attr($bg_color); ?>">

    <?php global $post; $myposts = get_posts( array( 'posts_per_page' => $teaser_count,
'no_found_rows'  => true, 'offset' => 0, 'tag_id' => $teaser_tag, 
'category' => $teaser_category, ) ); ?>

    <?php if ( $myposts ) : ?>

    <?php switch ($teaser_styles) { case "split_teasers" : ?>
    <!-- Split Boxes BEGIN -->
    <section class="<?php echo esc_attr($width); ?>">
        <!-- Split Boxes Below -->
        <div class="split-boxes <?php echo esc_attr($colspan); ?>">
            <?php foreach ( $myposts as $post ) :  setup_postdata( $post ); ?>
            <?php get_template_part( 'blocks/teasers-split' ); ?>
            <?php endforeach; wp_reset_postdata(); ?>
        </div>
    </section>
    <!-- Split Teasers END -->

    <?php break; case "standard_teasers": ?>
    <section class="<?php echo esc_attr($width); ?>">
        <!-- Standard Teasers inside block below -->
        <div
            class="<?php echo esc_attr($colspan); ?> <?php echo esc_attr($bg_color); ?> <?php echo esc_attr($teaser_styles); ?>">
            <?php foreach ( $myposts as $post ) :  setup_postdata( $post ); ?>
            <?php get_template_part( 'blocks/teaser-standard-new' ); ?>
            <?php endforeach; wp_reset_postdata(); ?>
        </div>
    </section>
    <!-- Standard Teasers inside block above -->

    <?php break; case "category_grid": ?>
    <section class="<?php echo esc_attr($width); ?>">
        <?php get_template_part( 'blocks/category-grid' ); ?>
    </section>
    <!-- END CAT GRID -->

    <?php break; case "puff_teasers": ?>
    puff_teasers
    <?php break; case "image_teasers": ?>
    image_teasers
    <?php // get_template_part( 'blocks/split-teasers' ); ?>
    <?php break; default: ?>
    <!-- No teaser style selected -->
    <?php } ?>


    <?php endif; // $myposts (get_posts query) ?>


</div>

<?php } // block layout ?>