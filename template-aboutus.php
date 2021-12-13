<?php

/*
Template Name: Szablon O firmie
Template Post Type: post, page, event
*/

get_header();

?>
<div class="main-background page">
<h1><?php echo get_the_title();?></h1>
<?php if( have_rows('header_options') ): ?>
 <?php while( have_rows('header_options') ): the_row(); ?>
 <?php if(get_sub_field('header_options_background')): ;?>
    <img src="<?php echo get_sub_field('header_options_background')?>" alt="">
    <?php  endif; ?>
    <?php endwhile; ?>
                     <?php endif; ?>
</div>
<?php ?>

<div class="page-type aboutus">

<section class="aboutustemp">
    <div class="aboutustemp__postschoice" data-link="<?php $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; 
                   echo $actual_link;
                  ?>">
        <div class="aboutustemp__postschoice-item profile active" >
        <?php if (ICL_LANGUAGE_CODE=='en' ) : ?>
                <p>Business profile</p>
                <?php else:  ?>
                    <p>Profil działalności</p>
                    <?php endif; ?>
           
       
        </div>
        <div class="aboutustemp__postschoice-item history">
        <?php if (ICL_LANGUAGE_CODE=='en' ) : ?>
                <p>History</p>
                <?php else:  ?>
                    <p>Historia</p>
                    <?php endif; ?>
        </div>
        <div class="aboutustemp__postschoice-item invclients">
    
            <?php if (ICL_LANGUAGE_CODE=='en' ) : ?>
                <p>Clients</p>
                <?php else:  ?>
                    <p>Klienci</p>
                    <?php endif; ?>
        </div>
    </div>
</section>

<section class="invprofile active">
    <div class="invprofile__header">
<a href="<?php echo the_field('aboutus_header_url') ?>">
        <h2><?php echo the_field('aboutus_header') ?>  </h2></a>
        <p><?php echo the_field('aboutus_header_content') ?>  </p>
    </div>
    <div class="invprofile__content">
        <?php  the_content(); ?>

    </div>

    <div class="invprofile__addcontent">

  
    <?php if( have_rows('aboutus_complex') ): ?>
        <?php while( have_rows('aboutus_complex') ): the_row(); ?> 

        <div class="invprofile__addcontent-header">
            <h5>
            <?php echo get_sub_field('aboutus_complex_header') ?>
            </h5>
            <p>
            <?php echo get_sub_field('aboutus_complex_content') ?>
            </p> 
        </div>
        <div class="invprofile__addcontent-specialistlist">
            <ul>
            <?php if( have_rows('aboutus_complex_icons') ): ?>
        <?php while( have_rows('aboutus_complex_icons') ): the_row(); ?> 
                <li>
                    <img src=" <?php echo get_sub_field('aboutus_complex_icon') ?>" 
                        alt="">
                    <p><?php echo get_sub_field('aboutus_complex_icon_title') ?></p>
                </li>
                <?php endwhile; ?>
        <?php endif; ?>
            </ul>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>

</section>

<section class="history">
<div class="history__header">
<a href="<?php echo the_field('aboutus_history_header_url') ?>">
        <h2><?php echo the_field('aboutus_history_header') ?>  </h2></a>
        
    </div>

     
        <div class="history__list">
        <ul>
        <?php if( have_rows('aboutus_history') ): ?>
        <?php while( have_rows('aboutus_history') ): the_row(); ?>
            <li>
                <h4>
                <?php echo get_sub_field('history_point_title') ?>
                </h4>
                <p>
                <?php echo get_sub_field('history_point_content') ?>
                </p>
            </li>
            <?php endwhile; ?>
        <?php endif; ?>
        </ul>
    </div>
      
   
  
</section>

<section class="invclients">
 

    <?php if( have_rows('aboutus_clients') ): ?>
        <?php while( have_rows('aboutus_clients') ): the_row(); ?>
        <div class="invclients__header">
        <h4> <?php echo get_sub_field('aboutus_clients_title') ?></h4>  
        <p><?php echo get_sub_field('aboutus_clients_content') ?></p>
    </div>
     
        <div class="clients__logos">
        <?php if( have_rows('aboutus_clients_logos') ): ?>
        <?php while( have_rows('aboutus_clients_logos') ): the_row(); ?>
        <div class="clients__logos-item">
            <img src="<?php echo get_sub_field('aboutus_clients_logo') ?>" alt="Logo Klienta">
        </div>
        <?php endwhile; ?>
        <?php endif; ?>

    </div>
        <?php endwhile; ?>
        <?php endif; ?>
 
</section>
</div> 
<?php

get_footer();