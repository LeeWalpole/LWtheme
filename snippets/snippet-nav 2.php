<?php if(have_rows('nav_links','option')):  while (have_rows('nav_links','option')) : the_row();  ?>
<?php $links[] = get_sub_field('nav_link'); ?>
<?php endwhile; endif; ?>
<!-- nav blocks above -->
<?php if(have_rows('nav_links','option')):  while (have_rows('nav_links','option')) : the_row();  ?>
<?php $links[] = get_sub_field('nav_link'); ?>
<?php endwhile; endif; ?>
<?php $cta = get_field('cta_link','option'); ?>
<?php 
if( $cta ): 
    $cta_url = $cta['url'];
    $cta_text = $cta['title'];
    $cta_target = $cta['target'] ? $cta['target'] : '_self';
endif;
?>
<?php 
$logo_url = get_field('nav_logo','options'); 
$logo_short_url = substr($logo_url, 8); 
$logo_jetpack_url = "https://i0.wp.com/".$logo_short_url . "?h=80";
?>
<div id="nav" class="nav">
    <nav id="nav-bar" class="nav-bar">
        <?php if ($logo_url) { ?>
        <a href="<?php echo esc_html(get_home_url()); ?>" class="nav-logo prefade"
            title="<?php echo esc_html(get_bloginfo('name')); ?> Logo">
            <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                data-src="<?php echo esc_attr($logo_jetpack_url); ?>"
                alt="<?php echo esc_attr(get_bloginfo('name')); ?>" class="prefade lazyload" loading="eager">
        </a>
        <?php } else { echo esc_html(get_bloginfo('name')); } //$logo_url ?>
        <ul class="nav-bar-links prefade">
            <?php if($links) : // links next to nav logo (only visible on desktop) ?>
            <?php if(have_rows('nav_links','option')):  while (have_rows('nav_links','option')) : the_row(); $navLink  = get_sub_field('nav_link');  ?>
            <?php // foreach($links as $link) :?>

            <?php if( have_rows('subnav_links') ) { ?>
            <li class="nav-bar-dropdown-li">
                <a href="<?php echo $navLink['url']; ?>" title="<?php echo esc_attr($navLink['title']); ?>"
                    target="<?php echo esc_attr( $navLink['target'] ? $navLink['target'] : '_self' ); ?>"><?php echo $navLink['title']; ?>
                </a>
                <?php } else { ?>
            <li>
                <a href="<?php echo $navLink['url']; ?>" title="<?php echo esc_attr($navLink['title']); ?>"
                    target="<?php echo esc_attr( $navLink['target'] ? $navLink['target'] : '_self' ); ?>"><?php echo $navLink['title']; ?>
                </a>
            </li>
            <?php } ?>
            <?php if(have_rows('subnav_links')): ?>
            <div class="nav-bar-dropdown">
                <?php while (have_rows('subnav_links')) : the_row(); $subnavLink  = get_sub_field('subnav_link');  ?>
                <a href="<?php echo $subnavLink['url']; ?>" title="<?php echo esc_attr($navLink['title']); ?>"
                    target="<?php echo esc_attr( $subnavLink['target'] ? $subnavLink['target'] : '_self' ); ?>"><?php echo $subnavLink['title']; ?></a>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
            <?php // endforeach; ?>
            <?php endwhile; ?>
            </li>
            <?php endif; ?>
            <?php endif; ?>
            <li><?php edit_post_link(__('Edit')); ?></li>
        </ul>
        <?php if( have_rows('site_menu','options') ) : ?>
        <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <?php endif; ?>
    </nav><!-- close top navbar navigation -->
    <div class="nav-menu bg-offblack">
        <!-- megamenu which appears when burger clicked -->
        <div id="nav-menu-cloned" class="nav-menu-inner">
        </div><!-- nav-menu-inner -->
    </div><!-- nav-menu -->
</div><!-- #nav -->