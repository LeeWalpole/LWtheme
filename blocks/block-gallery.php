<?php include ('block-settings.php'); ?>

<?php if( $block_layout == 'sidebar') { ?>
<div id="<?php echo esc_attr($block_id); ?>" class="row-block prefade <?php echo esc_attr($bg_color); ?>">
    <section class="<?php echo esc_attr($width); ?> grid margin-auto"><!-- .article-block -->
        <aside class="sidebar colspan-4">
            <div class="sidebar-sticky">
                <?php include ('block-header.php'); ?>
            </div>
        </aside>
        <article class="article colspan-8">
        <?php $images = get_sub_field('gallery'); if( $images ): ?>
        <figure class="gallery-grid ">
        <?php foreach( $images as $image ): ?>
        <?php // apply_filters( 'jetpack_photon_url', get_field('nav_logo','options'), "h=50");  ?>
        <?php if ( wp_is_mobile() ) : ?>
        <?php $gallery_thumbnail = "http://i0.wp.com/".substr($image['url'], 8)."?resize=120,120"; ?>
        <?php $gallery_main = "http://i0.wp.com/".substr($image['url'], 8)."?resize=360"; ?>
        <?php 
            // $gallery_thumbnail = Jetpack_PostImages::fit_image_url ($image['url'], 120, 120);
            // $gallery_main = esc_url($image['sizes']['medium']);
            // $gallery_main = Jetpack_PostImages::fit_image_url ($image['url'], 360);
            ?>
        <?php else : ?>
        <?php $gallery_thumbnail = "http://i0.wp.com/".substr($image['url'], 8)."?resize=220,220"; ?>
        <?php $gallery_main = "http://i0.wp.com/".substr($image['url'], 8)."?fit=750"; ?>
        <?php endif; ?>

        <figure class="box ratio image" data-ratio="1:1">
            <a href="<?php echo esc_url($gallery_main); ?>">
                <img src="<?php echo esc_url($gallery_thumbnail); ?>" alt="<?php echo esc_html($image['caption']); ?>" data-image-title="<?php echo esc_html($image['title']); ?>" data-image-desc="<?php echo esc_html($image['description']); ?>" >
            </a>
        </figure>

        <?php endforeach; ?>
        </figure>
        <?php endif; ?>
        </article>
    </section>
</div>
    
<?php // } elseif( $block_layout == 'full_width_header' || 'safe_width_header' || 'full_width' || 'safe_width' ) { ?>

<?php } else { ?>

<div id="<?php echo esc_attr($block_id); ?>" class="row-block prefade <?php echo esc_attr($bg_color); ?>">
    <section class="grid margin-auto <?php echo esc_attr($width); ?>"><!-- .article-block -->
        <article class="article colspan-12">
            <?php include ('block-header.php'); ?>
            <?php $images = get_sub_field('gallery'); if( $images ): ?>
            <figure class="gallery-grid ">
            <?php foreach( $images as $image ): ?>
            
            <?php if ( wp_is_mobile() ) : ?>
            <?php $gallery_thumbnail = "http://i0.wp.com/".substr($image['url'], 8)."?resize=120,120"; ?>
            <?php $gallery_main = "http://i0.wp.com/".substr($image['url'], 8)."?w=360"; ?>
            <?php 
                // $gallery_thumbnail = Jetpack_PostImages::fit_image_url ($image['url'], 120, 120);
                // $gallery_main = esc_url($image['sizes']['medium']);
                // $gallery_main = Jetpack_PostImages::fit_image_url ($image['url'], 360);
                ?>
            <?php else : ?>
            <?php $gallery_thumbnail = "http://i0.wp.com/".substr($image['url'], 8)."?resize=220,220"; ?>
            <?php $gallery_main = "http://i0.wp.com/".substr($image['url'], 8)."?w=750"; ?>
            <?php endif; ?>

            <figure class="box ratio image" data-ratio="1:1">
                <a href="<?php echo esc_url($gallery_main); ?>">
                    <img src="<?php echo esc_url($gallery_thumbnail); ?>" alt="<?php echo esc_html($image['caption']); ?>" data-image-title="<?php echo esc_html($image['title']); ?>" data-image-desc="<?php echo esc_html($image['description']); ?>" >
                </a>
            </figure>
            <?php endforeach; ?>
            </figure>
            <?php endif; ?>
        </article>
    </section>
</div>
<?php } // block layout ?>



















<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://npmcdn.com/flickity@1.2/dist/flickity.pkgd.min.js"></script>

    <script>
        var lightbox = {

            config: {
                gallery: '.gallery-grid', // class of gallery
                galleryImage: '.image', // class of image within gallery
                lightboxID: '#lightbox', // id of lighbox to be created
                lightboxEnabledClass: 'lightbox-enabled', // class of body when lighbox is enabled
                buttonsExit: true, // include exit div?
                buttonsNavigation: true, // include navigation divs?
                containImgMargin: 0 // margin top and bottom to contain img
            },

            init: function (config) {

                // merge config defaults with init config
                $.extend(lightbox.config, config);

                // on click
                $(lightbox.config.gallery).find('a').on('click', function (event) {
                    event.preventDefault();
                    lightbox.createLightbox($(this));
                });

            },

            // create lightbox
            createLightbox: function ($element) {

                // add body class
                $('body').addClass(lightbox.config.lightboxEnabledClass);

                // remove lightbox if exists
                if ($(lightbox.config.lightboxID).length) {
                    $(lightbox.config.lightboxID).remove();
                }

                // add new lightbox
                $('body').append('<div id="' + lightbox.config.lightboxID.substring(1) +
                    '"><div class="slider"></div></div>');

                // add exit div if required
                if (lightbox.config.buttonsExit) {
                    $(lightbox.config.lightboxID).append('<div class="exit"></div>');
                }

                // add navigation divs if required
                if (lightbox.config.buttonsNavigation) {
                    $(lightbox.config.lightboxID).append('<div class="prev"></div><div class="next"></div>');
                }

                // now populate lightbox
                lightbox.populateLightbox($element);

            },

            // populate lightbox
            populateLightbox: function ($element) {

                var thisgalleryImage = $element.closest(lightbox.config.galleryImage);
                var thisIndex = thisgalleryImage.index();

                // add slides
                $(lightbox.config.gallery).children(lightbox.config.galleryImage).each(function () {
                    $('#lightbox .slider').append(
                        `<div class="slide bg-trans">
                            <figure class="frame bg-trans">
                                <figure class="valign bg-trans">
                                    <img src="` + $(this).find('a').attr('href') + `">
                                    <figcaption class="lightbox-text">
                                        <strong>` + $(this).find('img').attr('data-image-title') + `</strong>
                                        <p>` + $(this).find('img').attr('data-image-desc') + `</p>
                                    </figcaption>
                                </figure>
                            </figure>
                        </div>`);
                });

                // now initalise flickity
                lightbox.initFlickity(thisIndex);

            },

            // initalise flickity
            initFlickity: function (thisIndex) {

                $(lightbox.config.lightboxID).find('.slider')
                    .flickity({ // more options: http://flickity.metafizzy.co
                        cellAlign: 'left',
                        resize: true,
                        wrapAround: true,
                        prevNextButtons: false,
                        pageDots: false,
                        initialIndex: thisIndex
                    });

                // make sure image isn't too tall
                lightbox.containImg();

                // on window resize make sure image isn't too tall
                $(window).on('resize', function () {
                    lightbox.containImg();
                });

                // buttons
                var $slider = $(lightbox.config.lightboxID).find('.slider').flickity();

                $(lightbox.config.lightboxID).find('.exit').on('click', function () {
                    $('body').removeClass('lightbox-enabled');
                    setTimeout(function () {
                        $slider.flickity('destroy');
                        $(lightbox.config.lightboxID).remove();
                    }, 0);
                });

                $(lightbox.config.lightboxID).find('.prev').on('click', function () {
                    $slider.flickity('previous');
                });

                $(lightbox.config.lightboxID).find('.next').on('click', function () {
                    $slider.flickity('next');
                });

                // keyboard
                $(document).keyup(function (event) {
                    if ($('body').hasClass('lightbox-enabled')) {
                        switch (event.keyCode) {
                            case 27:
                                $(lightbox.config.lightboxID).find('.exit').click();
                                break;
                            case 37:
                                $(lightbox.config.lightboxID).find('.prev').click();
                                break;
                            case 39:
                                $(lightbox.config.lightboxID).find('.next').click();
                                break;
                        }
                    }
                });

            },

            // contain lightbox images
            containImg: function () {
                $(lightbox.config.lightboxID).find('img').css('maxHeight', ($(document).height() - lightbox
                    .config.containImgMargin));
            }

        };

        // initalise lightbox
        $(document).ready(function () {
            lightbox.init({
                containImgMargin: 100
            });
        });
    </script>


    <script>
        window.addEventListener('load', function () {
            document.querySelector('body').classList.remove('preload');
            document.querySelector('body').classList.remove('notready');
            document.querySelector('body').classList.add('ready');
        })
    </script>

<style>
    .frame figcaption { 
           
           line-height: var(--line-height);
           position: absolute; bottom:var(--padding-small); left:var(--padding-xsmall);
           width:auto;
           height:auto; 
           border-top:1px solid var(--color-dark);
           padding:var(--padding-xsmall);
           background:var(--color-offblack);
           text-align: left;
           opacity:0;
           transition: opacity .66s ease-in;
       }

       .frame img { opacity:.25;
           transition: opacity .44s ease-in;
       }

       .is-selected img { opacity:1;}

       .is-selected figcaption { 
           display:block;
           opacity: 1;
       }


       [data-image-title]:before {
       content: attr(data-image-title);
           position: relative;
           display: block;

       }

       [data-image-desc]:before {
       content: attr(data-image-desc);

       }

       .lightbox-text strong {
           display: block;
           color:var(--color-white)
       }

       .lightbox-text p   { 
           display: block;
           color:var(--color-lightgrey);
           font-size:var(--xsmall);
       }

       .lightbox-text p a { 
           font-size:var(--xsmall);
           color:var(--color);
       }



</style>


<style>


.gallery-grid {
            display: grid;
            grid-gap: 6px;
            grid-template-columns: repeat(3, auto);
        }


        .gallery-block {
            padding: var(--padding-small);
        }


        /*Larger than Smartphones  */
        @media only screen and (min-width : 415px) {
            .gallery-block {
                padding: 0 var(--padding);
            }

            /* Styles */
            .gallery-grid {
                grid-gap: var(--padding-small);
                grid-template-columns: repeat(3, auto);
                /* width: var(--w-safe) !important; */
            }

        }

        .frame {
            position: relative;
        }

        .frame img {
            max-height: calc(100vh - var(--padding-small)) !important;
            max-width: calc(100vw - var(--padding-small)) !important;
            object-fit:contain!important;
        }


        .gallery-grid img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transform: scale(1);
            transition: all .33s;
        }

        .gallery-grid img:hover { 
            transform: scale(1.05);
        }


.flickity-enabled {
  position: relative;
}
.flickity-enabled:focus {
  outline: none;
}
.flickity-enabled.flickity-enabled.is-draggable {
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.flickity-enabled.flickity-enabled.is-draggable .flickity-viewport {
  cursor: move;
  cursor: -webkit-grab;
  cursor: grab;
}
.flickity-enabled.flickity-enabled.is-draggable .flickity-viewport.is-pointer-down {
  cursor: -webkit-grabbing;
  cursor: grabbing;
}
.flickity-enabled .flickity-viewport {
  overflow: hidden;
  position: relative;
  width: 100%;
  height: 100% !important;
}
.flickity-enabled .flickity-slider {
  position: absolute;
  width: 100%;
  height: 100%;
}



#lightbox {
background: var(--color-offblack);
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  overflow: hidden;
  z-index: 999;
}
#lightbox .slider {
  width: 100%;
  height: 100%;
}
#lightbox .slider .slide {
  width: 100%;
  height: 100%;
}
#lightbox .slider .slide .frame {
  width: 100%;
  height: 100%;
  display: table;
  table-layout: fixed;
}
#lightbox .slider .slide .frame .valign {
  width: 100%;
  height: 100%;
  display: table-cell;
  text-align: center;
  vertical-align: middle;
  line-height: 0;
}
#lightbox .slider .slide .frame .valign img {
  max-width: 100%;
  height: auto;
}

#lightbox .exit {
  position: absolute;
  top: var(--padding-small);
  left: var(--padding-small);
  padding: var(--padding-xsmall);
  text-align: center;
  cursor: pointer;
  background: var(--color-trans)!important;
  color:var(--color);
  font-size: 2rem;
}


#lightbox .exit::after {
    font-family: "Font Awesome 5 Free";
    font-style: normal;
    font-weight: normal;
    text-decoration: inherit;
    content: "\f057";    
    display:inline;
}
#lightbox .prev, #lightbox .next {
  position: absolute;
  top: 50%;
  text-align: center;
  cursor: pointer;
    line-height:1;
    font-family: "Font Awesome 5 Free";
    font-style: normal;
    font-weight: bold;
    text-decoration: inherit;
    content: "\f054";    
        font-size: 2rem;
        background:var(--color-trans);
        color:var(--color-dark);

}
#lightbox .prev {
  left: var(--padding-small);
}
#lightbox .prev::after {
    content: "\f138";
    content: "\f359";
}
#lightbox .next {
  right: var(--padding-small);
}
#lightbox .next::after {
    content: "\f138";
    content: "\f35a";
}

</style>