<?php if( have_rows('block_settings') ) :  while( have_rows('block_settings') ): the_row(); ?>
    <?php $block_background = get_sub_field('block_background');?>
    <?php switch ($block_background) : case "offwhite": ?>
    <?php $bg_color = "bg-offwhite";  ?>
    <?php break; ?>
    <?php case "offblack": ?>
    <?php $bg_color = "bg-offblack";  ?>
    <?php break; ?>
    <?php case "light": ?>
    <?php $bg_color = "bg-light";  ?>
    <?php break; ?>
    <?php case "dark": ?>
    <?php $bg_color = "bg-dark";  ?>
    <?php break; ?>
    <?php case "white": ?>
    <?php $bg_color = "bg-white";  ?>
    <?php break; ?>
    <?php case "black": ?>
    <?php $bg_color = "bg-black";  ?>
    <?php break; ?>
    <?php default: ?>
    <?php $bg_color = "bg-white"; ?>
    <?php endswitch; ?>

    <?php $block_layout = get_sub_field('block_layout');?>
    <?php $block_id = get_sub_field('block_id');?>
    
<?php endwhile; endif; //block-settings ?>

<?php if( $block_layout == 'w_max') { $width = "w-max"; ?>
<?php } elseif ($block_layout == 'w_safe') {  $width = "w-safe";?>
<?php } elseif ($block_layout == 'w_full') {  $width = "w-full";?>
<?php } else { $width =  "w-max"; } ?>

