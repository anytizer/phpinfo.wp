<?php
/**
 * Plugin Name: PHP Info (WP)
 * Plugin URI: #
 * Description: View PHP Info inside your WordPress. Look for <strong>PHP Info (WP)</strong> in admin menus.
 * Version: 1.0.0
 * Author: Bimal Poudel
 * Author URI: #
 */

require_once("class.PHPInfoer.inc.php");

$PHPInfoer = new PHPInfoer();

add_action("admin_menu", array($PHPInfoer, "admin_menus"));
