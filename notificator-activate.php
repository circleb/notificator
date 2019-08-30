<?php
/**
 * Activiation aand deactivation functions.
 */

function activate_notificator() {
    global $iosnotificator_db_version;
    $iosnotificator_db_version = '1.0';

    global $wpdb;

    $table_name = $wpdb->prefix . "iosnotificator_devices"; 
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
        `id` int(9) UNSIGNED NOT NULL,
        `appversion` varchar(25) DEFAULT NULL,
        `devicetoken` char(64) NOT NULL,
        `devicename` varchar(255) NOT NULL,
        `username` varchar(255) NOT NULL,
        `created` datetime NOT NULL DEFAULT current_timestamp(),
        `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
    ) $charset_collate;";

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );
    add_option( 'iosnotificator_db_version', $iosnotificator_db_version );
}

function deactivate_notificator() {
    // Deactivation Code
}

register_activation_hook( __FILE__, 'activate_notificator' );
register_deactivation_hook( __FILE__, 'deactivate_notificator' );
