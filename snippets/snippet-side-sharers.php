<aside class="colspan-1">
    <ul class="sticky-sidebar sharers">
        <li>
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo esc_url(get_permalink());?>" target="_blank" rel="noopener" class="prefade" title="Share <?php echo esc_attr(get_the_title()); ?> on Facebook.">
                <i class="fab fa-facebook-f" aria-hidden="true"></i>
            </a>
        </li>
        <li>
            <a href="https://twitter.com/home?status=<?php echo esc_url(get_permalink());?>" target="_blank" rel="noopener" class="prefade" title="Tweet about the <?php echo esc_attr(get_the_title()); ?> article.">
                <i class="fab fa-twitter" aria-hidden="true"></i>
            </a>
        </li>
        <li>
            <a href="whatsapp://send" data-text="Share" data-href="<?php echo esc_url(get_permalink());?>" rel="noopener" target="_blank" class="prefade" title="Send <?php echo esc_attr(get_the_title());?> to a mate.">
                <i class="fab fa-whatsapp" aria-hidden="true"></i>
            </a>
        </li>
        <li>
            <a href="mailto:<?php echo esc_url(get_the_author_meta('user_email')); ?>?subject=<?php echo esc_url(get_the_title()); ?>&body=<?php echo esc_url(get_permalink());?>" class="prefade" title="Attach link to <?php echo esc_attr(get_the_title()); ?> in an email.">
                <i class="fa fa-link"></i>
            </a>
        </li>
    </ul>
</aside>