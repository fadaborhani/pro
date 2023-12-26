<?php

Kirki::add_section('cl_shop', array(
    'priority' => 10,
    'type' => '',
    'title' => esc_html__('Shop', 'livecast'),
    'tooltip' => esc_html__('All Shop Options', 'livecast')
));


Kirki::add_field('cl_livecast', array(
    'settings' => 'shop_columns',
    'label' => esc_html__('Shop Columns', 'livecast'),
    'tooltip' => esc_html__('Select number of items to display per Row on SHOP Page', 'livecast'),
    'section' => 'cl_shop',
    'type' => 'select',
    'priority' => 10,
    'default' => '3',
    'choices' => array(
        '2' => esc_attr__('2 Columns', 'livecast'),
        '3' => esc_attr__('3 Columns', 'livecast'),
        '4' => esc_attr__('4 Columns', 'livecast'),
        '5' => esc_attr__('5 Columns', 'livecast'),
        '6' => esc_attr__('6 Columns', 'livecast')
    )
));

Kirki::add_field('cl_livecast', array(
    'type' => 'slider',
    'settings' => 'shop_item_distance',
    'label' => esc_html__('Distance between items', 'livecast'),
    'default' => '15',
    'choices' => array(
        'min' => '0',
        'max' => '30',
        'step' => '1'
    ),
    'inline_control' => true,
    'section' => 'cl_shop',
    'transport' => 'postMessage'
));

Kirki::add_field('cl_livecast', array(
    'settings' => 'shop_animation',
    'label' => esc_html__('Animation Type', 'livecast'),
    
    'section' => 'cl_shop',
    'type' => 'select',
    'priority' => 10,
    'default' => 'bottom-t-top',
    'choices' => array(
        'none' => esc_html__('None', 'livecast'),
        'top-t-bottom' => esc_html__('Top-Bottom', 'livecast'),
        'bottom-t-top' => esc_html__('Bottom-Top', 'livecast'),
        'right-t-left' => esc_html__('Right-Left', 'livecast'),
        'left-t-right' => esc_html__('Left-Right', 'livecast'),
        'alpha-anim' => esc_html__('Fade-In', 'livecast'),
        'zoom-in' => esc_html__('Zoom-In', 'livecast'),
        'zoom-out' => esc_html__('Zoom-Out', 'livecast'),
        'zoom-reverse' => esc_html__('Zoom-Reverse', 'livecast')
    ),
    'transport' => 'postMessage'
));

Kirki::add_field('cl_livecast', array(
    'settings' => 'shop_item_heading',
    'label' => esc_html__('Shop Item Heading', 'livecast'),
    'section' => 'cl_shop',
    'type' => 'select',
    'priority' => 10,
    'default' => 'h6',
    'choices' => array(
        'h1' => esc_attr__('H1', 'livecast'),
        'h2' => esc_attr__('H2', 'livecast'),
        'h3' => esc_attr__('H3', 'livecast'),
        'h4' => esc_attr__('H4', 'livecast'),
        'h5' => esc_attr__('H5', 'livecast'),
        'h6' => esc_attr__('H6', 'livecast')
    ),
    'transport' => 'postMessage'
));


Kirki::add_field('cl_livecast', array(
    'settings' => 'shop_pagination_style',
    'label' => esc_html__('Shop Pagination Style', 'livecast'),
    'section' => 'cl_shop',
    'type' => 'select',
    'priority' => 10,
    'default' => 'numbers',
    'choices' => array(
        'numbers' => esc_attr__('With Page Numbers', 'livecast'),
        'next_prev' => esc_attr__('Next/Prev', 'livecast'),
        'load_more' => esc_attr__('Load More Button', 'livecast'),
        'infinite_scroll' => esc_attr__('Infinite Scroll', 'livecast')
    ),
    'transport' => 'refresh'
));

Kirki::add_field('cl_livecast', array(
    'settings' => 'shop_category_layout',
    'label' => esc_html__('Shop Categories Layout', 'livecast'),
    'tooltip' => esc_html__('Select shop Product Categories page layout.', 'livecast'),
    'section' => 'cl_shop',
    'type' => 'select',
    'priority' => 10,
    'default' => 'fullwidth',
    'choices' => array(
        'fullwidth' => esc_attr__('Fullwidth', 'livecast'),
        'left_sidebar' => esc_attr__('Left Sidebar', 'livecast'),
        'right_sidebar' => esc_attr__('Right Sidebar', 'livecast')
    )
));


?>