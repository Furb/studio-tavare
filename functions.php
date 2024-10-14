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

if (class_exists('WP_Customize_Control')) {
    class Tavare_Customize_WYSIWYG_Control extends WP_Customize_Control {
        public $type = 'wysiwyg';
        
        public function render_content() {
            // Settings for the WYSIWYG editor
            $settings = array(
                'textarea_name' => $this->id,
                'media_buttons' => true, // Show the media button for uploading images
                'textarea_rows' => 10,    // Set the height of the editor
            );
            ?>
            <label>
                <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
                <?php wp_editor($this->value(), $this->id, $settings); ?>
            </label>
            <?php
        }
    }
}

function tavare_customize_register($wp_customize) {
    
    // Add a section for the Address
    $wp_customize->add_section('address_section', array(
        'title'    => __('Adresseinnstillinger', 'tavare'), // Translated: Address Settings
        'priority' => 30,
    ));

    // Add a setting for the Title
    $wp_customize->add_setting('address_title_setting', array(
        'default'           => 'Studio Tavare AS', // Default title
        'sanitize_callback' => 'sanitize_text_field', // Sanitize the title input
    ));

    // Add the control for Title
    $wp_customize->add_control('address_title_setting', array(
        'label'    => __('Tittel', 'tavare'), // Translated: Title
        'section'  => 'address_section',
        'settings' => 'address_title_setting',
        'type'     => 'text', // Input field for the title
    ));

    // Add a setting for the Address WYSIWYG field
    $wp_customize->add_setting('address_content_setting', array(
        'default'           => '',
        'sanitize_callback' => 'wp_kses_post', // Allows basic HTML like <p>, <br>, etc.
    ));

    // Add the WYSIWYG editor control for Address
    $wp_customize->add_control(new Tavare_Customize_WYSIWYG_Control($wp_customize, 'address_content_setting', array(
        'label'    => __('Skriv inn adresseinnhold', 'tavare'), // Translated: Enter Address Content
        'section'  => 'address_section',
        'settings' => 'address_content_setting',
    )));
}

add_action('customize_register', 'tavare_customize_register');

