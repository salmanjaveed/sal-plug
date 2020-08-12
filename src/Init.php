<?php declare (strict_types = 1);
/**
 * Php version 7.4.3
 * Activation Hook
 *
 * @category WordPress_Plugin
 * @package  SalPlug
 * @author   Salman Javeed <salmanjaveed@gmail.com>
 * @license  MIT (https://github.com/salmanjaveed/sal-plug/blob/master/License.txt)
 * @link     -
 */

namespace SalPlug\Src;

use SalPlug\Src\Template;

    /**
     * SalPlug Plugin for Inpsyde
     *
     * @category WordPress_Plugin
     * @package  SalPlug
     * @author   Salman Javeed <salmanjaveed@gmail.com>
     * @license  https://github.com/salmanjaveed/sal-plug/blob/master/License.txt MIT
     * @link     -
     */
final class Init
{
    /**
     *    Constructor Function
     *
     * @return void
     */
    public function __construct()
    {
        add_action('parse_request', [$this, 'registerEndpoint'], 0);
    }
    /**
     * Check for endpoint and display template
     *
     * @return void
     */
    public static function registerEndpoint()
    {
        global $wp;

        if ($wp->request === 'sal-plug') {
            Template::display();
            Template::display2();
            Template::display3();
            exit;
        }
    }
}
