<?php
function mermaid_register_nav_menu(){
        register_nav_menus( array(
            'primary-menu' => __( 'Górne Menu', 'text_domain' ),
            'footer-menu-indus'  => __( 'Menu Stopki - Firma', 'text_domain' ),
            'footer-menu-projects'  => __( 'Menu Stopki - Projekty', 'text_domain' ),
        ) );
    }
add_action( 'after_setup_theme', 'mermaid_register_nav_menu', 0 );

function my_acf_init() {
	
	acf_update_setting('google_api_key', 'AIzaSyBjfZp0nWVTtNjQ_PG-sQEWkmlqfXSf7hM');
}

add_action('acf/init', 'my_acf_init');

function theme_scripts() {
    wp_enqueue_style( 'slick-style', get_theme_file_uri( '/bower_components/slick-carousel/slick/slick.css' ), array(), file_exists( get_theme_file_path('/bower_components/slick-carousel/slick/slick.css') ) ? filemtime( get_theme_file_path('/bower_components/slick-carousel/slick/slick.css') ) : '0.0' );
    wp_enqueue_style( 'slick-theme-style', get_theme_file_uri( '/bower_components/slick-carousel/slick/slick-theme.css' ), array(), file_exists( get_theme_file_path('/bower_components/slick-carousel/slick/slick-theme.css') ) ? filemtime( get_theme_file_path('/bower_components/slick-carousel/slick/slick-theme.css') ) : '0.0' );
	wp_enqueue_style( 'lightbox-style', get_theme_file_uri( '/bower_components/lightbox2/dist/css/lightbox.min.css' ), array(), file_exists( get_theme_file_path('/bower_components/lightbox2/dist/css/lightbox.min.css') ) ? filemtime( get_theme_file_path('/bower_components/lightbox2/dist/css/lightbox.min.css') ) : '0.0' );
    wp_deregister_script('jquery');
    wp_deregister_script('google-recaptcha');
    wp_enqueue_script( 'jquery', get_theme_file_uri( '/bower_components/jquery/dist/jquery.min.js' ), array(), file_exists( get_theme_file_path('/bower_components/jquery/dist/jquery.min.js') ) ? filemtime( get_theme_file_path('/bower_components/jquery/dist/jquery.min.js') ) : '0.0', false );

    wp_enqueue_script( 'slick', get_theme_file_uri( '/bower_components/slick-carousel/slick/slick.min.js' ), array(), file_exists( get_theme_file_path('/bower_components/slick-carousel/slick/slick.min.js') ) ? filemtime( get_theme_file_path('/bower_components/slick-carousel/slick/slick.min.js') ) : '0.0', false );
	wp_enqueue_script( 'lightbox', get_theme_file_uri( '/bower_components/lightbox2/dist/js/lightbox.min.js' ), array(), file_exists( get_theme_file_path('/bower_components/lightbox2/dist/js/lightbox.min.js') ) ? filemtime( get_theme_file_path('/bower_components/lightbox2/dist/js/lightbox.min.js') ) : '0.0', true );

    wp_enqueue_style( 'scss', get_theme_file_uri( '/public/css/app.css' ), array(), file_exists( get_theme_file_path('/public/css/app.css') ) ? filemtime( get_theme_file_path('/public/css/app.css') ) : '0.0' );

     wp_enqueue_style( 'twd-googlefonts', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', array(), null );
     
     wp_enqueue_style( 'slickslidercss', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), null );

     wp_enqueue_script( 'slicksliderjs', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array(), '1.0.0', true);

     wp_enqueue_script( 'googlemap', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBjfZp0nWVTtNjQ_PG-sQEWkmlqfXSf7hM', NULL, '1.0.0', true);
    
     wp_enqueue_script( 'js', get_theme_file_uri( '/public/js/app.js' ), array('jquery'), '0.0.0', false );


     wp_enqueue_script( 'samplejs', get_theme_file_uri( '/public/js/header.js' ), array(), file_exists( get_theme_file_path('/public/js/header.js') ) ? filemtime( get_theme_file_path('/public/js/header.js') ) : '0.0', true );
     
     wp_enqueue_script( 'googlemapjs', get_theme_file_uri( '/public/js/googlemap.js' ), array(), file_exists( get_theme_file_path('/public/js/googlemap.js') ) ? filemtime( get_theme_file_path('/public/js/googlemap.js') ) : '0.0', true );
     wp_enqueue_script('popper_js', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', false, '', true );
     wp_enqueue_script('isotop', '//cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js', array('jquery'), false, true);

}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );



function mermaid_post_type() {
    

    register_post_type( 'slider', array(
        'label'               => __( 'Slajdy', 'textdomain' ),
        'public'              => true,
        'exclude_from_search' => false,
        'show_in_nav_menus'   => false,
        'menu_icon'           => 'dashicons-images-alt',
        'supports'            => array( 'title', 'thumbnail', 'page-attributes' ),
        'rewrite'             => [
            'slug' => 'slider'
        ],
        'has_archive'           => false,
        'hierarchical'          => false,
        'publicly_queryable'  => true,
        'menu_position' => 20,
        
    ));


        $labels = array(
            'name'                  => 'Inwestycje',
            'singular_name'         => 'Inwestycja',
            'menu_name'             => 'Inwestycje',
            'name_admin_bar'        => 'Inwestycja',
            'archives'              => 'Archiwum Inwestycji',
            'attributes'            => 'Atrybuty Inwestycji',
            'parent_item_colon'     => 'Parent Item:',
            'all_items'             => 'Wszystkie Inwestycje',
            'add_new_item'          => 'Nowa Inwestycja',
            'add_new'               => 'Nowa Inwestycja',
            'new_item'              => 'Nowa Inwestycja',
            'edit_item'             => 'Edytuj Inwestycje',
            'update_item'           => 'Edytuj Inwestycje',
        );
        $args = array(
            'label'                 => 'Inwestycje',
            'description'           => 'Post Type Description',
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'excert' ),
            'taxonomies'            => array(),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'menu_icon'           => 'dashicons-building',
            'capability_type'       => 'post',
        );
        register_post_type( 'inwestycje', $args );

        register_post_type( 'aktualnosci', array(
            'label'               => __( 'Aktualności', 'textdomain' ),
            'public'              => true,
            'exclude_from_search' => false,
            'show_in_nav_menus'   => false,
            'menu_icon'           => 'dashicons-welcome-widgets-menus',
            'supports'            => array( 'title', 'editor', 'thumbnail', 'custom-fields'  ),
            'rewrite'             => [
                'slug' => 'aktualnosci'
            ],
            'has_archive'           => false,
            'hierarchical'          => false,
            'publicly_queryable'  => true,
            'menu_position' => 20,
            
        ));
        $labels = array(
            'name' => _x( 'Kategorie Aktualnosci', 'taxonomy general name' ),
            'singular_name' => _x( 'Kategorie Aktualności', 'taxonomy singular name' ),
            'search_items' =>  __( 'Szukaj aktualności' ),
            'all_items' => __( 'Wszystkie aktualności' ),
            'parent_item' => __( 'Parent Type' ),
            'parent_item_colon' => __( 'Parent Type:' ),
            'edit_item' => __( 'Edytuj' ), 
            'update_item' => __( 'Edytuj' ),
            'add_new_item' => __( 'Nowa kategoria' ),
            'new_item_name' => __( 'New Type Name' ),
            'menu_name' => __( 'Kategorie Aktualności' ),
          ); 	
         
          register_taxonomy('newscategory',array('aktualnosci'), array(
            'hierarchical' => true,
            'labels' => $labels,
            'show_ui' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite' => array( 'slug' => 'newscategory' ),
            ));
    

}

add_action('init', 'mermaid_post_type');


// Let us create Taxonomy for Custom Post Type
add_action( 'init', 'crunchify_create_deals_custom_taxonomy', 0 );
 
//create a custom taxonomy name it "type" for your posts
function crunchify_create_deals_custom_taxonomy() {
 
  $labels = array(
    'name' => _x( 'Typy inwestycji', 'taxonomy general name' ),
    'singular_name' => _x( 'Inwestycja', 'taxonomy singular name' ),
    'search_items' =>  __( 'Szukaj inwestycji' ),
    'all_items' => __( 'Wszystkie inwestycje' ),
    'parent_item' => __( 'Parent Type' ),
    'parent_item_colon' => __( 'Parent Type:' ),
    'edit_item' => __( 'Edytuj' ), 
    'update_item' => __( 'Edytuj' ),
    'add_new_item' => __( 'Nowa kategoria' ),
    'new_item_name' => __( 'New Type Name' ),
    'menu_name' => __( 'Typy inwestycji' ),
  ); 	
 
  register_taxonomy('types',array('inwestycje'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'type' ),
  ));
}



function theme_prefix_rewrite_flush() {
    flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'theme_prefix_rewrite_flush' );





function my_acf_init_block_types() {

   
    if( function_exists('acf_register_block_type') ) {

      
        acf_register_block_type(array(
            'name'              => 'invprofile',
            'title'             => __('Profile działalności'),
            'description'       => __('Tworzy bloczek profilu działalności'),
            'render_template'   => 'template-parts/blocks/invprofile/invprofile.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'invprofile' ),
        ));
    }
}

add_action('acf/init', 'my_acf_init_block_types');

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Opcje stopki',
		'menu_title'	=> 'Opcje stopki',
		'menu_slug' 	=> 'theme-footer-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

    acf_add_options_page(array(
		'page_title' 	=> 'Opcje motywu',
		'menu_title'	=> 'Opcje motywu',
		'menu_slug' 	=> 'theme-header-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	
	
}