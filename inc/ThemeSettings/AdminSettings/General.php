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

class General extends SettingFactory
{

	public function section(){
		return array(
	        'id'          => 'general_setting',
			'title' => __(' General Settings', 'bookawesome'),
            'icon'  => '<div class="dashicons dashicons-admin-generic"></div>'
	    );
	}

	public function settings(){
	    $this->general();
	    $this->socials();
		$this->header();
		$this->footer();
		return $this->fieldsSettings;
	}

	public function general() {
        $settings = [
            [
                'label'       => __( 'General', 'bookawesome' ),
                'id'          => 'general',
                'type'        => 'tab',
                'section'     => 'general_setting',
            ],
            [
                'id'          => 'awe_phone_online',
                'label'       => __( 'Số điện thoại online', 'bookawesome' ),
                'type'        => 'text',
                'section'     => 'general_setting',
                'desc'        => ' '
            ],
            [
                'id'          => 'awe_phone_email',
                'label'       => __( 'Email', 'bookawesome' ),
                'type'        => 'text',
                'section'     => 'general_setting',
                'desc'        => ' '
            ]

        ];
        $this->setListSettings($settings);
    }

    public function socials() {
        $settings = [
            [
                'label'       => __( 'Socials', 'bookawesome' ),
                'id'          => 'social',
                'type'        => 'tab',
                'section'     => 'general_setting',
            ],
            [
                'id'      => 'awe_social_ig',
                'label'   => __( 'Instagram', 'bookawesome' ),
                'type'    => 'text',
                'section' => 'general_setting',
            ],
            [
                'id'      => 'awe_social_fb',
                'label'   => __( 'Facebook', 'bookawesome' ),
                'type'    => 'text',
                'section' => 'general_setting',
            ],
            [
                'id'      => 'awe_social_tw',
                'label'   => __( 'Twitter', 'bookawesome' ),
                'type'    => 'text',
                'section' => 'general_setting',
            ],
            [
                'id'      => 'awe_social_lin',
                'label'   => __( 'Linkedin', 'bookawesome' ),
                'type'    => 'text',
                'section' => 'general_setting',
            ],
            [
                'id'      => 'awe_social_youtube',
                'label'   => __( 'Youtube', 'bookawesome' ),
                'type'    => 'text',
                'section' => 'general_setting',
            ]
        ];
        $this->setListSettings($settings);
    }

	public function header() {
        $settings = [
            [
                'label'       => __( 'Header', 'bookawesome' ),
                'id'          => 'header',
                'type'        => 'tab',
                'section'     => 'general_setting',
            ],
            [
                'id'      => 'awe_header_logo',
                'label'   => __( 'Logo', 'bookawesome' ),
                'type'    => 'upload',
                'section' => 'general_setting',
            ],
            [
                'id'      => 'awe_header_url_down',
                'label'   => __( 'Url Download', 'bookawesome' ),
                'type'    => 'text',
                'section' => 'general_setting',
            ],
            
        ];
        $this->setListSettings($settings);
    }

    public function footer() {
        $settings = [
            [
                'label'       => __( 'Footer', 'bookawesome' ),
                'id'          => 'footer',
                'type'        => 'tab',
                'section'     => 'general_setting',
            ],
            [
                'id'      => 'awe_footer_logo',
                'label'   => __( 'Logo', 'bookawesome' ),
                'type'    => 'upload',
                'section' => 'general_setting',
            ],
            [
                'id'      => 'awe_footer_address',
                'label'   => __('Address', 'bookawesome'),
                'type'    => 'text',
                'section' => 'general_setting',
            ],
            [
                'id'      => 'awe_footer_down_apple_store',
                'label'   => __( 'Url Apple Store', 'bookawesome' ),
                'type'    => 'text',
                'section' => 'blog_setting',
            ],
            [
                'id'      => 'awe_footer_down_gg_play',
                'label'   => __( 'Url GooglePlay', 'bookawesome' ),
                'type'    => 'text',
                'section' => 'blog_setting',
            ],
            [
                'id'      => 'awe_footer_copyright',
                'label'   => __('Footer copyright', 'bookawesome'),
                'type'    => 'text',
                'section' => 'general_setting',
            ],
        ];
        $this->setListSettings($settings);
    }
}