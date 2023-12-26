<?php

Kirki::add_panel('cl_styling', array(
    'title' => esc_html__('Styling', 'livecast'),
    'description' => esc_html__('All theme styling options', 'livecast'),
    'type' => '',
    'capability' => 'edit_theme_options'
));

Kirki::add_section('cl_styling_colors', array(
    
    'title' => esc_html__('Colors', 'livecast'),
    'type' => '',
    'panel' => 'cl_styling'
    
));

Kirki::add_section('cl_styling_body', array(
    
    'title' => esc_html__('Body Background', 'livecast'),
    'type' => '',
    'panel' => 'cl_styling'
    
));

Kirki::add_section('cl_styling_typography', array(
    
    'title' => esc_html__('Typography', 'livecast'),
    'type' => '',
    'panel' => 'cl_styling'
    
));

Kirki::add_section('cl_styling_pheader', array(
    
    'title' => esc_html__('Page Header', 'livecast'),
    'type' => '',
    'panel' => 'cl_styling'
    
));

Kirki::add_section('cl_styling_blog', array(
    
    'title' => esc_html__('Blog', 'livecast'),
    'type' => '',
    'panel' => 'cl_styling'
    
));

Kirki::add_section('cl_styling_widgets', array(
    
    'title' => esc_html__('Widgets', 'livecast'),
    'type' => '',
    'panel' => 'cl_styling'
    
));

Kirki::add_field('cl_livecast', array(
    'type' => 'color',
    'settings' => 'primary_color',
    'label' => esc_html__('Primary Accent Color', 'livecast'),
    'default' => '#01b7cc',
    'inline_control' => true,
    'choices' => array(
        'alpha' => false,
        'palettes' => codeless_generate_palettes()
    ),
    'section' => 'cl_styling_colors',
    'output' => array(
        array(
            'element' => codeless_dynamic_css_register_tags('primary_color', 'color'),
            'property' => 'color',
            'suffix' => '!important'
        ),
        array(
            'element' => codeless_dynamic_css_register_tags('primary_color', 'background_color'),
            'property' => 'background-color'
        ),
        array(
            'element' => codeless_dynamic_css_register_tags('primary_color', 'border-color'),
            'property' => 'border-color'
        ),
        array(
            'element' => ':root',
            'property' => '--codeless-primary-color'
        )
    ),
    'transport' => 'auto'
));


Kirki::add_field('cl_livecast', array(
    'type' => 'color',
    'settings' => 'border_alt_color',
    'label' => esc_html__('Borders, Inputs, ALT BG Color', 'livecast'),
    'default' => '#eeeeee',
    'inline_control' => true,
    'choices' => array(
        'alpha' => false,
        'palettes' => codeless_generate_palettes()
    ),
    'section' => 'cl_styling_colors',
    'output' => array(
        array(
            'element' => codeless_dynamic_css_register_tags('border_alt_color', 'color'),
            'property' => 'color',
            'suffix' => '!important'
        ),
        array(
            'element' => codeless_dynamic_css_register_tags('border_alt_color', 'background_color'),
            'property' => 'background-color'
        ),
        array(
            'element' => codeless_dynamic_css_register_tags('border_alt_color', 'border_color'),
            'property' => 'border-color'
        )
    ),
    'transport' => 'auto'
));


Kirki::add_field('cl_livecast', array(
    'type' => 'color',
    'settings' => 'other_area_links',
    'label' => esc_html__('Various Areas links', 'livecast'),
    'default' => '#6d727c',
    'inline_control' => true,
    'choices' => array(
        'alpha' => false,
        'palettes' => codeless_generate_palettes()
    ),
    'section' => 'cl_styling_colors',
    'output' => array(
        array(
            'element' => codeless_dynamic_css_register_tags('other_area_links', 'color'),
            'property' => 'color',
            'suffix' => '!important'
        )
    ),
    'transport' => 'auto'
));


Kirki::add_field('cl_livecast', array(
    'type' => 'color',
    'settings' => 'cursor_color',
    'label' => esc_attr__('Custom Cursor Color', 'livecast'),
    'section' => 'cl_styling_colors',
    'into_group' => true,
    'inline_control' => true,
    'default' => '#061020',
    'priority' => 10,
    'transport' => 'auto',
    'output' => array(
        array(
            'element' => ':root',
            'property' => '--cursor-color'
        )
        
    )
));


Kirki::add_field('cl_livecast', array(
    'type' => 'color',
    'settings' => 'body_bg_color',
    'label' => esc_html__('Body Overall Background Color', 'livecast'),
    'default' => '#f6fafc',
    'inline_control' => true,
    'choices' => array(
        'alpha' => false,
        'palettes' => codeless_generate_palettes()
    ),
    'section' => 'cl_styling_body',
    'output' => array(
        array(
            'element' => 'body',
            'property' => 'background-color',
            'suffix' => ''
        )
    ),
    'transport' => 'auto'
));

Kirki::add_field('cl_livecast', array(
    'type' => 'image',
    'label' => esc_html__('Background Image', 'livecast'),
    'settings' => 'body_bg_image',
    'default' => '',
    'inline_control' => true,
    'section' => 'cl_styling_body',
    'transport' => 'auto',
    'output' => array(
        array(
            'element' => 'body',
            'property' => 'background-image'
        )
    )
));

Kirki::add_field('cl_livecast', array(
    'type' => 'select',
    'settings' => 'body_bg_pos',
    'label' => esc_html__('Background Position', 'livecast'),
    'default' => 'left top',
    'choices' => array(
        'left top' => 'left top',
        'left center' => 'left center',
        'left bottom' => 'left bottom',
        'right top' => 'right top',
        'right center' => 'right center',
        'right bottom' => 'right bottom',
        'center top' => 'center top',
        'center center' => 'center center',
        'center bottom' => 'center bottom'
    ),
    'inline_control' => true,
    'section' => 'cl_styling_body',
    'output' => array(
        array(
            'element' => 'body',
            'property' => 'background-position'
        )
    ),
    'transport' => 'auto'
));

Kirki::add_field('cl_livecast', array(
    'type' => 'select',
    'settings' => 'body_bg_repeat',
    'label' => esc_html__('Background Repeat', 'livecast'),
    'default' => 'no-repeat',
    'choices' => array(
        'repeat' => 'repeat',
        'repeat-x' => 'repeat-x',
        'repeat-y' => 'repeat-y',
        'no-repeat' => 'no-repeat'
    ),
    'inline_control' => true,
    'section' => 'cl_styling_body',
    'output' => array(
        array(
            'element' => 'body',
            'property' => 'background-repeat'
        )
    ),
    'transport' => 'auto'
));

Kirki::add_field('cl_livecast', array(
    'type' => 'select',
    'settings' => 'body_bg_attachment',
    'label' => esc_html__('Background Attachment', 'livecast'),
    'default' => 'scroll',
    'choices' => array(
        'scroll' => 'scroll',
        'fixed' => 'fixed'
    ),
    'inline_control' => true,
    'section' => 'cl_styling_body',
    'output' => array(
        array(
            'element' => 'body',
            'property' => 'background-attachment'
        )
    ),
    'transport' => 'auto'
));

Kirki::add_field('cl_livecast', array(
    'type' => 'select',
    'settings' => 'body_bg_size',
    'label' => esc_html__('Background Size', 'livecast'),
    'default' => 'auto',
    'choices' => array(
        'auto' => 'auto',
        'cover' => 'cover'
    ),
    'inline_control' => true,
    'section' => 'cl_styling_body',
    'output' => array(
        array(
            'element' => 'body',
            'property' => 'background-size'
        )
    ),
    'transport' => 'auto'
));

Kirki::add_field('cl_livecast', array(
    'type' => 'select',
    'settings' => 'body_bg_blend',
    'label' => esc_html__('Background Blend Mode', 'livecast'),
    'default' => 'normal',
    'choices' => array(
        'normal' => 'normal',
        'multiply' => 'multiply',
        'screen' => 'screen',
        'overlay' => 'overlay',
        'darken' => 'darken',
        'lighten' => 'lighten',
        'color-dodge' => 'color-dodg',
        'color-burn' => 'color-burn',
        'hard-light' => 'hard-light',
        'soft-light' => 'soft-light',
        'difference' => 'difference',
        'exclusion' => 'exclusion',
        'hue' => 'hue',
        'saturation' => 'saturation',
        'color' => 'color',
        'luminosity' => 'luminosity'
    ),
    'inline_control' => true,
    'section' => 'cl_styling_body',
    'output' => array(
        array(
            'element' => 'body',
            'property' => 'background-blend-mode'
        )
    ),
    'transport' => 'auto'
));

Kirki::add_field('cl_livecast', array(
    'type' => 'typography',
    'settings' => 'body_typo',
    'label' => esc_attr__('Body Typography', 'livecast'),
    'section' => 'cl_styling_typography',
    'into_group' => true,
    'show_subsets' => false,
    'default' => array(
        'font-family' => 'Rubik',
        'letter-spacing' => '0',
        'font-weight' => '400',
        'text-transform' => 'none',
        'font-size' => '14px',
        'line-height' => '28px',
        'color' => '#6d727c'
    ),
    'choices' => codeless_custom_fonts_choices(),
    'priority' => 10,
    'transport' => 'auto',
    'output' => array(
        array(
            'element' => codeless_dynamic_css_register_tags('body_typo')
        )
        
    )
));

Kirki::add_field('cl_livecast', array(
    'type' => 'typography',
    'settings' => 'headings_typo',
    'label' => esc_attr__('General Headings Typography', 'livecast'),
    'section' => 'cl_styling_typography',
    'into_group' => true,
    'default' => array(
        'font-family' => 'Rubik'
    ),
    'priority' => 10,
    'show_subsets' => false,
    'show_variants' => false,
    'choices' => codeless_custom_fonts_choices(),
    'transport' => 'auto',
    'output' => array(
        array(
            'element' => codeless_dynamic_css_register_tags('headings_typo')
        )
        
    )
));

Kirki::add_field('cl_livecast', array(
    'type' => 'number',
    'settings' => 'h1_font_size',
    'label' => esc_attr__('H1 Font Size', 'livecast'),
    'section' => 'cl_styling_typography',
    'into_group' => true,
    'default' => '48',
    'priority' => 10,
    'transport' => 'auto',
    'output' => array(
        array(
            'element' => 'h1:not(.custom_font), .h1',
            'units' => 'px',
            'property' => 'font-size'
        )
        
    )
));

Kirki::add_field('cl_livecast', array(
    'type' => 'number',
    'settings' => 'h1_line_height',
    'label' => esc_attr__('H1 Line-height', 'livecast'),
    'section' => 'cl_styling_typography',
    'into_group' => true,
    'default' => '60',
    'priority' => 10,
    'transport' => 'auto',
    'output' => array(
        array(
            'element' => 'h1:not(.custom_font), .h1',
            'units' => 'px',
            'property' => 'line-height'
        )
        
    )
));

Kirki::add_field('cl_livecast', array(
    'type' => 'select',
    'settings' => 'h1_text_transform',
    'label' => esc_attr__('H1 Text Transform', 'livecast'),
    'section' => 'cl_styling_typography',
    'into_group' => true,
    'default' => 'none',
    'priority' => 10,
    'choices' => array(
        'none' => 'None',
        'uppercase' => 'Uppercase'
    ),
    'transport' => 'auto',
    'output' => array(
        array(
            'element' => 'h1:not(.custom_font), .h1',
            'units' => '',
            'property' => 'text-transform'
        )
        
    )
));

Kirki::add_field('cl_livecast', array(
    'type' => 'select',
    'settings' => 'h1_font_weight',
    'label' => esc_attr__('H1 Font Weight', 'livecast'),
    'section' => 'cl_styling_typography',
    'into_group' => true,
    'default' => '700',
    'priority' => 10,
    'choices' => array(
        '100' => '100',
        '200' => '200',
        '300' => '300',
        '400' => '400',
        '500' => '500',
        '600' => '600',
        '700' => '700',
        '800' => '800',
        '900' => '900'
    ),
    'transport' => 'auto',
    'output' => array(
        array(
            'element' => 'h1:not(.custom_font), .h1',
            'units' => '',
            'property' => 'font-weight'
        )
        
    )
));

Kirki::add_field('cl_livecast', array(
    'type' => 'text',
    'settings' => 'h1_letter_space',
    'label' => esc_attr__('H1 Letter Spacing', 'livecast'),
    'section' => 'cl_styling_typography',
    'into_group' => true,
    'default' => '-0.025em',
    'priority' => 10,
    'transport' => 'auto',
    'output' => array(
        array(
            'element' => 'h1:not(.custom_font), .h1',
            'units' => 'em',
            'property' => 'letter-spacing'
        )
        
    ),
    'choices' => array(
        'min' => 0,
        'max' => 5,
        'step' => 0.05
    )
));


Kirki::add_field('cl_livecast', array(
    'type' => 'color',
    'settings' => 'h1_dark_color',
    'label' => esc_html__('H1 Color (Dark)', 'livecast'),
    'default' => '#061020',
    'inline_control' => true,
    'section' => 'cl_styling_typography',
    'output' => array(
        array(
            'element' => 'h1:not(.custom_font), .h1',
            'property' => 'color',
            'suffix' => ''
        )
        
    ),
    'transport' => 'auto'
));




Kirki::add_field('cl_livecast', array(
    'type' => 'color',
    'settings' => 'h1_light_color',
    'label' => esc_html__('H1 Color (Light)', 'livecast'),
    'default' => '#ffffff',
    'inline_control' => true,
    'section' => 'cl_styling_typography',
    'output' => array(
        array(
            'element' => '.light-text h1:not(.custom_font), .light-text .h1',
            'property' => 'color',
            'suffix' => ' !important'
        )
        
    ),
    'transport' => 'auto'
));


Kirki::add_field('cl_livecast', array(
    'type' => 'number',
    'settings' => 'h2_font_size',
    'label' => esc_attr__('H2 Font Size', 'livecast'),
    'section' => 'cl_styling_typography',
    'into_group' => true,
    'default' => '36',
    'priority' => 10,
    'transport' => 'auto',
    'output' => array(
        array(
            'element' => 'h2:not(.custom_font), .h2',
            'units' => 'px',
            'property' => 'font-size'
        )
        
    )
));

Kirki::add_field('cl_livecast', array(
    'type' => 'number',
    'settings' => 'h2_line_height',
    'label' => esc_attr__('H2 Line-height', 'livecast'),
    'section' => 'cl_styling_typography',
    'into_group' => true,
    'default' => '42',
    'priority' => 10,
    'transport' => 'auto',
    'output' => array(
        array(
            'element' => 'h2:not(.custom_font), .h2',
            'units' => 'px',
            'property' => 'line-height'
        )
        
    )
));

Kirki::add_field('cl_livecast', array(
    'type' => 'select',
    'settings' => 'h2_text_transform',
    'label' => esc_attr__('H2 Text Transform', 'livecast'),
    'section' => 'cl_styling_typography',
    'into_group' => true,
    'default' => 'none',
    'priority' => 10,
    'choices' => array(
        'none' => esc_html__('None', 'livecast'),
        'uppercase' => esc_html__('Uppercase', 'livecast')
    ),
    'transport' => 'auto',
    'output' => array(
        array(
            'element' => 'h2:not(.custom_font), .h2',
            'units' => '',
            'property' => 'text-transform'
        )
        
    )
));

Kirki::add_field('cl_livecast', array(
    'type' => 'select',
    'settings' => 'h2_font_weight',
    'label' => esc_attr__('H2 Font Weight', 'livecast'),
    'section' => 'cl_styling_typography',
    'into_group' => true,
    'default' => '700',
    'priority' => 10,
    'choices' => array(
        '100' => '100',
        '200' => '200',
        '300' => '300',
        '400' => '400',
        '500' => '500',
        '600' => '600',
        '700' => '700',
        '800' => '800',
        '900' => '900'
    ),
    'transport' => 'auto',
    'output' => array(
        array(
            'element' => 'h2:not(.custom_font), .h2',
            'units' => '',
            'property' => 'font-weight'
        )
        
    )
));

Kirki::add_field('cl_livecast', array(
    'type' => 'number',
    'settings' => 'h2_letter_space',
    'label' => esc_attr__('H2 Letter Spacing', 'livecast'),
    'section' => 'cl_styling_typography',
    'into_group' => true,
    'default' => '-0.025',
    'priority' => 10,
    'transport' => 'auto',
    'output' => array(
        array(
            'element' => 'h2:not(.custom_font), .h2',
            'units' => 'em',
            'property' => 'letter-spacing'
        )
        
    ),
    'choices' => array(
        'min' => 0,
        'max' => 5,
        'step' => 0.05
    )
));


Kirki::add_field('cl_livecast', array(
    'type' => 'color',
    'settings' => 'h2_dark_color',
    'label' => esc_html__('H2 Color (Dark)', 'livecast'),
    'default' => '#061020',
    'inline_control' => true,
    'section' => 'cl_styling_typography',
    'output' => array(
        array(
            'element' => 'h2:not(.custom_font), .h2',
            'property' => 'color',
            'suffix' => ''
        )
        
    ),
    'transport' => 'auto'
));


Kirki::add_field('cl_livecast', array(
    'type' => 'color',
    'settings' => 'h2_light_color',
    'label' => esc_html__('H2 Color (Light)', 'livecast'),
    'default' => '#ffffff',
    'inline_control' => true,
    'section' => 'cl_styling_typography',
    'output' => array(
        array(
            'element' => '.light-text h2:not(.custom_font), .light-text .h2',
            'property' => 'color',
            'suffix' => ' !important'
        )
        
    ),
    'transport' => 'auto'
));





Kirki::add_field('cl_livecast', array(
    'type' => 'number',
    'settings' => 'h3_font_size',
    'label' => esc_attr__('H3 Font Size', 'livecast'),
    'section' => 'cl_styling_typography',
    'into_group' => true,
    'default' => '24',
    'priority' => 10,
    'transport' => 'auto',
    'output' => array(
        array(
            'element' => 'h3:not(.custom_font), .h3',
            'units' => 'px',
            'property' => 'font-size'
        )
        
    )
));

Kirki::add_field('cl_livecast', array(
    'type' => 'number',
    'settings' => 'h3_line_height',
    'label' => esc_attr__('H3 Line-height', 'livecast'),
    'section' => 'cl_styling_typography',
    'into_group' => true,
    'default' => '30',
    'priority' => 10,
    'transport' => 'auto',
    'output' => array(
        array(
            'element' => 'h3:not(.custom_font), .h3',
            'units' => 'px',
            'property' => 'line-height'
        )
        
    )
));

Kirki::add_field('cl_livecast', array(
    'type' => 'select',
    'settings' => 'h3_text_transform',
    'label' => esc_attr__('H3 Text Transform', 'livecast'),
    'section' => 'cl_styling_typography',
    'into_group' => true,
    'default' => 'none',
    'priority' => 10,
    'choices' => array(
        'none' => esc_html__('None', 'livecast'),
        'uppercase' => esc_html__('Uppercase', 'livecast')
    ),
    'transport' => 'auto',
    'output' => array(
        array(
            'element' => 'h3:not(.custom_font), .h3',
            'units' => '',
            'property' => 'text-transform'
        )
        
    )
));

Kirki::add_field('cl_livecast', array(
    'type' => 'select',
    'settings' => 'h3_font_weight',
    'label' => esc_attr__('H3 Font Weight', 'livecast'),
    'section' => 'cl_styling_typography',
    'into_group' => true,
    'default' => '500',
    'priority' => 10,
    'choices' => array(
        '100' => '100',
        '200' => '200',
        '300' => '300',
        '400' => '400',
        '500' => '500',
        '600' => '600',
        '700' => '700',
        '800' => '800',
        '900' => '900'
    ),
    'transport' => 'auto',
    'output' => array(
        array(
            'element' => 'h3:not(.custom_font), .h3',
            'units' => '',
            'property' => 'font-weight'
        )
        
    )
));

Kirki::add_field('cl_livecast', array(
    'type' => 'text',
    'settings' => 'h3_letter_space',
    'label' => esc_attr__('H3 Letter Spacing', 'livecast'),
    'section' => 'cl_styling_typography',
    'into_group' => true,
    'default' => '-0.025',
    'priority' => 10,
    'transport' => 'auto',
    'output' => array(
        array(
            'element' => 'h3:not(.custom_font), .h3',
            'units' => 'em',
            'property' => 'letter-spacing'
        )
        
    ),
    'choices' => array(
        'min' => 0,
        'max' => 5,
        'step' => 0.05
    )
));


Kirki::add_field('cl_livecast', array(
    'type' => 'color',
    'settings' => 'h3_dark_color',
    'label' => esc_html__('H3 Color (Dark)', 'livecast'),
    'default' => '#061020',
    'inline_control' => true,
    'section' => 'cl_styling_typography',
    'output' => array(
        array(
            'element' => 'h3:not(.custom_font), .h3',
            'property' => 'color',
            'suffix' => ''
        )
        
    ),
    'transport' => 'auto'
));


Kirki::add_field('cl_livecast', array(
    'type' => 'color',
    'settings' => 'h3_light_color',
    'label' => esc_html__('H3 Color (Light)', 'livecast'),
    'default' => '#ffffff',
    'inline_control' => true,
    'section' => 'cl_styling_typography',
    'output' => array(
        array(
            'element' => '.light-text h3:not(.custom_font), .light-text .h3',
            'property' => 'color',
            'suffix' => ' !important'
        )
        
    ),
    'transport' => 'auto'
));


Kirki::add_field('cl_livecast', array(
    'type' => 'number',
    'settings' => 'h4_font_size',
    'label' => esc_attr__('H4 Font Size', 'livecast'),
    'section' => 'cl_styling_typography',
    'into_group' => true,
    'default' => '20',
    'priority' => 10,
    'transport' => 'auto',
    'output' => array(
        array(
            'element' => 'h4:not(.custom_font), .h4',
            'units' => 'px',
            'property' => 'font-size'
        )
        
    )
));

Kirki::add_field('cl_livecast', array(
    'type' => 'number',
    'settings' => 'h4_line_height',
    'label' => esc_attr__('H4 Line-height', 'livecast'),
    'section' => 'cl_styling_typography',
    'into_group' => true,
    'default' => '28',
    'priority' => 10,
    'transport' => 'auto',
    'output' => array(
        array(
            'element' => 'h4:not(.custom_font), .h4',
            'units' => 'px',
            'property' => 'line-height'
        )
        
    )
));

Kirki::add_field('cl_livecast', array(
    'type' => 'select',
    'settings' => 'h4_text_transform',
    'label' => esc_attr__('H4 Text Transform', 'livecast'),
    'section' => 'cl_styling_typography',
    'into_group' => true,
    'default' => 'none',
    'priority' => 10,
    'choices' => array(
        'none' => esc_html__('None', 'livecast'),
        'uppercase' => esc_html__('Uppercase', 'livecast')
    ),
    'transport' => 'auto',
    'output' => array(
        array(
            'element' => 'h4:not(.custom_font), .h4',
            'units' => '',
            'property' => 'text-transform'
        )
        
    )
));

Kirki::add_field('cl_livecast', array(
    'type' => 'select',
    'settings' => 'h4_font_weight',
    'label' => esc_attr__('H4 Font Weight', 'livecast'),
    'section' => 'cl_styling_typography',
    'into_group' => true,
    'default' => '400',
    'priority' => 10,
    'choices' => array(
        '100' => '100',
        '200' => '200',
        '300' => '300',
        '400' => '400',
        '500' => '500',
        '600' => '600',
        '700' => '700',
        '800' => '800',
        '900' => '900'
    ),
    'transport' => 'auto',
    'output' => array(
        array(
            'element' => 'h4:not(.custom_font), .h4',
            'units' => '',
            'property' => 'font-weight'
        )
        
    )
));

Kirki::add_field('cl_livecast', array(
    'type' => 'text',
    'settings' => 'h4_letter_space',
    'label' => esc_attr__('H4 Letter Spacing', 'livecast'),
    'section' => 'cl_styling_typography',
    'into_group' => true,
    'default' => '0',
    'priority' => 10,
    'transport' => 'auto',
    'output' => array(
        array(
            'element' => 'h4:not(.custom_font), .h4',
            'units' => 'em',
            'property' => 'letter-spacing'
        )
        
    ),
    'choices' => array(
        'min' => 0,
        'max' => 5,
        'step' => 0.05
    )
));


Kirki::add_field('cl_livecast', array(
    'type' => 'color',
    'settings' => 'h4_dark_color',
    'label' => esc_html__('H4 Color (Dark)', 'livecast'),
    'default' => '#061020',
    'inline_control' => true,
    'section' => 'cl_styling_typography',
    'output' => array(
        array(
            'element' => 'h4:not(.custom_font), .h4',
            'property' => 'color',
            'suffix' => ''
        )
        
    ),
    'transport' => 'auto'
));


Kirki::add_field('cl_livecast', array(
    'type' => 'color',
    'settings' => 'h4_light_color',
    'label' => esc_html__('H4 Color (Light)', 'livecast'),
    'default' => '#ffffff',
    'inline_control' => true,
    'section' => 'cl_styling_typography',
    'output' => array(
        array(
            'element' => '.light-text h4:not(.custom_font), .light-text .h4',
            'property' => 'color',
            'suffix' => ' !important'
        )
        
    ),
    'transport' => 'auto'
));


Kirki::add_field('cl_livecast', array(
    'type' => 'number',
    'settings' => 'h5_font_size',
    'label' => esc_attr__('H5 Font Size', 'livecast'),
    'section' => 'cl_styling_typography',
    'into_group' => true,
    'default' => '18',
    'priority' => 10,
    'transport' => 'auto',
    'output' => array(
        array(
            'element' => 'h5:not(.custom_font), .h5',
            'units' => 'px',
            'property' => 'font-size'
        )
        
    )
));

Kirki::add_field('cl_livecast', array(
    'type' => 'number',
    'settings' => 'h5_line_height',
    'label' => esc_attr__('H5 Line-height', 'livecast'),
    'section' => 'cl_styling_typography',
    'into_group' => true,
    'default' => '28',
    'priority' => 10,
    'transport' => 'auto',
    'output' => array(
        array(
            'element' => 'h5:not(.custom_font), .h5',
            'units' => 'px',
            'property' => 'line-height'
        )
        
    )
));

Kirki::add_field('cl_livecast', array(
    'type' => 'select',
    'settings' => 'h5_text_transform',
    'label' => esc_attr__('H5 Text Transform', 'livecast'),
    'section' => 'cl_styling_typography',
    'into_group' => true,
    'default' => 'none',
    'priority' => 10,
    'choices' => array(
        'none' => esc_html__('None', 'livecast'),
        'uppercase' => esc_html__('Uppercase', 'livecast')
    ),
    'transport' => 'auto',
    'output' => array(
        array(
            'element' => 'h5:not(.custom_font), .h5',
            'units' => '',
            'property' => 'text-transform'
        )
        
    )
));

Kirki::add_field('cl_livecast', array(
    'type' => 'select',
    'settings' => 'h5_font_weight',
    'label' => esc_attr__('H5 Font Weight', 'livecast'),
    'section' => 'cl_styling_typography',
    'into_group' => true,
    'default' => '400',
    'priority' => 10,
    'choices' => array(
        '100' => '100',
        '200' => '200',
        '300' => '300',
        '400' => '400',
        '500' => '500',
        '600' => '600',
        '700' => '700',
        '800' => '800',
        '900' => '900'
    ),
    'transport' => 'auto',
    'output' => array(
        array(
            'element' => 'h5:not(.custom_font), .h5',
            'units' => '',
            'property' => 'font-weight'
        )
        
    )
));

Kirki::add_field('cl_livecast', array(
    'type' => 'text',
    'settings' => 'h5_letter_space',
    'label' => esc_attr__('H5 Letter Spacing', 'livecast'),
    'section' => 'cl_styling_typography',
    'into_group' => true,
    'default' => '0',
    'priority' => 10,
    'transport' => 'auto',
    'output' => array(
        array(
            'element' => 'h5:not(.custom_font), .h5',
            'units' => 'em',
            'property' => 'letter-spacing'
        )
        
    ),
    'choices' => array(
        'min' => 0,
        'max' => 5,
        'step' => 0.05
    )
));


Kirki::add_field('cl_livecast', array(
    'type' => 'color',
    'settings' => 'h5_dark_color',
    'label' => esc_html__('H5 Color (Dark)', 'livecast'),
    'default' => '#061020',
    'inline_control' => true,
    'section' => 'cl_styling_typography',
    'output' => array(
        array(
            'element' => 'h5:not(.custom_font), .h5',
            'property' => 'color',
            'suffix' => ''
        )
        
    ),
    'transport' => 'auto'
));


Kirki::add_field('cl_livecast', array(
    'type' => 'color',
    'settings' => 'h5_light_color',
    'label' => esc_html__('H5 Color (Light)', 'livecast'),
    'default' => '#ffffff',
    'inline_control' => true,
    'section' => 'cl_styling_typography',
    'output' => array(
        array(
            'element' => '.light-text h5:not(.custom_font), .light-text .h5',
            'property' => 'color',
            'suffix' => ' !important'
        )
        
    ),
    'transport' => 'auto'
));


Kirki::add_field('cl_livecast', array(
    'type' => 'number',
    'settings' => 'h6_font_size',
    'label' => esc_attr__('H6 Font Size', 'livecast'),
    'section' => 'cl_styling_typography',
    'into_group' => true,
    'default' => '12',
    'priority' => 10,
    'transport' => 'auto',
    'output' => array(
        array(
            'element' => 'h6:not(.custom_font), .h6',
            'units' => 'px',
            'property' => 'font-size'
        )
        
    )
));

Kirki::add_field('cl_livecast', array(
    'type' => 'number',
    'settings' => 'h6_line_height',
    'label' => esc_attr__('H6 Line-height', 'livecast'),
    'section' => 'cl_styling_typography',
    'into_group' => true,
    'default' => '24',
    'priority' => 10,
    'transport' => 'auto',
    'output' => array(
        array(
            'element' => 'h6:not(.custom_font), .h6',
            'units' => 'px',
            'property' => 'line-height'
        )
        
    )
));

Kirki::add_field('cl_livecast', array(
    'type' => 'select',
    'settings' => 'h6_text_transform',
    'label' => esc_attr__('H6 Text Transform', 'livecast'),
    'section' => 'cl_styling_typography',
    'into_group' => true,
    'default' => 'uppercase',
    'priority' => 10,
    'choices' => array(
        'none' => esc_html__('None', 'livecast'),
        'uppercase' => esc_html__('Uppercase', 'livecast')
    ),
    'transport' => 'auto',
    'output' => array(
        array(
            'element' => 'h6:not(.custom_font), .h6',
            'units' => '',
            'property' => 'text-transform'
        )
        
    )
));

Kirki::add_field('cl_livecast', array(
    'type' => 'select',
    'settings' => 'h6_font_weight',
    'label' => esc_attr__('H6 Font Weight', 'livecast'),
    'section' => 'cl_styling_typography',
    'into_group' => true,
    'default' => '500',
    'priority' => 10,
    'choices' => array(
        '100' => '100',
        '200' => '200',
        '300' => '300',
        '400' => '400',
        '500' => '500',
        '600' => '600',
        '700' => '700',
        '800' => '800',
        '900' => '900'
    ),
    'transport' => 'auto',
    'output' => array(
        array(
            'element' => 'h6:not(.custom_font), .h6',
            'units' => '',
            'property' => 'font-weight'
        )
        
    )
));

Kirki::add_field('cl_livecast', array(
    'type' => 'text',
    'settings' => 'h6_letter_space',
    'label' => esc_attr__('H6 Letter Spacing', 'livecast'),
    'section' => 'cl_styling_typography',
    'into_group' => true,
    'default' => '0',
    'priority' => 10,
    'transport' => 'auto',
    'output' => array(
        array(
            'element' => 'h6:not(.custom_font), .h6',
            'units' => 'em',
            'property' => 'letter-spacing'
        )
        
    ),
    'choices' => array(
        'min' => 0,
        'max' => 5,
        'step' => 0.05
    )
));


Kirki::add_field('cl_livecast', array(
    'type' => 'color',
    'settings' => 'h6_dark_color',
    'label' => esc_html__('H6 Color (Dark)', 'livecast'),
    'default' => '#061020',
    'inline_control' => true,
    'section' => 'cl_styling_typography',
    'output' => array(
        array(
            'element' => 'h6:not(.custom_font), .h6',
            'property' => 'color',
            'suffix' => ''
        )
        
    ),
    'transport' => 'auto'
));


Kirki::add_field('cl_livecast', array(
    'type' => 'color',
    'settings' => 'h6_light_color',
    'label' => esc_html__('H6 Color (Light)', 'livecast'),
    'default' => '#ffffff',
    'inline_control' => true,
    'section' => 'cl_styling_typography',
    'output' => array(
        array(
            'element' => '.light-text h6:not(.custom_font), .light-text .h6',
            'property' => 'color',
            'suffix' => ' !important'
        )
        
    ),
    'transport' => 'auto'
));

Kirki::add_field('cl_livecast', array(
    'type' => 'typography',
    'settings' => 'blog_entry_title',
    'label' => esc_attr__('Blog Entry Title', 'livecast'),
    'section' => 'cl_styling_blog',
    'into_group' => true,
    'show_subsets' => true,
    'show_variants' => true,
    'default' => array(
        'letter-spacing' => '0.00em',
        'font-weight' => '300',
        'text-transform' => 'none',
        'font-size' => '30px',
        'line-height' => '42px',
        'color' => '#061020',
        'font-family' => 'Rubik'
        
    ),
    'choices' => codeless_custom_fonts_choices(),
    'priority' => 10,
    'transport' => 'auto',
    'output' => array(
        array(
            'element' => codeless_dynamic_css_register_tags('blog_entry_title')
        )
        
    )
));

Kirki::add_field('cl_livecast', array(
    'type' => 'typography',
    'settings' => 'single_blog_title',
    'label' => esc_attr__('Single Blog Title', 'livecast'),
    'section' => 'cl_styling_blog',
    'show_variants' => true,
    'into_group' => true,
    'show_subsets' => false,
    'default' => array(
        'letter-spacing' => '0',
        'font-weight' => '500',
        'text-transform' => 'none',
        'font-size' => '68px',
        'line-height' => '72px',
        'color' => '#061020',
        'font-family' => 'Rubik'
    ),
    'choices' => codeless_custom_fonts_choices(),
    'priority' => 10,
    'transport' => 'auto',
    'output' => array(
        array(
            'element' => codeless_dynamic_css_register_tags('single_blog_title')
        )
        
    )
));


Kirki::add_field('cl_livecast', array(
    'type' => 'color',
    'settings' => 'blog_overlay_color',
    'label' => esc_html__('Blog Overlay Color', 'livecast'),
    'default' => 'rgba(0,0,0,0.2)',
    'inline_control' => true,
    'choices' => array(
        'alpha' => true
    ),
    'section' => 'cl_styling_blog',
    'output' => array(
        array(
            'element' => codeless_dynamic_css_register_tags('blog_overlay_color'),
            'property' => 'background-color'
        )
        
    ),
    'transport' => 'auto'
));



Kirki::add_field('cl_livecast', array(
    'type' => 'color',
    'settings' => 'blog_comment_fields_bg_color',
    'label' => esc_attr__('Blog Comments Field BG Color', 'livecast'),
    'section' => 'cl_styling_blog',
    'into_group' => true,
    'inline_control' => true,
    'default' => '#ffffff',
    'priority' => 10,
    'transport' => 'auto',
    'output' => array(
        array(
            'element' => '#respond.comment-respond .comment-form-comment textarea, #respond.comment-respond input:not([type="submit"])',
            'property' => 'background-color'
        )
        
    )
));


Kirki::add_field('cl_livecast', array(
    'type' => 'typography',
    'settings' => 'single_blog_extra_section_title',
    'label' => esc_attr__('Single Blog Extra Sections Title', 'livecast'),
    'section' => 'cl_styling_blog',
    'into_group' => true,
    'show_subsets' => false,
    'default' => array(
        'letter-spacing' => '0.2em',
        'font-weight' => '500',
        'text-transform' => 'uppercase',
        'font-size' => '12px',
        'line-height' => '20px',
        'color' => '#061020',
        'font-family' => 'Rubik'
    ),
    'choices' => codeless_custom_fonts_choices(),
    'priority' => 10,
    'transport' => 'auto',
    'output' => array(
        array(
            'element' => codeless_dynamic_css_register_tags('single_blog_extra_section_title')
        )
        
    )
));

Kirki::add_field('cl_livecast', array(
    'type' => 'typography',
    'settings' => 'widgets_title_typography',
    'label' => esc_attr__('Widgets Typography', 'livecast'),
    'section' => 'cl_styling_widgets',
    'into_group' => true,
    'default' => array(
        'font-family' => 'Rubik',
        'letter-spacing' => '0.1em',
        'font-weight' => '500',
        'text-transform' => 'uppercase',
        'font-size' => '13px'
    ),
    'choices' => codeless_custom_fonts_choices(),
    'priority' => 10,
    'show_subsets' => false,
    'transport' => 'auto',
    'output' => array(
        array(
            'element' => codeless_dynamic_css_register_tags('widgets_title_typography')
        )
        
    )
));

Kirki::add_field('cl_livecast', array(
    'type' => 'color',
    'settings' => 'aside_title_widget',
    'label' => esc_attr__('Sidebar Widget Title', 'livecast'),
    'section' => 'cl_styling_widgets',
    'into_group' => true,
    'inline_control' => true,
    'default' => '#061020',
    'priority' => 10,
    'transport' => 'auto',
    'output' => array(
        array(
            'element' => 'aside .widget-title, .elementor-widget-sidebar .widget-title',
            'property' => 'color'
        )
        
    )
));

Kirki::add_field('cl_livecast', array(
    'type' => 'number',
    'settings' => 'aside_widget_distance',
    'label' => esc_attr__('Distance between widgets', 'livecast'),
    'section' => 'cl_styling_widgets',
    'into_group' => true,
    'default' => '40',
    'priority' => 10,
    'transport' => 'auto',
    'output' => array(
        array(
            'element' => 'aside .widget, .elementor-widget-sidebar .widget',
            'units' => 'px',
            'property' => 'padding-top'
        ),
        array(
            'element' => 'aside .widget, .elementor-widget-sidebar .widget',
            'units' => 'px',
            'property' => 'padding-bottom'
        )
        
    )
));

Kirki::add_field('cl_livecast', array(
    'type' => 'color',
    'settings' => 'aside_search_bg_color',
    'label' => esc_attr__('Sidebar Search BG Color', 'livecast'),
    'section' => 'cl_styling_widgets',
    'into_group' => true,
    'inline_control' => true,
    'default' => '#ffffff',
    'priority' => 10,
    'transport' => 'auto',
    'output' => array(
        array(
            'element' => 'aside .widget_search input[type="search"]',
            'property' => 'background-color'
        )
        
    )
));


Kirki::add_field('cl_livecast', array(
    'type' => 'color',
    'settings' => 'pheader_bg_color',
    'label' => esc_attr__('Page Header Bg Color', 'livecast'),
    'section' => 'cl_styling_pheader',
    'into_group' => true,
    'inline_control' => true,
    'default' => '#eeeeee',
    'priority' => 10,
    'transport' => 'auto',
    'output' => array(
        array(
            'element' => '.ce-page-header',
            'property' => 'background-color'
        )
        
    )
));

Kirki::add_field('cl_livecast', array(
    'type' => 'color',
    'settings' => 'pheader_color',
    'label' => esc_attr__('Page Header Font Color', 'livecast'),
    'section' => 'cl_styling_pheader',
    'into_group' => true,
    'inline_control' => true,
    'default' => '#061020',
    'priority' => 10,
    'transport' => 'auto',
    'output' => array(
        array(
            'element' => '.ce-page-header',
            'property' => 'color'
        )
        
    )
));

?>