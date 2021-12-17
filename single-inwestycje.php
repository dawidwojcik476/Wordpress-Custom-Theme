<?php get_header(); 
while ( have_posts() ): the_post();?>


<div class="main-background">
<?php if( have_rows('header_options') ): ?>
 <?php while( have_rows('header_options') ): the_row(); ?>
 <?php if( get_sub_field('header_options_background')): ?>
    <img src="<?php echo get_sub_field('header_options_background')?>" alt="">
    <?php endif; ?>
    <?php endwhile; ?>
                     <?php endif; ?>
</div>
<section class="inv-content">



    <div class="inv-content__sidebar">
        <div class="inv-content__sidebar-back">

      
            <?php if (ICL_LANGUAGE_CODE=='en' ) : ?>
                <a href="/en/projects/">
                <?php else:  ?>
                    <a href="/projekty/">
                    <?php endif; ?>
                <img src="<?php echo get_template_directory_uri(); ?>/public/images/ArrowCircleLeft-Dark.png"
                    alt="Projekty"> 
                
            <?php if (ICL_LANGUAGE_CODE=='en' ) : ?>
                Back to Projects
                <?php else:  ?>
                    Wróć do Projektów 
                    <?php endif; ?>
                </a>
        </div>

        <div class="inv-content__sidebar-content">
            <ul>
                <?php

                    // Check rows exists.
                    if( have_rows('inv_sidebar') ):

                        // Loop through rows.
                        while( have_rows('inv_sidebar') ) : the_row();

                     
                            ?>
                <li>
                    <div class="inv-content__sidebar-icon"> <img src=" <?php echo get_sub_field('inv_sidebar_icon'); ?>"
                            alt="Ikona"></div>
                    <div class="inv-content__sidebar-description">
                        <p>
                            <?php echo get_sub_field('inv_sidebar_content'); ?></p>
                        <h3><?php echo get_sub_field('inv_sidebar_title'); ?></h3>
                    </div>
                </li>
                <?php
                        endwhile;

                   
                    else :
                       
                    endif;?>


            </ul>
        </div>
        <?php if( have_rows('inv_sidebar-button') ): ?>
        <?php while( have_rows('inv_sidebar-button') ): the_row(); ?>
        <div class="inv-content__sidebar-button">
            <a href="<?php echo get_sub_field('inv_button-url') ?>" <?php 

if( get_sub_field('inv_button-blank') == 'on' ) {
?> target="_blank" <?php
}              
?>><?php echo get_sub_field('inv_button-content') ?><img
                    src="<?php echo get_template_directory_uri(); ?>/public/images/OutLink-White.png" alt="Inwestycje">
            </a>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>


    </div>



    <div class="inv-content__main-content">
        <div class="inv-content__main-content-header">
            <h1>
                <?php echo get_the_title(); ?>
            </h1>
        </div>
        <div class="inv-content__main-content-invinfo">
                  <?php if( have_rows('inv_header-info') ): ?>
                <?php while( have_rows('inv_header-info') ): the_row(); ?>
            <div class="inv-content__main-content-underheader">
                <h2>
                    <div>
                    <?php  echo get_sub_field('inv_category')?>
                    </div>
                </h2>
          
                <p><img src="<?php echo get_template_directory_uri(); ?>/public/images/Lokalizacja-Grey.png"
                        alt="Lokalizacja"> <?php echo get_sub_field('inv_place') ?></p>
                <p class="year"><?php echo get_sub_field('inv_year') ?></p>
            </div>
            <div class="inv-content__main-content-seegallery">
                <a data-scroll href="#gallery">
                <?php if (ICL_LANGUAGE_CODE=='en' ) : ?>
                See gallery
                <?php else:  ?>
                    Zobacz galerię
                    <?php endif; ?>
                     <img
                        src="<?php echo get_template_directory_uri(); ?>/public/images/Gallery-Accent.png"
                        alt="Zobacz Galerię"></a>
                <?php endwhile; ?>
                <?php endif; ?>

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
            <?php if (ICL_LANGUAGE_CODE=='en' ) : ?>
                Standard of finish
                <?php else:  ?>
                    <h4>Standard wykończenia</h4>
                    <?php endif; ?>
           
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

<section class="google-map">
    <?php 
$location = get_field('google_map');
if( $location ): ?>
    <div class="acf-map" data-zoom="16">
        <div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>"
            data-lng="<?php echo esc_attr($location['lng']); ?>"> <h3>  <?php echo get_the_title(); ?></h3> 
       <?php echo $location['address']; ?>
        </div>
    </div>
    <?php endif; ?>
</section>

<section id="gallery" class="gallery">
    <div class="gallery__header">
    <?php if (ICL_LANGUAGE_CODE=='en' ) : ?>
        <h2>Gallery</h2>
                <?php else:  ?>
                    <h2>Galeria</h2>
                    <?php endif; ?>
     
    </div>

    <?php 
$images = get_field('inv_gallery');
if( $images ): ?>
    <ul>
        <?php foreach( $images as $image ): ?>
        <li class="gallery__item">
            <a href="<?php echo esc_url($image['url']); ?>" data-lightbox="roadtrip">
                <img src="<?php echo esc_url($image['sizes']['large']); ?>"
                    alt="<?php echo esc_attr($image['alt']); ?>" />
            </a>
            <p><?php echo esc_html($image['caption']); ?></p>
        </li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>
</section>

<?php endwhile; get_footer(); ?>