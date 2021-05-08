
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
@media (min-width: 768px) {
    :root {
        --article-title: calc(var(--article-headline) + 50%)!important;
        --article-description: calc(var(--p) + 10%)!important;
    } 
}
</style>