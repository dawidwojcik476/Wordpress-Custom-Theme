<?php

/*
Template Name: Szablon Kontakt
Template Post Type: post, page, event
*/

get_header();

?>
<div class="main-background page">
    <h1><?php echo get_the_title();?></h1>
    <?php if( have_rows('header_options') ): ?>
    <?php while( have_rows('header_options') ): the_row(); ?>
    <?php if( get_sub_field('header_options_background')): ?>
    <img src="<?php echo get_sub_field('header_options_background')?>" alt="">
    <?php endif; ?>
    <?php endwhile; ?>
    <?php endif; ?>
</div>

<section class="contact-temp" style="margin-top:300px">
    <div class="contact-temp__top">
        <?php if( have_rows('contact_module') ): ?>
        <?php while( have_rows('contact_module') ): the_row(); ?>
        <div class="contact-temp__top-header">
            <h1><?php echo get_sub_field('contact_module_header') ?></h1>
            <a data-scroll href="#form">
                
                <?php if (ICL_LANGUAGE_CODE=='en' ) : ?>
                    Use the contact form
                                <?php else:  ?>
                                    Skorzystaj z formularza kontaktowego
                                <?php endif; ?> <img
                    src="<?php echo get_template_directory_uri(); ?>/public/images/ArrowCircleDown-Accent.png"
                    alt="Formularz kontaktowy"></a>
        </div>
        <div class="contact-temp__top-adresses-list">
            <?php if( have_rows('contact_module_places') ): ?>
            <?php while( have_rows('contact_module_places') ): the_row(); ?>
            <div class="contact-temp__top-adresses-item">
                <img src="<?php echo get_template_directory_uri(); ?>/public/images/Lokalizacja-Accent.png"
                    alt="Lokalizacja">

                <div class="contact-temp__top-adress-botitem">
                    <h4><?php echo get_sub_field('contact_module_place_header') ?></h4>
                    <p class="adress"><?php echo get_sub_field('contact_module_place_address_first_line') ?> <br>
                        <?php echo get_sub_field('contact_module_place_address_nd_line') ?> <br>
                        <?php echo get_sub_field('contact_module_place_address_rd_line') ?>
                    </p>
                    <p class="phone">
                        <?php echo get_sub_field('contact_module_place_phone_first_line') ?> <br>
                        <?php echo get_sub_field('contact_module_place_phone_nd_line') ?>
                    </p>

                    <p class="email"> <?php echo get_sub_field('contact_module_place_email_first_line') ?> <br>
                        <?php echo get_sub_field('contact_module_place_email_nd_line') ?>
                    </p>
                    <?php if (get_sub_field('contact_module_map_link')):?>
                    <a href="<?php echo get_sub_field('contact_module_map_link') ?>" target="_blank">
                        <p class="map">       <?php if (ICL_LANGUAGE_CODE=='en' ) : ?>
                                Show on map
                                <?php else:  ?>
                                Pokaż na mapie
                                <?php endif; ?> <img
                                src="<?php echo get_template_directory_uri(); ?>/public/images/Lokalizacja-Dark.png"
                                alt="Lokalizacja"></p>
                    </a>
                    <?php endif; ?> 
                </div>


            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>

    <div class="contact-temp__map" styles="width:100vw;">

        <?php 
            $location = get_field('google-map-contact');
            if( $location ): ?>
        <div class="acf-map" data-zoom="16">
            <div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>"
                data-lng="<?php echo esc_attr($location['lng']); ?>">
                <h3> <?php echo get_the_title(); ?></h3>
                <?php echo $location['address']; ?>
            </div>
        </div>
        <?php endif; ?>

    </div>

    <section class="frontcontact" id="form">
        <?php if( have_rows('contact_form') ): ?>
        <?php while( have_rows('contact_form') ): the_row(); ?>
        <div class="frontcontact__content">
            <div class="frontcontact__content-header">
                <div class="frontcontact__content-header-kip template">
                    <h4><?php echo get_sub_field('contact_form_header') ?></h4>
                    <h4><?php echo get_sub_field('contact_form_header_nd') ?></h4>
                    <p><?php echo get_sub_field('contact_form_content') ?></p>
                </div>

            </div>

        </div>
        <div class="frontcontact__form">
            <?php 
        $formshort = get_sub_field('contact_form_shortcode_contact');
        $short = "$formshort";
        echo do_shortcode($short);  ?>
        </div>
    </section>
    <?php endwhile; ?>
    <?php endif; ?>
</section>
<?php 

the_content();

get_footer();