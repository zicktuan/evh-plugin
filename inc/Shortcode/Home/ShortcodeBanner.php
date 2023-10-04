<?php
    namespace MyPlugin\Shortcode\Home;

    use MyPlugin\Shortcode\AbstractShortcode;

    class ShortcodeBanner extends AbstractShortcode
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
            return 'evh_banner_home';
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

            ob_start();
            include $this->parent->locateTemplate('home/shortcode-banner-home.tpl.php');
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
                    "param_name" => "awe_home_title",
                ),
                array(
                    "type" => "textfield",
                    "heading" => __( "Sub Title", "bookawesome" ),
                    "param_name" => "awe_home_sub_title",
                ),
                array(
                    'type'       => 'textarea',
                    'param_name' => 'awe_home_desc',
                    'heading'    => esc_html__('Description', 'bookawesome')
                ),
                array(
                    'type'       => 'attach_image',
                    'param_name' => 'awe_home_img',
                    'heading'    => esc_html__('Image', 'bookawesome')
                ),
                array(
                    "type" => "textfield",
                    "heading" => __( "Url App Store", "bookawesome" ),
                    "param_name" => "awe_home_app_store",
                ),
                array(
                    "type" => "textfield",
                    "heading" => __( "Url Google Play", "bookawesome" ),
                    "param_name" => "awe_home_gg_play",
                ),

            );

            return array(
                'name'        => esc_html__('Banner', 'bookawesome'),
                'description' => esc_html__('Banner Ngoài Trang Chủ', 'bookawesome'),
                'category'    => $this->get_category(),
                'icon'        => $this->get_icon(),
                'params'      => $params
            );
        }
    }
