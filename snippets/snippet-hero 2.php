<?php $hero_html = get_field('hero_html');  ?>

<?php if (is_single() ) { ?>

<?php 
$category = get_the_category();
$hero_kicker = get_field('hero_kicker') ?: $category[0]->cat_name;
$hero_headline = get_field('hero_headline') ?: get_the_title(); 
$headline = '<h2 class="headline">'.$hero_headline.'</h2>';
$hero_subdeck = get_field('hero_subdeck'); // for some reason this didn't work
?>

<?php } elseif (is_page() ) { ?>
<?php 
$hero_kicker = get_field('hero_kicker') ?: "";
$hero_headline = get_field('hero_headline') ?: get_the_title(); 
$headline = '<h1 class="headline">'.$hero_headline.'</h1>';
$hero_subdeck = get_field('hero_subdeck'); // for some reason this didn't work
?>

<?php } elseif (is_tax() || is_category() || is_tag() || is_term() || is_post_type_archive() )  { ?>

<?php 
$hero_headline = single_cat_title( '', false );
$hero_subdeck = get_the_archive_description("", false);
$headline = '<h1 class="headline">'.$hero_headline.'</h1>';
?>


<?php } elseif ( is_author() ) { ?>

<?php 
$hero_headline = get_the_author( "", false );
$headline = '<h1 class="headline">'.$hero_headline.'</h1>';
$author_id = get_the_author_meta('ID');
$hero_subdeck = get_the_author_meta('description');	    
?>
    
<?php } else  { ?>

<?php 
$category = get_the_category();
$hero_kicker = get_field('hero_kicker') ?: $category[0]->cat_name;
$hero_headline = get_field('hero_headline') ?: get_the_title(); 
$headline = '<h2 class="headline">'.$hero_headline.'</h2>';
$hero_subdeck = get_field('hero_subdeck'); // for some reason this didn't work
?>

<?php } // end hero header conditions ?>

<div class="bg-black">
    <section class="hero w-full">
        <header class="header w-max">
            <?php if ($hero_kicker) : ?><strong class="kicker"><?php echo $hero_kicker; ?></strong><?php endif; ?>
            <?php echo $headline; ?>
            <?php if ($hero_subdeck) : ?><em class="subdeck"><?php echo $hero_subdeck; ?></em><?php endif; ?>
            <?php if($hero_html ) : ?>
            <?php echo $hero_html; ?>
            <?php endif; ?>
        </header>
    </section>
</div>