<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="robots" content="follow, index" />
    <?php wp_head(); ?>
    <?php if ( has_post_thumbnail() ) : ?>
    <link rel="preload" as="image" href="<?php echo esc_attr($hero_image_smartphone = get_the_post_thumbnail_url(get_the_ID(),'thumbnail')); ?>">
    <?php endif; ?>
    <!-- <link rel="preload" href="img/inbody.mp4" as="video" type="video/mp4"> -->
    <?php /*
    <link rel="preload" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/nopure.min.css" as="style"
    onload="this.rel='stylesheet'">
    <link rel="preload" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/pure.min.css" as="style"
        onload="this.rel='stylesheet'">
    <link rel="preload" href="<?php echo get_stylesheet_directory_uri(); ?>/fonts/fonts.css" as="style"
        onload="this.rel='stylesheet'">
    */ ?>
    <!--
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;500;700;900&display=swap" rel="stylesheet">
    -->
    <?php // get_template_part( 'snippets/snippet', 'fonts' ); // col-1 ?>
    <!-- Load Fonts below -->
    <?php include_once( 'fonts/font.php' ); /*  include_once( 'fonts.php' ); */ ?>
    <?php include_once( 'css/variables.php' ); /*  include_once( 'fonts.php' ); */ ?>
    <?php echo "<style>"; include_once( 'dist/min.css' ); echo "</style>"; ?>
    <?php /*
    <link rel="preload" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/min.css?ver=001" as="style"
    onload="this.rel='stylesheet'">
            <link rel="preload" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/min.css?ver=003" as="style"
    onload="this.rel='stylesheet'">
    */?>

<style>
s { text-decoration: line-through!important; /* strikethrough text*/ }
</style>


</head>

<body id="body" class="body prescroll">

<?php 
$color_primary = get_field('primary_color','options') ?: "ff0099"; 
$color_secondary = get_field('secondary_colour','options') ?: "ff0099"; 
?>
<?php echo "<style>
:root {
    --color: #".$color_primary."!important;
    --color: #".$color_secondary."!important;
    --color-black: #0a0b0c;
    --color-white: #fff;
    --color-offblack: #3a3b3c;
    --color-offwhite: #f3f4f5;
    --color-light: #dadbdc;
    --color-lightgrey: #babbbc; --color-lightgrey-half: #babbbc50;
    --color-grey: #9a9b9c; --color-grey-half: #9a9b9c50;
    /* --dark-border:#babbbc50; */
}
";
echo "</style>";
?>


    <?php get_template_part( 'snippets/snippet', 'nav' ); ?>
    <main>