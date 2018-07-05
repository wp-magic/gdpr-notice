<?php
/**
 * Magic GDPR Notice
 *
 * @package   Magic-Gdpr
 * @license   GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: Magic Gdpr Notice
 * Plugin URI:
 * Description: Gdpr Notice.
 * Version:     0.0.1
 * Author:      Jascha Ehrenreich
 * Author URI:  http://github.com/wp-magic
 * Text Domain: magic_gdpr
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path: /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
  die;
}

define( 'MAGIC_GDPR_SLUG', 'magic_gdpr' );
define( 'MAGIC_GDPR_COOKIE_SLUG', 'magic_gdpr_cookie' );
define( 'MAGIC_GDPR_COOKIE_SETTINGS_SLUG', 'magic_gdpr_cookies' );

// Required files for registering the post type and taxonomies.
require_once plugin_dir_path( __FILE__ ) . 'includes/plugin.php';

// Register callback that is fired when the plugin is activated.
register_activation_hook( __FILE__, function () {
  flush_rewrite_rules();
} );

register_deactivation_hook( __FILE__, function () {
  flush_rewrite_rules();
} );
