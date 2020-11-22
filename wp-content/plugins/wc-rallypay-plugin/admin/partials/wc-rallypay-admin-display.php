<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Wc_RallyPay
 * @subpackage Wc_RallyPay/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class="wrap">
    <h1>RallyPay API</h1>
    <form method="post" action="options.php">
        <?php
				settings_fields("wc-rallypay-options-section");
				do_settings_sections( "wc-rallypay-options" );
				submit_button(); 
	        ?>
    </form>
</div>