
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