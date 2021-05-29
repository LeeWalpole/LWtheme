<?php include ('block-settings.php'); ?>

<?php if( have_rows('teaser_settings') ) :  while( have_rows('teaser_settings') ): the_row(); ?>
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


<?php if( have_rows('json_settings') ) :  while( have_rows('json_settings') ): the_row(); ?>
<?php
$json_url = get_sub_field('json_url');
$teaser_count = get_sub_field('teaser_count');
$json_value = get_sub_field('json_value');
?>
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
                <div class="standard-teasers teasers <?php echo $bg_color; ?>">

                <?php if( $json_value ) { // if json value filter results (strpos($teaser, $value) ?>
                
                <?php $json = file_get_contents($json_url); $teasers = json_decode($json, true); ?>
                    <?php foreach($teasers as $teaser) : ?>
                    
                    <?php /* should be this 
                    $kicker = $teaser['kicker']; 
                    $headline = $teaser['headline'];
                    $lead = $teaser['lead']; 
                    $image_url = $teaser['image_url'];
                    $url = $teaser['url']; 
                    $target = $teaser['target'];
                    */
                    ?>

                    <?php // fix the scraper when Love Holidays return 
                    $kicker = $teaser['price']; 
                    $headline = $teaser['hotelName'];  
                    $lead = $teaser['duration'].' in '.esc_attr($teaser['hotelAddress']).', for <strong>'.$teaser['price'].'</strong>';
                    $url = $teaser['url']; 
                    $image_url = $teaser['thumbUrl'];
                    $hotelName = $teaser['hotelName']; 
                    $hotelAddress = $teaser['hotelAddress']; 
                    //on '.$teaser['dateDepart'].'
                    ?>

                    <?php if (strpos($hotelAddress, $json_value) !== false) : $i++;  if($i <= $teaser_count ) :?>
                    <a href="<?php echo esc_attr( $url); ?>" title="<?php echo esc_attr($headline); ?>" target="_blank" class="teaser bg-white">
                        <figure class="z-index-1 ratio" data-ratio="<?php echo $ratio ?: "3:2"; ?>">
                            <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                                alt="<?php echo esc_attr($headline); ?>"
                                data-src="<?php echo esc_attr($image_url); ?>" loading="lazy" class="lazyload">
                        </figure>
                        <header class="header">
                        <?php if (is_single('12613')) { ?>
                                    <strong class="kicker rating"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></strong>
                                    <h4 class="headline"><?php echo $headline; ?></h4>
                                    <em class="lead w-safe">
                                    <?php echo $teaser['duration'].' (+ return flights)<br>'.esc_attr($teaser['hotelAddress']); ?>
                                    </em>
                                    <b class="left">ALL INCLUSIVE</b>
                                    <b class="right"><?php echo $teaser['price'];  ?></b>
                            <?php } else { ?>
                            <?php if( $kicker ) : ?><strong class="kicker"><?php echo $kicker; ?></strong><?php endif; ?>
                            <h4 class="headline"><?php echo $headline; ?></h4>
                            <?php if( $lead ) : ?><em class="lead w-safe">
                                <?php echo $lead; ?></em>
                            <?php endif; ?>
                            <?php } // all inclusive star hack ?>
                        </header>
                    </a>
                    <?php endif; endif; ?>
                    <?php endforeach; ?>

                <?php } else { ?>

                    <?php $json = file_get_contents($json_url); $teasers = json_decode($json, true); ?>
                    <?php foreach($teasers as $teaser) : ?>
                    
                    <?php /* should be this 
                    $kicker = $teaser['kicker']; 
                    $headline = $teaser['headline'];
                    $lead = $teaser['lead']; 
                    $image_url = $teaser['image_url'];
                    $url = $teaser['url']; 
                    $target = $teaser['target'];
                    */
                    ?>

                    <?php // fix the scraper when Love Holidays return 
                    $kicker = $teaser['price']; 
                    $headline = $teaser['hotelName'];  
                    $lead = $teaser['duration'].' in '.esc_attr($teaser['hotelAddress']).', for <strong>'.$teaser['price'].'</strong>';
                    $url = $teaser['url']; 
                    $image_url = $teaser['thumbUrl'];
                    $hotelName = $teaser['hotelName']; 
                    $hotelAddress = $teaser['hotelAddress']; 
                    //on '.$teaser['dateDepart'].'
                    ?>

                    <?php $i++;  if($i <= $teaser_count ) :?>
                    <a href="<?php echo esc_attr( $url); ?>" title="<?php echo esc_attr($headline); ?>" target="_blank" class="teaser bg-white">
                        <figure class="z-index-1 ratio" data-ratio="<?php echo $ratio ?: "3:2"; ?>">
                            <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                                alt="<?php echo esc_attr($headline); ?>"
                                data-src="<?php echo esc_attr($image_url); ?>" loading="lazy" class="lazyload">
                        </figure>
                        <header class="header">
                        <?php if (is_single('12613')) { ?>
                                    <strong class="kicker rating"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></strong>
                                    <h4 class="headline"><?php echo $headline; ?></h4>
                                    <em class="lead w-safe">
                                    <?php echo $teaser['duration'].' (+ return flights)<br>'.esc_attr($teaser['hotelAddress']); ?>
                                    </em>
                                    <b class="left">ALL INCLUSIVE</b>
                                    <b class="right"><?php echo $teaser['price'];  ?></b>
                            <?php } else { ?>
                            <?php if( $kicker ) : ?><strong class="kicker"><?php echo $kicker; ?></strong><?php endif; ?>
                            <h4 class="headline"><?php echo $headline; ?></h4>
                            <?php if( $lead ) : ?><em class="lead w-safe">
                                <?php echo $lead; ?></em>
                            <?php endif; ?>
                            <?php } // all inclusive star hack ?>
                        </header>
                    </a>
                    <?php endif; ?>
                    <?php endforeach; ?>

        
                <?php } // json value ?>
                </div>
            </article>
        </section>
    </div>
<?php } else { ?>

    <?php if (is_single('12613')) : ?>

<?php endif; ?>
    <div id="<?php echo esc_attr($block_id); ?>" class="row-block prefade <?php echo esc_attr($bg_color); ?>">
        <section class="<?php echo esc_attr($width); ?> grid"><!-- .article-block -->
            <article class="article colspan-12">
                <div class="standard-teasers teasers <?php echo $bg_color; ?>">

                <?php if( $json_value ) { // if json value filter results (strpos($teaser, $value) ?>
                
                <?php $json = file_get_contents($json_url); $teasers = json_decode($json, true); ?>
                    <?php foreach($teasers as $teaser) : ?>
                    
                    <?php /* should be this 
                    $kicker = $teaser['kicker']; 
                    $headline = $teaser['headline'];
                    $lead = $teaser['lead']; 
                    $image_url = $teaser['image_url'];
                    $url = $teaser['url']; 
                    $target = $teaser['target'];
                    */
                    ?>

                    <?php // fix the scraper when Love Holidays return 
                    $kicker = $teaser['price']; 
                    $headline = $teaser['hotelName'];  
                    $lead = $teaser['duration'].' in '.esc_attr($teaser['hotelAddress']).', for <strong>'.$teaser['price'].'</strong>';
                    $url = $teaser['url']; 
                    $image_url = $teaser['thumbUrl'];
                    $hotelName = $teaser['hotelName']; 
                    $hotelAddress = $teaser['hotelAddress']; 
                    //on '.$teaser['dateDepart'].'
                    ?>

                    <?php if (strpos($hotelAddress, $json_value) !== false) : $i++;  if($i <= $teaser_count ) :?>
                    <a href="<?php echo esc_attr( $url); ?>" title="<?php echo esc_attr($headline); ?>" target="_blank" class="teaser bg-white">
                        <figure class="z-index-1 ratio" data-ratio="<?php echo $ratio ?: "3:2"; ?>">
                            <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                                alt="<?php echo esc_attr($headline); ?>"
                                data-src="<?php echo esc_attr($image_url); ?>" loading="lazy" class="lazyload">
                        </figure>
                        <header class="header">
                        <?php if (is_single('12613')) { ?>
                                    <strong class="kicker rating"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></strong>
                                    <h4 class="headline"><?php echo $headline; ?></h4>
                                    <em class="lead w-safe">
                                    <?php echo $teaser['duration'].' (+ return flights)<br>'.esc_attr($teaser['hotelAddress']); ?>
                                    </em>
                                    <b class="left">ALL INCLUSIVE</b>
                                    <b class="right"><?php echo $teaser['price'];  ?></b>
                            <?php } else { ?>
                            <?php if( $kicker ) : ?><strong class="kicker"><?php echo $kicker; ?></strong><?php endif; ?>
                            <h4 class="headline"><?php echo $headline; ?></h4>
                            <?php if( $lead ) : ?><em class="lead w-safe">
                                <?php echo $lead; ?></em>
                            <?php endif; ?>
                            <?php } // all inclusive star hack ?>
                        </header>
                    </a>
                    <?php endif; endif; ?>
                    <?php endforeach; ?>

                <?php } else { ?>

                    <?php $json = file_get_contents($json_url); $teasers = json_decode($json, true); ?>
                    <?php foreach($teasers as $teaser) : ?>
                    
                    <?php /* should be this 
                    $kicker = $teaser['kicker']; 
                    $headline = $teaser['headline'];
                    $lead = $teaser['lead']; 
                    $image_url = $teaser['image_url'];
                    $url = $teaser['url']; 
                    $target = $teaser['target'];
                    */
                    ?>

                    <?php // fix the scraper when Love Holidays return 
                    $kicker = $teaser['price']; 
                    $headline = $teaser['hotelName'];  
                    $lead = $teaser['duration'].' in '.esc_attr($teaser['hotelAddress']).', for <strong>'.$teaser['price'].'</strong>';
                    $url = $teaser['url']; 
                    $image_url = $teaser['thumbUrl'];
                    $hotelName = $teaser['hotelName']; 
                    $hotelAddress = $teaser['hotelAddress']; 
                    //on '.$teaser['dateDepart'].'
                    ?>

                    <?php $i++;  if($i <= $teaser_count ) :?>
                    <a href="<?php echo esc_attr( $url); ?>" title="<?php echo esc_attr($headline); ?>" target="_blank" class="teaser bg-white">
                        <figure class="z-index-1 ratio" data-ratio="<?php echo $ratio ?: "3:2"; ?>">
                            <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                                alt="<?php echo esc_attr($headline); ?>"
                                data-src="<?php echo esc_attr($image_url); ?>" loading="lazy" class="lazyload">
                        </figure>
                        <header class="header">
                        <?php if (is_single('12613')) { ?>
                                    <strong class="kicker rating"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></strong>
                                    <h4 class="headline"><?php echo $headline; ?></h4>
                                    <em class="lead w-safe">
                                    <?php echo $teaser['duration'].' (+ return flights)<br>'.esc_attr($teaser['hotelAddress']); ?>
                                    </em>
                                    <b class="left">ALL INCLUSIVE</b>
                                    <b class="right"><?php echo $teaser['price'];  ?></b>
                            <?php } else { ?>
                            <?php if( $kicker ) : ?><strong class="kicker"><?php echo $kicker; ?></strong><?php endif; ?>
                            <h4 class="headline"><?php echo $headline; ?></h4>
                            <?php if( $lead ) : ?><em class="lead w-safe">
                                <?php echo $lead; ?></em>
                            <?php endif; ?>
                            <?php } // all inclusive star hack ?>
                        </header>
                    </a>
                    <?php endif; ?>
                    <?php endforeach; ?>

        
                <?php } // json value ?>

                </div>
            </article>
        </section>
    </div>
<?php } // block layout ?>