<?php
class PHPInfoer
{
	public function info()
	{
		ob_start();
			phpinfo(INFO_ALL & ~INFO_LICENSE & ~INFO_CREDITS);
		$info = ob_get_clean();

		/**
		 * Extract contents within <body> and </body> tags only
		 */
		$info = preg_replace("/^.*?\<body\>/is", "", $info);
		$info = preg_replace("/<\/body\>.*?$/is", "", $info);
		
		echo '<style type="text/css">', file_get_contents(dirname(__FILE__)."/phpinfo.css"), '</style>';
		echo file_get_contents(dirname(__FILE__)."/header.html");
		echo $info;
		echo file_get_contents(dirname(__FILE__)."/footer.html");
	}
	
	public function admin_menus()
	{
		add_menu_page("PHP Info", "PHP Info (WP)", "manage_options", "PHPInfoer", array($this, "info"), "dashicons-welcome-widgets-menus", 70);
	}
}
