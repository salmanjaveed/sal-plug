<?php declare (strict_types = 1);
/**
 * Php version 7.4.3
 * Plugin Name: SalPlug
 * Plugin URI: https://github.com/salmanjaveed/sal-plug
 * Description: Plugin developed as a Task for Inpsyde Interview
 * Version: 1.0.0
 * Author: Salman Javeed
 * Author URI: mailto:salmanjaveed@gmail.com
 * License: MIT
 * Text Domain: sal-plug
 * Start Date: 05-Aug-2020
 *
 * @category WordPress_Plugin
 * @package  SalPlug
 * @author   Salman Javeed <salmanjaveed@gmail.com>
 * @license  MIT (https://github.com/salmanjaveed/sal-plug/blob/master/License.txt)
 * @link     -
 */

namespace SalPlug;

use SalPlug\Src\Activate;
use SalPlug\Src\Deactivate;
use SalPlug\Src\Init;
 
    /**
     * SalPlug Plugin for Inpsyde
     *
     * @category WordPress_Plugin
     * @package  SalPlug
     * @author   Salman Javeed <salmanjaveed@gmail.com>
     * @license  https://github.com/salmanjaveed/sal-plug/blob/master/License.txt MIT
     * @link     -
     */
final class SalPlug
{
    /**
     *    Constructor Function
     *
     * @return void
     */
    public function __construct()
    {
        defined("ABSPATH") || die("Invalid Access! Denied!");
        
        $version = '1.0.0';

        self::definitions();
        self::requirements();
        self::activations();
        
        if (class_exists("SalPlug\\Src\\Init")) {
             new Src\Init();
        }
    }
    /**
     * Requires dependencies
     *
     * @return void
     */
    protected static function requirements()
    {
        if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
            include_once dirname(__FILE__) . '/vendor/autoload.php';
        }
    }
    /**
     * Define Constants
     *
     * @return void
     */
    protected function definitions()
    {
        define('PLUGIN_PATH', plugin_dir_path(__FILE__));
        define('PLUGIN_URL', plugin_dir_url(__FILE__));
    }
    /**
     * Activate/Deactivate hooks
     *
     * @return void
     */
    public static function activations()
    {
        register_activation_hook("Src\\Activate", Activate::class);
        register_activation_hook("Src\\Deactivate", Deactivate::class);
    }
}
//phpcs:disable
new SalPlug();
//phpcs:enable
