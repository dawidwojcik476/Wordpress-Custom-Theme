<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/dist/images/favicon_b.png" />

    <?php wp_enqueue_script("jquery"); ?>

    <?php wp_head(); ?>
    
</head>
<div class="app-container">

<header class="header">

<div class="header__container">
    <div class="header__logo">
                    <a class="header__logo-link" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                    <img class="header__logo-image" src="<?php echo get_template_directory_uri(); ?>/public/images/logo.png" alt="Logo"/>
                    </a>

                    </div>
                    <nav class="header__menu">
                            <?php    wp_nav_menu([
                              'theme_location'    => 'primary-menu',
                              'menu_id'            => 'primary-menu',
                              'container_class'   => 'header__menu-list',
                              'container_id'      => '',
                              'menu_class'        => 'header__menu-ul',
        ]); ?>
    
                        <div class="header__ham">
                            <div class="header__ham-menubtn"></div>
                        </div>
    </nav>
    </div>

            </header>
            
          

        