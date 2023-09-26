<?php
    namespace MyPlugin\Shortcode\Home;

    use MyPlugin\Shortcode\AbstractShortcode;

    class ShortcodeAbout extends AbstractShortcode
    {
        public function __construct($self = null) {
            $this->parent = $self;
            add_shortcode($this->get_name(), array($this, 'render'));
            vc_lean_map($this->get_name(), array($this, 'map'));
        }

        /**
         * Get ShortCode name.
         *
         * @return string
         */
        public function get_name() {
            return 'evh_about_home';
        }

        /**
         * ShortCode handler.
         *
         * @param array $atts ShortCode attributes.
         *
         * @return string ShortCode output.
         */
        public function render($atts) {
            $atts = vc_map_get_attributes($this->get_name(), $atts);
            $atts = array_map('trim', $atts);

            $listItems = vc_param_group_parse_atts( $atts['items'] );

            ob_start();
            include $this->parent->locateTemplate('home/shortcode-about-home.tpl.php');
            return ob_get_clean();
        }

        /**
         * Get shortCode settings.
         *
         * @return array
         *
         * @see vc_lean_map()
         */
        public function map() {
            $params = array(
                array(
                    "type" => "textfield",
                    "heading" => __( "Title", "bookawesome" ),
                    "param_name" => "evh_about_title",
                ),
                array(
                    'type'       => 'attach_image',
                    'param_name' => 'evh_about_img',
                    'heading'    => esc_html__('Image', 'bookawesome')
                ),
                array(
                    "type" => "textarea",
                    "heading" => __( "Description", "bookawesome" ),
                    "param_name" => "evh_process_desc",
                ),
                array(
                    'type'       => 'param_group',
                    'param_name' => 'items',
                    'heading'    => esc_html__( 'Items', 'bookawesome' ),
                    'params'     => array(
                        array(
                            'type'       => 'attach_image',
                            'param_name' => 'icon',
                            'heading'    => esc_html__('Icon', 'bookawesome')
                        ),
                        array(
                            'type'       => 'textfield',
                            'param_name' => 'title',
                            'heading'    => esc_html__('Title', 'bookawesome')
                        )
                    )
                ),
                array(
                    'type'       => 'param_group',
                    'param_name' => 'items2',
                    'heading'    => esc_html__( 'Items', 'bookawesome' ),
                    'params'     => array(
                        array(
                            'type'       => 'attach_image',
                            'param_name' => 'icon',
                            'heading'    => esc_html__('Icon', 'bookawesome')
                        ),
                        array(
                            'type'       => 'textfield',
                            'param_name' => 'title',
                            'heading'    => esc_html__('Title', 'bookawesome')
                        )
                    )
                ),
                array(
                    "type" => "textfield",
                    "heading" => __( "Url Download Apple Store", "bookawesome" ),
                    "param_name" => "evh_about_download_apple",
                ),
                array(
                    "type" => "textfield",
                    "heading" => __( "Url Download Googles Play", "bookawesome" ),
                    "param_name" => "evh_about_download_gg_play",
                ),

            );

            return array(
                'name'        => esc_html__('Hướng dẫn tải ứng dụng', 'bookawesome'),
                'description' => esc_html__('Trang Chủ', 'bookawesome'),
                'category'    => $this->get_category(),
                'icon'        => $this->get_icon(),
                'params'      => $params
            );
        }
    }
