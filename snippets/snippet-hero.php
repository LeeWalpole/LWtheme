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

<?php if(is_front_page()) : ?>
                    <!-- HERO SIGNUP -->
                    <div class="hero-signup">
                        <form class="" id="agile-form" action="https://leewalpole.agilecrm.com/formsubmit" method="GET">
                            <fieldset>
                                <div style="display: none; height: 0px; width: 0px;">
                                    <input type="hidden" id="_agile_form_name" name="_agile_form_name"
                                        value="Subscribe Now">
                                    <input type="hidden" id="_agile_domain" name="_agile_domain" value="leewalpole">
                                    <input type="hidden" id="_agile_api" name="_agile_api"
                                        value="mabndsoq7f0rggr241m8cvj6vf">
                                    <input type="hidden" id="_agile_redirect_url" name="_agile_redirect_url"
                                        value="https://amzn.to/2znysA3">
                                    <input type="hidden" id="_agile_document_url" name="_agile_document_url" value="">
                                    <input type="hidden" id="_agile_confirmation_msg" name="_agile_confirmation_msg"
                                        value="Sweet! We'll now send you cool sh*t.">
                                    <input type="hidden" id="_agile_form_id_tags" name="tags" value="">
                                    <input type="hidden" id="_agile_form_id" name="_agile_form_id"
                                        value="5638756700848128">
                                </div>

                                <div class="grid grid-hero-signup">
                                    <div class="agile-group colspan-5">
                                        <div class="agile-field-xlarge agile-field">
                                            <input maxlength="250" id="signup_name" name="first_name" type="text"
                                                placeholder="Hi, what's your name?" class="agile-height-default">
                                        </div>
                                        <div class="agile-custom-clear"></div>
                                    </div>

                                    <div class="agile-group colspan-7">
                                        <div class="agile-field-xlarge agile-field">
                                            <input maxlength="250" id="signup_email" name="email" type="email"
                                                placeholder="Enter your email if you're 18+"
                                                class="agile-height-default">
                                        </div>
                                        <div class="agile-custom-clear"></div>
                                    </div>


                                    <div class="agile-group colspan-5">
                                        <button type="submit" class="button">Get the goods</button>
                                        <span id="agile-error-msg"></span>
                                    </div>

                                    <div class="colspan-7 checkboxes">

                                        <label for="signup_checkbox-0" class="checkbox-wrap">
                                            <p>Tips</p>
                                            <input type="checkbox" name="tags" id="signup_checkbox-0" value="Tips"
                                                checked="checked">
                                            <span class="checkmark"></span>
                                        </label>


                                        <label for="signup_checkbox-1" class="checkbox-wrap">
                                            <p>Deals</p>
                                            <input type="checkbox" name="tags" id="signup_checkbox-1" value="Deals"
                                                checked="checked">
                                            <span class="checkmark"></span>
                                        </label>

                                        <label for="signup_checkbox-2" class="checkbox-wrap">
                                            <p>Banter</p>

                                            <input type="checkbox" name="tags" id="signup_checkbox-2" value="Banter"
                                                checked="checked">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>

                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <!-- HERO SIGNUP -->
<?php endif; ?>

        </header>
    </section>
</div>

<?php /*
<?php $signup_html = get_field('signup_html','options'); ?>
<?php if($signup_html || is_front_page()) : ?>
    <?php echo esc_html($signup_html); ?>
<?php endif; ?>
*/ ?>