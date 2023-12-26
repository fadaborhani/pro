<?php
Kirki::add_panel('cl_blog', array(
    'title' => esc_html__('Blog', 'livecast'),
    'description' => esc_html__('Blog Panel', 'livecast'),
    'type' => '',
    'capability' => 'edit_theme_options'
));

Kirki::add_section('cl_blog_archives', array(
    'title' => esc_html__('Blog Page & Archives', 'livecast'),
    'type' => '',
    'panel' => 'cl_blog'
    
));

Kirki::add_section('cl_blog_single', array(
    'title' => esc_html__('Single Post', 'livecast'),
    'type' => '',
    'panel' => 'cl_blog'
    
));

Kirki::add_field('cl_livecast', array(
    'settings' => 'blog_style',
    'label' => esc_html__('Blog Style', 'livecast'),
    'tooltip' => esc_html__('Select one of the blog styles that you want to use as a default template', 'livecast'),
    'section' => 'cl_blog_archives',
    'type' => 'select',
    'priority' => 10,
    'default' => 'default',
    'choices' => array(
        'default' => esc_attr__('Default', 'livecast'),
        'grid-standard' => esc_attr__('Grid Standard', 'livecast'),
        'grid-box' => esc_attr__('Grid Box', 'livecast'),
        'grid-lateral' => esc_attr__('Grid Lateral', 'livecast'),
        'lateral' => esc_attr__('Lateral', 'livecast')
    )
));

Kirki::add_field('cl_livecast', array(
    'settings' => 'blog_grid_layout',
    'label' => esc_html__('Grid Layout', 'livecast'),
    
    'section' => 'cl_blog_archives',
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
            'setting' => 'blog_style',
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
    'settings' => 'blog_grid_transition_duration',
    'label' => esc_html__('Grid Transition Duration', 'livecast'),
    'default' => '0.4',
    'choices' => array(
        'min' => '0.0',
        'max' => '5',
        'step' => '0.1'
    ),
    'inline_control' => true,
    'section' => 'cl_blog_archives',
    'required' => array(
        array(
            'setting' => 'blog_style',
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
    'settings' => 'blog_layout',
    'label' => esc_html__('Blog Page Layout', 'livecast'),
    'tooltip' => esc_html__('Overwrite the default all pages layout option, set a custom layout for blog', 'livecast'),
    'section' => 'cl_blog_archives',
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
    'settings' => 'blog_archive_layout',
    'label' => esc_html__('Blog Archives Layout', 'livecast'),
    'tooltip' => esc_html__('Archives & Categories Layout', 'livecast'),
    'section' => 'cl_blog_archives',
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
    'settings' => 'blog_excerpt',
    'label' => esc_html__('Enable auto excerpt', 'livecast'),
    'tooltip' => esc_html__('If enabled you will see only a small part of content. If disabled all post will show', 'livecast'),
    'section' => 'cl_blog_archives',
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
    'settings' => 'blog_excerpt_length',
    'label' => esc_attr__('Excerpt Length', 'livecast'),
    'section' => 'cl_blog_archives',
    'into_group' => true,
    'default' => '62',
    'priority' => 10
    
));

Kirki::add_field('cl_livecast', array(
    'settings' => 'blog_share_buttons',
    'label' => esc_html__('Blog Share Buttons', 'livecast'),
    'tooltip' => esc_html__('Select Social share buttons that you want to use on blog page', 'livecast'),
    'section' => 'cl_blog_archives',
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
    'settings' => 'blog_animation',
    'label' => esc_html__('Animation Type', 'livecast'),
    
    'section' => 'cl_blog_archives',
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
    'settings' => 'blog_post_layout',
    'label' => esc_html__('Single Blog Layout', 'livecast'),
    'tooltip' => esc_html__('Change the layout of blog posts, you can add custom sidebar for posts also.', 'livecast'),
    'section' => 'cl_blog_single',
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
    'settings' => 'single_blog_header_style',
    'label' => esc_html__('Single Blog Header Style', 'livecast'),
    'tooltip' => esc_html__('Set default post header style for Single Posts. You can overwrite this option on each post ', 'livecast'),
    'section' => 'cl_blog_single',
    'type' => 'select',
    'priority' => 10,
    'default' => 'no_image',
    'choices' => array(
        'no_image' => esc_attr__('No Image', 'livecast'),
        'with_image' => esc_attr__('With Image', 'livecast')
    )
));


Kirki::add_field('cl_livecast', array(
    'type' => 'slider',
    'settings' => 'single_blog_width',
    'label' => esc_html__('Single Blog (Fullwidth Style) Width', 'livecast'),
    'default' => 770,
    'choices' => array(
        'min' => '400',
        'max' => '1600',
        'step' => '1'
    ),
    'inline_control' => true,
    'section' => 'cl_blog_single',
    'output' => array(
        array(
            'element' => '.single-post .cl-layout-fullwidth .inner-content.container, .single-post .cl-layout-fullwidth .cl-post-header .container',
            'units' => 'px',
            'property' => 'width',
            'media_query' => '@media (min-width: 992px)'
        )
    ),
    'transport' => 'auto'
    
));

Kirki::add_field('cl_livecast', array(
    'type' => 'number',
    'settings' => 'single_blog_title_margin_top',
    'label' => esc_attr__('Single Blog Title Margin Top', 'livecast'),
    'section' => 'cl_blog_single',
    'into_group' => true,
    'default' => '0',
    'priority' => 10,
    'transport' => 'auto',
    'output' => array(
        array(
            'element' => 'article.post h1.entry-title',
            'units' => 'px',
            'property' => 'margin-top'
        )
        
    )
));

Kirki::add_field('cl_livecast', array(
    'type' => 'number',
    'settings' => 'single_blog_title_margin_bottom',
    'label' => esc_attr__('Single Blog Title Margin Bottom', 'livecast'),
    'section' => 'cl_blog_single',
    'into_group' => true,
    'default' => '40',
    'priority' => 10,
    'transport' => 'auto',
    'output' => array(
        array(
            'element' => 'article.post h1.entry-title',
            'units' => 'px',
            'property' => 'margin-bottom'
        )
        
    )
));


Kirki::add_field('cl_livecast', array(
    'settings' => 'single_blog_share',
    'label' => esc_html__('Single Blog Shares', 'livecast'),
    
    'section' => 'cl_blog_single',
    'type' => 'switch',
    'priority' => 10,
    'default' => 0,
    'choices' => array(
        1 => esc_attr__('On', 'livecast'),
        0 => esc_attr__('Off', 'livecast')
    )
));

Kirki::add_field('cl_livecast', array(
    'settings' => 'single_blog_tags',
    'label' => esc_html__('Single Blog Tags', 'livecast'),
    
    'section' => 'cl_blog_single',
    'type' => 'switch',
    'priority' => 10,
    'default' => 1,
    'choices' => array(
        1 => esc_attr__('On', 'livecast'),
        0 => esc_attr__('Off', 'livecast')
    )
));

Kirki::add_field('cl_livecast', array(
    'settings' => 'single_blog_author_box',
    'label' => esc_html__('Single Blog Author Info', 'livecast'),
    
    'section' => 'cl_blog_single',
    'type' => 'switch',
    'priority' => 10,
    'default' => 0,
    'choices' => array(
        1 => esc_attr__('On', 'livecast'),
        0 => esc_attr__('Off', 'livecast')
    )
));

Kirki::add_field('cl_livecast', array(
    'settings' => 'single_blog_related',
    'label' => esc_html__('Single Blog Related Posts', 'livecast'),
    
    'section' => 'cl_blog_single',
    'type' => 'switch',
    'priority' => 10,
    'default' => 0,
    'choices' => array(
        1 => esc_attr__('On', 'livecast'),
        0 => esc_attr__('Off', 'livecast')
    )
));


Kirki::add_field('cl_livecast', array(
    'settings' => 'blog_pagination_style',
    'label' => esc_html__('Pagination Style', 'livecast'),
    
    'section' => 'cl_blog_archives',
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
        'blog_pagination_style' => array(
            'selector' => '.cl-blog-pagination',
            'container_inclusive' => true,
            'render_callback' => function()
            {
                codeless_blog_pagination();
            }
        )
    )
));

?>