
            <div id="1" class="split-box bg-white" value="lee">
                <section class="w-max grid">
                    <figure class="z-index-1 colspan-5 bg-color prefade">
                        <picture class="ratio width-100" data-ratio="3x2">
                            <source type="image/jpeg" media="(min-width: 461px)"
                                srcset="https://www.leewalpole.co.uk/portfolio/wp-content/uploads/portfolio-the-sun-500x500.png">
                            <source type="image/jpeg" media="(max-width: 460px)"
                                srcset="https://www.leewalpole.co.uk/portfolio/wp-content/uploads/portfolio-the-sun-240x240.png">
                            <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                                alt="Sandringham-Drive Inspired Property Investment in Liverpool" class="lazyload"
                                loading="lazy">
                        </picture>
                    </figure>
                    <article class="colspan-7">
                        <header class="split-header bg-white postfade">
                            <h6 class="headline">Lee Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid,
                                illum?</h6>
                        </header>
                        <div class="lead">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id doloribus impedit laborum
                                delectus necessitatibus temporibus modi in aspernatur quisquam natus.</p>
                        </div>
                        <footer>
                            <div class="buttons postfade">
                                <a href="#pop-brochure" class="glightbox button postfade" data-gallery="pop-brochure"
                                    data-effect="fade" data-width="auto" data-height="auto">READ MORE <i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </footer>
                    </article>
                </section>
            </div>





    
    <?php 
    $category = get_the_category(); $kicker_alt = $category[0]->name; // get category name
    $kicker = $acf_kicker ?: get_the_excerpt(); // if acf_kicker exists, else get the category
    $headline = $acf_headline ?: get_the_title(); // if acf_headline exists, else get the post title
    $subdeck = $acf_headline ?: get_the_excerpt(); // if acf_headline exists, else get the post title
    $teaser_image_url = get_the_post_thumbnail_url($post->ID, 'thumbnail') ? : "https://i0.wp.com/www.ladsholidayguide.com/wp-content/uploads/g-logo.png?w=360h=240&ssl=1";
    ?>

<a href="<?php echo esc_url(get_permalink()); ?>" title="<?php echo esc_attr ( get_the_title ()); ?>" class="teaser bg-white">
    <figure class="z-index-1">
        <picture class="ratio" data-ratio="3:2">
        <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
        alt="<?php echo esc_attr(get_the_title()); ?>"
        data-src="<?php echo esc_attr($teaser_image_url); ?>"
        loading="lazy" class="lazyload">
        </picture>
    </figure>
    <header class="header">
        <strong class="kicker"><?php echo $kicker; ?></strong>
        <h4 class="headline"><?php echo $headline; ?></h4>
        <p class="subdeck"><?php echo $subdeck; ?></p>
    </header>
    </a>   
    <?php /*
    <small class="small">By <?php echo get_the_author_meta( 'display_name', $author_id ); ?></small>
*/ ?>
