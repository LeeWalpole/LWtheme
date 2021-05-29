<?php 
// $nav_logo_id = get_field('nav_logo','option');
// $nav_logo_size = "logo-image"; // (thumbnail, medium, large, full or custom size)
// $nav_logo_url = wp_get_attachment_image_src( $nav_logo_id, $nav_logo_size );
// $nav_logo_url = apply_filters( 'jetpack_photon_url', get_field('nav_logo','options'), "h=50"); 
?>

<footer id="footer" class="footer bg-black prefade">
    <?php if( have_rows('site_menu','options') ) : ?>
    <!-- nav-menu-inner allows for overflow / scrolling -->
    <div class="bg-white">
        <div id="footer-menu-elements" class="grid row-block w-max center nav-menu-elements">

            <?php while ( have_rows('site_menu','options') ) : the_row(); // site menu is flexible content  ?>
            <?php if( get_row_layout() == 'column_box' ) : // column_box is one of the flexible content layouts  ?>

            <?php $headline = get_sub_field('headline'); // grab headline from each column_box layout ?>
            <?php $col_width = get_sub_field('col_width'); // grab headline from each column_box layout ?>
            <?php $textbox = get_sub_field('textbox'); // grab headline from each column_box layout ?>

            <aside class="<?php if( $col_width ) : echo $col_width; endif; ?> nav-menu-element">

                <?php if(get_sub_field('type') == "links") { ?>

                <?php if( $headline ) : ?><h5><?php echo $headline; ?></h5><?php endif; ?>

                <ul>
                    <?php if(have_rows('links')): while (have_rows('links')) : the_row(); $menuLink  = get_sub_field('link'); ?>
                    <li><a href="<?php echo esc_attr($menuLink['url']); ?>"
                            title="<?php echo esc_attr( get_the_title() ); ?>"
                            target="<?php echo esc_attr( $menuLink['target'] ? $menuLink['target'] : '_self' ); ?>"><?php echo $menuLink['title'] ?></a>
                    </li>
                    <?php endwhile; endif;  ?>
                </ul>

                <?php } elseif(get_sub_field('type') == "textbox")  { ?>

                <?php if( $headline ) : ?><h5><?php echo $headline; ?></h5><?php endif; ?>

                <p><?php echo $textbox; ?></p>

                <?php } else {  } ?>

            </aside>
            <?php elseif( get_row_layout() == 'horizontal_line' ) : // end ( get_row_layout() == 'column_box' )   ?>
            <hr>
            <?php else : ?>
            <!-- no row layouts --><?php endif; //get_row_layout (column_box)  ?>
            <?php endwhile; echo "<!-- No menu-->"; ?>

        </div>
    </div>
    <?php endif; // end flexible content ('site_menu'  ?>

    <?php 
$logo_url = get_field('nav_logo','options'); $logo_short_url = substr($logo_url, 8); 
$logo_jetpack_url = "https://i0.wp.com/".$logo_short_url . "?h=80";
?>

    <div class="bg-black">
        <?php if ($logo_url) : ?>
        <figure class="flex footer-logo w-max center">
            <a href="<?php echo esc_html(get_home_url()); ?>" class="prefade"
                title="<?php echo esc_html(get_bloginfo('name')); ?> Logo">
                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                    data-src="<?php echo esc_attr($logo_jetpack_url); ?>"
                    alt="<?php echo esc_attr(get_bloginfo('name')); ?>" class="prefade lazyload" loading="lazy">
            </a>
        <?php endif; ?>
        </figure>

        <small class="copyright bg-black prefade">Copyright © <?php echo date('Y'); ?> |
            <a href="<?php echo esc_attr(get_home_url()); ?>"
                title="<?php echo esc_attr(get_bloginfo('name')); ?>"><?php echo esc_attr(get_bloginfo('name')); ?></a>
            <em class="small"><?php echo esc_attr(get_bloginfo('description')); ?> </em>
        </small>

        <!-- Social Media Links Below -->
        <?php if( have_rows('social_links','options') ) : ?>
        <ul class="flex footer-socials  w-max center">
            <?php while( have_rows('social_links','options') ): the_row(); ?>
            <li>
                <a href="<?php echo esc_attr(get_sub_field('social_link')); ?>" class="prefade"
                    title="More&nbsp<?php echo esc_attr(get_bloginfo('name')); ?>"><?php the_sub_field('social_brand'); ?></a>
            </li>
            <?php endwhile; ?>
        </ul>
        <?php endif; ?>
        <!-- Social Media Links Above -->

    </div>

    <a href="https://www.leewalpole.co.uk/" class="credit bg-black prefade" target="_blank">
        Crafted with <i class="fas fa-heart color" style="padding:0 4px;"></i> Coded by Lee Walpole
    </a>

</footer>
