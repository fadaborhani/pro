<?php
/**
 * Podcast Template Part for displaying single podcast related posts
 *
 * @package Livecast
 * @subpackage Podcast Parts
 * @since 1.0.0
 *
 */
global $post;
$related_terms = wp_get_object_terms($post->ID, 'podcast_shows', array('fields' => 'ids'));
if( !empty( $related_terms ) ){
$args = array(
    'post_type' => 'podcast',
    'post_status' => 'publish',
    'posts_per_page' => 2,
    'order' => 'DESC',
    'orderby' => 'ID',
    'tax_query' => array(
        array(
            'taxonomy' => 'podcast_shows',
            'field' => 'term_id',
            'terms' => $related_terms
        )
    ),
    'post__not_in' => array( $post->ID ),
);
$related_query = new wp_query( $args );
if( $related_query->have_posts() ){ 	
?>
<div class="entry-single-related">
	<h6><?php esc_html_e( 'Related Podcasts', 'livecast' ) ?></h6>
	<div class="ce-posts-grid ce-post-style-box" data-columns="2">
		<?php 
		while( $related_query->have_posts() ){ 
	        $related_query->the_post();
	        global $post;
	        $post_id = $post->ID;  
	        ?>
	        <div class="ce-related-box">
	        <?php 
	        	get_template_part( 'template-parts/podcast/formats/default', 'podcast' ); ?>
	    	</div>
	        <?php 
		} wp_reset_postdata(); ?>
	</div>
</div>
<?php } }
