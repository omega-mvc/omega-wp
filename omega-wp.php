<?php

declare(strict_types=1);

/**
 * This plugin uses Omega Framework (https://omega-mvc.github.io)

 * Plugin Name: Task Manager
 * Description: A new Omega plugin.
 * Version: 1.0.0
 * Requires at least: 6.0
 * Requires PHP: 7.4
 * Author: Your Name
 * Text Domain: omega-wp
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

defined( 'ABSPATH' ) || exit;

require plugin_dir_path(__FILE__) . 'vendor/autoload.php';

require plugin_dir_path(__FILE__) . 'bootstrap/app.php';
