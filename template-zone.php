<?php
/*
Template Name: Szablon Strefa Inwestorska
Template Post Type: post, page, event
*/


get_header();

?>
<div class="main-background page">
    <h1><?php echo get_the_title();?></h1>
    <?php if( have_rows('header_options') ): ?>
 <?php while( have_rows('header_options') ): the_row(); ?>
 <?php if( get_sub_field('header_options_background')): ?>
    <img src="<?php echo get_sub_field('header_options_background')?>" alt="">
    <?php endif; ?>
    <?php endwhile; ?>
                     <?php endif; ?>
</div>

<section class="zone" style="margin-top:290px">
<?php if( have_rows('inv_coop') ): ?>
 <?php while( have_rows('inv_coop') ): the_row(); ?>
    <section class="zone__coop">
        <div class="zone__coop-header">
            <h1><?php echo get_sub_field('inv_coop_header')?></h1>
            <p><?php echo get_sub_field('inv_coop_content_first')?></p>
        </div>
        <div class="zone__coop-investors">
            <p><?php echo get_sub_field('inv_coop_content_nd')?></p>
            <div class="zone__coop-investorslist">
                <ul>
                <?php if( have_rows('inv_coop_logos') ): ?>
                <?php while( have_rows('inv_coop_logos') ): the_row(); ?>
                    <li>
                        <img src="<?php echo get_sub_field('inv_coop_logo')?>"
                            alt="Logo Klienta">
                    </li>
                    <?php endwhile; ?>
                     <?php endif; ?>
                </ul>
            </div>
            <p><?php echo get_sub_field('inv_coop_content_first')?></p>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </section>
    <?php if( have_rows('inv_realization') ): ?>
 <?php while( have_rows('inv_realization') ): the_row(); ?>
    <section class="zone__realization"> 
    <div class="zone__realization-header">
            <h1><?php echo get_sub_field('inv_realization_header')?></h1> 
            <p><?php echo get_sub_field('inv_realization_content')?></p>
        </div>

        <div class="zone__realization-track">
            <ul>
            <?php if( have_rows('inv_track') ): ?>
 <?php while( have_rows('inv_track') ): the_row(); ?>
                <li>
                    <img src=" <?php echo get_sub_field('inv_track_icon')?>" alt="">
                    <div class="zone__realization-track-content">
                        <h4>
                        <?php echo get_sub_field('inv_track_title')?>
                        </h4>
                        <p>
                        <?php echo get_sub_field('inv_track_content')?>
                        </p>
                    </div>
                </li>
                <?php endwhile; ?>
        <?php endif; ?>
            </ul>
        </div>
    </section>
    <?php endwhile; ?>
        <?php endif; ?>
</section>
<?php 

the_content();

get_footer();