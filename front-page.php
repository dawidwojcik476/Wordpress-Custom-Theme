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
     <?php   $args = array(
     'post_type'        => 'slider',
     'numberposts' => 2
       );
      $slides = get_posts($args);
 

      foreach ($slides as $slide) : ?>

<div class="main-banner__slider-item">
        <img class="main-banner__slider-image" src="  <?php the_field('slider_image', $slide); ?>" alt="">

      

        <div class="main-banner__slider-box">
            <p><?php the_field('small_top_header', $slide) ?></p>
            <h3><?php echo $slide->post_title; ?></h3>
            <h5><?php the_field('slider_content', $slide) ?></h5>

            <div class="more">
                <a href="<?php the_field('slider_url', $slide); ?>">
                Zobacz  <img class="main-banner__slider-arrow" src="<?php echo get_template_directory_uri(); ?>/public/images/ArrowCircleRight-Accent.png" alt=""></a>
            </div>

        </div>

        
        </div>
        <?php endforeach; ?> 
 
    
        
        </div>


   
    <div class="main-banner__swapper">
        <button class="main-banner__swapper-left"><img src="<?php echo get_template_directory_uri(); ?>/public/images/ArrowCircleLeft-Dark.png" alt=""></button> 
       <div class="main-banner__swapper-dots"></div>
        
        <button class="main-banner__swapper-right"><img src="<?php echo get_template_directory_uri(); ?>/public/images/ArrowCircleRight-Dark.png" alt=""></button>
 
</section>
</div>
<section class="news">
    <div class="news__header">
        <h2>Aktualności</h2>
        <p>Bądź na bieżąco z naszymi sprawami.</p>
    </div>

    <div class="news__posts">
    <?php 

$args = array(
    'category_name' => 'aktualnosci',
    'numberposts' => 4
);
$posts = get_posts($args);

 foreach ($posts as $post) : ?>

        <div class="news__posts-item">
            <div class="news__posts-image"> 
                <img src="<?php echo get_template_directory_uri(); ?>/public/images/Aleksandria.jpg" alt="">
            </div>
            <div class="news__posts-content">
                <p class="news__posts-date">
                    <?php echo get_the_date( 'd / m / Y', $post->ID ) ?> 
                </p>
                <h4 class="news__posts-header"><?php echo $post->post_title; ?></h4>
                <p class="news__posts-textarea"><?php echo $post->post_excerpt; ?> </p>

                <div class="news__posts-button">
                    <a href="<?php echo get_permalink($post->ID) ?>">Czytaj dalej  <img class="main-banner__slider-arrow" src="<?php echo get_template_directory_uri(); ?>/public/images/ArrowCircleRight-Accent.png" alt=""></a>
                </div>
            </div>
        </div>

      
        <?php endforeach; ?> 
        
    </div>

    <div class="news__more">
        <a href="#">Więcej aktualności <img src="<?php echo get_template_directory_uri(); ?>/public/images/ArrowCircleRight-Dark.png" alt=""></a>
    </div>
</section>

<section class="aboutus" style="background-image: url('<?php echo get_template_directory_uri(); ?>/public/images/Main-OFirmie_BG.jpg');">
<div class="aboutus__container">
<div class="aboutus__content">
    <div class="aboutus__content-header">
        <h3> O nas</h3>
    </div> 
    <div class="aboutus__content-firstcontent">
        <p>MERMAID PROPERTIES Sp. z o.o. jest firmą działającą na rynku nieruchomości biurowych i mieszkaniowych w Warszawie oraz w Łodzi. </p>
    </div>
    <div class="aboutus__content-secondcontent">
        <p>Przedmiotem naszej działalności jest rewitalizacja zabytkowych oraz postindustrialnych budynków, a także realizacja inwestycji biurowych i mieszkaniowych od zera.</p>
    </div>
    <div class="aboutus__content-button">
    <a href="#">Więcej o nas<img src="<?php echo get_template_directory_uri(); ?>/public/images/ArrowCircleRight-White.png" alt="Przejdź do Inwestycje"> </a>
    </div>

</div>
<div class="aboutus__image">
    <img src="<?php echo get_template_directory_uri(); ?>/public/images/onas.png" alt="">
</div>
</div>
</section>

<section class="clients">
<div class="clients__header">
        <h2>Nasi Klienci</h2>
    </div>

    <div class="clients__logos">
        <div class="clients__logos-item">
        <img src="<?php echo get_template_directory_uri(); ?>/public/images/Anwim.jpg" alt="Logo Klienta">
        </div>
        <div class="clients__logos-item">
        <img src="<?php echo get_template_directory_uri(); ?>/public/images/TVN.jpg" alt="">
        </div> 
        <div class="clients__logos-item">
        <img src="<?php echo get_template_directory_uri(); ?>/public/images/TVN.jpg" alt="">
        </div> 
        <div class="clients__logos-item">
        <img src="<?php echo get_template_directory_uri(); ?>/public/images/TVN.jpg" alt="">
        </div>
        <div class="clients__logos-item">
        <img src="<?php echo get_template_directory_uri(); ?>/public/images/TVN.jpg" alt="">
        </div>
         <div class="clients__logos-item">
        <img src="<?php echo get_template_directory_uri(); ?>/public/images/TVN.jpg" alt="">
        </div>
   
    </div>

    <div class="clients__more">
        <a href="#">Więcej o Klientach <img src="<?php echo get_template_directory_uri(); ?>/public/images/ArrowCircleRight-Dark.png" alt=""></a>
    </div>
</section>

<section class="newestinv">
    <div class="newestinv__container">
<div class="newestinv__header">
    <h3>
    Najnowsze inwestycje
    </h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
</div>

<div class="newestinv__postschoice">
    <div class="newestinv__postschoice-item active">
        <p>Wszystkie</p>
    </div>
    <div class="newestinv__postschoice-item">
        <p>Biura</p>
    </div>
    <div class="newestinv__postschoice-item">
        <p>Mieszkania</p>
    </div>
</div>

<div class="newestinv__posts">
    <div class="newestinv__posts-item">
         <div class="newestinv__posts-image">
              <img src="<?php echo get_template_directory_uri(); ?>/public/images/inwestycje.png" alt="">
        </div>
        <div class="newestinv__posts-box">
            <div class="newestinv__posts-boxhead">
            <p class="title">Inwestycja Mieszkaniowa</p>
            <p class="date">2021</p>
            </div>
            <h3>Nad Jasieniem</h3>
            <h5>Łódź</h5>

            <div class="more">
                <a href="#">
                Zobacz  <img class="main-banner__slider-arrow" src="<?php echo get_template_directory_uri(); ?>/public/images/ArrowCircleRight-Accent.png" alt=""></a>
            </div>

        </div>
    </div>
    <div class="newestinv__posts-item">
         <div class="newestinv__posts-image">
              <img src="<?php echo get_template_directory_uri(); ?>/public/images/inwestycje.png" alt="">
        </div>
        <div class="newestinv__posts-box">
            <div class="newestinv__posts-boxhead">
            <p>Inwestycja Mieszkaniowa</p>
            <p>2021</p>
            </div>
            <h3>Nad Jasieniem</h3>
            <h5>Łódź</h5>

            <div class="more">
                <a href="#">
                Zobacz  <img class="main-banner__slider-arrow" src="<?php echo get_template_directory_uri(); ?>/public/images/ArrowCircleRight-Accent.png" alt=""></a>
            </div>

        </div>
    </div>
    <div class="newestinv__posts-item">
         <div class="newestinv__posts-image">
              <img src="<?php echo get_template_directory_uri(); ?>/public/images/inwestycje.png" alt="">
        </div>
        <div class="newestinv__posts-box">
            <div class="newestinv__posts-boxhead">
            <p>Inwestycja Mieszkaniowa</p>
            <p>2021</p>
            </div>
            <h3>Nad Jasieniem</h3>
            <h5>Łódź</h5>

            <div class="more">
                <a href="#">
                Zobacz  <img class="main-banner__slider-arrow" src="<?php echo get_template_directory_uri(); ?>/public/images/ArrowCircleRight-Accent.png" alt=""></a>
            </div>

        </div>
    </div>
    <div class="newestinv__posts-item">
         <div class="newestinv__posts-image">
              <img src="<?php echo get_template_directory_uri(); ?>/public/images/inwestycje.png" alt="">
        </div>
        <div class="newestinv__posts-box">
            <div class="newestinv__posts-boxhead">
            <p>Inwestycja Mieszkaniowa</p>
            <p>2021</p>
            </div>
            <h3>Nad Jasieniem</h3>
            <h5>Łódź</h5>

            <div class="more">
                <a href="#">
                Zobacz  <img class="main-banner__slider-arrow" src="<?php echo get_template_directory_uri(); ?>/public/images/ArrowCircleRight-Accent.png" alt=""></a>
            </div>

        </div>
    </div>
</div>
</div>
     </section>

     <section class="investorzone">
         <div class="investorzone__topbuttons">
         <a href="#">
             <div class="investorzone__topbuttons-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/public/images/biuro.png')">
              
             <div class="investorzone__topbuttons-image" >    
             </div>
             <div class="investorzone__topbuttons-header">
            <p>Inwestycje biurowe</p>
            <img src="<?php echo get_template_directory_uri(); ?>/public/images/ArrowCircleRight-White.png" alt="">
             </div>
          
             </div>
             </a>
             <a href="#">
             <div class="investorzone__topbuttons-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/public/images/mieszkanko.png')">
            

             <div class="investorzone__topbuttons-header">
            <p>Inwestycje mieszkaniowe</p>
            <img src="<?php echo get_template_directory_uri(); ?>/public/images/ArrowCircleRight-White.png" alt="">
             </div>
            
             </div>
             </a>
         </div>

         <div class="investorzone__wrapper">
                    <div class="investorzone__header">
                    <h3>
                        Strefa Inwestorska
                     </h3>
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <div class="investorzone__buttombuttons" >
                    <div class="investorzone__buttombuttons-item"  style="background-image: url('<?php echo get_template_directory_uri(); ?>/public/images/invbotbut1.png')">
                    <div class="investorzone__buttombuttons-icon">
    <img src="<?php echo get_template_directory_uri(); ?>/public/images/Sprzedaz.png" alt="">
</div>
<div class="investorzone__buttombuttons-content">
                             <p>Współpracuj z nami</p>
                              <a href="#">Sprawdź<img src="<?php echo get_template_directory_uri(); ?>/public/images/ArrowCircleRight-White.png" alt="Sprawdź"> </a>

</div>
                        </div>
            
                        <div class="investorzone__buttombuttons-item"  style="background-image: url('<?php echo get_template_directory_uri(); ?>/public/images/invbotbut2.png')">
                        <div class="investorzone__buttombuttons-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/public/images/ZarzadzanieNieruchomoscia.png" alt="">
                        </div>

                        <div class="investorzone__buttombuttons-content">
                            <p>Zrealizuj projekt</p>
                              <a href="#">Sprawdź<img src="<?php echo get_template_directory_uri(); ?>/public/images/ArrowCircleRight-White.png" alt="Sprawdź"> </a>

</div>

                        </div>
                    </div>
         </div>
     </section>

     <section class="frontcontact">
         <div class="frontcontact__content">
             <div class="frontcontact__content-header">
                 <div class="frontcontact__content-header-kip">
                 <h4>Masz pytania?</h4>
                 <h4>Skontaktuj się z nami.</h4>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                 </div>
                 <img src="<?php echo get_template_directory_uri(); ?>/public/images/Kontakt-Osoba.jpg" alt="Uśmiechnięta osoba">
             </div>

         </div>
         <div class="frontcontact__form">
         <?php echo do_shortcode( '[contact-form-7 id="32" title="Formularz 1"]' ); ?>
         </div>
     </section>


     <?php
get_footer();
?>