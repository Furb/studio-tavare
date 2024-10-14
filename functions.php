<?php

/* ==========================================================================
Remove adminbar
========================================================================== */

add_filter('show_admin_bar', '__return_false');


/* ==========================================================================
Theme default support
========================================================================== */

if (!function_exists('base_setup')) {
    function base_setup()
    {

        /* post thumbnail support */
        add_theme_support('post-thumbnails');

        /* Menuer */
        register_nav_menus(
            array(
                'main-menu' => __('Main Menu'),
                'mobil_menu' => __('Mobile Menu'),
            )
        );

        
    }
}

add_action('after_setup_theme', 'base_setup');


/* ==========================================================================
Add google fonts
========================================================================== */

function custom_fonts()
{

    wp_enqueue_style('googleFonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet');
}

add_action('wp_enqueue_scripts', 'custom_fonts');


/* ==========================================================================
Link til styles & tailwind & scripts
========================================================================== */

function tavare_scripts()
{

     wp_enqueue_style('tavare-style',  get_stylesheet_uri() . '/style.min.css');
     wp_enqueue_script( 'tavare-js', get_template_directory_uri() . '/js/tavare.js', array(), null, true );
}

add_action('wp_enqueue_scripts', 'tavare_scripts');




