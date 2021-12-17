<?php
get_header();?>
<div class="main-background front"></div>

<div class="frontpage-wrapper">
    <section class="main-banner">
        <div class="main-banner__header">

            <?php if( have_rows('main_banner') ): ?>
            <?php while( have_rows('main_banner') ): the_row();
        ?>




            <div class="main-banner__header-text">
                <a href="<?php echo get_sub_field('banner_header_url') ?>">
                    <h1><?php echo get_sub_field('banner_header') ?></h1>
                </a>
            </div>
            <div class="main-banner__header-content">
                <div class="main-banner__header-icon">
                <?php if ( is_front_page() && ICL_LANGUAGE_CODE=='en' ) : ?>
                    <a href="/en/projects/?inv=flats-investments">
                        <?php else:  ?>
                            <a href="/projekty/?inv=inwestycje-mieszkaniowe">
                        <?php endif; ?>
              
              
                        <img src="<?php echo get_template_directory_uri(); ?>/public/images/Mieszkania.png"
                            alt="Przejdź do Mieszkania">

                        <?php if ( is_front_page() && ICL_LANGUAGE_CODE=='en' ) : ?>
                        <p>Flats</p>
                        <?php else:  ?>
                        <p>Mieszkania</p>
                        <?php endif; ?>
                    </a>
                </div>
                <div class="main-banner__header-icon nd">
                <?php if ( is_front_page() && ICL_LANGUAGE_CODE=='en' ) : ?>
                    <a href="/en/projects/?inv=office-investments">
                        <?php else:  ?>
                            <a href="/projekty/?inv=inwestycje-biurowe">
                        <?php endif; ?>
              
     
                        <img src="<?php echo get_template_directory_uri(); ?>/public/images/Biura.png"
                            alt="Przejdź do Biura">
                        <?php if ( is_front_page() && ICL_LANGUAGE_CODE=='en' ) : ?>
                        <p>Offices</p>
                        <?php else:  ?>
                        <p>Biura</p>
                        <?php endif; ?>

                    </a>
                </div>
            </div>
            <div class="main-banner__header-button">
                <a href="<?php echo get_sub_field('banner_header_url') ?>">
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
     'numberposts' => -1,
     'suppress_filters' => false
       );
      $slides = get_posts($args);

     

      if( ! empty( $slides ) ){

      foreach ($slides as $slide) : ?>

            <div class="main-banner__slider-item">
            <a href="<?php the_field('slider_url', $slide); ?>">
                <img class="main-banner__slider-image" src="  <?php the_field('slider_image', $slide); ?>" alt="">
                </a>


                <div class="main-banner__slider-box">
                    <p><?php the_field('small_top_header', $slide) ?></p>
                    <h3><?php echo $slide->post_title; ?></h3>
                    <h5><?php the_field('slider_content', $slide) ?></h5>

                    <div class="more">
                        <a href="<?php the_field('slider_url', $slide); ?>">
                            <?php if ( is_front_page() && ICL_LANGUAGE_CODE=='en' ) : ?>
                                Look
                            <?php else:  ?>
                            Zobacz
                            <?php endif; ?>

                            <img class="main-banner__slider-arrow"
                                src="<?php echo get_template_directory_uri(); ?>/public/images/ArrowCircleRight-Accent.png"
                                alt=""></a>
                    </div>

                </div>


            </div>
            <?php endforeach; ?>
            <?php }; ?>



            <?php  print_r( $term_obj_list);?>
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
    <?php if( have_rows('front_news') ): ?>
    <?php while( have_rows('front_news') ): the_row(); ?>
    <section class="news">

        <div class="news__header">
            <a href="<?php echo get_sub_field('front_news_header_url') ?>">
                <h2><?php echo get_sub_field('front_news_header') ?></h2>
            </a>
            <p><?php echo get_sub_field('front_news_underheader') ?></p>
        </div>

        <div class="news__posts">
            <?php 

            $args = array(
                'post_type' => 'aktualnosci',
                'numberposts' => 4,
                'suppress_filters' => false
                
                        );
                $news = get_posts($args);
                    if( ! empty( $news ) ){
                    foreach ($news as $new) : ?>
      <a href="<?php echo get_permalink($new->ID) ?>">
            <div class="news__posts-item">
                <div class="news__posts-image">
              
                        <img src="<?php echo the_field('single_post_image', $new) ?> " alt="">
                </div>
                <div class="news__posts-content">
                    <p class="news__posts-date">
                        <?php echo get_the_date( 'd / m / Y', $new->ID ) ?>
                    </p>
                    <h4 class="news__posts-header"><?php echo $new->post_title; ?></h4>
                    <p class="news__posts-textarea"><?php echo the_field('single_post_extract', $new) ?> </p>

                    <div class="news__posts-button">
                      <div>
                            <?php if ( is_front_page() && ICL_LANGUAGE_CODE=='en' ) : ?>
                            <p> Read more </p>
                            <?php else:  ?>
                            <p>Czytaj dalej</p>
                            <?php endif; ?>
                            <img class="main-banner__slider-arrow"
                                src="<?php echo get_template_directory_uri(); ?>/public/images/ArrowCircleRight-Accent.png"
                                alt="">
                                </div>
                    </div>
                </div>
            </div>
            </a>


            <?php endforeach; ?>
            <?php }; ?>

        </div>

        <div class="news__more">
            <a href="<?php echo get_sub_field('front_news_url') ?>"><?php echo get_sub_field('front_news_button') ?>
                <img src="<?php echo get_template_directory_uri(); ?>/public/images/ArrowCircleRight-Dark.png"
                    alt=""></a>
        </div>
    </section>
    <?php endwhile; ?>
    <?php endif; ?>


    <section class="aboutus"
        style="background-image: url('<?php echo get_template_directory_uri(); ?>/public/images/Main-OFirmie_BG.jpg');">



        <div class="aboutus__container">
            <?php if( have_rows('front_aboutus') ): ?>
            <?php while( have_rows('front_aboutus') ): the_row(); ?>
            <div class="aboutus__content">
                <div class="aboutus__content-header">
                    <a href="<?php echo get_sub_field('front_aboutus_url') ?>">
                        <h3><?php echo get_sub_field('front_aboutus_header') ?></h3>
                    </a>
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
            </div>   <a href="<?php echo get_sub_field('front_aboutus_image_url') ?>">
            <div class="aboutus__image">
             
                    <img src="<?php echo get_sub_field('front_aboutus_image') ?>" alt="">
            </div></a>
        </div>

        <?php endwhile; ?>
        <?php endif; ?>

    </section>

    <section class="clients">
        <?php if( have_rows('front_clients') ): ?>
        <?php while( have_rows('front_clients') ): the_row(); ?>
        <div class="clients__header">
            <a href="<?php echo get_sub_field('front_clients_url') ?>">
                <h2><?php echo get_sub_field('front_clients_header') ?></h2>
            </a>
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
            <a href="<?php echo get_sub_field('front_clients_button_url') ?> "><?php echo get_sub_field('front_clients_button_title') ?>
                <img src="<?php echo get_template_directory_uri(); ?>/public/images/ArrowCircleRight-Dark.png"
                    alt=""></a>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>

    </section>
    <?php if( have_rows('front_newinv') ): ?>
    <?php while( have_rows('front_newinv') ): the_row(); ?>
    <section class="newestinv">

        <div class="newestinv__container">
            <div class="newestinv__header">
                <a href=" <?php echo get_sub_field('front_newinv_url') ?>">
                    <h3>
                        <?php echo get_sub_field('front_newinv_header') ?>
                    </h3>
                </a>
                <p><?php echo get_sub_field('front_newinv_content') ?></p>
            </div>
            <div class="newestinv__postschoice">
                <div class="newestinv__postschoice-item active" data-filter="*">
                    <?php if ( is_front_page() && ICL_LANGUAGE_CODE=='en' ) : ?>
                    <p>All</p>
                    <?php else:  ?>
                    <p>Wszystkie</p>
                    <?php endif; ?>
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
  $argsInv = array(
    'post_type' => 'inwestycje',
    'posts_per_page' => 10,
    'suppress_filters' => false
  );

  $query = new WP_Query($argsInv);

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
                        <a href="<?php echo get_permalink($query->ID) ?>">

                            <img src="<?php echo the_field('inv_thumbnail', $investion)?>" alt=""></a>
                    </div>
                    <div class="newestinv__posts-box">
                        <div class="newestinv__posts-boxhead">
                            <?php if( have_rows('inv_header-info', $investion) ): ?>
                            <?php while( have_rows('inv_header-info', $investion) ): the_row(); ?>
                            <p class="title"> <?php  echo get_sub_field('inv_category', $investion)?></p>
                            <p class="date"><?php  echo get_sub_field('inv_year', $investion)?></p>
                        </div>
                        <a href="<?php echo get_permalink($query->ID) ?>">
                        <h3><?php echo get_the_title();?></h3></a>
                        <h5><?php  echo get_sub_field('inv_place', $investion)?></h5>

                        <div class="more">
                            <a href="<?php echo get_permalink($query->ID) ?>">
                                <?php if ( is_front_page() && ICL_LANGUAGE_CODE=='en' ) : ?>
                                    Look
                                <?php else:  ?>
                                Zobacz
                                <?php endif; ?>

                                <img class="main-banner__slider-arrow"
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
    <?php endwhile; ?>
    <?php endif; ?>
    <section class="investorzone">
        <?php if( have_rows('front_inv') ): ?>
        <?php while( have_rows('front_inv') ): the_row(); ?>
        <div class="investorzone__topbuttons">
            <?php if( have_rows('front_inv_left') ): ?>
            <?php while( have_rows('front_inv_left') ): the_row(); ?>
            <a href="<?php echo get_sub_field('front_inv_left_url') ?>">
                <div class="investorzone__topbuttons-item"
                    style="background-image: url('<?php echo get_sub_field('front_inv_left_image') ?>')">

                    <div class="investorzone__topbuttons-image">
                    </div>
                    <div class="investorzone__topbuttons-header">
                        <p><?php echo get_sub_field('front_inv_left_header') ?></p>
                        <img src="<?php echo get_template_directory_uri(); ?>/public/images/ArrowCircleRight-White.png"
                            alt="">
                    </div>

                </div>
            </a>
            <?php endwhile; ?>
            <?php endif; ?>
            <?php if( have_rows('front_inv_right') ): ?>
            <?php while( have_rows('front_inv_right') ): the_row(); ?>
            <a href="<?php echo get_sub_field('front_inv_right_url') ?>">
                <div class="investorzone__topbuttons-item"
                    style="background-image: url('<?php echo get_sub_field('front_inv_right_image') ?>')">


                    <div class="investorzone__topbuttons-header">
                        <p><?php echo get_sub_field('front_inv_right_header') ?></p>
                        <img src="<?php echo get_template_directory_uri(); ?>/public/images/ArrowCircleRight-White.png"
                            alt="">
                    </div>

                </div>
            </a>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>

        <?php if( have_rows('front_inv-zone') ): ?>
        <?php while( have_rows('front_inv-zone') ): the_row(); ?>
        <div class="investorzone__wrapper">
            <div class="investorzone__header">
                <a href="    <?php echo get_sub_field('front_inv-zone_header_url') ?>">
                    <h3>
                        <?php echo get_sub_field('front_inv-zone_header') ?>
                    </h3>
                </a>
                <p> <?php echo get_sub_field('front_inv-zone_content') ?></p>
            </div>
            <div class="investorzone__buttombuttons">
                <?php if( have_rows('front_inv-zone_left') ): ?>
                <?php while( have_rows('front_inv-zone_left') ): the_row(); ?>
                <a href="<?php echo get_sub_field('front_inv-zone_left_url') ?>">
                    <div class="investorzone__buttombuttons-item"
                        style="background-image: url('<?php echo get_sub_field('front_inv-zone_left_background') ?>')">
                        <div class="investorzone__buttombuttons-icon">
                            <img src="<?php echo get_sub_field('front_inv-zone_left_icon') ?>" alt="">
                        </div>
                        <div class="investorzone__buttombuttons-content">
                            <p><?php echo get_sub_field('front_inv-zone_left_header') ?></p>
                            <div> <?php echo get_sub_field('front_inv-zone_left_button_title') ?><img
                                    src="<?php echo get_template_directory_uri(); ?>/public/images/ArrowCircleRight-White.png"
                                    alt="Sprawdź"></div>
                        </div>
                    </div>
                </a>
                <?php endwhile; ?>
                <?php endif; ?>
                <?php if( have_rows('front_inv-zone_right') ): ?>
                <?php while( have_rows('front_inv-zone_right') ): the_row(); ?>
                <a href="<?php echo get_sub_field('front_inv-zone_right_url') ?>">
                    <div class="investorzone__buttombuttons-item"
                        style="background-image: url('<?php echo get_sub_field('front_inv-zone_right_background') ?>')">
                        <div class="investorzone__buttombuttons-icon">
                            <img src="<?php echo get_sub_field('front_inv-zone_right_icon') ?>" alt="">
                        </div>
                        <div class="investorzone__buttombuttons-content">
                            <p><?php echo get_sub_field('front_inv-zone_right_header') ?></p>
                            <div>
                                <?php echo get_sub_field('front_inv-zone_right_button_title') ?></p><img
                                    src="<?php echo get_template_directory_uri(); ?>/public/images/ArrowCircleRight-White.png"
                                    alt="Sprawdź"> </div>

                        </div>
                    </div>
                </a>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </section>
    <?php if( have_rows('front_contact') ): ?>
    <?php while( have_rows('front_contact') ): the_row(); ?>
    <section class="frontcontact">
        <div class="frontcontact__content">
            <div class="frontcontact__content-header">
                <div class="frontcontact__content-header-kip">
                    <a href="<?php echo get_sub_field('front_contact_header_url') ?>">
                        <h4><?php echo get_sub_field('front_contact_header') ?></h4>
                        <h4><?php echo get_sub_field('front_contact_header_nd') ?></h4>
                    </a>
                    <p><?php echo get_sub_field('front_contact_content') ?></p>
                </div>
                <img src="<?php echo get_sub_field('front_contact_image') ?>" alt="Uśmiechnięta osoba">
            </div>

        </div>
        <div class="frontcontact__form">
            <?php 
        $formshort = get_sub_field('front_contact_shortcode');
        $short = "$formshort";
        echo do_shortcode($short);  ?>
        </div>
    </section>
</div>
<?php endwhile; ?>
<?php endif; ?>

<?php
get_footer();
?>