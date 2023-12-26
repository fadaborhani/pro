<?php
Kirki::add_panel('cl_podcast', array(
    'title' => esc_html__('Podcast', 'livecast'),
    'description' => esc_html__('Podcast Panel', 'livecast'),
    'type' => '',
    'capability' => 'edit_theme_options'
));

Kirki::add_section('cl_podcast_archives', array(
    
    'title' => esc_html__('Podcast Page & Archives', 'livecast'),
    'type' => '',
    'panel' => 'cl_podcast'
    
));
Kirki::add_section('cl_podcast_single', array(
    
    'title' => esc_html__('Single Post', 'livecast'),
    'type' => '',
    'panel' => 'cl_podcast'
    
));


Kirki::add_field('cl_livecast', array(
    'settings' => 'podcast_style',
    'label' => esc_html__('Podcast Style', 'livecast'),
    'tooltip' => esc_html__('Select one of the podcast styles that you want to use as a default template', 'livecast'),
    'section' => 'cl_podcast_archives',
    'type' => 'select',
    'priority' => 10,
    'default' => 'default',
    'choices' => array(
        'default' => esc_attr__('Default', 'livecast'),
        'box' => esc_attr__('Box', 'livecast')
    )
));

Kirki::add_field('cl_livecast', array(
    'settings' => 'podcast_grid_layout',
    'label' => esc_html__('Grid Layout', 'livecast'),
    
    'section' => 'cl_podcast_archives',
    'type' => 'select',
    'priority' => 10,
    'default' => '4',
    'choices' => array(
        '2' => '2 Columns',
        '3' => '3 Columns',
        '4' => '4 Columns',
        '5' => '5 Columns'
    ),
    'transport' => 'postMessage',
    'required' => array(
        array(
            'setting' => 'podcast_style',
            'operator' => 'in',
            'value' => array(
                'grid-standard',
                'grid-box',
                'grid-lateral'
            )
        )
        
    )
));

Kirki::add_field('cl_livecast', array(
    'type' => 'slider',
    'settings' => 'podcast_grid_transition_duration',
    'label' => esc_html__('Grid Transition Duration', 'livecast'),
    'default' => '0.4',
    'choices' => array(
        'min' => '0.0',
        'max' => '5',
        'step' => '0.1'
    ),
    'inline_control' => true,
    'section' => 'cl_podcast_archives',
    'required' => array(
        array(
            'setting' => 'podcast_style',
            'operator' => 'in',
            'value' => array(
                'grid',
                'masonry'
            ),
            'transport' => 'postMessage'
        )
        
    )
));


Kirki::add_field('cl_livecast', array(
    'settings' => 'podcast_layout',
    'label' => esc_html__('Podcast Page Layout', 'livecast'),
    'tooltip' => esc_html__('Overwrite the default all pages layout option, set a custom layout for podcast', 'livecast'),
    'section' => 'cl_podcast_archives',
    'type' => 'select',
    'priority' => 10,
    'default' => 'right_sidebar',
    'choices' => array(
        'none' => esc_attr__('Use Default', 'livecast'),
        'fullwidth' => esc_attr__('Fullwidth', 'livecast'),
        'left_sidebar' => esc_attr__('Left Sidebar', 'livecast'),
        'right_sidebar' => esc_attr__('Right Sidebar', 'livecast'),
        'dual_sidebar' => esc_attr__('Dual Sidebar', 'livecast')
    )
));




Kirki::add_field('cl_livecast', array(
    'settings' => 'podcast_archive_layout',
    'label' => esc_html__('Podcast Archives Layout', 'livecast'),
    'tooltip' => esc_html__('Archives & Categories Layout', 'livecast'),
    'section' => 'cl_podcast_archives',
    'type' => 'select',
    'priority' => 10,
    'default' => 'right_sidebar',
    'choices' => array(
        'none' => esc_attr__('Use Default', 'livecast'),
        'fullwidth' => esc_attr__('Fullwidth', 'livecast'),
        'left_sidebar' => esc_attr__('Left Sidebar', 'livecast'),
        'right_sidebar' => esc_attr__('Right Sidebar', 'livecast'),
        'dual_sidebar' => esc_attr__('Dual Sidebar', 'livecast')
    )
));



Kirki::add_field('cl_livecast', array(
    'settings' => 'podcast_excerpt',
    'label' => esc_html__('Enable auto excerpt', 'livecast'),
    'tooltip' => esc_html__('If enabled you will see only a small part of content. If disabled all post will show', 'livecast'),
    'section' => 'cl_podcast_archives',
    'type' => 'switch',
    'priority' => 10,
    'default' => 1,
    'choices' => array(
        1 => esc_attr__('On', 'livecast'),
        0 => esc_attr__('Off', 'livecast')
    )
    
    
));

Kirki::add_field('cl_livecast', array(
    'type' => 'number',
    'settings' => 'podcast_excerpt_length',
    'label' => esc_attr__('Excerpt Length', 'livecast'),
    'section' => 'cl_podcast_archives',
    'into_group' => true,
    'default' => '62',
    'priority' => 10
    
));

Kirki::add_field('cl_livecast', array(
    'settings' => 'podcast_share_buttons',
    'label' => esc_html__('Podcast Share Buttons', 'livecast'),
    'tooltip' => esc_html__('Select Social share buttons that you want to use on podcast page', 'livecast'),
    'section' => 'cl_podcast_archives',
    'type' => 'select',
    'multiple' => 6,
    'priority' => 10,
    'default' => array(
        'twitter',
        'facebook',
        'pinterest',
        'google'
    ),
    'choices' => array(
        'twitter' => esc_attr__('Twitter', 'livecast'),
        'facebook' => esc_attr__('facebook', 'livecast'),
        'google' => esc_attr__('Google', 'livecast'),
        'whatsapp' => esc_attr__('Whatsapp', 'livecast'),
        'linkedin' => esc_attr__('LinkedIn', 'livecast'),
        'pinterest' => esc_attr__('Pinterest', 'livecast')
    ),
    'transport' => 'postMessage',

));


Kirki::add_field('cl_livecast', array(
    'settings' => 'podcast_animation',
    'label' => esc_html__('Animation Type', 'livecast'),
    
    'section' => 'cl_podcast_archives',
    'type' => 'select',
    'priority' => 10,
    'default' => 'none',
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
    'settings' => 'podcast_post_layout',
    'label' => esc_html__('Single Podcast Layout', 'livecast'),
    'tooltip' => esc_html__('Change the layout of podcast posts, you can add custom sidebar for posts also.', 'livecast'),
    'section' => 'cl_podcast_single',
    'type' => 'select',
    'priority' => 10,
    'default' => 'right_sidebar',
    'choices' => array(
        'fullwidth' => esc_attr__('Fullwidth', 'livecast'),
        'left_sidebar' => esc_attr__('Left Sidebar', 'livecast'),
        'right_sidebar' => esc_attr__('Right Sidebar', 'livecast')
    )
));

Kirki::add_field('cl_livecast', array(
    'settings' => 'single_podcast_header_style',
    'label' => esc_html__('Single Podcast Header Style', 'livecast'),
    'tooltip' => esc_html__('Set default post header style for Single Posts. You can overwrite this option on each post ', 'livecast'),
    'section' => 'cl_podcast_single',
    'type' => 'select',
    'priority' => 10,
    'default' => 'no_image',
    'choices' => array(
        'no_image' => esc_attr__('No Image', 'livecast'),
        'with_image' => esc_attr__('With Image', 'livecast')
    )
));

Kirki::add_field('cl_livecast', array(
    'settings' => 'single_podcast_share',
    'label' => esc_html__('Single Podcast Shares', 'livecast'),
    
    'section' => 'cl_podcast_single',
    'type' => 'switch',
    'priority' => 10,
    'default' => 0,
    'choices' => array(
        1 => esc_attr__('On', 'livecast'),
        0 => esc_attr__('Off', 'livecast')
    )
));

Kirki::add_field('cl_livecast', array(
    'settings' => 'single_podcast_tags',
    'label' => esc_html__('Single Podcast Tags', 'livecast'),
    'section' => 'cl_podcast_single',
    'type' => 'switch',
    'priority' => 10,
    'default' => 1,
    'choices' => array(
        1 => esc_attr__('On', 'livecast'),
        0 => esc_attr__('Off', 'livecast')
    )
));

Kirki::add_field('cl_livecast', array(
    'settings' => 'single_podcast_author_box',
    'label' => esc_html__('Single Podcast Author Info', 'livecast'),
    
    'section' => 'cl_podcast_single',
    'type' => 'switch',
    'priority' => 10,
    'default' => 0,
    'choices' => array(
        1 => esc_attr__('On', 'livecast'),
        0 => esc_attr__('Off', 'livecast')
    )
));

Kirki::add_field('cl_livecast', array(
    'settings' => 'single_podcast_author_page',
    'label' => esc_html__('Author podcasts page', 'livecast'),
    
    'section' => 'cl_podcast_single',
    'type' => 'dropdown-pages',
    'priority' => 10,
    'default' => 0
    
));

Kirki::add_field('cl_livecast', array(
    'settings' => 'single_podcast_pages',
    'label' => esc_html__('Single Podcast Pagination', 'livecast'),
    'section' => 'cl_podcast_single',
    'type' => 'switch',
    'priority' => 10,
    'default' => 1,
    'choices' => array(
        1 => esc_attr__('On', 'livecast'),
        0 => esc_attr__('Off', 'livecast')
    )
));

Kirki::add_field('cl_livecast', array(
    'settings' => 'single_podcast_related',
    'label' => esc_html__('Single Podcast Related Posts', 'livecast'),
    
    'section' => 'cl_podcast_single',
    'type' => 'switch',
    'priority' => 10,
    'default' => 0,
    'choices' => array(
        1 => esc_attr__('On', 'livecast'),
        0 => esc_attr__('Off', 'livecast')
    )
));


Kirki::add_field('cl_livecast', array(
    'settings' => 'podcast_pagination_style',
    'label' => esc_html__('Pagination Style', 'livecast'),
    
    'section' => 'cl_podcast_archives',
    'type' => 'select',
    'priority' => 10,
    'default' => 'numbers',
    'choices' => array(
        'numbers' => esc_attr__('With Page Numbers', 'livecast'),
        'next_prev' => esc_attr__('Next/Prev', 'livecast'),
        'load_more' => esc_attr__('Load More Button', 'livecast'),
        'infinite_scroll' => esc_attr__('Infinite Scroll', 'livecast')
        
    ),
    'transport' => 'postMessage',
    'partial_refresh' => array(
        'podcast_pagination_style' => array(
            'selector' => '.cl-blog-pagination',
            'container_inclusive' => true,
            'render_callback' => function()
            {
                codeless_podcast_pagination();
            }
        )
    )
));

?>