<?php
/*
Template Name: Szablon Aktualności
Template Post Type: post, page, event
*/

get_header();?>

<div class="main-background newsback">
    <h1><?php echo get_the_title();?></h1>
    <?php if( have_rows('header_options') ): ?>
    <?php while( have_rows('header_options') ): the_row(); ?>
         <?php if( get_sub_field('header_options_background')): ?>
    <img src="<?php echo get_sub_field('header_options_background')?>" alt="">
    <?php endif; ?>
    <?php endwhile; ?>
    <?php endif; ?>
</div>

<div class="page-type news">
    <?php if( have_rows('news_header_box') ): ?>
    <?php while( have_rows('news_header_box') ): the_row(); ?>
    <div class="news-template__box">
        <p><?php echo get_sub_field('news_header_box_date')?></p>
        <a href="<?php echo get_sub_field('news_header_box_button_url')?>">
        <h3><?php echo get_sub_field('news_header_box_header')?></h3></a>
        <div class="more">
            <a href="<?php echo get_sub_field('news_header_box_button_url')?>">
                <?php echo get_sub_field('news_header_box_button_title')?> <img class="main-banner__slider-arrow"
                    src="<?php echo get_template_directory_uri(); ?>/public/images/ArrowCircleRight-Accent.png"
                    alt=""></a>
        </div>

    </div>
    <?php endwhile; ?>
    <?php endif; ?>
    <section class="news-template">

        <div class="news-template__postschoice">

            <?php
                     $terms = get_terms('newscategory');
                      foreach ($terms as  $term) { ?>
            <div data-filter=".<?php  echo $term->slug; ?>"
                class="news-template__postschoice-item <?php  echo $term->slug; ?>" id="#<?php  echo $term->slug; ?>">
                <p><?php echo $term->name; ?></p>
            </div>
            <?php  } ?>
        </div>
        <div class="news-template__posts content grid">
            <?php     $args = array(
            'post_type' => 'aktualnosci',
            'posts_per_page' => -1,
            'suppress_filters' => false
          );

            $query = new WP_Query($args);

            while ($query->have_posts()) {
              $query->the_post();
  
              $termsArray = get_the_terms($post->ID, 'newscategory');
  
              $termsSLug = "";
              foreach ($termsArray as $term) {
                $termsSLug .= $term->slug . ' ';
              } ?>



            <a href="<?php echo get_permalink($post->ID) ?>">
                <div class="news-template__posts-item <?php echo  $termsSLug; ?>  grid-item">
                    <div class="news-template__posts-image">
                        <img src="<?php echo the_field('single_post_image', $post) ?>" alt="">
                    </div>
                    <div class="news-template__posts-content">
                        <p class="news-template__posts-date">
                            <?php echo get_the_date( 'd / m / Y', $post->ID ) ?>
                        </p>
                        <h4 class="news-template__posts-header"><?php echo $post->post_title; ?></h4>
                        <p class="news-template__posts-textarea"><?php echo the_field('single_post_extract', $post) ?>
                        </p>

                        <div class="news-template__posts-button">
                            <div>
                                <?php if (ICL_LANGUAGE_CODE=='en' ) : ?>
                                Read more
                                <?php else:  ?>
                                Czytaj dalej
                                <?php endif; ?>

                                <img class="main-banner__slider-arrow"
                                    src="<?php echo get_template_directory_uri(); ?>/public/images/ArrowCircleRight-Accent.png"
                                    alt="">
                            </div>
                        </div>
                    </div>

                    <div class="spacer"></div>
                </div>
            </a>
            <?php  }
                      wp_reset_postdata();

                     ?>
        </div>
</div>
</section>

<?php get_footer(); ?>