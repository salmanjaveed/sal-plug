<?php

/*
* File Name: uninstall.php
* Description: This file auto runs when the plugin is uninstalled, basically to clean the database
* Date: 05-Aug-2020
*/

defined('WP_UNINSTALL_PLUGIN') or die("Invalid Access! Access Denied!");

//$uses = get_posts(array( 'post_type' => 'uses', 'numberposts' => -1));

global $wpdb;

$wpdb->query("DELETE FROM wp_posts WHERE post_type='uses'");
$wpdb->query("DELETE FROM wp_postmeta WHERE post_id NOT IN (SELECT id FROM wp_posts)");
$wpdb->query("DELETE FROM wp_term_relationships WHERE object_id NOT IN (SELECT id FROM wp_posts)");
