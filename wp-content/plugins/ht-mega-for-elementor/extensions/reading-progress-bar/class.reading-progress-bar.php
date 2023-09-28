<?php 
namespace HTMega_Reading_Progress_Bar;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class HTMegaReadingProgressBar_Elementor {

    private static $_instance = null;
    public static function instance() {
        if ( is_null( self::$_instance ) ) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }
	
    public function __construct() {
		add_action('elementor/documents/register_controls', [ $this, 'register_controls' ], 10);
        add_action('wp_enqueue_scripts', [ $this, 'enqueue_scripts' ] );
    }
	/**
	 * Enqueue scripts.
	 *
	 * Enqueue required JS dependencies for the extension.
	 *
	 * @since 2.2.5
	 * @access public
	 */
	public static function enqueue_scripts() {
        // Enqueue js and css for individual page 
        $htmega_rpbar_enable = htmega_get_elementor_option( 'htmega_rpbar_enable', get_the_ID() );
        if( isset( $htmega_rpbar_enable ) &&  'yes' == $htmega_rpbar_enable ) {
            wp_enqueue_script( 'htmega-rpbar-script', HTMEGA_ADDONS_PL_URL . 'extensions/reading-progress-bar/assets/js/htmega-reading-progress-bar.js', array('jquery'),HTMEGA_VERSION );
            wp_enqueue_style( 'htmega-rpbar-css', HTMEGA_ADDONS_PL_URL . 'extensions/reading-progress-bar/assets/css/htmega-reading-progress-bar.css', array(), HTMEGA_VERSION );
        }

	}

	/**
	 * Register Reading progress bar controls.
	 *
	 * @since 2.2.5
	 * @access public
	 * @param object $element for current element.
	 */
	public function register_controls( $element ) {

		$tabs = Controls_Manager::TAB_SETTINGS;

		$element->start_controls_section(
			'section_htmega_rpbar_section',
			array(
				'label' => __( 'HTMega Reading Progress Bar', 'htmega-addons' ),
				'tab'   => $tabs,
			)
		);

        $element->add_control(
            'htmega_rpbar_enable',
            [
                'label' => __('Enable Reading Progress Bar', 'htmega-addons'),
                'type' => Controls_Manager::SWITCHER,
                'default' => 'no',
                'label_on' => __('Yes', 'htmega-addons'),
                'label_off' => __('No', 'htmega-addons'),
                'return_value' => 'yes',
            ]
        );
        $element->add_control(
            'htmega_rpbar_notice',
            [
                'raw'             => __( 'The <b>Reading Progress Bar settings</b> are not functional in Editor mode. Please preview the page  & Scroll to see the desired result.', 'htmega-addons' ),
                'type'            => Controls_Manager::RAW_HTML,
                'content_classes' => 'elementor-panel-alert elementor-panel-alert-info',
                'condition'   => [
                    'htmega_rpbar_enable' => 'yes'
                ],
            ]
        );
        $element->add_control(
            'htmega_rpbar_position',
            [
                'label' => esc_html__('Position', 'htmega-addons'),
                'type' => Controls_Manager::SELECT,
                'default' => 'top',
                'label_block' => false,
                'options' => [
                    'top' => esc_html__('Top', 'htmega-addons'),
                    'bottom' => esc_html__('Bottom', 'htmega-addons'),
                ],
                'separator' => 'before',
                'condition' => [
                    'htmega_rpbar_enable' => 'yes',
                ],
				'selectors' => [
                    '{{WRAPPER}} .htmega-rpbar-wrap' => '{{VALUE}}: 0',
                ],
            ]
        );

        $element->add_control(
            'htmega_rpbar_height',
            [
                'label' => __('Height', 'htmega-addons'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 5,
                ],
                'selectors' => [
                    '{{WRAPPER}} .htmega-rpbar-wrap,.htmega-rpbar-wrap .htmega-reading-progress-bar' => 'height: {{SIZE}}{{UNIT}} !important',
                ],
                'separator' => 'before',
                'condition' => [
                    'htmega_rpbar_enable' => 'yes',
                ],
            ]
        );

        $element->add_control(
            'htmega_rpbar_bg_color',
            [
                'label' => __('Background Color', 'htmega-addons'),
                'type' => Controls_Manager::COLOR,
                'default' => '',
                'selectors' => [
                    'body .htmega-rpbar-wrap' => 'background-color: {{VALUE}}',
                ],
                'separator' => 'before',
                'condition' => [
                    'htmega_rpbar_enable' => 'yes',
                ],
            ]
        );

        $element->add_control(
            'htmega_rpbar_fill_color',
            [
                'label' => __('Fill Color', 'htmega-addons'),
                'type' => Controls_Manager::COLOR,
                'default' => '#D43A6B',
                'selectors' => [
                    '{{WRAPPER}} .htmega-rpbar-wrap .htmega-reading-progress-bar' => 'background-color: {{VALUE}}',
                ],
                'separator' => 'before',
                'condition' => [
                    'htmega_rpbar_enable' => 'yes',
                ],
            ]
        );

        $element->add_control(
            'htmega_rpbar_animation_speed',
            [
                'label' => __('Animation Speed', 'htmega-addons'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 50,
                ],
                'selectors' => [
                    '{{WRAPPER}} .htmega-rpbar-wrap .htmega-reading-progress-bar' => 'transition: width {{SIZE}}ms ease;',
                ],
                'separator' => 'before',
                'condition' => [
                    'htmega_rpbar_enable' => 'yes',
                ],
            ]
        );
		$element->end_controls_section();

	}

}

HTMegaReadingProgressBar_Elementor::instance();