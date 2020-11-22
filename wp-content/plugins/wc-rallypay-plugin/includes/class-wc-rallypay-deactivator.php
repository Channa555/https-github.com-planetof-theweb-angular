<?php

/**
 * Fired during plugin deactivation
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Wc_RallyPay
 * @subpackage Wc_RallyPay/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Wc_RallyPay
 * @subpackage Wc_RallyPay/includes
 * @author     Your Name <email@example.com>
 */
class Wc_RallyPay_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {
		/*delete_option( "woocommerce_wc_rallypay_card_settings" );
		delete_option( "woocommerce_wc_rallypay_bank_settings" );*/
		delete_option( "wc_rallypay_plugin_api_client_name" );
		delete_option( "wc_rallypay_plugin_api_client_id" );
		delete_option( "wc_rallypay_plugin_api_token" );
		delete_option( "wc_rallypay_plugin_api_test_mode" );
		delete_option( "wc_rallypay_plugin_api_test_url" );
	}

}
