
<?php 
$color_primary = get_field('color_primary','options') ?: "ee0099"; 
$color_secondary = get_field('color_secondary','options') ?: "ff0099"; 
?>
<?php echo "<style>
:root {
    --color:#".esc_attr($color_primary)."!important;
    --color:#".esc_attr($color_secondary)."!important;
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
<style>
        :root {

--hero-headline: calc(var(--p) + 100%)!important;
--hero-subheadline: calc(var(--p) + 25%)!important;

--article-title: calc(var(--p) + 100%)!important;;
--article-description: calc(var(--p) + 25%)!important;;

/* --article-headline-line: 1.4; */

}

@media (min-width:768px) {
:root {    
--hero-headline: calc(var(--p) + 250%)!important;
--hero-subheadline: calc(var(--p) + 25%)!important;

--article-title: calc(var(--p) + 100%)!important;;
--article-description: calc(var(--p) + 25%)!important;;
}
}

.hero .header .headline { 
text-transform: uppercase;
font-family: var(--font1-heavy)!important;;
line-height: normal!important;
}

.article-body>.header>.title { 
font-family: var(--font1-heavy)!important;
line-height: 1.4!important;
}

.prescroll .nav-bar img  {  
filter: brightness(0)!important;
}

</style>