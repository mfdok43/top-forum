<?php
add_action ('wp_enqueue_scripts','top_forum_styles');
add_action ('wp_enqueue_scripts','top_forum_scripts');


function top_forum_styles () {
      wp_enqueue_style ('top-forum-style', get_stylesheet_uri() );
    wp_enqueue_style ('slider-style', get_template_directory_uri() . '/assets/styles/slider.css' );
    wp_enqueue_style ('modal-style', get_template_directory_uri() . '/assets/styles/modal.css' );
   wp_enqueue_style ('animate-style', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
}



function top_forum_scripts () {

    wp_enqueue_script('slider-script', get_template_directory_uri() . '/assets/js/slider.js', array(), null, true);
    wp_enqueue_script('sub-menu-script', get_template_directory_uri() . '/assets/js/sub-menu.js', array(), null, true);
    wp_enqueue_script('modal-script', get_template_directory_uri() . '/assets/js/modal.js', array(), null, true);
    wp_enqueue_script('burger-script', get_template_directory_uri() . '/assets/js/burger.js', array(), null, true);
    wp_deregister_script('jquery');
    wp_register_script('jquery','https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js');
    wp_enqueue_script('jquery');
}

    add_theme_support( 'custom-logo' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'menus' );
    add_filter ('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3);


    function filter_nav_menu_link_attributes ($atts, $item, $args) {
        if ($args->menu === 'Main') {
            $atts['class'] = 'header__nav-item';

            if ($item->current) {
                $atts['class'] .= ' header__nav-item-active';
            }
        };

        return $atts;

    };




