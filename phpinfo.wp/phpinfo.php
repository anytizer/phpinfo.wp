<?php
/**
 * Plugin Name: PHP Info
 * Plugin URI: #
 * Description: View PHP Info inside WordPress
 * Version: 1.0.0
 * Author: Bimal Poudel
 * Author URI: #
 */

require_once("class.PHPInfoer.inc.php");

$PHPInfoer = new PHPInfoer();

add_action("admin_menu", array($PHPInfoer, "admin_menus"));
wp_enqueue_style("PHPInfoer", "/wp-content/plugins/phpinfo/phpinfo.css", "", "1.0.0", "screen");
