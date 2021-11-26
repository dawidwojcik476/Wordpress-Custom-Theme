<?php
/*
Template Name: Szablon Aktualności
Template Post Type: post, page, event
*/

get_header();?>

<div class="main-background newsback">
<h1><?php echo get_the_title();?></h1>
    <img src="<?php echo get_template_directory_uri(); ?>/public/images/inv-background.png" alt="">
</div>
<div class="news-template__box">
                <p><?php the_field('small_top_header', $slide) ?></p>
                <h3><?php echo $slide->post_title; ?></h3>
                <div class="more">
                    <a href="<?php the_field('slider_url', $slide); ?>">
                        Zobacz <img class="main-banner__slider-arrow"
                            src="<?php echo get_template_directory_uri(); ?>/public/images/ArrowCircleRight-Accent.png"
                            alt=""></a>
                </div>

            </div>
<section class="news-template">

    <div class="news-template__postschoice">
        <div class="news-template__postschoice-item active">
            <p>Najnowsze wydarzenia</p>
        </div>
        <div class="news-template__postschoice-item">
            <p>Informacje prasowe</p>
        </div>
    </div>
    <div class="news-template__posts">
    <?php $args = array(
'post_type'      => 'post',
'post_status' => 'publish',
'orderby' => 'date',
            'order'   => 'DESC',
            'suppress_filters' => true,
'hide_empty'     => 1,
'depth'          => 1,
'posts_per_page' => -1,
'category_name' => 'aktualnosci',
); 

$posts = get_posts($args);

foreach ($posts as $post) : ?>




    <div class="news-template__posts-item">
        <div class="news-template__posts-image">
            <img src="<?php echo get_template_directory_uri(); ?>/public/images/Aleksandria.jpg" alt="">
        </div>
        <div class="news-template__posts-content">
            <p class="news-template__posts-date">
                <?php echo get_the_date( 'd / m / Y', $post->ID ) ?>
            </p>
            <h4 class="news-template__posts-header"><?php echo $post->post_title; ?></h4>
            <p class="news-template__posts-textarea"><?php echo $post->post_excerpt; ?> </p>

            <div class="news-template__posts-button">
                <a href="<?php echo get_permalink($post->ID) ?>">Czytaj dalej <img class="main-banner__slider-arrow"
                        src="<?php echo get_template_directory_uri(); ?>/public/images/ArrowCircleRight-Accent.png"
                        alt=""></a>
            </div>
        </div>
    </div>


    <?php endforeach; ?>
    </div>
</section>

<?php get_footer(); ?>