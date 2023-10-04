<?php
namespace MyPlugin\Shortcode\Home;

use MyPlugin\Shortcode\AbstractShortcode;

class ShortcodePost extends AbstractShortcode
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
        return 'evh_post_home';
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
        include $this->parent->locateTemplate('home/shortcode-post-home.tpl.php');
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
        $argsCat = [];
        $categories = get_categories();
        if( !empty($categories) ) {
            foreach($categories as $category ) {
                $cats = [];
                $cats['label'] = $category->name;
                $cats['id'] = $category->term_id;
                $argsCat[] = $cats;
            }
        }

        $params = array(
            array(
                "type" => "textfield",
                "heading" => __( "Title", "bookawesome" ),
                "param_name" => "evh_post_title",
            ),
            array(
                "type" => "textfield",
                "heading" => __( "Url read more", "bookawesome" ),
                "param_name" => "evh_post_url",
            ),
            array(
                "type" => "textfield",
                "heading" => __( "Button Name", "bookawesome" ),
                "param_name" => "awe_post_btn_name",
                "value" => "Learn more"
            ),
            array(
                "type" => "dropdown",
                "heading" => __( "List Post", "bookawesome" ),
                "param_name" => "evh_post_list",
                "value" => $argsCat,
            ),
            array(
                "type" => "textfield",
                "heading" => __( "Number Post", "bookawesome" ),
                "param_name" => "evh_number_post",
                "value" => 3,
            ),
        );

        return array(
            'name'        => esc_html__('Bài viết mới', 'bookawesome'),
            'description' => esc_html__('Trang chủ', 'bookawesome'),
            'category'    => $this->get_category(),
            'icon'        => $this->get_icon(),
            'params'      => $params
        );
    }
}
