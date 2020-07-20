<?php include ('block-settings.php'); ?>

<?php if( $block_layout == 'sidebar') { ?>
    <div id="<?php echo esc_attr($block_id); ?>" class="row-block prefade <?php echo esc_attr($bg_color); ?>">
        <section class="<?php echo esc_attr($width); ?> grid"><!-- .article-block -->
            <aside class="sidebar colspan-4">
                <div class="sidebar-sticky">
                    <?php include ('block-header.php'); ?>
                </div>
            </aside>
            <article class="article-body colspan-8 <?php echo esc_attr($bg_color); ?>">
                <?php echo wpautop( get_sub_field("text_box")); ?>
            </article>
        </section>
    </div>
<?php } else { ?>
    <div id="<?php echo esc_attr($block_id); ?>" class="row-block prefade <?php echo esc_attr($bg_color); ?>">
        <section class="<?php echo esc_attr($width); ?> grid"><!-- .article-block -->
            <article class="article-body colspan-12 <?php echo esc_attr($bg_color); ?>">
                <?php echo wpautop( get_sub_field("text_box")); ?>
            </article>
        </section>
    </div>
<?php } // block layout ?>

<?php /*
<?php $teasers_ratio = get_sub_field('teaser_ratio');
    if( $teasers_ratio == "1x1" ) { $teaser_image_h = 360; $ratio = "1:1"; }
    else {  $teaser_image_h = 240; $ratio = "3:2";  } ?>

    <?php $teaser_styles = get_sub_field('teaser_styles');
    if( $teaser_styles == "image_teasers" ) {?>
    <style>
        .image_teasers .teaser header {
            display: none;
        }
        .image_teasers .teasers {
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        }
    </style>
    <?php }
    elseif( $teaser_styles == "puff_teasers" ) {  }
    else {  $teaser_image_h = 240; } ?>

*/ ?>





