<?php
/**
 * Plugin Name:   JP Toolkit HTML helper for WordPress
 * Plugin URI:    https://github.com/jprieton/jp-toolkit-html-helper
 * Description:   JP Toolkit HTML helper contains a set of static methods for generating commonly used HTML and form tags.
 * Version:       1.1.0
 * Author:        Javier Prieto
 * Author URI:    https://github.com/jprieton
 * Text Domain:   jp-toolkit-html-helper
 * Domain Path:   /languages/
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <https://www.gnu.org/licenses/>.
 *
 * @package JPToolkit
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Define plugin constants
 *
 * @since 0.1.0
 */
define( 'JPTK_ABSPATH', plugin_dir_path( __FILE__ ) );

// Autoloader
require_once JPTK_ABSPATH . 'vendor/autoload.php';

// Check if the minimum requirements are met.
if ( version_compare( PHP_VERSION, '7.0', '<' ) ) {
  $title   = __( 'Error!', 'jp-toolkit' );
  $message = __( 'JP Toolkit HTML helper for WordPress requires PHP version 7.0 or later.', 'jp-toolkit-html-helper' );
  $options = [
      'type' => 'error'
  ];

  // Show notice for minimum PHP version required for JP Toolkit for WordPress.
  $notices = new WPTRT\AdminNotices\Notices();
  $notices->add( 'jp-toolkit-php-warning', '', $message, $options );
  $notices->boot();
}