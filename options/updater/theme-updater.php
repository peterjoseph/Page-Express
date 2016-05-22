<?php
if ( !class_exists( 'Theme_Updater_Admin' ) ) {
	include( dirname( __FILE__ ) . '/theme-updater-admin.php' );
}

$updater = new Theme_Updater_Admin(

	$config = array(
		'remote_api_url' => 'http://objecttheme.com',
		'item_name' => 'Object Theme',
		'theme_slug' => 'object-theme',
		'version' => '1.0.0',
		'author' => 'Peter Joseph',
		'download_id' => '',
		'renew_url' => ''
	),

	$strings = array(
		'theme-license' => __( 'Object License', 'theme-updater' ),
		'enter-key' => __( 'Enter your license key.', 'theme-updater' ),
		'license-key' => __( 'License Key', 'theme-updater' ),
		'license-action' => __( 'License Action', 'theme-updater' ),
		'deactivate-license' => __( 'Deactivate', 'theme-updater' ),
		'activate-license' => __( 'Activate', 'theme-updater' ),
		'status-unknown' => __( 'License status is unknown.', 'theme-updater' ),
		'renew' => __( 'Renew Licence?', 'theme-updater' ),
		'unlimited' => __( 'unlimited', 'theme-updater' ),
		'license-key-is-active' => __( 'License key is active.', 'theme-updater' ),
		'expires%s' => __( 'Expires %s.', 'theme-updater' ),
		'%1$s/%2$-sites' => __( '<br>You have %1$s / %2$s sites activated.', 'theme-updater' ),
		'license-key-expired-%s' => __( 'Your License key has expired %s.', 'theme-updater' ),
		'license-key-expired' => __( 'Your License key has expired.', 'theme-updater' ),
		'license-keys-do-not-match' => __( 'License keys do not match.', 'theme-updater' ),
		'license-is-inactive' => __( 'License is inactive.', 'theme-updater' ),
		'license-key-is-disabled' => __( 'License key is disabled.', 'theme-updater' ),
		'site-is-inactive' => __( 'Licence server is inactive.', 'theme-updater' ),
		'license-status-unknown' => __( 'License status is unknown.', 'theme-updater' ),
		'update-notice' => __( "Updating this theme will lose any customizations you have made. 'Cancel' to stop, 'OK' to update.", 'theme-updater' ),
		'update-available' => __('<strong>%1$s %2$s</strong> is available. <a href="%3$s" class="thickbox" title="%4s">Check out what\'s new</a> or <a href="%5$s"%6$s>update now</a>.', 'theme-updater' )
	)

);