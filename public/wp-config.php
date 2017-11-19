<?php

$web_root = __DIR__;
$root = dirname($web_root);

/**
 * LOAD PACKAGES FROM OTHER COMPOSER LIBRARIES
 */
require_once($root . '/vendor/autoload.php');

/**
 * URL
 */
define('WP_HOME', 'http://min.dev');
define('WP_SITEURL', 'http://min.dev/wp');

/**
 * CUSTOM CONTENT DIRECTORY
 */
define('CONTENT_DIR', '/wp-content');
define('WP_CONTENT_DIR', $web_root . CONTENT_DIR);
define('WP_CONTENT_URL', WP_HOME . CONTENT_DIR);

/**
 * DATABASE PROPERTIES
 */
define('DB_NAME', 'minimal');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_HOST', 'localhost');
$table_prefix = 'wp_';

/**
 * MANDATORY LOAD ABSPATH TO WORDPRESS CORE FUNCTIONS
 */
if (!defined('ABSPATH')) {
    define('ABSPATH', $web_root . '/wp/');
}
require_once(ABSPATH . 'wp-settings.php');
