(function ($) {
	'use strict';

	/**
	 * All of the code for your admin-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */

	$(function () {
		$('#wc_rallypay_plugin_api_test_mode').checkTestMode();

		$('#wc_rallypay_plugin_api_test_mode').click(function ($event) {
			$('#wc_rallypay_plugin_api_test_mode').checkTestMode();
		});
	});

	(function( $ ){
		$.fn.checkTestMode = function() {
			if($(this).prop("checked") == true){
				$('#wc_rallypay_plugin_api_test_url, #wc_rallypay_plugin_api_token').attr('readonly', false);
				$('#wc_rallypay_plugin_api_test_url, #wc_rallypay_plugin_api_token').attr('required', true);
			}
			else if($(this).prop("checked") == false){
				$('#wc_rallypay_plugin_api_test_url, #wc_rallypay_plugin_api_token').attr('readonly', true);
				$('#wc_rallypay_plugin_api_test_url, #wc_rallypay_plugin_api_token').attr('required', false);
			}
		}; 
	 })( jQuery );
	
})(jQuery);
