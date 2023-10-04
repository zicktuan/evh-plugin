<?php

namespace MyPlugin\ThemeSettings\AdminSettings;

use MyPlugin\ThemeSettings\SettingFactory;

/**
 * @author lookawesome team
 * @version 1.0
 * @package AdminSettings
 * 
 * Setting General theme setting for theme bookawesome
 */

class Blog extends SettingFactory
{

    public function section()
    {
        return array(
            'id'          => 'blog_setting',
            'title' => __(' Blog', 'bookawesome'),
            'icon'  => '<span class="dashicons dashicons-book-alt"></span>'
        );
    }

    public function settings()
    {
        $this->Blog();
        return $this->fieldsSettings;
    }


    public function Blog() {
        $setting = [
            [
                'label'       => __( 'General', 'bookawesome' ),
                'id'          => 'general',
                'type'        => 'tab',
                'section'     => 'blog_setting',
            ],
            [
                'id'      => 'blog_header_title_bg',
                'label'   => __( 'Title', 'bookawesome' ),
                'type'    => 'text',
                'section' => 'blog_setting',
            ],
            [
                'id'      => 'blog_header_content',
                'label'   => __( 'Content', 'bookawesome' ),
                'type'    => 'text',
                'section' => 'blog_setting',
            ],
            [
                'id'      => 'blog_header_short_content',
                'label'   => __( 'Short Desc', 'bookawesome' ),
                'type'    => 'text',
                'section' => 'blog_setting',
            ],
            [
                'id'      => 'blog_down_apple_store',
                'label'   => __( 'Url Apple Store', 'bookawesome' ),
                'type'    => 'text',
                'section' => 'blog_setting',
            ],
            [
                'id'      => 'blog_down_gg_play',
                'label'   => __( 'Url GooglePlay', 'bookawesome' ),
                'type'    => 'text',
                'section' => 'blog_setting',
            ],
        ];
        $this->setListSettings($setting);
    }

    
}
