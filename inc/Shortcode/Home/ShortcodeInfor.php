<?php
    namespace MyPlugin\Shortcode\Home;

    use MyPlugin\Shortcode\AbstractShortcode;

    class ShortcodeInfor extends AbstractShortcode
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
            return 'evh_infor_home';
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
            include $this->parent->locateTemplate('home/shortcode-infor-home.tpl.php');
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
                    'type'       => 'attach_image',
                    'param_name' => 'evh_infor_bg',
                    'heading'    => esc_html__('Background', 'bookawesome')
                ),
                array(
                    "type" => "textfield",
                    "heading" => __( "Title", "bookawesome" ),
                    "param_name" => "evh_infor_title",
                ),
                array(
                    'type'       => 'param_group',
                    'param_name' => 'items',
                    'heading'    => esc_html__( 'Items', 'bookawesome' ),
                    'params'     => array(
                        array(
                            'type'       => 'textfield',
                            'param_name' => 'text',
                            'heading'    => esc_html__('Text', 'bookawesome')
                        ),
                    )
                ),
                array(
                    "type" => "textfield",
                    "heading" => __( "Text Button", "bookawesome" ),
                    "param_name" => "evh_infor_text_btn",
                    "value" => "Ứng Tuyển Ngay",
                ),
                array(
                    "type" => "textfield",
                    "heading" => __( "Email", "bookawesome" ),
                    "param_name" => "evh_infor_email",
                ),
                array(
                    "type" => "textfield",
                    "heading" => __( "Phone", "bookawesome" ),
                    "param_name" => "evh_infor_phone",
                ),
            );

            return array(
                'name'        => esc_html__('Thông tin', 'bookawesome'),
                'description' => esc_html__('Trang Chủ', 'bookawesome'),
                'category'    => $this->get_category(),
                'icon'        => $this->get_icon(),
                'params'      => $params
            );
        }
    }
