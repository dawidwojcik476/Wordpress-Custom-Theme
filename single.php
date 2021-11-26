<?php get_header(); 
while ( have_posts() ): the_post();?>

<div class="main-background">
    <img src="<?php echo get_template_directory_uri(); ?>/public/images/inv-background.png" alt="">
</div>
<section class="inv-content single">

    <div class="inv-content__sidebar single">
        <div class="inv-content__sidebar-back single">
            <a href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/public/images/ArrowCircleLeft-Dark.png"
                    alt="Projekty"> Wróć do Aktualności </a>
        </div>

        <div class="inv-content__sidebar-content single">

        <?php $args = array(
'post_type'      => 'post',
'post_status' => 'publish',
'orderby' => 'date',
            'order'   => 'DESC',
            'suppress_filters' => true,
'hide_empty'     => 1,
'depth'          => 1,
'posts_per_page' => 2,
'category_name' => 'aktualnosci',
); 

$posts = get_posts($args);

foreach ($posts as $post) : ?>




    <div class="single__posts-item">
        <div class="single__posts-content">
            <p class="single__posts-date">
                <?php echo get_the_date( 'd / m / Y', $post->ID ) ?>
            </p>
            <h4 class="single__posts-header"><?php echo $post->post_title; ?></h4>
            <div class="single__posts-button">
                <a href="<?php echo get_permalink($post->ID) ?>">Czytaj dalej <img class="main-banner__slider-arrow"
                        src="<?php echo get_template_directory_uri(); ?>/public/images/ArrowCircleRight-Accent.png"
                        alt=""></a>
            </div>
        </div>
    </div>


    <?php endforeach; ?>
       
        </div>
      


    </div>



    <div class="inv-content__main-content">
        <div class="inv-content__main-content-header single">
            <h1>
                <?php echo get_the_title(); ?>
            </h1>
        </div>
        <div class="inv-content__main-content-invinfo">
            <div class="inv-content__main-content-underheader">
                <h2>
                    <div>
                    <?php echo get_the_date( 'd / m / Y' ) ?>
                    </div>
                </h2>

               
            
                <p class="year single">Najnowsze wydarzenia</p>
            </div>
            <div class="inv-content__main-content-seegallery">
     

            </div>
        </div>

        <div class="inv-content__main-content-content">
            <p>
                <?php echo get_the_content(); ?>
            </p>
        </div>
      <?php  if( have_rows('inv_standard') ): ?>
        <div class="inv-content__main-content-standard">
            <div class="inv-content__main-content-standardhead">
                <h4>Standard wykończenia</h4>
            </div>
            <div class="inv-content__main-content-standardlist">
                <ul>
                    <?php
                                       

                        // Loop through rows.
                        while( have_rows('inv_standard') ) : the_row();


                            ?>
                   <li><img src="<?php echo get_template_directory_uri(); ?>/public/images/Check-Accent.png"
                            alt="Zobacz Galerię">
                        <p>
                        <?php echo get_sub_field('inv_standard-content') ?>
                        </p>
                    </li>
                    <?php
                                endwhile;


                                else :

                                endif;?>

               
                </ul>
            </div>



        </div>

    </div>





</section>



<?php endwhile; get_footer(); ?>