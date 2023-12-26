<?php 
/**
 * Timeline Shortcode 
 * HTML
 */
if( !function_exists( 'codeless_timeline_shortcode' ) && function_exists( 'codeless_shortcode_add' ) ){
    function codeless_timeline_shortcode( $atts ) {
        $codeless = shortcode_atts( array(
            'title'         	=> '',
            'data'      		=> '',                              
        ), $atts );                     
        ob_start();  
        codeless_print_timeline_shortcode( $codeless );       
        return ob_get_clean();
    }
    codeless_shortcode_add( 'cl_timeline', 'codeless_timeline_shortcode' );
}
/**
 * Guest Shortcode 
 * HTML
 */
if( !function_exists( 'codeless_guest_shortcode' ) && function_exists( 'codeless_shortcode_add' )  ){
    function codeless_guest_shortcode( $atts ) {
        $codeless = shortcode_atts( array(
            'image'             => '',
            'name'         		=> '',
            'role'      		=> '',
            'description'       => '',
            'twitter'    		=> '',
            'facebook'   	   	=> '',
            'instagram'		    => '',                    
        ), $atts );                     
        ob_start();  
        codeless_print_guest_shortcode( $codeless );       
        return ob_get_clean();
    }
    codeless_shortcode_add( 'cl_guest', 'codeless_guest_shortcode' );
}

/**
 * Print Guest Shortcode HTML
 * HTML
 */
if( !function_exists( 'codeless_print_timeline_shortcode' ) && function_exists( 'codeless_shortcode_add' )  ){
	function codeless_print_timeline_shortcode( $codeless = array() ){
		extract( $codeless );
		$title = !empty( $title ) ? $title : '';
		$data  = !empty( $data ) ? $data : '';
		$timeline_data = array();
		if( !empty( $data ) ){
			$data = parse_str( str_replace("&amp;", "&", $data ), $timeline_data);
		}		
		ob_start();
		if( !empty( $title ) || !empty( $timeline_data ) ){
			?>
			<div class="entry-timeline">
				<?php if( !empty( $title ) ){ ?>
					<h2><?php echo esc_html( $title ); ?></h2>	
				<?php } ?>
				<?php 
					if( !empty( $timeline_data ) ){ 
						foreach ($timeline_data as $key => $value) {
						if( !empty( $key ) && !empty( $value ) ){ ?>
							<p><a href="#" class="codeless-jump-to-player" data-position="<?php echo esc_attr( $key ) ?>">
								<span>
									<?php echo esc_html( gmdate("i:s", strtotime("1970-01-01 {$key} UTC"))); ?>
								</span>
								<strong>
									<?php echo esc_html( $value ); ?>
								</strong></a>
							</p>
					<?php } ?>
				<?php } } ?>
			</div>
			<?php 
		}
		echo ob_get_clean();
	}
}

/**
 * Print Guest Shortcode HTML
 * HTML
 */
if( !function_exists( 'codeless_print_guest_shortcode' ) && function_exists( 'codeless_shortcode_add' )  ){
	function codeless_print_guest_shortcode( $codeless = array() ){
		extract( $codeless );
		$image 			= !empty( $image ) ? $image : '';
		$name 			= !empty( $name ) ? $name : '';
		$role 			= !empty( $role ) ? $role : '';
		$description	= !empty( $description ) ? $description : '';
		$twitter 		= !empty( $twitter ) ? $twitter : '';
		$facebook 		= !empty( $facebook ) ? $facebook : '';
		$instagram 		= !empty( $instagram ) ? $instagram : '';
		ob_start();
		if( !empty( $image ) || !empty( $name ) || !empty( $role ) || !empty( $description ) || !empty( $twitter ) || !empty( $facebook ) || !empty( $instagram ) ){
			?>
			<div class="entry-guest">
				<?php if( !empty( $image ) ){ ?>
					<figure class="entry-guest-img">
						<img src="<?php echo esc_url( $image ); ?>" alt="<?php esc_attr_e('image', 'livecast') ?>">
					</figure>
				<?php } ?>
				<?php 
					if( !empty( $name ) || !empty( $role ) || !empty( $description ) || !empty( $twitter ) || !empty( $facebook ) || !empty( $instagram ) ){ 
					?>
					<div class="guest-content">
						<?php if( !empty( $name ) ){ ?>
							<h3><?php echo esc_html( $name ); ?></h3>
						<?php } ?>
						<?php if( !empty( $role ) ){ ?>
							<span><?php echo esc_html( $role ); ?></span>
						<?php } ?>
						<?php if( !empty( $description ) ){ ?>
							<p><?php echo esc_html( $description ); ?></p>
						<?php } ?>
						<?php if( !empty( $twitter ) ){ ?>
							<a href="<?php echo esc_url( $twitter ); ?>"><i class="cl-icon-twitter"></i></a>
						<?php } ?>
						<?php if( !empty( $facebook ) ){ ?>
							<a href="<?php echo esc_url( $facebook ); ?>"><i class="cl-icon-facebook"></i></a>
						<?php } ?>
						<?php if( !empty( $instagram ) ){ ?>
							<a href="<?php echo esc_url( $instagram ); ?>"><i class="cl-icon-instagram"></i></a>
						<?php } ?>
					</div>
				<?php } ?>
			</div>
			<?php 
		}
		echo ob_get_clean();
	}
}