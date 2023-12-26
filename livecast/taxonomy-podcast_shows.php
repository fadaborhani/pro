<?php 
/*
* Template for podcast shows
*
*/
get_header();
wp_enqueue_script( 'isotope' );
?>
<section id="site_content" class="<?php echo esc_attr( codeless_extra_classes( 'site_content' ) ) ?>" <?php echo codeless_extra_attr( 'site_content' ) ?>>
    <?php codeless_hook_content_before(); ?>
    <div id="content" class="<?php echo esc_attr( codeless_extra_classes( 'content' ) ) ?>" <?php echo codeless_extra_attr( 'content' ) ?> >
        <?php


		$podcast_shows_data = get_queried_object();                   
		$show_id 			= !empty( $podcast_shows_data->term_id ) ? $podcast_shows_data->term_id : '';
		$show_name 			= !empty( $podcast_shows_data->name ) ? $podcast_shows_data->name : '';					
		$show_image 		= get_term_meta( $show_id, 'image', true );
		$show_image_src 	= !empty( $show_image ) ? wp_get_attachment_image_src( $show_image, 'codeless_show_main' ) : array();
		$image_url 			= !empty( $show_image_src[0] ) ? $show_image_src[0] : '';					
		$description 		= !empty( $podcast_shows_data->description ) ? $podcast_shows_data->description : '';
		$posts_per_page 	= get_option( 'posts_per_page' );
		$posts_per_page 	= !empty( $posts_per_page ) ? $posts_per_page : 9;	
		$show_link 			= get_term_link( $show_id, 'podcast_shows' );				
		$show_count 		= !empty( $podcast_shows_data->count ) ? $podcast_shows_data->count : 0;
		$args = array(
			'post_type' 		=> 'podcast',
			'post_status' 		=> 'publish',
			'posts_per_page' 	=> $posts_per_page,
			'tax_query' => array(
				array(
					'taxonomy' 	=> 'podcast_shows',
					'field' 	=> 'term_id',
					'terms' 	=> $show_id,
				)
			),
		);
		$podcasts = new WP_Query( $args );


		/**
         * Functions hooked into codeless_hook_content_begin action
         *
         * @hooked codeless_add_page_header                     - 0
         * @hooked codeless_add_post_header                     - 10
         * @hooked codeless_layout_modern                       - 20
         * @hooked codeless_blog_filterable                     - 30
         */
        codeless_hook_content_begin(); 
		
		
		
		
		?>
        
        <div class="inner-content <?php echo esc_attr( codeless_extra_classes( 'inner_content' ) ) ?>">
            
            <div class="inner-content-row <?php echo esc_attr( codeless_extra_classes( 'inner_content_row' ) ) ?>">
                
                <?php codeless_hook_content_column_before() ?>
                
                <div class="content-col <?php echo esc_attr( codeless_extra_classes( 'content_col' ) ) ?>">
                    
                    <?php codeless_hook_content_column_begin() ?>
                   
					
					<div class="row align-items-center justify-content-start ce-podcast-shows">
					<?php 
					if( $podcasts->have_posts() ){ 
						while ($podcasts->have_posts() ) {
						$podcasts->the_post();
						global $post;
						$layout = codeless_get_mod( 'podcast_style' );
						$layout	= !empty( $layout ) ? $layout : 'default';
						?>
						<div class="ce-podcast-entry">
							<?php 
							get_template_part( 'template-parts/podcast/formats/'.$layout.'', 'podcast' );	
							?>
						</div>
						<?php } wp_reset_postdata(); 	
					} else {
						//Print empty message here
					}
					?>	
					</div>
                  </div>
              </div>

        </div>
</section>
<?php 
get_footer();