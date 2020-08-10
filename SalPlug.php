<?php declare (strict_types = 1);
/*
 * @package: sal-plug
 * Plugin Name: Sal-Plug
 * Plugin URI: https://github.com/salmanjaveed/sal-plug
 * Description: Plugin developed as a Task for Inpsyde Interview
 * Version: 1.0.0
 * Author: Salman Javeed
 * Author URI: mailto:salmanjaveed@gmail.com
 * License: MIT
 * Text Domain: sal-plug Plugin
 * Start Date: 05-Aug-2020
 */
 
namespace SalPlug;

defined("ABSPATH") or die("Invalid Access! Denied!");
define('PLUGIN_PATH', plugin_dir_path(__FILE__));
define('PLUGIN_URL', plugin_dir_url(__FILE__));

if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
    require_once dirname(__FILE__) . '/vendor/autoload.php';
}

use SalPlug\Src\Activate;
use SalPlug\Src\Deactivate;
use SalPlug\Src\Init;

class SalPlug
{
    public static function activateSalplug()
    {
        new Src\Activate();
    }

    public static function deactivateSalplug()
    {
        new Src\Deactivate();
    }
}

register_activation_hook(__FILE__, ["SalPlug\\SalPlug", 'activateSalplug']);
register_activation_hook(__FILE__, ["SalPlug\\SalPlug", 'deactivateSalplug']);

if (class_exists("SalPlug\\Src\\Init")) {
     new Src\Init();
}
