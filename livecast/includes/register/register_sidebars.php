<?php

if( function_exists( 'register_sidebar' ) ) {
    
    function codeless_register_sidebars_init() {
        global $cl_redata;
        
        register_sidebar( array(
             'name' => esc_html__( 'Sidebar Blog', 'livecast' ),
            'id' => 'sidebar-blog',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>' 
        ) );
        
        register_sidebar( array(
             'name' => esc_html__( 'Sidebar Pages', 'livecast' ),
            'id' => 'sidebar-pages',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>' 
        ) );
        
        

        
    
        
        
        $custom_pages_sidebars = codeless_get_custom_sidebar_pages();


        if( ! empty( $custom_pages_sidebars ) ):
                foreach( $custom_pages_sidebars as $page_id => $page_name ) {
                    
                    if( $page_id != "" )
                        register_sidebar( array(
                             'name' => esc_html__( 'Page', 'livecast' ) . ': ' . get_the_title( $page_id ) . '',
                            'id' => 'sidebar-custom-page-' . $page_id,
                            'before_widget' => '<div id="%1$s" class="widget %2$s">',
                            'after_widget' => '</div>',
                            'before_title' => '<h3 class="widget-title">',
                            'after_title' => '</h3>' 
                        ) );
                    
                    
                }
        endif;
        
        
        
        $custom_categories_sidebars = codeless_get_custom_sidebar_categories();


        if( ! empty( $custom_categories_sidebars ) ):
                foreach( $custom_categories_sidebars as $category_id => $category_name ) {
                    
                    if( $page_id != "" )
                        register_sidebar( array(
                             'name' => esc_html__( 'Category', 'livecast' ) . ': ' . $category_name . '',
                            'id' => 'sidebar-custom-category-' . $category_id,
                            'before_widget' => '<div id="%1$s" class="widget %2$s">',
                            'after_widget' => '</div>',
                            'before_title' => '<h3 class="widget-title">',
                            'after_title' => '</h3>' 
                        ) );
                    
                    
                }
        endif;
        
        
        
        if( class_exists( 'Woocommerce' ) ) {
            register_sidebar( array(
                 'name' => esc_html__( 'Sidebar Woocommerce', 'livecast' ),
                'id' => 'woocommerce',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget' => '</div>',
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>' 
            ) );
        }
        
        
        register_sidebar( array(
             'name' => esc_html__( 'Search Page', 'livecast' ),
            'id' => 'search-dynamic',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>' 
        ) );

        register_sidebar( array(
            'name' => esc_html__( 'Overlay Menu', 'livecast' ),
           'id' => 'overlay-menu',
           'before_widget' => '<div id="%1$s" class="widget %2$s">',
           'after_widget' => '</div>',
           'before_title' => '<h3 class="widget-title">',
           'after_title' => '</h3>' 
       ) );


       register_sidebar( array(
            'name' => esc_html__( 'Custom Widget Sidebar', 'livecast' ),
            'id' => 'custom-widget-sidebar',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>' 
        ) );

        register_sidebar( array(
            'name' => esc_html__( 'Extra Hero Widget', 'livecast' ),
            'id' => 'hero-section',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>' 
        ) );

        register_sidebar( array(
            'name' => esc_html__( 'Custom Widget Sidebar 2', 'livecast' ),
            'id' => 'custom-widget-sidebar-2',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>' 
        ) );
        

        
        
    }
    add_action( 'widgets_init', 'codeless_register_sidebars_init' );
    
}

?>