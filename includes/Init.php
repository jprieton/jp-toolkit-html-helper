<?php
/**
 * The Init class initializes the Html Helper plugin
 * commonly used HTML form tags.
 *
 * @package       JPToolkit
 * @subpackage    HtmlHelper
 */

namespace JPToolkit\HtmlHelper;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

use JPToolkit\HtmlHelper\Handlers\OptionsMonthsHandler;
use JPToolkit\HtmlHelper\Handlers\OptionsWeekdaysHandler;

/**
 * This class is required to initialize the shorthands bundled in this plugin
 *
 * @package       JPToolkit
 * @subpackage    HtmlHelper
 * @author        Javier Prieto
 * @since         1.1.0
 */
class Init {

  /**
   * Constructor class
   *
   * @since         1.1.0
   */
  public function __construct() {
    // Add shorthand handlers
    new OptionsMonthsHandler();
    new OptionsWeekdaysHandler();
  }

}
