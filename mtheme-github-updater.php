<?php
/**
 * Plugin Name: mTheme Github Updater
 * Plugin URI: #
 * Description: Plugin accompany the themes of mTheme.
 * Version: 1.0.2
 * Author: mTheme
 * Author URI: http://themeforest.net/user/mtheme_market
 * License: license purchased
 */

define('PLUGIN_SLUG', 'plugin-auto-update');
$pluginFile = WP_PLUGIN_DIR . PLUGIN_SLUG;

if ( !class_exists('mTheme_Github_Updater') ) {
	require_once( 'class-mtheme-github-updater.php' );
}
if ( class_exists('mTheme_Github_Updater') ) {
	
	if ( is_admin() ) {
	    new mTheme_Github_Updater( __FILE__, 'mautd29388', "mtheme-github-updater" );
	}
}
?>
