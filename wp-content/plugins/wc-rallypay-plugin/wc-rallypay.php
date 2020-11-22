<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://rallypay.com
 * @since             1.0.0
 * @package           Wc_RallyPay
 *
 * @wordpress-plugin
 * Plugin Name:       RallyPay for WooCommerce
 * Plugin URI:        https://rallypay.com
 * Description:       Integrate RallyPay payment account to woocommerce site.
 * Version:           1.0.0
 * Author:            RallyPay
 * Author URI:        https://rallypay.com
 * Text Domain:       Wc_RallyPay
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
	die;
}

/*if (!in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) {
	echo '<div class="error"><p><strong>' . sprintf(esc_html__('RallyPay requires WooCommerce to be installed and active. You can download %s here.', 'wc-rallypay'), '<a href="https://woocommerce.com/" target="_blank">WooCommerce</a>') . '</strong></p></div>';
	exit;
}
*/
/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define('Wc_RallyPay_VERSION', '1.0.0');


/*require_once (plugin_dir_path(__DIR__)  . 'woocommerce/woocommerce.php');*/
require_once plugin_dir_path(__FILE__) . 'includes/class-wc-rallypay.php';
/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wc-rallypay-activator.php
 */
function activate_wc_rallypay()
{
	require_once plugin_dir_path(__FILE__) . 'includes/class-wc-rallypay-activator.php';
	Wc_RallyPay_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wc-rallypay-deactivator.php
 */
function deactivate_wc_rallypay()
{
	require_once plugin_dir_path(__FILE__) . 'includes/class-wc-rallypay-deactivator.php';
	Wc_RallyPay_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_wc_rallypay');
register_deactivation_hook(__FILE__, 'deactivate_wc_rallypay');

function run_wc_rallypay() {
	$wc_rallypay = new Wc_RallyPay();
	$wc_rallypay->run();
}

run_wc_rallypay();
