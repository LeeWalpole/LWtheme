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

<style>

:root {
--color:#ee0099!important;
--color-highlight:#ff0099!important;
}

.grid-hero-signup input, .grid-hero-signup button   {
    grid-gap: var(--padding-small);
    height:50px; line-height: 50px; width:100%;
    font-size: var(--small);
}

.grid-hero-signup input   {
    padding: var(--padding-small);
}



.grid-hero-signup {
    padding: 0;
    grid-gap: var(--padding)
}

.hero-signup {
    padding: var(--padding-small) 0
}

.hero-signup .submit {
    margin-top: var(--padding-small)
}

.hero-signup .button {
    width: 100%;
    cursor: pointer;
background-color: var(--color);
color: white;
border:none;
    -webkit-appearance: none;
}

.hero-signup .button:hover {
background-color: var(--color);
}

.hero-signup .button:hover {
    background: var(--color-highlight)
}

.agile-error-msg span {
    color: var(--color) !important;
    font-size: var(--small) !important;
    margin-top: var(--padding-xsmall)
}

.checkboxes {
    width: 100%;
    height: 28px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    color: var(--color-white);
    line-height: 25px;

}

.checkbox-wrap {
    position: relative;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    width: 100%;
    line-height: 25px
}

.checkbox-wrap p {
    position: absolute;
    left: calc(22px + var(--padding-small));
    line-height: 25px;
    font-size: var(--small);
    display: inline-block;
    color: var(--color-white)
}

.checkbox-wrap input {
    position: absolute;
    left: 0;
    top: 0;
    opacity: 0;
    cursor: pointer;
    height: 0;
    width: 0
}

.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: var(--color-light)
}

.checkbox-wrap:hover input~.checkmark {
    background-color: var(--color-offwhite)
}

.checkbox-wrap input:checked~.checkmark {
    background-color: var(--color)
}

.checkmark:after {
    content: "";
    position: absolute;
    display: none
}

.checkbox-wrap input:checked~.checkmark:after {
    display: block
}

.checkbox-wrap .checkmark:after {
    left: 9px;
    top: 5px;
    width: 5px;
    height: 10px;
    border: solid #fff;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg)
}

.standard_teaser img, 
.standard_teaser picture {
    height:100%!important;
    width:100%!important;
    scale:unset!important;
 }

</style>


<!-- Temp Fixes...  Will sort when build the 2022 theme -->

<style>
        :root { 
            --color-white: #fff;
            --color-offwhite: #f1f1f1;
            --color-black: #101010;
            --color-offblack: #202020;
            --color-grey: #666;
            --color-lightgrey: #eee;
        }
        </style>
    <style>


.nav-bar, .nav-menu, .nav-on .nav-bar-links li a, .article-body>aside { 
background-color:var(--color-black)!important;
color:var(--color-white)!important;
}

.article-body dt, .article-body dd, .article-body dd a { 
    color:var(--color-lightgrey)!important;
} 

.article-body dd a {  
    text-decoration: underline;
} 

.article-body dd a:hover {  
    color:var(--color)!important;
} 

.nav-bar .hamburger span, .nav-on .nav-bar .hamburger span { 
    background-color:var(--color-white)!important;
}

.article-body aside p { 
    margin-bottom:var(--padding);
}

</style>

</head>

<body id="body" class="body prescroll">

    <?php get_template_part( 'snippets/snippet', 'nav' ); ?>
    <main>