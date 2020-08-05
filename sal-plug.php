<?php
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

// Check if this is not running outside of WP
// defined( 'ABSPATH') or die("Invalid Access!! Access Denied!");



class SalPlugPlugin
{

    function __construct() {
        add_action("init", array( $this, "custom_post"));
    }

    function activate() {
        // on Plugin Activation
        $this->custom_post();
        flush_rewrite_rules();
    }

    function deactivate() {
        // on Plugin Deactivation
        flush_rewrite_rules();
    }

    function custom_post() {
        register_post_type( "uses", array("public"=> true, "label"=> 'Uses'));
    }

    function enqueue() {
        wp_enqueue_style( "salplug-dt-css", plugins_url( "/assets/css/jquery.dataTables.min.css", __FILE__));
        wp_enqueue_style( "salplug-css", plugins_url( "/assets/css/style.css", __FILE__));
        wp_enqueue_script( "salplug-jquery", plugins_url( "/assets/scripts/jquery-3.5.1.min.js", __FILE__));
        wp_enqueue_script( "salplug-dt", plugins_url( "/assets/scripts/jquery.dataTables.min.js", __FILE__));
    }

    function register_assets() {
        add_action("wp_enqueue_scripts", array( $this, "enqueue"));
    }
   

}
if ( class_exists( "SalPlugPlugin") ) {
    $salplug = new SalPlugPlugin();
    $salplug->register_assets();
}


register_activation_hook(__FILE__, array($salplug, "activate"));
register_deactivation_hook(__FILE__, array($salplug, "deactivate"));





