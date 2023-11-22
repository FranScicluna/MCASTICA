<?php 

    function mcastica_assets(){
    wp_enqueue_style(
        'mcastica_stylesheet',
        get_template_directory_uri().'/style.css',
        array(),
        '1.0.0',
        'all'
    );

    wp_enqueue_style(
        'mcastica_wp_stylesheet',
        get_template_directory_uri().'/assets/css/wpcore.css',
        array(),
        '1.0.0',
        'all'
    );

    wp_enqueue_style(
        'mcastica_bootstrap_stylesheet',
        get_template_directory_uri().'/assets/css/bootstrap.css',
        array(),
        '1.0.0',
        'all'
    );

    wp_enqueue_style(
        'mcastica_mystyle_stylesheet',
        get_template_directory_uri().'/assets/css/mystyle.css',
        array(),
        '1.0.0',
        'all'
    );
    }


    add_action('wp_enqueue_scripts','mcastica_assets')

?>

