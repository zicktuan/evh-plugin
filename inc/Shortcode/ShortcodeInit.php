<?php
namespace MyPlugin\Shortcode;

use MyPlugin\Shortcode\Home\ShortcodeBanner;
use MyPlugin\Shortcode\Home\ShortcodeAbout;
use MyPlugin\Shortcode\Home\ShortcodeProcess;
use MyPlugin\Shortcode\Home\ShortcodeSystemHospital;
use MyPlugin\Shortcode\Home\ShortcodeTeam;
use MyPlugin\Shortcode\Home\ShortcodeInfor;
use MyPlugin\Shortcode\Home\ShortcodeContact;
use MyPlugin\Shortcode\Home\ShortcodePost;

/**
 * @author lookawesome team
 * @version 1.0
 * @package Shortcode
 * 
 * Init shortCode for theme lookAwesome
*/
class ShortcodeInit 
{
	function __construct() {
		add_action( 'plugins_loaded', array($this, 'includeTemplate') );
	}

	public function includeTemplate() {
//		new ShortcodeLatestPosts($this);
		new ShortcodeBanner($this);
		new ShortcodeAbout($this);
		new ShortcodeProcess($this);
		new ShortcodeSystemHospital($this);
		new ShortcodeTeam($this);
		new ShortcodeInfor($this);
		new ShortcodeContact($this);
		new ShortcodePost($this);
	}

	/**
	 * Get template path.
	 *
	 * @param  string $filename Filename with extension.
	 * @return string           Template path.
	 */
	public function locateTemplate( $filename ) {
		$theme_dir = apply_filters( 'lookawesome_shortcode_template_theme_dir', 'shortcodes/' );
		$plugin_path = MYPLUGIN_PLUGIN_DIR . 'templates/shortcodes/';

		$path = '';

		if ( locate_template( $theme_dir . $filename ) ) {
			$path = locate_template( $theme_dir . $filename );
		} elseif ( file_exists( $plugin_path . $filename ) ) {
			$path = $plugin_path . $filename;
		}

		return apply_filters( 'lookawesome_shortcode_locate_template', $path, $filename );
	}
}
