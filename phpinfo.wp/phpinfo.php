<?php
/**
 * Plugin Name: PHP Info (WP)
 * Description: View phpinfo() inside your WordPress. Look for <strong>PHP Info (WP)</strong> link in admin menus.
 * Version: 1.0.0
 * Author: Bimal Poudel
 * Author URI: https://bimal.org.np/
 */
if(!defined("ABSPATH")) exit;

require_once("class.PHPInfoer.inc.php");
$PHPInfoer = new PHPInfoer();

wp_enqueue_style("phpinfo.wp", plugins_url("/phpinfo.wp/phpinfo.css"), array(), false, "all");
add_action("admin_menu", array($PHPInfoer, "admin_menus"));
