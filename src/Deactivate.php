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

    /**
     * SalPlug Plugin for Inpsyde
     *
     * @category WordPress_Plugin
     * @package  SalPlug
     * @author   Salman Javeed <salmanjaveed@gmail.com>
     * @license  https://github.com/salmanjaveed/sal-plug/blob/master/License.txt MIT
     * @link     -
     */
class Deactivate
{
    /**
     *    Constructor Function
     *
     * @return void
     */
    public function __construct()
    {
        flush_rewrite_rules();
    }
}
