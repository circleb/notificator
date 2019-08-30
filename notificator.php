<?php
/**
 * Plugin Name:       iOS Notificator
 * Plugin URI:        iosnotificator.com
 * Description:       Send notifications to your subscribers, directly from your WordPress admin.
 * Version:           0.1.0
 * Author:            Ben Owen
 * Author URI:        benowen.net
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'NOTIFICATOR_VERSION', '0.1.0' );
$notificator_version = '0.1.0';

// Functions for activation and deactivation
require_once plugin_dir_path( __FILE__ ) . 'notificator-activate.php';

// Functions for the admin
require_once plugin_dir_path( __FILE__ ) . 'notificator-admin.php' ;
