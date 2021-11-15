<?php
get_header();?>
<div class="main-background"></div>
<section class="main-banner">
    <div class="main-banner__header">
        <div class="main-banner__header-text">
            <h1>Znajdź nieruchomość dla siebie</h1>
        </div>
        <div class="main-banner__header-content">
        <div class="main-banner__header-icon">
                <img src="<?php echo get_template_directory_uri(); ?>/public/images/Mieszkania.png" alt="Przejdź do Mieszkania"> 
                <p>Mieszkania</p>
            </div>
            <div class="main-banner__header-icon nd">
                <img src="<?php echo get_template_directory_uri(); ?>/public/images/Biura.png" alt="Przejdź do Biura"> 
                <p>Biura</p>
            </div>
        </div>
        <div class="main-banner__header-button">
            <button>Zobacz inwestycje<img src="<?php echo get_template_directory_uri(); ?>/public/images/ArrowCircleRight-White.png" alt="Przejdź do Inwestycje"> </button>
        </div>
    </div>

    <div class="main-banner__slider">
        <div class="main-banner__slider-item">
        <img class="main-banner__slider-image" src="<?php echo get_template_directory_uri(); ?>/public/images/sliderimg.png" alt="">

        <div class="main-banner__slider-box">
            <p>Inwestycja Mieszkaniowa</p>
            <h3>Nad Jasieniem</h3>
            <h5>Zamieszkaj w parku w centrum Łodzi</h5>

            <div class="more">
                Zobacz  <img class="main-banner__slider-image" src="<?php echo get_template_directory_uri(); ?>/public/images/ArrowCircleRight-Accent.png" alt="">
            </div>

        </div>
        </div>
              


    </div>
    <div class="main-banner__swapper">
        <button class="main-banner__swapper-left"><img src="<?php echo get_template_directory_uri(); ?>/public/images/ArrowCircleLeft-Dark.png" alt=""></button> 
        <ul class="slicks-dots">
            <li></li>
            <li></li>
            <li></li>
        </ul>
        
        <button class="main-banner__swapper-right"><img src="<?php echo get_template_directory_uri(); ?>/public/images/ArrowCircleRight-Dark.png" alt=""></button>
    </div>

</section>

</div>