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
Register Sidebar widget
========================================================================== */

function tavare_widgets_init() {

   
    register_sidebar(
        array(
            'name'          => 'Adresse', 
            'id'            => 'adresse', 
            'description'   => 'Adresse widget',
            'before_title'  => '',
            'after_title'   => '',
            'before_widget' => '',
            'after_widget'  => '',
        )
    );
}

add_action('widgets_init', 'tavare_widgets_init');


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




/* ==========================================================================
Add Address Customizer Setting
========================================================================== */

function tavare_customize_register($wp_customize) {
    
    // Add a section in the customizer for the address
    $wp_customize->add_section('address_section', array(
        'title'      => __('Address Settings', 'tavare'),
        'priority'   => 30,
    ));

    // Add the setting for the address field (with sanitization)
    $wp_customize->add_setting('address_setting', array(
        'default'           => '',
        'sanitize_callback' => 'wp_kses_post', // Allows basic HTML like <p>, <br>, etc.
    ));

    // Add the control (input field) for the address
    $wp_customize->add_control('address_setting', array(
        'label'    => __('Enter Address', 'tavare'),
        'section'  => 'address_section',
        'settings' => 'address_setting',
        'type'     => 'textarea', // This will create a textarea in the customizer
    ));
}

add_action('customize_register', 'tavare_customize_register');

