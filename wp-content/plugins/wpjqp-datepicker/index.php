<?php

defined('ABSPATH') or die('No script kiddies please!');
/*

  Plugin Name: WP jquery persianDatepicker plugin

  Plugin URI: http://www.github.com/behzadi/wpjqp-datepicker

  Description: WP jquery persian Datepicker is a great jquery plugin for wordpress. You can manage CSS from your theme.

  Version: 0.1.0

  Author: Mohammad Hasan Behzadi

  Author URI: http://www.codestylish.com

  License: GPL3

 */

require_once(ABSPATH . 'wp-admin/includes/upgrade.php');


global $wpjqp_premium_link, $wpjqp_dir, $wpjqp_pro, $wpjqp_data, $wpjqp_options, $wpjqp_styles;
$wpjqp_dir = plugin_dir_path(__FILE__);
$rendered = FALSE;
$wpjqp_pro = file_exists($wpjqp_dir . 'inc/functions_extended.php');
$wpjqp_data = get_plugin_data(__FILE__);
$wpjqp_premium_link = 'http://codestylish.com/';

$wpjqp_options = array(
    'dateFormat' => 'text',
    'changeMonth' => 'checkbox',
    'changeYear' => 'checkbox',
    'closeText' => 'text',
    'currentText' => 'text'
);

$wpjqp_data = get_plugin_data(__FILE__);

//$wpjqp_styles = array('default');

include('inc/functions.php');



add_action('admin_enqueue_scripts', 'register_wpjqpdp_scripts');
add_action('wp_enqueue_scripts', 'register_wpjqpdp_scripts');



if (is_admin()) {
    add_action('admin_menu', 'wpjqpdp_menu');
    $plugin = plugin_basename(__FILE__);
    add_filter("plugin_action_links_$plugin", 'wpjqpdp_plugin_links');

    add_action('admin_footer', 'wpjqpdp_footer_scripts');
} else {


    add_action('wp_footer', 'wpjqpdp_footer_scripts');
}


	