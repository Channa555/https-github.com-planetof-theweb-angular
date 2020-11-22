
<?php

class Wc_RallyPay_Configuration {
    public static $wc_rallypay_plugin_api_client_name = 'wc_rallypay_plugin_api_client_name';
    public static $wc_rallypay_plugin_api_client_id = 'wc_rallypay_plugin_api_client_id';
    public static $wc_rallypay_plugin_api_token = 'wc_rallypay_plugin_api_token';
    public static $wc_rallypay_plugin_api_test_mode = 'wc_rallypay_plugin_api_test_mode';
    public static $wc_rallypay_plugin_api_test_url = 'wc_rallypay_plugin_api_test_url';    

    public $client_name;
    public $client_id;
    public $api_token;
    public $is_test_mode;
    public $test_url;

    function __construct() {
        $this->client_name = get_option( Wc_RallyPay_Configuration::$wc_rallypay_plugin_api_client_name );
        $this->client_id = get_option( Wc_RallyPay_Configuration::$wc_rallypay_plugin_api_client_id );
        $this->api_token = get_option( Wc_RallyPay_Configuration::$wc_rallypay_plugin_api_token );
        $saved_test_mode = get_option(Wc_RallyPay_Configuration::$wc_rallypay_plugin_api_test_mode);
        if($saved_test_mode == '1') {
            $this->is_test_mode = true;
        } else {
            $this->is_test_mode = false;
        }
        $this->test_url = get_option(Wc_RallyPay_Configuration::$wc_rallypay_plugin_api_test_url);
    }

}
