<?php 


function hatemyphone_files() {
    wp_register_script( 'jQuery', '//code.jquery.com/jquery-3.4.1.min.js', null, null, false );
    wp_enqueue_script('waypoint', get_theme_file_uri('/js/jquery.waypoints.min.js'), array('jQuery'), '1.0', false); 
    wp_enqueue_script('main-js', get_theme_file_uri('/js/script.js'), array('jQuery', 'waypoint') , microtime(), true);
    
    
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Josefin+Sans:300,400,400i,600,700&display=swap');
    wp_enqueue_style('roboto-custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap');
    wp_enqueue_style('font-awesome','//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css');
    wp_enqueue_style('hatemyphone_main_styles', get_stylesheet_uri(), NULL, microtime());
}

add_action('wp_enqueue_scripts', 'hatemyphone_files');


/////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////


function hatemyphone_features(){ 
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails'); //featured images
}

add_action('after_setup_theme', 'hatemyphone_features');


//CUSTOM POST TYPES - should be in mu-plugins
/////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////

function hatemyphone_post_types(){

    //HEADER
    register_post_type('header', array(
        'supports' => array('title'),
        'public' => false,
        'show_ui' => true,
        'labels' => array(
            'name' => 'Header',
            'add_new_item' => 'Add New Title',
            'edit_item' => 'Edit Title'
        ),
        'menu_icon' => 'dashicons-star-filled'
    ));

    //FEATURES 
    register_post_type('features', array(
        'supports' => array('title'),
        'public' => false,
        'show_ui' => true,
        'labels' => array(
            'name' => 'Features',
            'add_new_item' => 'Add New Feature',
            'edit_item' => 'Edit Feature'
        ),
        'menu_icon' => 'dashicons-star-filled'
    ));

    //RECYCLING
    register_post_type('recycling', array(
        'supports' => array('title'),
        'public' => false,
        'show_ui' => true,
        'labels' => array(
            'name' => 'Recycling',
            'add_new_item' => 'Add New Item',
            'edit_item' => 'Edit Item'
        ),
        'menu_icon' => 'dashicons-star-filled'
    ));

    //CHOOSE US
    register_post_type('choose', array(
        'supports' => array('title', 'thumbnail'),
        'public' => false,
        'show_ui' => true,
        'labels' => array(
            'name' => 'Choose Us',
            'add_new_item' => 'Add New Feature',
            'edit_item' => 'Edit Feature'
        ),
        'menu_icon' => 'dashicons-star-filled'
    ));

    //PROCESS
    register_post_type('process', array(
        'supports' => array('title'),
        'public' => false,
        'show_ui' => true,
        'labels' => array(
            'name' => 'Process',
            'add_new_item' => 'Add New Process',
            'edit_item' => 'Edit Process'
        ),
        'menu_icon' => 'dashicons-star-filled'
    ));


    //SERVICES
    register_post_type('services', array(
        'supports' => array('title', 'thumbnail'),
        'public' => false,
        'show_ui' => true,
        'labels' => array(
            'name' => 'Services',
            'add_new_item' => 'Add New Service',
            'edit_item' => 'Edit Service'
        ),
        'menu_icon' => 'dashicons-star-filled'
    ));


    //ABOUT US
    register_post_type('about', array(
        'supports' => array('title', 'thumbnail'),
        'public' => false,
        'show_ui' => true,
        'labels' => array(
            'name' => 'About',
            'add_new_item' => 'Add New About',
            'edit_item' => 'Edit About'
        ),
        'menu_icon' => 'dashicons-star-filled'
    ));


    //TEAM
    register_post_type('team', array(
        'supports' => array('title', 'thumbnail'),
        'public' => false,
        'show_ui' => true,
        'labels' => array(
            'name' => 'Team',
            'add_new_item' => 'Add New Member',
            'edit_item' => 'Edit Member'
        ),
        'menu_icon' => 'dashicons-star-filled'
    ));


    //CONTACT
    register_post_type('contact', array(
        'supports' => array('title', 'editor', 'thumbnail'),
        'public' => false,
        'show_ui' => true,
        'labels' => array(
            'name' => 'Contact',
            'add_new_item' => 'Add New Contact',
            'edit_item' => 'Edit Contact'
        ),
        'menu_icon' => 'dashicons-star-filled'
    ));

    //NEWSLETTER
    register_post_type('newsletter', array(
        'supports' => array('title', 'editor', 'thumbnail'),
        'public' => false,
        'show_ui' => true,
        'labels' => array(
            'name' => 'Newsletter',
            'add_new_item' => 'Add New Newsletter',
            'edit_item' => 'Edit Newsletter'
        ),
        'menu_icon' => 'dashicons-star-filled'
    ));

    //FAQ PAGE
    register_post_type('faq', array(
        'supports' => array('title', 'thumbnail'),
        'public' => false,
        'show_ui' => true,
        'labels' => array(
            'name' => 'Faq',
            'add_new_item' => 'Add New Faq',
            'edit_item' => 'Edit Faq'
        ),
        'menu_icon' => 'dashicons-star-filled'
    ));
}

add_action('init', 'hatemyphone_post_types');




