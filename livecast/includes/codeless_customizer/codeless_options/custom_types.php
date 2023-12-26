<?php

Kirki::add_panel('cl_custom_types', array(
    'priority' => 20,
    'type' => '',
    'title' => esc_html__('Custom Types', 'livecast'),
    'tooltip' => esc_html__('All Custom Types Options', 'livecast')
));


Kirki::add_section('cl_custom_portfolio', array(
    'title' => esc_html__('Portfolio', 'livecast'),
    'description' => esc_html__('All Portfolio Page and single options', 'livecast'),
    'panel' => 'cl_custom_types',
    'type' => '',
    'priority' => 160,
    'capability' => 'edit_theme_options'
));

Kirki::add_section('cl_custom_staff', array(
    'title' => esc_html__('Staff', 'livecast'),
    'description' => esc_html__('All Staff (Members) options', 'livecast'),
    'panel' => 'cl_custom_types',
    'type' => '',
    'priority' => 160,
    'capability' => 'edit_theme_options'
));

Kirki::add_section('cl_custom_testimonial', array(
    'title' => esc_html__('Testimonial', 'livecast'),
    'description' => esc_html__('All Testimonial options', 'livecast'),
    'panel' => 'cl_custom_types',
    'type' => '',
    'priority' => 160,
    'capability' => 'edit_theme_options'
));


Kirki::add_field('cl_livecast', array(
    
    'settings' => 'portfolio_slug',
    'label' => esc_html__('Portfolio Slug', 'livecast'),
    'tooltip' => esc_html__('Used as prefix for portfolio items links', 'livecast'),
    'section' => 'cl_custom_portfolio',
    'type' => 'text',
    'default' => 'portfolio',
    'transport' => 'postMessage'
    
));

Kirki::add_field('cl_livecast', array(
    
    'settings' => 'portfolio_cat_slug',
    'label' => esc_html__('Portfolio Categories Slug', 'livecast'),
    'tooltip' => esc_html__('Used as prefix for portfolio categories links', 'livecast'),
    'section' => 'cl_custom_portfolio',
    'type' => 'text',
    'default' => 'portfolio_entries',
    'transport' => 'postMessage'
    
));

Kirki::add_field('cl_livecast', array(
    'settings' => 'single_portfolio_navigation',
    'label' => esc_html__('Single Portfolio Nav ', 'livecast'),
    'tooltip' => esc_html__('Turn On / Off Portfolio Navigation functionalities', 'livecast'),
    'section' => 'cl_custom_portfolio',
    'type' => 'switch',
    'priority' => 10,
    'default' => 1,
    'choices' => array(
        1 => esc_attr__('Enable', 'livecast'),
        0 => esc_attr__('Disable', 'livecast')
    )
));

?>