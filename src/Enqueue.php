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
final class Enqueue
{
    /**
     *    Constructor Function
     *
     * @return void
     */
    public function __construct()
    {
            add_action("wp_enqueue_scripts", 'enqueue');
    }
    /**
     *    Enqueue Scripts Function
     *
     * @return void
     */
    public function enqueue()
    {
        //phpcs:disable
        wp_enqueue_style("salplug-dt-css", PLUGIN_URL . "assets/css/jquery.dataTables.min.css");
        wp_enqueue_style("salplug-css", PLUGIN_URL . "assets/css/style.css");
        wp_enqueue_script("salplug-jquery", PLUGIN_URL . "assets/scripts/jquery-3.5.1.min.js");
        wp_enqueue_script("salplug-dt", PLUGIN_URL . "assets/scripts/jquery.dataTables.min.js");
        //phpcs:enable
    }
}
