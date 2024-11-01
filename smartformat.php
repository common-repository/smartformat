<?php
/**
 * Plugin Name: SmartFormat
 * Description: Generates a SmartFormat feed which extends RSS for delivering posts on SmartNews.
 * Plugin URI: https://www.smartnews.com/
 * Author: SmartNews, Inc.
 * Author URI: https://github.com/smartnews/wp-smartformat/
 * Version: 1.3.0
 * Text Domain: smartformat
 * Domain Path: /languages/
 * License: GPLv2 or later
 */

define('SMARTFORMAT__PLUGIN_DIR', plugin_dir_path(__FILE__));

define('SMARTFORMAT__LOGO_ATTACHMENT_ID', 'smartformat_logo_attachment_id');
define('SMARTFORMAT__TTL', 'smartformat_ttl');
define('SMARTFORMAT__ANALYTICS', 'smartformat_analytics');
define('SMARTFORMAT__ADCONTENT', 'smartformat_adcontent');
define('SMARTFORMAT__SPONSORED_LINKS', 'smartformat_sponsored_links');

require_once(SMARTFORMAT__PLUGIN_DIR . '/class.smartformat.php');
SmartFormat::init();
