<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); }

class AppAggregate_config {
	
	
/****** Plugin Variables ******/
	public $pluginType = "standard";
	public $pluginName = "AppAggregate";
	public $title = "Content Aggregation System";
	public $version = 1.0;
	public $author = "Brint Paris";
	public $license = "UniFaction License";
	public $website = "http://unifaction.com";
	public $description = "Provides tools for content aggregation.";
	
	public $data = array();
	
	
/****** Install this plugin ******/
	public function install (
	)			// <bool> RETURNS TRUE on success, FALSE on failure.
	
	// $plugin->install();
	{
		Database::exec("
		CREATE TABLE IF NOT EXISTS `aggregate_sites`
		(
			`site_handle`			varchar(22)					NOT NULL	DEFAULT '',
			`date_checked`			int(10)			unsigned	NOT NULL	DEFAULT '0'
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;
		");
		
		return $this->isInstalled();
	}
	
	
/****** Check if the plugin was successfully installed ******/
	public static function isInstalled (
	)			// <bool> TRUE if successfully installed, FALSE if not.
	
	// $plugin->isInstalled();
	{
		// Make sure the newly installed tables exist
		return DatabaseAdmin::columnsExist("aggregate_sites", array("site_handle", "date_checked"));
	}
	
}