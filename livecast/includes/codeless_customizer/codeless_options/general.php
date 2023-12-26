<?php

Kirki::add_panel('cl_general', array(
    'priority' => 10,
    'type' => '',
    'title' => esc_html__('General', 'livecast'),
    'tooltip' => esc_html__('All General Options of theme', 'livecast')
));

/* General */
Kirki::add_section('cl_general_options', array(
    'title' => esc_html__('Site Options', 'livecast'),
    'description' => esc_html__('Some options about responsive, favicon and other theme features.', 'livecast'),
    'panel' => 'cl_general',
    'type' => '',
    'priority' => 160,
    'capability' => 'edit_theme_options'
));


Kirki::add_field('cl_livecast', array(
    'settings' => 'responsive_layout',
    'label' => esc_html__('Responsive Layout', 'livecast'),
    'tooltip' => esc_html__('Turn On / Off Responsive functionalities', 'livecast'),
    'section' => 'cl_general_options',
    'type' => 'switch',
    'priority' => 10,
    'default' => 1,
    'transport' => 'postMessage',
    'choices' => array(
        1 => esc_attr__('Enable', 'livecast'),
        0 => esc_attr__('Disable', 'livecast')
    )
));

Kirki::add_field('cl_livecast', array(
    'settings' => 'nicescroll',
    'label' => esc_html__('Smooth scroll', 'livecast'),
    'tooltip' => esc_html__('Active smoothscroll over pages to make scrolling more fluid to create better user experience', 'livecast'),
    'section' => 'cl_general_options',
    'type' => 'switch',
    'priority' => 10,
    'default' => 0,
    'transport' => 'postMessage',
    'choices' => array(
        1 => esc_attr__('Enable', 'livecast'),
        0 => esc_attr__('Disable', 'livecast')
    )
));


Kirki::add_field('cl_livecast', array(
    'settings' => 'jpeg_quality',
    'label' => esc_html__('JPEG Quality', 'livecast'),
    'section' => 'cl_general_transitions',
    'type' => 'slider',
    'priority' => 10,
    'default' => 82,
    'choices' => array(
        'min' => '0',
        'max' => '100',
        'step' => '1'
    )
    
));



Kirki::add_field('cl_livecast', array(
    'settings' => 'back_to_top',
    'label' => esc_html__('Back To Top', 'livecast'),
    'description' => esc_html__('Enable this option to show the "Back to Top" button on site', 'livecast'),
    'section' => 'cl_general_options',
    'type' => 'switch',
    'priority' => 10,
    'default' => 0,
    'choices' => array(
        1 => esc_attr__('Show', 'livecast'),
        0 => esc_attr__('Hide', 'livecast')
    ),
    'transport' => 'postMessage'
));

Kirki::add_field('cl_livecast', array(
    'settings' => 'mouse_cursor',
    'label' => esc_html__('Custom Mouse Cursor', 'livecast'),
    'description' => esc_html__('Enable this option to activate animated and modern mouse cursor', 'livecast'),
    'section' => 'cl_general_options',
    'type' => 'switch',
    'priority' => 10,
    'default' => 0,
    'choices' => array(
        1 => esc_attr__('Show', 'livecast'),
        0 => esc_attr__('Hide', 'livecast')
    ),
    'transport' => 'postMessage'
));

Kirki::add_field('cl_livecast', array(
    'settings' => 'preload_effect',
    'label' => esc_html__('Preloader Effect', 'livecast'),
    'description' => esc_html__('Enable this option to activate preloader effect on page loading', 'livecast'),
    'section' => 'cl_general_options',
    'type' => 'switch',
    'priority' => 10,
    'default' => 0,
    'choices' => array(
        1 => esc_attr__('Show', 'livecast'),
        0 => esc_attr__('Hide', 'livecast')
    ),
    'transport' => 'postMessage'
));


Kirki::add_field('cl_livecast', array(
    'type' => 'textarea',
    'settings' => '404_error_message',
    'label' => esc_attr__('404 Error Message', 'livecast'),
    'section' => 'cl_general_options',
    'default' => esc_html__('It looks like nothing was found at this location. Maybe try a search?', 'livecast'),
    'priority' => 10,
    
    'transport' => 'postMessage'
));


/* Custom Codes */
Kirki::add_section('cl_general_custom_codes', array(
    'title' => esc_html__('Custom Codes', 'livecast'),
    'description' => esc_html__('HTML, JS, CSS custom codes. Add Google Analytics or anything else.', 'livecast'),
    'panel' => 'cl_general',
    'priority' => 160,
    'type' => '',
    'capability' => 'edit_theme_options'
));


Kirki::add_field('cl_livecast', array(
    'type' => 'code',
    'settings' => 'custom_css',
    'label' => esc_html__('Custom CSS', 'livecast'),
    'section' => 'cl_general_custom_codes',
    'default' => '',
    'priority' => 10,
    'choices' => array(
        'language' => 'css',
        'theme' => 'monokai',
        'height' => 250
    ),
    'transport' => 'postMessage'
));

Kirki::add_field('cl_livecast', array(
    'type' => 'code',
    'settings' => 'custom_html',
    'label' => esc_html__('Custom HTML', 'livecast'),
    'section' => 'cl_general_custom_codes',
    'default' => '',
    'priority' => 10,
    'choices' => array(
        'language' => 'html',
        'theme' => 'monokai',
        'height' => 250
    ),
    'transport' => 'postMessage'
));


/* Custom Codes */


Kirki::add_section('cl_general_insta', array(
    'title' => esc_html__('Instagram', 'livecast'),
    'description' => esc_html__('Instagram Setup', 'livecast'),
    'panel' => 'cl_general',
    'priority' => 160,
    'type' => '',
    'capability' => 'edit_theme_options'
));

Kirki::add_field('cl_livecast', array(
    'settings' => 'instagram_feed_token',
    'label' => esc_html__('Instagram Feed Token', 'livecast'),
    'tooltip' => esc_html__('', 'livecast'),
    'section' => 'cl_general_insta',
    'type' => 'text',
    'priority' => 10,
    'default' => '',
    'choices' => array(
        1 => esc_attr__('On', 'livecast'),
        0 => esc_attr__('Off', 'livecast')
    ),
    'transport' => 'postMessage'
    
));

Kirki::add_field('cl_livecast', array(
    'settings' => 'instagram_feed_userid',
    'label' => esc_html__('Instagram Feed User Id', 'livecast'),
    'tooltip' => esc_html__('', 'livecast'),
    'section' => 'cl_general_insta',
    'type' => 'text',
    'priority' => 10,
    'default' => '',
    'choices' => array(
        1 => esc_attr__('On', 'livecast'),
        0 => esc_attr__('Off', 'livecast')
    ),
    'transport' => 'postMessage'
    
));

?>