<?php
/**
 * The template for displaying search forms
 *
 * @package Livecast WordPress Theme
 * @subpackage Template Parts
 * @version 1.0.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Placeholder
$placeholder = apply_filters( 'codeless_search_form_placeholder', esc_html__( 'Search the blog', 'livecast' ) );
$unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="<?php echo esc_attr( $unique_id ); ?>">
		<span class="screen-reader-text"><?php echo esc_html__( 'Search for:', 'livecast' ); ?></span>
	</label>
	<input type="search" id="<?php echo esc_attr( $unique_id ); ?>" class="search-field" placeholder="<?php echo esc_attr( $placeholder ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	<i class="feather-search feather"></i> 
</form>