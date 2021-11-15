<?php
function mytheme_register_nav_menu(){
        register_nav_menus( array(
            'primary-menu' => __( 'Primary Menu', 'text_domain' ),
            'footer-menu'  => __( 'Footer Menu', 'text_domain' ),
        ) );
    }
add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );

function theme_scripts() {
    wp_enqueue_style( 'scss', get_theme_file_uri( '/public/css/app.css' ), array(), file_exists( get_theme_file_path('/public/css/app.css') ) ? filemtime( get_theme_file_path('/public/css/app.css') ) : '0.0' );
     wp_enqueue_style( 'googlefonts', get_theme_file_uri( 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' ), array(), file_exists( get_theme_file_path('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap') ) ? filemtime( get_theme_file_path('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap') ) : '0.0' );
    wp_enqueue_script( 'js', get_theme_file_uri( '/public/js/app.js' ), array(), file_exists( get_theme_file_path('/public/js/app.js') ) ? filemtime( get_theme_file_path('/public/js/app.js') ) : '0.0', false );

}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );