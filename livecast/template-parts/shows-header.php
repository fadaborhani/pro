<?php

$podcast_shows_data = get_queried_object();                   
$show_id 			= !empty( $podcast_shows_data->term_id ) ? $podcast_shows_data->term_id : '';
				
$show_image 		= get_term_meta( $show_id, 'image', true );
$show_image_src 	= !empty( $show_image ) ? wp_get_attachment_image_src( $show_image, 'full' ) : array();
$image_url 			= !empty( $show_image_src[0] ) ? $show_image_src[0] : '';					
$description 		= !empty( $podcast_shows_data->description ) ? $podcast_shows_data->description : '';

$show_link 			= get_term_link( $show_id, 'podcast_shows' );				
$show_count 		= !empty( $podcast_shows_data->count ) ? $podcast_shows_data->count : 0;

$with_image_class = '';
if( $image_url != '' ){
    $with_image_class = 'show-header-image';
    $image_bg = 'style="background-image:url('.$image_url.')"'; 
}
?>

<div class="ce-page-header ce-show-page-header <?php echo esc_attr( $with_image_class ) ?>" <?php echo codeless_complex_esc( $image_bg ) ?>>
    <div class="wrapper-content">
        <div class="container container-content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-data">
                        <?php 
                        $title = get_the_title();
                        if( function_exists( 'is_shop' ) && is_shop() )
                            $title = get_the_title( wc_get_page_id('shop') );

                        if( is_archive() )
                            $title = get_the_archive_title();

                        if( is_search() )
                            $title = esc_html__( 'Search Results', 'livecast' );
                        ?>
                        <h1><?php echo codeless_complex_esc( $title ) ?></h1>
                        <span><?php echo esc_html( $show_count ); ?>&nbsp; <?php esc_html_e('episodes', 'livecast'); ?></span>
						<?php if( !empty( $description ) ){ ?>
						    <p><?php echo esc_html( $description ); ?></p>
						<?php } ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>