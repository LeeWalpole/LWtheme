<?php get_header(); // includes nav and hero ?>

<style>
    .article-body img {
        width: 100% !important;
        object-fit: contain !important;
        height: auto;
    }

    .article-body>p>a {
        color: #ee0099;
    }
</style>

<?php if ( have_posts() ) :  while ( have_posts() ) : the_post();  ?>

<?php get_template_part( 'snippets/snippet-hero' ); ?>
<?php get_template_part( 'snippets/snippet-feature' ); ?>

<?php if ( !empty( get_the_content() ) ) : ?>

<?php get_template_part( 'snippets/ad', 'header' ); ?>

<section class="row-block bg-white grid grid-gap w-max">

    <?php get_template_part( 'snippets/snippet', 'side-sharers' ); // col-1 ?>


    <aside class="colspan-2 bg-white ">

        <div class="sticky-sidebar">
            <ul class="sharers">
                <li>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo esc_url(get_permalink());?>"
                        target="_blank" rel="noopener" class="prefade"
                        title="Share <?php echo esc_attr(get_the_title()); ?> on Facebook.">
                        <i class="fab fa-facebook-f" aria-hidden="true"></i>
                    </a>
                </li>
                <li>
                    <a href="https://twitter.com/home?status=<?php echo esc_url(get_permalink());?>" target="_blank"
                        rel="noopener" class="prefade"
                        title="Tweet about the <?php echo esc_attr(get_the_title()); ?> article.">
                        <i class="fab fa-twitter" aria-hidden="true"></i>
                    </a>
                </li>
                <li>
                    <a href="whatsapp://send" data-text="Share" data-href="<?php echo esc_url(get_permalink());?>"
                        rel="noopener" target="_blank" class="prefade"
                        title="Send <?php echo esc_attr(get_the_title());?> to a mate.">
                        <i class="fab fa-whatsapp" aria-hidden="true"></i>
                    </a>
                </li>
                <li>
                    <a href="mailto:<?php echo esc_url(get_the_author_meta('user_email')); ?>?subject=<?php echo esc_url(get_the_title()); ?>&body=<?php echo esc_url(get_permalink());?>"
                        class="prefade" title="Attach link to <?php echo esc_attr(get_the_title()); ?> in an email.">
                        <i class="fa fa-link"></i>
                    </a>
                </li>

            </ul>

            <aside id="chapters" class="bg-black">
                <!-- Chapters appear Below -->
            </aside>


        </div>

    </aside>


    <article class="article-body w-safe colspan-6">
        <header class="header w-max">
            <!-- <strong class="kicker">Kicker Category</strong> -->
            <h1 class="title"><?php the_title(); ?></h1>
            <?php if ( ! has_excerpt() ) { ?>
            <?php } else {?>
            <em class="description"><?php echo get_the_excerpt();?></em>
            <?php } ?>
        </header>
        <?php get_template_part( 'snippets/snippet', 'byline' ); ?>

        <?php the_content(); ?>
        <?php get_template_part( 'snippets/snippet', 'article-sharers' ); // col-4 ?>
    </article>

    <aside class="colspan-3 bg-white sidebar">
        <?php get_template_part( 'snippets/ad', 'sidebar' ); ?>
    </aside>

</section>
<?php endif; ?>
<?php endwhile; endif; ?>

<?php get_template_part( 'snippets/snippet', 'related' ); // col-4 ?>

<?php get_footer();  ?>