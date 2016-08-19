<?php
/**
 * Plugin Name: mTheme Github Updater
 * Plugin URI: #
 * Description: Plugin accompany the themes of mTheme.
 * Version: 1.0.0
 * Author: mTheme
 * Author URI: http://themeforest.net/user/mtheme_market
 * License: license purchased
 */

define('PLUGIN_SLUG', 'plugin-auto-update');
$pluginFile = WP_PLUGIN_DIR . PLUGIN_SLUG;

$pluginFile = plugin_dir_path( __FILE__);

if ( !class_exists('mTheme_Github_Updater') ) {
	require_once( 'class-mtheme-github-updater.php' );
}
if ( class_exists('mTheme_Github_Updater') ) {
	
	if ( is_admin() && file_exists('pluginFile') ) {
	    new mTheme_Github_Updater( $pluginFile, 'mautd29388', PLUGIN_SLUG );
	}
}

/* if ( !class_exists('WP_GitHub_Updater') ) {
	require_once( 'class-github-updater.php' );
}
if ( class_exists( 'WP_GitHub_Updater' ) ) {

	if ( is_admin() ) { // note the use of is_admin() to double check that this is happening in the admin

		$config = array(
				'slug'                => plugin_basename( $pluginFile ),
				'plugin'              => plugin_basename( $pluginFile ),
				'proper_folder_name'  => PLUGIN_SLUG,
				'api_url'             => 'https://api.github.com/repos/mautd29388/' . PLUGIN_SLUG,
				'raw_url'             => 'https://github.com/mautd29388/' . PLUGIN_SLUG . '/tree/master',
				'github_url'          => 'https://github.com/mautd29388/' . PLUGIN_SLUG,
				'zip_url'             => 'https://github.com/mautd29388/' . PLUGIN_SLUG . '/archive/master.zip',
				'sslverify'           => true,
				'access_token'        => ''
		);

		//new WP_GitHub_Updater( $config );

	}

} */
?>