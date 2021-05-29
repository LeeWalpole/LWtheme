<?php if(have_rows('blocks')):  while (have_rows('blocks')) : the_row();  ?>

<?php if( get_row_layout() == 'teasers' ) { ?>
<?php get_template_part( 'blocks/block-teasers' ); ?>

<?php } elseif( get_row_layout() == 'teasers_via_json' ) { ?>
<?php get_template_part( 'blocks/block-json-teasers' ); ?>

<?php } elseif( get_row_layout() == 'layout_via_category' ) { ?>
<?php get_template_part( 'blocks/layout-via-category' ); ?>

<?php } elseif( get_row_layout() == 'teasers_via_category' ) { ?>
<?php get_template_part( 'blocks/block-category-teasers' ); ?>

<?php } elseif( get_row_layout() == 'text_block' ) { ?>
<?php get_template_part( 'blocks/block-text' ); ?>

<?php } elseif( get_row_layout() == 'split_block' ) { ?>
<?php get_template_part( 'blocks/block-split' ); ?>

<?php } elseif( get_row_layout() == 'gallery_block' ) { ?>
<?php get_template_part( 'blocks/block-gallery' ); ?>

<?php } elseif( get_row_layout() == 'icons' ) { ?>
<?php get_template_part( 'blocks/block-icons' ); ?>

<?php } elseif( get_row_layout() == 'showcase' ) { ?>
<?php get_template_part( 'blocks/block-showcase' ); ?>

<?php } elseif( get_row_layout() == 'icon' ) { ?>
<?php get_template_part( 'blocks/block-icon' ); ?>

<?php } else {  
  //  relax();
    }  // end get_row_layout and do nothing ?>
<?php endwhile; endif; ?>