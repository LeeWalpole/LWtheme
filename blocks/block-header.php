
<?php if( have_rows('block_settings') ) :  while( have_rows('block_settings') ): the_row(); ?>
    <?php if( have_rows('block_header') ) :  while( have_rows('block_header') ): the_row(); ?>
    <?php 
    $block_kicker = get_sub_field('kicker');
    $block_headline = get_sub_field('headline');
    $block_lead = get_sub_field('lead');
$block_cta = get_sub_field('cta');
$block_cta_target = $block_cta['target'] ? $block_cta['target'] : '_self'; 
$block_cta_title = $block_cta['title'];
$block_cta_url = $block_cta['url'];
    ?>
    <?php endwhile; endif; //block-settings ?>
<?php endwhile; endif; ?>
    <?php if( $block_headline ) : ?>    
    <header class="header <?php echo $bg_color; ?>">
        <?php if( $block_kicker ) : ?><strong class="kicker"><?php echo $block_kicker; ?></strong><?php endif; ?>
        <h2 class="headline"><?php echo $block_headline; ?></h2>
        <?php if( $block_lead ) : ?><p class="lead"><?php echo $block_lead; ?></p><?php endif; ?>
        <?php if( $block_cta ) : ?>
        <div class="buttons">
            <a href="<?php echo $block_cta_url ?: "javascript:void(0)"; ?>" title="<?php echo esc_attr($block_cta_title); ?>"
target="<?php echo esc_attr( $block_cta_target ); ?>" class="button"><?php echo esc_html($block_cta_title); ?></a>
        </div>
        <?php endif; ?>
    </header>
<?php endif; ?>







