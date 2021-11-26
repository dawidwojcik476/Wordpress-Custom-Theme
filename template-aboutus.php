<?php

/*
Template Name: Szablon O firmie
Template Post Type: post, page, event
*/

get_header();

?>
<div class="main-background page">
<h1><?php echo get_the_title();?></h1>
    <img src="<?php echo get_template_directory_uri(); ?>/public/images/ofirmieback.png" alt="">
</div>
<?php ?>

<div class="page-type aboutus">

<section class="aboutustemp">
    <div class="aboutustemp__postschoice">
        <div class="aboutustemp__postschoice-item profile active">
            <p>Profił działalności</p>
        </div>
        <div class="aboutustemp__postschoice-item history">
            <p>Historia</p>
        </div>
        <div class="aboutustemp__postschoice-item invclients">
            <p>Klienci</p>
        </div>
    </div>
</section>

<section class="invprofile active">
    <div class="invprofile__header">
        <h2>Profil działalności</h2>
        <p>MERMAID CAPITAL Sp. z o.o. jest firmą działającą na rynku nieruchomości biurowych
            i mieszkaniowych w Warszawie oraz w Łodzi. Przedmiotem naszej działalności jest:</p>
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
        <h2>Historia</h2>
        
    </div>
<?php if( have_rows('aboutus_history') ): ?>
        <?php while( have_rows('aboutus_history') ): the_row(); ?>
     
        <div class="history__list">
        <ul>
            <li>
                <h4>
                <?php echo get_sub_field('history_point_title') ?>
                </h4>
                <p>
                <?php echo get_sub_field('history_point_content') ?>
                </p>
            </li>
        
        </ul>
    </div>
        <?php endwhile; ?>
        <?php endif; ?>
   
  
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