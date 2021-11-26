<?php

/*
Template Name: Szablon Kontakt
Template Post Type: post, page, event
*/

get_header();

?>
<div class="main-background page">
    <h1><?php echo get_the_title();?></h1>
    <img src="<?php echo get_template_directory_uri(); ?>/public/images/kontaktback.png" alt="">
</div>

<section class="contact-temp" style="margin-top:300px">
    <div class="contact-temp__top">
        <div class="contact-temp__top-header">
            <h1>Mermaid Capital Sp. z o.o.</h1>
            <a data-scroll href="#form">
                Skorzystaj z formularza kontaktowego <img
                    src="<?php echo get_template_directory_uri(); ?>/public/images/ArrowCircleDown-Accent.png"
                    alt="Formularz kontaktowy"></a>
        </div>
        <div class="contact-temp__top-adresses-list">
            <div class="contact-temp__top-adresses-item">
                <img src="<?php echo get_template_directory_uri(); ?>/public/images/Lokalizacja-Accent.png"
                    alt="Lokalizacja">
                <div class="contact-temp__top-adress-botitem">
                    <h4>Centrala w Warszawie</h4>
                    <p class="adress">ul. Płomyka 41 <br>
                        02-490 Warszawa
                    </p>
                    <p class="phone">
                        +48 22 375 15 55
                    </p>

                    <p class="email">biuro@mermaid.pl</p>

                    <p class="map">Pokaż na mapie <img
                            src="<?php echo get_template_directory_uri(); ?>/public/images/Lokalizacja-Dark.png"
                            alt="Lokalizacja"></p>
                </div>
                
            </div>
            <div class="contact-temp__top-adresses-item">
                <img src="<?php echo get_template_directory_uri(); ?>/public/images/Lokalizacja-Accent.png"
                    alt="Lokalizacja">
                <div class="contact-temp__top-adress-botitem">
                    <h4>Centrala w Warszawie</h4>
                    <p class="adress">ul. Płomyka 41 <br>
                        02-490 Warszawa
                    </p>
                    <p class="phone">
                        +48 22 375 15 55
                    </p>

                    <p class="email">biuro@mermaid.pl</p>

                    <p class="map">Pokaż na mapie <img
                            src="<?php echo get_template_directory_uri(); ?>/public/images/Lokalizacja-Dark.png"
                            alt="Lokalizacja"></p>
                </div>
                
            </div>
            <div class="contact-temp__top-adresses-item">
                <img src="<?php echo get_template_directory_uri(); ?>/public/images/Lokalizacja-Accent.png"
                    alt="Lokalizacja">
                <div class="contact-temp__top-adress-botitem">
                    <h4>Centrala w Warszawie</h4>
                    <p class="adress">ul. Płomyka 41 <br>
                        02-490 Warszawa
                    </p>
                    <p class="phone">
                        +48 22 375 15 55
                    </p>

                    <p class="email">biuro@mermaid.pl</p>

                    <p class="map">Pokaż na mapie <img
                            src="<?php echo get_template_directory_uri(); ?>/public/images/Lokalizacja-Dark.png"
                            alt="Lokalizacja"></p>
                </div>
                
            </div>
        </div>
    </div>

    <div class="contact-temp__map" styles="width:100vw;">
   
    <?php 
$location = get_field('google-map-contact');
if( $location ): ?>
    <div class="acf-map" data-zoom="16">
        <div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>"
            data-lng="<?php echo esc_attr($location['lng']); ?>"> <h3>  <?php echo get_the_title(); ?></h3> 
       <?php echo $location['address']; ?>
        </div>
    </div>
    <?php endif; ?>

    </div>

    <section class="frontcontact" id="form">
        <div class="frontcontact__content">
            <div class="frontcontact__content-header">
                <div class="frontcontact__content-header-kip template" >
                    <h4>Masz pytania?</h4>
                    <h4>Skontaktuj się z nami.</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>

            </div>

        </div>
        <div class="frontcontact__form">
            <?php echo do_shortcode( '[contact-form-7 id="32" title="Formularz 1"]' ); ?>
        </div>
    </section>

</section>
<?php 

the_content();

get_footer();