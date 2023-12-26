<?php
/**
 * Blog Template Part for displaying single blog related posts
 *
 * @package Livecast
 * @subpackage Blog Parts
 * @since 1.0.0
 *
 */
?>
<div class="entry-single-pagination">
	<?php
		$prev_post = get_previous_post();
		if ( ! empty( $prev_post ) ): ?>
			<div class="cl-prev-post">
				<span>
					<?php esc_html_e('Previous post', 'livecast') ;?>
				</span>
				<div class="cl-prev">
				    <a href="<?php echo get_permalink( $prev_post->ID ); ?>">
				        <?php echo apply_filters( 'the_title', $prev_post->post_title ); ?>
				    </a>
			    </div>
			</div>
	<?php 
		endif; 
		$next_post = get_next_post();
		if ( ! empty( $next_post ) ): ?>
			<div class="cl-next-post">
				<span><?php esc_html_e('Next post', 'livecast') ;?></span>
				<div class="cl-next">
				    <a href="<?php echo get_permalink( $next_post->ID ); ?>">
				        <?php echo apply_filters( 'the_title', $next_post->post_title ); ?>
				    </a>
				</div>
			</div>
	<?php endif; ?>
</div>
