<?php
/**
 * Elementor Classes.
 *
 * @package header-footer-elementor
 */

namespace CODELESS\WidgetsManager\Widgets;

use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Scheme_Typography;
use Elementor\Widget_Base;
use Elementor\Group_Control_Text_Shadow;
use Elementor\Scheme_Color;
use Elementor\Core\Schemes;
use Elementor\Group_Control_Border;

if ( ! defined( 'ABSPATH' ) ) {
	exit;   // Exit if accessed directly.
}

/**
 * CE Search Widget
 *
 * @since 1.0.0
 */
class Codeless_Search_Widget extends Widget_Base {

	/**
	 * Retrieve the widget name.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'ce-search';
	}

	/**
	 * Retrieve the widget title.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return esc_attr__( 'Header Search', 'livecast' );
	}

	/**
	 * Retrieve the widget icon.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'ce-icon-menu-search';
	}

	/**
	 * Retrieve the list of categories the widget belongs to.
	 *
	 * Used to determine where to display the widget in the editor.
	 *
	 * Note that currently Elementor supports only one category.
	 * When multiple categories passed, Elementor uses the first one.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'ce-header-widgets' ];
	}

	/**
	 * Register cart controls controls.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function _register_controls() {

		$this->register_general_content_controls();		
	}

	/**
	 * Register Menu Search General Controls.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function register_general_content_controls() {

		$this->start_controls_section(
			'section_general_fields',
			[
				'label' => esc_attr__( 'Header Search', 'livecast' ),
			]
		);

		$this->add_control(
			'item_style',
			[
				'label' => esc_attr__( 'Style', 'livecast' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default'	=> esc_attr__( 'Default Light Header', 'livecast' ),
					'dark'		=> esc_attr__( 'Dark Header', 'livecast' ),
					'grey'	=> esc_attr__( 'Grey', 'livecast' ),	
				],
			]
        );

		$this->end_controls_section();
	}

	/**
	 * Render Menu Search output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {

		$settings = $this->get_settings();	
		$style = !empty( $settings['item_style'] ) ? $settings['item_style'] : 'default';
		?>
		<div class="header-el cl-h-cl_header_tools ">
			<div class="extra_tools_wrapper ">        
		        <div class="search tool search-style-creative">
		            <a href="#" id="header_search_btn" class="tool-link <?php echo esc_attr( $style ); ?>">
		                <span class="cl-img-search cl-img"><i aria-hidden="true" class="feather  feather-search"></i></span>
		                <span class="show-side-header">
		                </span>
		            </a>
		        </div><!-- .search.tool -->			    
			</div>
		</div>	
		<?php if ( !\Elementor\Plugin::$instance->editor->is_edit_mode() ) { ?>
		<div class="creative-search">
                <button id="btn-search-close" class="btn btn--search-close" aria-label="Close search form"><svg class="icon icon--cross"><use xlink:href="#icon-cross"><svg id="icon-cross" viewBox="0 0 24 24">
                    <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
                </svg></use></svg></button>
                    <div class="search__inner search__inner--up">
                        <form class="search__form" action="<?php echo home_url('/'); ?>">
                            <input class="search__input" name="s" type="search" placeholder="<?php esc_attr_e('Search', 'livecast'); ?>" autocomplete="off" spellcheck="false">
                            <span class="search__info"><?php esc_html_e('Hit enter to search or ESC to close', 'livecast'); ?></span>
                        </form>
                    </div>
                    
            </div>	
        <?php } ?>
		<?php
	}

	/**
	 * Render Menu Search output in the editor.
	 *
	 * Written as a Backbone JavaScript template and used to generate the live preview.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function content_template() {
	}

	/**
	 * Render cart output in the editor.
	 *
	 * Written as a Backbone JavaScript template and used to generate the live preview.
	 *
	 * Remove this after Elementor v3.3.0
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function _content_template() {
		$this->content_template();
	}
}
