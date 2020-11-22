<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Wc_RallyPay
 * @subpackage Wc_RallyPay/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Wc_RallyPay
 * @subpackage Wc_RallyPay/admin
 * @author     Your Name <email@example.com>
 */
class Wc_RallyPay_Admin
{

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	private $configuration;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct($plugin_name, $version)
	{

		$this->plugin_name = $plugin_name;
		$this->version = $version;
		$this->configuration = new Wc_RallyPay_Configuration();
		
	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles()
	{

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wc_RallyPay_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wc_RallyPay_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__) . 'css/wc-rallypay-admin.css', array(), $this->version, 'all');
	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts()
	{

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wc_RallyPay_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wc_RallyPay_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__) . 'js/wc-rallypay-admin.js', array('jquery'), $this->version, false);
	}

	public function wc_rallypay_menu()
	{
		add_options_page(
			'RallyPay Configuration',
			'RallyPay Settings',
			'manage_options',
			'wc-rallypay-options-section',
			array($this, 'wc_rallypay_configuration_page')
		);
	}

	public function wc_rallypay_configuration_page()
	{
		include_once(plugin_dir_path(__DIR__) . 'admin/partials/wc-rallypay-admin-display.php');
	}

	public function display_wc_rallypay_api_client_name_element()
	{
		?>
		<input type="text" size="100" name="wc_rallypay_plugin_api_client_name" id="wc_rallypay_plugin_api_client_name" value="<?php echo $this->configuration->client_name; ?>" />
	<?php
		}

		public function display_wc_rallypay_api_client_id_element()
		{
			?>
		<input type="text" size="100" name="wc_rallypay_plugin_api_client_id" id="wc_rallypay_plugin_api_client_id" value="<?php echo $this->configuration->client_id; ?>" />
	<?php
		}

		public function display_wc_rallypay_api_token_element()
		{
			?>
		<input type="text" size="100" name="wc_rallypay_plugin_api_token" id="wc_rallypay_plugin_api_token" value="<?php echo $this->configuration->api_token; ?>" />
	<?php
		}

		public function display_wc_rallypay_test_mode_element()
		{
			?>
		<input type="checkbox" name="wc_rallypay_plugin_api_test_mode" id="wc_rallypay_plugin_api_test_mode" value="1" <?php checked("1", $this->configuration->is_test_mode, true); ?> />
	<?php
		}

		public function display_wc_rallypay_test_url_element()
		{
			?>
		<input type="text" size="100" name="wc_rallypay_plugin_api_test_url" id="wc_rallypay_plugin_api_test_url" value="<?php echo $this->configuration->test_url; ?>" />
		<br><span class="url_note">http://example.com&nbsp;&nbsp;|&nbsp;&nbsp;Enter the URL of your test/staging environment.</span>
<?php
	}

	public function display_wc_rallypay_api_configuration_fields()
	{
		add_settings_section("wc-rallypay-options-section", "API Configuration Settings", null, "wc-rallypay-options");
		
		add_settings_field('wc_rallypay_plugin_api_client_name', "Client Name", array($this, "display_wc_rallypay_api_client_name_element"), "wc-rallypay-options", "wc-rallypay-options-section", array('label_for'=>'wc_rallypay_plugin_api_client_name'));
		add_settings_field('wc_rallypay_plugin_api_client_id', "Client Id", array($this, "display_wc_rallypay_api_client_id_element"), "wc-rallypay-options", "wc-rallypay-options-section", array('label_for'=>'wc_rallypay_plugin_api_client_id'));
		add_settings_field('wc_rallypay_plugin_api_test_mode', "Test Mode", array($this, "display_wc_rallypay_test_mode_element"), "wc-rallypay-options", "wc-rallypay-options-section", array('label_for'=>'wc_rallypay_plugin_api_test_mode'));
		add_settings_field('wc_rallypay_plugin_api_test_url', "Test Environment (Optional)", array($this, "display_wc_rallypay_test_url_element"), "wc-rallypay-options", "wc-rallypay-options-section", array('label_for'=>'wc_rallypay_plugin_api_test_url'));		
		add_settings_field('wc_rallypay_plugin_api_token', "API Token (Optional)", array($this, "display_wc_rallypay_api_token_element"), "wc-rallypay-options", "wc-rallypay-options-section", array('label_for'=>'wc_rallypay_plugin_api_token'));

		register_setting("wc-rallypay-options-section", "wc_rallypay_plugin_api_client_name");
		register_setting("wc-rallypay-options-section", "wc_rallypay_plugin_api_client_id");
		register_setting("wc-rallypay-options-section", "wc_rallypay_plugin_api_token");
		register_setting("wc-rallypay-options-section", "wc_rallypay_plugin_api_test_mode");
		register_setting("wc-rallypay-options-section", "wc_rallypay_plugin_api_test_url");
	}
}
