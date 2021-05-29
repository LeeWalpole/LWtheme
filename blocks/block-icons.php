<h1>block-icons.php (below)</h1>

<?php include ('block-settings.php'); ?>

<div id="<?php // echo esc_attr($block_id); ?>" class="row-block prefade <?php // echo esc_attr($bg_color); ?>">
    <section class="<?php // echo esc_attr($width); ?> grid"><!-- .article-block -->
        <article class="article colspan-12">
            <?php include ('block-header.php'); ?>
            <div class="grid icons <?php // echo $bg_color; ?>">
                <?php include ('block-icon.php'); ?>
            </div>
        </article>
    </section>
</div>

<p>test</p>

<?php
/*
include ('block-settings.php'); ?>

<?php if( have_rows('icon_settings') ) :  while( have_rows('icon_settings') ): the_row(); ?>
<?php $teaser_ratio = get_sub_field('teaser_ratio');?>
    <?php switch ($teaser_ratio) : case "3x2": ?>
    <?php $ratio = "3:2"; 
    $teaser_image_height = 240;
    ?>
    <?php break; ?>
    <?php case "1x1": ?>
    <?php $ratio = "1:1"; 
    $teaser_image_height = 360;
    ?>
    <?php break; ?>
    <?php default: ?>
    <?php $ratio = "3:2"; 
    $teaser_image_height = 240;
    ?>
    <?php endswitch; ?>
<?php endwhile; endif; //teaser_settings ?>



<?php if( $block_layout == 'sidebar') { ?>
<div id="<?php echo esc_attr($block_id); ?>" class="row-block prefade <?php echo esc_attr($bg_color); ?>">
    <section class="<?php echo esc_attr($width); ?> grid"><!-- .article-block -->
        <aside class="sidebar colspan-4">
            <div class="sidebar-sticky">
                <?php include ('block-header.php'); ?>
            </div>
        </aside>
        <article class="article colspan-8">
            <div class="grid icons <?php echo $bg_color; ?>">
                <?php include ('block-icon.php'); ?>
            </div>
        </article>
    </section>
</div>
<?php } else { ?>
<div id="<?php echo esc_attr($block_id); ?>" class="row-block prefade <?php echo esc_attr($bg_color); ?>">
    <section class="<?php echo esc_attr($width); ?> grid"><!-- .article-block -->
        <article class="article colspan-12">
            <?php include ('block-header.php'); ?>
            <div class="grid icons <?php echo $bg_color; ?>">
                <?php include ('block-icon.php'); ?>
            </div>
        </article>
    </section>
</div>
<?php } */ // block layout ?>

<h1>block-icons.php (above)</h1>