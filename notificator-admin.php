<?php
/**
 * Admin functions
 */
    
add_action( 'admin_menu', 'add_admin_menu' );
function add_admin_menu() {
    add_menu_page(
        'iOS Notificator',
        'iOS Notificator',
        'manage_options',
        'notificator',
        'display_notificator_admin_page',
        'dashicons-smartphone'
    );
}
function display_notificator_admin_page() {
    require_once plugin_dir_path( __FILE__ ) . 'admin/partials/notificator-admin-display.php';
}

add_action( 'admin_enqueue_scripts', 'enqueue_notificator_admin_scripts' );
function enqueue_notificator_admin_scripts($notificator_version) {
    wp_enqueue_style( 'noticifator', plugin_dir_url( __FILE__ ) . 'css/notificator-admin.css', array(), $notificator_version, 'all' );
    wp_enqueue_style( 'jquery-multi-select-css', plugin_dir_url( __FILE__ ) . 'css/multi-select.css', array(), $notificator_version, 'all' );
    wp_enqueue_script( 'noticifator', plugin_dir_url( __FILE__ ) . 'js/notificator-admin.js', array( 'jquery' ), $notificator_version, false );
    wp_enqueue_script( 'jquery-multi-select-js', plugin_dir_url( __FILE__ ) . 'js/jquery.multi-select.js', array( 'jquery' ), $notificator_version, false );
}
