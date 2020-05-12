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
use JPToolkit\HtmlHelper\Handlers\ImgPixelHandler;

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
    $this->add_html_img_handlers();
    $this->add_form_options_handlers();
  }

  /**
   * Adds Html::img handlers
   *
   * @since         1.1.0
   */
  private function add_html_img_handlers() {
    new ImgPixelHandler();
  }

  /**
   * Adds Form::options handlers
   *
   * @since         1.1.0
   */
  private function add_form_options_handlers() {
    new OptionsMonthsHandler();
    new OptionsWeekdaysHandler();
  }

}
