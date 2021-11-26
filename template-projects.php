<?php

/*
Template Name: Szablon Projekty
Template Post Type: post, page, event
*/

get_header();

?>
<div class="main-background page">
    <h1><?php echo get_the_title();?></h1>
    <img src="<?php echo get_template_directory_uri(); ?>/public/images/projektyback.png" alt="">
</div>
<div class="page-type projects">
<section class="projects-temp">


    <div class="newestinv__container">

        <div class="newestinv__postschoice">
            <div class="newestinv__postschoice-item all" data-filter="*" data-link="<?php $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; 
    echo $actual_link;
    ?>">
                <p>Wszystkie</p>
            </div>
            <?php
          $terms = get_terms('types');
          foreach ($terms as  $term) { ?>
            <div data-filter=".<?php  echo $term->slug; ?>" class="newestinv__postschoice-item <?php  echo $term->slug; ?>" id="#<?php  echo $term->slug; ?>">
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

            <div class="newestinv__posts-item single-content <?php echo  $termsSLug; ?>  grid-item" >


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

                <div class="spacer"></div>
            </div>

           

            <?php  }
        wp_reset_postdata();

        ?>



        </div>
    </div>
  

</section>
</div>
<?php 
get_footer();
 ?>