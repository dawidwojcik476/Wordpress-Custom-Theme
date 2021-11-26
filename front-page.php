<?php
get_header();?>
<div class="main-background front"></div>
<section class="main-banner">
    <div class="main-banner__header">
        <?php if( have_rows('main_banner') ): ?>
        <?php while( have_rows('main_banner') ): the_row();
        ?>

  


        <div class="main-banner__header-text">
            <h1><?php echo get_sub_field('banner_header') ?></h1>
        </div>
        <div class="main-banner__header-content">
            <div class="main-banner__header-icon">
                <a href="http://localhost/wordpress/projekty/?inv=inwestycje-mieszkaniowe">
                <img src="<?php echo get_template_directory_uri(); ?>/public/images/Mieszkania.png"
                    alt="Przejdź do Mieszkania">
                <p>Mieszkania</p>
                </a>
            </div>
            <div class="main-banner__header-icon nd">
            <a href="http://localhost/wordpress/projekty/?inv=inwestycje-biurowe">
                <img src="<?php echo get_template_directory_uri(); ?>/public/images/Biura.png" alt="Przejdź do Biura">
                <p>Biura</p>
        </a>
            </div>
        </div>
        <div class="main-banner__header-button">
            <a href="<?php echo get_sub_field('banner_button_link') ?>">
                <button><?php echo get_sub_field('banner_button_title') ?><img
                        src="<?php echo get_template_directory_uri(); ?>/public/images/ArrowCircleRight-White.png"
                        alt="Przejdź do Inwestycje"> </button></a>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>

    <div class="main-banner__slider">
   
        <?php   $args = array(
     'post_type'        => 'slider',
     'numberposts' => 2
       );
      $slides = get_posts($args);
      if( ! empty( $slides ) ){

      foreach ($slides as $slide) : ?>

        <div class="main-banner__slider-item">
            <img class="main-banner__slider-image" src="  <?php the_field('slider_image', $slide); ?>" alt="">



            <div class="main-banner__slider-box">
                <p><?php the_field('small_top_header', $slide) ?></p>
                <h3><?php echo $slide->post_title; ?></h3>
                <h5><?php the_field('slider_content', $slide) ?></h5>

                <div class="more">
                    <a href="<?php the_field('slider_url', $slide); ?>">
                        Zobacz <img class="main-banner__slider-arrow"
                            src="<?php echo get_template_directory_uri(); ?>/public/images/ArrowCircleRight-Accent.png"
                            alt=""></a>
                </div>

            </div>


        </div>
        <?php endforeach; ?>
        <?php }; ?>
        



    </div>



    <div class="main-banner__swapper">
        <button class="main-banner__swapper-left"><img
                src="<?php echo get_template_directory_uri(); ?>/public/images/ArrowCircleLeft-Dark.png"
                alt=""></button>
        <div class="main-banner__swapper-dots"></div>

        <button class="main-banner__swapper-right"><img
                src="<?php echo get_template_directory_uri(); ?>/public/images/ArrowCircleRight-Dark.png"
                alt=""></button>
    </div>
</section>

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
                $news = get_posts($args);
                    if( ! empty( $news ) ){
                    foreach ($news as $new) : ?>

        <div class="news__posts-item">
            <div class="news__posts-image">
                <img src="<?php echo get_template_directory_uri(); ?>/public/images/Aleksandria.jpg" alt="">
            </div>
            <div class="news__posts-content">
                <p class="news__posts-date">
                    <?php echo get_the_date( 'd / m / Y', $new->ID ) ?>
                </p>
                <h4 class="news__posts-header"><?php echo $new->post_title; ?></h4>
                <p class="news__posts-textarea"><?php echo $new->post_excerpt; ?> </p>

                <div class="news__posts-button">
                    <a href="<?php echo get_permalink($new->ID) ?>">Czytaj dalej <img class="main-banner__slider-arrow"
                            src="<?php echo get_template_directory_uri(); ?>/public/images/ArrowCircleRight-Accent.png"
                            alt=""></a>
                </div>
            </div>
        </div>


                     <?php endforeach; ?>
                     <?php }; ?>

    </div>

    <div class="news__more">
        <a href="#">Więcej aktualności <img
                src="<?php echo get_template_directory_uri(); ?>/public/images/ArrowCircleRight-Dark.png" alt=""></a>
    </div>
</section>



<section class="aboutus"
    style="background-image: url('<?php echo get_template_directory_uri(); ?>/public/images/Main-OFirmie_BG.jpg');">

   
    
    <div class="aboutus__container">
         <?php if( have_rows('front_aboutus') ): ?>
         <?php while( have_rows('front_aboutus') ): the_row(); ?>
        <div class="aboutus__content">
            <div class="aboutus__content-header">
                <h3><?php echo get_sub_field('front_aboutus_header') ?></h3>
            </div>
            <div class="aboutus__content-firstcontent">
                <p><?php echo get_sub_field('front_aboutus_content') ?></p>
            </div>
            <div class="aboutus__content-secondcontent">
                <p><?php echo get_sub_field('front_aboutus_content_nd') ?></p>
            </div>
            <div class="aboutus__content-button">
                <a href="<?php echo get_sub_field('front_aboutus_button_url') ?>"><?php echo get_sub_field('front_aboutus_button_title') ?><img
                        src="<?php echo get_template_directory_uri(); ?>/public/images/ArrowCircleRight-White.png"
                        alt="Przejdź do Inwestycje"> </a>
            </div>
        </div>
        <div class="aboutus__image">
            <img src="<?php echo get_sub_field('front_aboutus_image') ?>" alt="">
        </div>
    </div>

    <?php endwhile; ?>
    <?php endif; ?>

</section>

<section class="clients">
<?php if( have_rows('front_clients') ): ?>
         <?php while( have_rows('front_clients') ): the_row(); ?>
         <div class="clients__header">
        <h2>Nasi klienci</h2>
    </div>

    <div class="clients__logos">
    <?php if( have_rows('front_clients_logos') ): ?>
         <?php while( have_rows('front_clients_logos') ): the_row(); ?>
        <div class="clients__logos-item">
            <img src="<?php echo get_sub_field('front_clients_logo') ?>" alt="Logo Klienta">
        </div>
        <?php endwhile; ?>
    <?php endif; ?>

    </div>

    <div class="clients__more">
        <a href="<?php echo get_sub_field('front_clients_button_url') ?> "><?php echo get_sub_field('front_clients_button_title') ?> <img
                src="<?php echo get_template_directory_uri(); ?>/public/images/ArrowCircleRight-Dark.png" alt=""></a>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
    
</section>

<section class="newestinv">

<div class="newestinv__container">

<div class="newestinv__postschoice">
    <div class="newestinv__postschoice-item active" data-filter="*">
        <p>Wszystkie</p>
    </div>
    <?php
  $terms = get_terms('types');
  foreach ($terms as  $term) { ?>
    <div data-filter=".<?php  echo $term->slug; ?>" class="newestinv__postschoice-item">
        <p><?php echo $term->name; ?></p>
    </div>
    <?php  }

?>

</div>

<div class="newestinv__posts content grid">

    <?php
  $args = array(
    'post_type' => 'inwestycje',
    'posts_per_page' => -1
  );

  $query = new WP_Query($args);

  while ($query->have_posts()) {
    $query->the_post();

    $termsArray = get_the_terms($post->ID, 'types');

    $termsSLug = "";
    foreach ($termsArray as $term) {
      $termsSLug .= $term->slug . ' ';
    }

    ?>

    <div class="newestinv__posts-item single-content <?php echo  $termsSLug; ?>  grid-item">


        <div class="newestinv__posts-image">

            <img src="<?php echo the_field('inv_thumbnail', $investion)?>" alt="">
        </div>
        <div class="newestinv__posts-box">
            <div class="newestinv__posts-boxhead">
                <?php if( have_rows('inv_header-info', $investion) ): ?>
                <?php while( have_rows('inv_header-info', $investion) ): the_row(); ?>
                <p class="title"> <?php  echo get_sub_field('inv_category', $investion)?></p>
                <p class="date"><?php  echo get_sub_field('inv_year', $investion)?></p>
            </div>
            <h3><?php echo get_the_title();?></h3>
            <h5><?php  echo get_sub_field('inv_place', $investion)?></h5>

            <div class="more">
                <a href="<?php echo get_permalink($query->ID) ?>">
                    Zobacz <img class="main-banner__slider-arrow"
                        src="<?php echo get_template_directory_uri(); ?>/public/images/ArrowCircleRight-Accent.png"
                        alt=""></a>
            </div>

        </div>
        <?php endwhile; ?>
        <?php endif; ?>

<div class="spacer" style="background:#F6F6F8;"></div>
    </div>

    <?php  }
wp_reset_postdata();

?>



</div>
</div>

</section>

<section class="investorzone">
    <div class="investorzone__topbuttons">
        <a href="#">
            <div class="investorzone__topbuttons-item"
                style="background-image: url('<?php echo get_template_directory_uri(); ?>/public/images/biuro.png')">

                <div class="investorzone__topbuttons-image">
                </div>
                <div class="investorzone__topbuttons-header">
                    <p>Inwestycje biurowe</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/public/images/ArrowCircleRight-White.png"
                        alt="">
                </div>

            </div>
        </a>
        <a href="#">
            <div class="investorzone__topbuttons-item"
                style="background-image: url('<?php echo get_template_directory_uri(); ?>/public/images/mieszkanko.png')">


                <div class="investorzone__topbuttons-header">
                    <p>Inwestycje mieszkaniowe</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/public/images/ArrowCircleRight-White.png"
                        alt="">
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
        <div class="investorzone__buttombuttons">
            <div class="investorzone__buttombuttons-item"
                style="background-image: url('<?php echo get_template_directory_uri(); ?>/public/images/invbotbut1.png')">
                <div class="investorzone__buttombuttons-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/public/images/Sprzedaz.png" alt="">
                </div>
                <div class="investorzone__buttombuttons-content">
                    <p>Współpracuj z nami</p>
                    <a href="#">Sprawdź<img
                            src="<?php echo get_template_directory_uri(); ?>/public/images/ArrowCircleRight-White.png"
                            alt="Sprawdź"> </a>

                </div>
            </div>

            <div class="investorzone__buttombuttons-item"
                style="background-image: url('<?php echo get_template_directory_uri(); ?>/public/images/invbotbut2.png')">
                <div class="investorzone__buttombuttons-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/public/images/ZarzadzanieNieruchomoscia.png"
                        alt="">
                </div>

                <div class="investorzone__buttombuttons-content">
                    <p>Zrealizuj projekt</p>
                    <a href="#">Sprawdź<img
                            src="<?php echo get_template_directory_uri(); ?>/public/images/ArrowCircleRight-White.png"
                            alt="Sprawdź"> </a>

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
            <img src="<?php echo get_template_directory_uri(); ?>/public/images/Kontakt-Osoba.jpg"
                alt="Uśmiechnięta osoba">
        </div>

    </div>
    <div class="frontcontact__form">
        <?php echo do_shortcode( '[contact-form-7 id="32" title="Formularz 1"]' ); ?>
    </div>
</section>


<?php
get_footer();
?>