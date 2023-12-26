<?php
/**
 * Blog Template Part for displaying single blog tools
 * Share tools and Post Tags
 *
 * @package Livecast
 * @subpackage Blog Parts
 * @since 1.0.0
 *
 */
?>
<div class="entry-single-tools">
	<div class="entry-single-share entry-single-tool">
		<?php if( codeless_get_mod( 'single_podcast_share', false ) ): 
		?>
			<?php if( function_exists( 'codeless_get_entry_tool_share' ) ) echo codeless_get_entry_tool_share('<span class="pre">'.esc_html__('Share this on', 'livecast').':</span>'); ?>
		<?php endif; ?>
	</div>	
	<?php if( codeless_get_mod( 'single_podcast_tags', true )  ): ?>
		<div class="entry-single-tags entry-single-tool">
			<?php echo codeless_single_podcast_tags( get_the_ID() ); ?>
		</div>
	<?php endif; ?>	
</div>