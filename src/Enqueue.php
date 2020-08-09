<?php declare (strict_types = 1);
/*
 * @package sal-plug
 */

namespace SalPlug\Src;

final class Enqueue
{
    public function __construct()
    {
            add_action("wp_enqueue_scripts", 'enqueue');
    }

    public function enqueue()
    {
        wp_enqueue_style("salplug-dt-css", PLUGIN_URL . "assets/css/jquery.dataTables.min.css");
        wp_enqueue_style("salplug-css", PLUGIN_URL . "assets/css/style.css");
        wp_enqueue_script("salplug-jquery", PLUGIN_URL . "assets/scripts/jquery-3.5.1.min.js");
        wp_enqueue_script("salplug-dt", PLUGIN_URL . "assets/scripts/jquery.dataTables.min.js");
    }
}
