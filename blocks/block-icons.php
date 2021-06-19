<h1>block-icons.php (below)</h1>

<?php include ('block-settings.php'); ?>

<div id="<?php // echo esc_attr($block_id); ?>" class="row-block prefade <?php // echo esc_attr($bg_color); ?>">
    <section class="<?php // echo esc_attr($width); ?> grid">
        <!-- .article-block -->
        <article class="article colspan-12">
            <?php // include ('block-header.php'); ?>
            <div class="grid icons <?php // echo $bg_color; ?>">
                <?php //  include ('block-icon.php'); ?>

                <p>test</p>

            </div>
        </article>
    </section>
</div>

<style>
            .icons {
                width: 100%;
                margin: 0 auto;
background:yellow;
            }


/* Responsive layout - makes a one column layout instead of a two-column layout */




    .icons {  

    display: flex;
flex-direction: column;
align-items: center;

    }

@media (min-width: 768px){ 
  .icons {  
    display: flex;
    justify-content: space-around!important;
    align-content: flex-start!important;
    flex-wrap: wrap!important;
    list-style: none;
    text-align: center!important;
    background:green;
    flex-direction: row;
    }
}

.icon {
display: flex;
flex-direction: column;
align-items: center;
color: red;
padding:var(--padding);
text-align: center;
}

.icon svg { 
    font-size: 72px;
    margin-bottom:var(--padding-small);
}

@media (min-width: 768px){ 
    .icon {
        flex-basis: 33%!important;
    }

}

.icon:hover {
    color: white;
    background-color: red;
}

.icon p {
    color: #000;
}


        </style>




<?php if( have_rows('icons') ): ?>

<div id="<?php echo esc_attr($block_id); ?>" class="row-block prefade <?php echo esc_attr($bg_color); ?>">
    <section class="<?php echo esc_attr($width); ?> grid">
        <!-- .article-block -->

        <article class="article colspan-12">
            <?php include ('block-header.php'); ?>
            <div class="icons <?php echo $bg_color; ?>">
            <?php while( have_rows('icons') ): the_row(); ?>
                <?php if( have_rows('icon') ): ?>
                <?php while( have_rows('icon') ): the_row(); ?>
             
                <?php 
$kicker = get_sub_field('kicker') ?: get_the_excerpt();;
$headline = get_sub_field('headline') ?: get_the_excerpt();;
$lead = get_sub_field('lead') ?: get_the_excerpt();;
$url = get_sub_field('url') ?: get_the_excerpt();;
$image = get_sub_field('image') ?: get_the_excerpt();;
$link = get_sub_field('url') ?: get_the_excerpt();;
$link_target = $link['target'] ? $link['target'] : '_self' ?: get_the_excerpt();; 
$link_title = $link['title'] ?: get_the_excerpt();;

?>


                <figure class="icon">
                    <a href="<?php echo $link['url']; ?>" title="<?php echo esc_attr($link_title); ?>"
                        target="<?php echo esc_attr( $link_target ); ?>">
                        <!-- <i class="fas fa-beer grow icon-large"></i> -->
                        <?php echo $image; ?>
                    </a>
                    <?php if( $headline ) : ?>
                    <figcaption class="<?php echo $bg_color; ?>">
                        <b class="headline"><?php echo $headline; ?></b>
                        <?php if( $lead ) : ?><small class="lead"><?php echo $lead; ?></small><?php endif; ?>
                    </figcaption>
                    <?php endif; //headine ?>
                </figure>
                <?php endwhile; ?>
                <?php endif; ?>
                <?php endwhile; ?>
            </div>
        </article>
      
    </section>
</div>

<?php endif; ?>



<h1>block-icons.php (above)</h1>




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
    <section class="<?php echo esc_attr($width); ?> grid">
        <!-- .article-block -->
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
    <section class="<?php echo esc_attr($width); ?> grid">
        <!-- .article-block -->
        <article class="article colspan-12">
            <?php include ('block-header.php'); ?>
            <div class="grid icons <?php echo $bg_color; ?>">
                <?php include ('block-icon.php'); ?>
            </div>
        </article>
    </section>
</div>
<?php } */ // block layout ?>

