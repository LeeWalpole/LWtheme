<?php if( have_rows('teaser_settings') ) :  while( have_rows('teaser_settings') ): the_row(); ?>
<?php $teaser_styles = get_sub_field('teaser_styles');?>
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