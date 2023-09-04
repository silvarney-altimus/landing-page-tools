<?php
/**
 * Plugin Name:       Landing Page Tools
 * Plugin URI:        https://github.com/silvarney-altimus/landing-page-tools
 * Description:       Plugin WP de gestão de Landing Pages.
 * Author:          Silvarney Vieira
 * Author URI:      https://www.linkedin.com/in/silvarneyhenrique/
 * Text Domain:     landing-page-tools
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Landing_Page_Tools
 */

// Your code starts here.

defined('ABSPATH') || exit;

define('LPT_PLUGIN_FILE', __FILE__);
define('LPT_PLUGIN_PATH', untrailingslashit( plugin_dir_path( LPT_PLUGIN_FILE) ));
define('LPT_PLUGIN_URL', untrailingslashit( plugins_url( '/', LPT_PLUGIN_FILE) ));

if(file_exists(LPT_PLUGIN_PATH . '/vendor/autoload.php')) {
	require_once LPT_PLUGIN_PATH . '/vendor/autoload.php' ;
}

require_once LPT_PLUGIN_PATH . '/includes/Plugin.php';

if (class_exists('Plugin')) {
	function LPT()
	{
		return Plugin::getInstance();
	}

	add_action('plugins_loaded',array(LPT(),'init'));

	//activation
	register_activation_hook(LPT_PLUGIN_FILE, array($plugin, 'activate'));


}

//deactivation
register_deactivation_hook(LPT_PLUGIN_FILE, array($plugin, 'deactivate'));


