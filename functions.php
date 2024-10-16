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
Add Title and Address Customizer Settings
========================================================================== */

function tavare_customize_register($wp_customize) {
    
    // Add a section for the Address
    $wp_customize->add_section('address_section', array(
        'title'    => __('Adresseinnstillinger', 'tavare'), // Address Settings
        'priority' => 30,
    ));

    // Add a setting for the Title
    $wp_customize->add_setting('address_title_setting', array(
        'default'           => 'Studio Tavare AS',
        'sanitize_callback' => 'sanitize_text_field', // Sanitize title input
    ));

    // Control for Title
    $wp_customize->add_control('address_title_setting', array(
        'label'    => __('Tittel', 'tavare'), // Title
        'section'  => 'address_section',
        'settings' => 'address_title_setting',
        'type'     => 'text',
    ));

    // Add a setting for the Address textarea
    $wp_customize->add_setting('address_content_setting', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_textarea_field', // Sanitize textarea input
    ));

    // Add the textarea control for Address
    $wp_customize->add_control('address_content_setting', array(
        'label'    => __('Adresseinnhold', 'tavare'), // Address Content
        'section'  => 'address_section',
        'settings' => 'address_content_setting',
        'type'     => 'textarea', // Use textarea
    ));
}

add_action('customize_register', 'tavare_customize_register');

// Ensure address content is saved properly
add_action('customize_save_after', 'customize_save_after');

function customize_save_after() {
    if (isset($_POST['address_content_setting'])) {
        // Sanitize and save the content
        $address_content = sanitize_textarea_field($_POST['address_content_setting']);
        set_theme_mod('address_content_setting', $address_content);
    }
}
