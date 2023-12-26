<?php

Kirki::add_panel('cl_custom_types', array(
    'priority' => 10,
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
    'settings' => 'portfolio_style',
    'label' => esc_html__('Portfolio Style', 'livecast'),
    'tooltip' => esc_html__('Select style of portfolio pages', 'livecast'),
    'section' => 'cl_custom_portfolio',
    'type' => 'select',
    'priority' => 10,
    'default' => 'default',
    'choices' => array(
        'default' => esc_attr__('Default', 'livecast'),
        'alternate' => esc_attr__('Alternate', 'livecast'),
        'minimal' => esc_attr__('Minimal', 'livecast'),
        'timeline' => esc_attr__('Timeline', 'livecast'),
        'grid' => esc_attr__('Grid', 'livecast'),
        'masonry' => esc_attr__('Masonry', 'livecast')
    ),
    'transport' => 'postMessage'
    
));

?>