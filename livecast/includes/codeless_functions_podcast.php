<?php 
/**
 * Add Podcast Header style
 * @since 1.0.0
 */
function codeless_add_podcast_header(){
    if( is_single() && get_post_type() == 'podcast' ){
        get_template_part( 'template-parts/podcast-header' );
    }
}

/**
 * Get taxonomy colored
 * @since 1.0.0
 */
function codeless_get_podcast_shows_colored( $post_id = '' , $taxonomy = '', $type = 'box' ){
    $shows = wp_get_post_terms( $post_id, $taxonomy );    
    if ( ! empty( $shows ) ) {
        //then i get the data from the database
        $term_id =  $shows[0]->term_id;
        $cat_data = get_option("category_$term_id");
        $color = '';

   
        if( $type == 'box3' ){
            return '<a href="'.esc_url( get_term_link( $term_id ) ).'" class="category-colored"><i class="feather feather-headphones"></i>' . esc_html( $shows[0]->name ) . '</a>';
        } else {
            return '<a href="'.esc_url( get_term_link( $term_id ) ).'" class="category-colored">' . esc_html( $shows[0]->name ) . '</a>';            
        }
    }
    return '';
}

/*
* Podcast header style
*/
function codeless_get_podcast_header_style(){
    $default = codeless_get_mod( 'single_podcast_header_style', 'no_image' );
    $single = codeless_get_meta( 'podcast_header_style', 'default', get_the_ID() );

    if( $single != 'default' )
        $default = $single;

    return $default;
}

/**
 * Generate single podcast post tags list
 * 
 * @since 1.0.0
 */
function codeless_single_podcast_tags( $post_id = '' ){
    $tags = wp_get_post_terms( $post_id, 'podcast_tags' ); 
    $html = '';
    if( !empty( $tags ) ){
        foreach ( $tags as $key => $value ) {
            $link = get_term_link( $value->term_id, 'podcast_tags' );
            $html .= '<a href="'.esc_url( $link ).'" rel="tag">'.esc_html( $value->name ) .'</a>';
        }
    }          
    return $html;
}

/**
 * Generate single podcast post header icons list
 * 
 * @since 1.0.0
 */
function codeless_print_podcast_features(){
    ob_start(); 
    ?>
        <ul>
            <li>
                <a class="ce-active livecast-play livecast-play-<?php echo get_the_ID() ?>" data-audio-id="<?php echo get_the_ID() ?>" href="<?php the_permalink(); ?>">
                    <span class="lp-icon lp-play"></span>
                <?php esc_html_e('Listen Now', 'livecast'); ?>
                </a>                            
            </li>
            <?php 
            
            $apple_link  = get_post_meta( get_the_ID(), 'ce_apple_link', true );
            $spotify_link = get_post_meta( get_the_ID(), 'ce_spotify_link', true );
            $rss_link = get_post_meta( get_the_ID(), 'ce_rss_link', true );

            ?>
            <?php if( !empty( $apple_link ) ): ?>
                <li><a href="<?php echo esc_url($apple_link) ?>"><i class="fab fa-apple"></i><?php esc_html_e('apple music', 'livecast'); ?></a></li>
            <?php endif; ?>
            <?php if( !empty( $spotify_link ) ): ?>
                <li><a href="<?php echo esc_url($spotify_link) ?>"><i class="fab fa-spotify"></i><?php esc_html_e('spotify', 'livecast'); ?></a></li>
            <?php endif; ?>
            <?php if( !empty( $rss_link ) ): ?>
                <li><a href="<?php echo esc_url($rss_link) ?>"><i class="feather feather-rss"></i><?php esc_html_e('rss feed', 'livecast'); ?></a></li>
            <?php endif; ?>
        </ul>
    <?php 
    return ob_get_clean();
}

/**
 * Generate single podcast footer Content
 * 
 * @since 1.0.0
 */

function codeless_single_podcast_footer(){   
    ?>

    <div class="single-post-data-container">
    <?php

        /**
         * Load Related Blog Items if it's active
         */
        if( codeless_get_mod( 'single_podcast_share', false ) || ( codeless_get_mod( 'single_podcast_tags', true )  ) )
            get_template_part( 'template-parts/podcast/parts/single', 'tools' );

        /**
         * Single Blog Author Box
         */
        if( codeless_get_mod( 'single_podcast_author_box', false )  )
            get_template_part( 'template-parts/podcast/parts/single', 'author' );

        /**
        * Single Next/Prev Posts
        */
        if( codeless_get_mod( 'single_podcast_pages', false ) )
        get_template_part( 'template-parts/podcast/parts/single', 'pagination' );

       /**
         * Load Related Blog Items if it's active
         */

        if( codeless_get_mod( 'single_podcast_related', false ) )
            get_template_part( 'template-parts/podcast/parts/single', 'related' );

    ?>

    </div><!-- single-post-data-container -->

    <?php

}