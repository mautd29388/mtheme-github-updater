<?php
/**
 * Plugin Name: mTheme Github Updater
 * Plugin URI: #
 * Description: Plugin accompany the themes of mTheme.
 * Version: 1.0.5
 * Author: mTheme
 * Author URI: http://themeforest.net/user/mtheme_market
 * License: license purchased
 */

//define('PLUGIN_SLUG', 'plugin-auto-update');
//$pluginFile = WP_PLUGIN_DIR . PLUGIN_SLUG;

$projects 	= array();
$projects[] = 'mtheme-github-updater';
$projects[] = 'plugin-auto-update';

/*
 * Ensure get_plugins() function is available.
 */
include_once( ABSPATH . '/wp-admin/includes/plugin.php' );

if ( !class_exists('mTheme_Github_Updater') ) {
	require_once( 'class-mtheme-github-updater.php' );
} 
if ( class_exists('mTheme_Github_Updater') ) {
	
	if ( is_admin() ) {
		
		$plugins = get_plugins();
		foreach ( (array) $plugins as $plugin => $headers ) {
		
			if ( isset($headers['Author']) && $headers['Author'] == 'mTheme' ) {
				foreach ( $projects as $project ) {
					if ( strchr($plugin, $project) ) {
						$path = trailingslashit(WP_PLUGIN_DIR) . $plugin;
						new mTheme_Github_Updater( $path, 'mautd29388', $project );
						
						break;
					}
				}
			}
		}
	}
}
?>
