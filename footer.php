</main>

<?php // get_template_part( 'snippets/snippet-hero' ); ?>

<?php
/*


*/
?>

<?php get_template_part( 'snippets/snippet', 'footer' ); // col-1 ?>
<?php include_once( 'snippets/snippet-chapters.php' ); /*  include_once( 'fonts.php' ); */ ?>

    <script>
        window.addEventListener('load', function () {
            document.querySelector('body').classList.remove('preload');
            document.querySelector('body').classList.remove('notready');
            document.querySelector('body').classList.add('ready');
        })
    </script>

    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/js/all.min.js"></script>
    
    <script src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/dist/min.js?v=004"></script>
    <?php 
    $color = "#ee0099";
    $color_shade = "#dd0099";
    ?>
    <svg class="quotemark hidden" width="0" height="0">
        <symbol viewBox="73.5 9.3 488.3 400.3" id="quote">
            <path fill="<?php echo esc_attr($color); ?>"
                d="M226 152c14.2-55.5 51.9-77.2 95-90.1 4.4-1.3 3.6-5.8 3.6-5.8l-6.2-44s-.9-3.6-6.2-2.7C159.9 25.4 57.8 141.3 75.5 282c18.6 98.1 95 135.8 164.7 125.6 70.1-11.5 118.5-76.8 107.4-146.9-9.2-62.6-61.2-106.5-121.6-108.7z">
            </path>
            <path fill="<?php echo esc_attr($color); ?>"
                d="M560.3 260.7C551 199 498.6 155.1 438.7 152c15.1-55.5 51.1-77.2 95-90.1 4.4-1.3 3.6-5.8 3.6-5.8l-7.1-44s-.9-3.6-6.2-2.7C372.1 26.3 269.1 142.2 288.2 282.9c17.8 97.2 93.7 135 164.3 125.2 70.1-12 118.5-77.2 107.8-147.4z">
            </path>
            <path fill="<?php echo esc_attr($color_shade); ?>"
                d="M347.2 260.7c-5.3-35.1-24-64.4-49.7-83.9-10.7 32.4-14.7 68.4-9.3 105.7 5.8 32 17.8 57.3 33.7 76.8 21.3-27.1 31.6-62.2 25.3-98.6z">
            </path>
        </symbol>
    </svg>

    <script>
        blockquote: {

            // Get all <p> elements in the document
            var x = document.querySelectorAll(".article-body blockquote");
            var i;
            for (i = 0; i < x.length; i++) {

                //        x[i].style.backgroundColor = "red";


                x[i].innerHTML = `
            <svg class="icon">
            <use xlink:href="#quote"></use>
            </svg>
         ` + x[i].innerHTML;
            }
        }

        let blockquotes = document.querySelectorAll('.wp-block-pullquote');

        blockquotes.forEach(function (blockquote) {

            blockquote.document.createElement("h5");
            blockquote.textContent = "Hello";
            blockquotes.appendChild(blockquote);
        });
    </script>

    <?php // wp_footer(); ?>

<script>
search_articles: {
function filter(e){
    search = e.value.toLowerCase();
    console.log(e.value)
    document.querySelectorAll('.teaser').forEach(function(row){
        text = row.innerText.toLowerCase();
        if(text.match(search)){
            row.style.display="block"
        } else {
            row.style.display="none"
        }
    })
}
} // search articles
</script>
<?php /*
<div class="bg-color row-block">
<?php echo get_num_queries(); ?> queries in <?php timer_stop(1); ?> seconds.
</div>


<div class="bg-color row-block">
<?php echo get_num_queries(); ?> queries in <?php timer_stop(1); ?> seconds.
</div>*/ ?>
</body>

</html>