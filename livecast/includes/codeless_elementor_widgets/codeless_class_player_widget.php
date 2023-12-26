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
 * CE Player Widget
 *
 * @since 1.0.0
 */
class Codeless_Player_Widget extends Widget_Base {

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
		return 'ce-player';
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
		return esc_html__( 'Player', 'livecast' );
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
		return [ 'ce-content-widgets' ];
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
				'label' => esc_attr__( 'Player', 'livecast' ),
			]
		);

    
        $this->add_control(
			'default_podcast',
			[
				'label' => esc_attr__( 'Default Podcast', 'livecast' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'default',
				'options' => \COWIDGETS_Helpers::getItems( 'podcast', false ),
			]
        );

		$this->add_control(
			'style',
			[
				'label' => esc_attr__( 'Style', 'livecast' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default'	=> esc_attr__( 'Same line style', 'livecast' ),
					'with_image'		=> esc_attr__( 'With Image', 'livecast' )	
				],
			]
        );

        $this->add_control(
			'style',
			[
				'label' => esc_attr__( 'Style', 'livecast' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default'	=> esc_attr__( 'Same line style', 'livecast' ),
					'with_image'=> esc_attr__( 'With Image', 'livecast' ),
					'with_image_small'	=> esc_attr__( 'With Image Small', 'livecast' ),	
				],
			]
        );

        $this->add_control(
			'style_colors',
			[
				'label' => esc_attr__( 'Colors', 'livecast' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'dark',
				'options' => [
					'dark'	=> esc_attr__( 'Dark', 'livecast' ),
					'light'		=> esc_attr__( 'Light', 'livecast' )
				],
			]
        );

        $this->add_control(
			'background_color',
			[
				'label' => esc_attr__( 'BG Color', 'livecast' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				
				'selectors' => [
					'{{WRAPPER}} .codeless-player, .mejs-volume-total, {{WRAPPER}} .codeless-player-collapsed .codeless-player-toggle' => 'background: {{VALUE}}',
                    '{{WRAPPER}} .mejs-volume-button:hover > button:before, {{WRAPPER}} .mejs__speed-selector,{{WRAPPER}} .mejs-speed-selector, {{WRAPPER}} .mejs-speed-button:hover button, {{WRAPPER}} .mejs-playpause-button button' => 'color: {{VALUE}}',
                    '{{WRAPPER}}' => '--player-original-bg-color: {{VALUE}}'
				],
			]
		);

        $this->add_control(
			'foreground_color',
			[
				'label' => esc_attr__( 'Foreground Color', 'livecast' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				
				'selectors' => [
					'{{WRAPPER}} .codeless-player, {{WRAPPER}} .codeless-player a, {{WRAPPER}} .mejs-button>button' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .mejs-volume-button>.mejs-volume-slider,{{WRAPPER}} .mejs__speed-selector, {{WRAPPER}} .mejs-speed-selector, {{WRAPPER}} .mejs-playpause-button' => 'background-color: {{VALUE}}',
                    '{{WRAPPER}} .mejs-time-handle-content, {{WRAPPER}} .light .codeless-player-nav a' => 'border-color: {{VALUE}}'
                ],
			]
		);

        $this->add_control(
			'accent_color',
			[
				'label' => esc_attr__( 'Accent Color', 'livecast' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				
				'selectors' => [
					'{{WRAPPER}} .codeless-player .codeless-player-category a' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .mejs-time-current, {{WRAPPER}} .mejs-time-handle-content' => 'background-color: {{VALUE}}',
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
		$codeless_player = \Codeless_Player::get_instance();
        ?>
        <div class="codeless-inline-player" data-audio-id="<?php echo esc_attr( $settings['default_podcast'] ) ?>" href="<?php echo get_permalink( $settings['default_podcast'] ) ?>">
        <?php
        $codeless_player->display_player_widget( array('is_widget'=>true, 'colors' => $settings['style_colors'], 'style' => $settings['style']  ) );
		?>
        </div>
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
