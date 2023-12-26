<?php
/**
 * Blog Template Part for displaying single blog related posts
 *
 * @package Livecast
 * @subpackage Blog Parts
 * @since 1.0.0
 *
 */
global $post;
$related_terms = wp_get_object_terms($post->ID, 'category', array('fields' => 'ids'));
if( !empty( $related_terms ) ){
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 2,
    'order' => 'DESC',
    'orderby' => 'ID',
    'tax_query' => array(
        array(
            'taxonomy' => 'category',
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
	<h6><?php esc_html_e( 'Related Posts', 'livecast' ) ?></h6>
	<div class="ce-posts-grid ce-post-style-box" data-columns="2">
		<?php 
		while( $related_query->have_posts() ){ 
	        $related_query->the_post();
	        global $post;
	        $post_id = $post->ID;      
	        get_template_part( 'template-parts/blog/post/default', 'box' );
		} wp_reset_postdata(); ?>
	</div>
</div>
<?php } }
